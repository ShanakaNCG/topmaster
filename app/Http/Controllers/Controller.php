<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Contracts\Filesystem\Factory;
use Illuminate\Contracts\Encryption\DecryptException;
use App\file;
use App\Subject;
use App\User;
use App\Slider;
use App\TeacherDetails;
use App\News;
use App\General;
use App\Location;
use App\TeacherSubjectList;
use DB;
use App\Http\Requests;
use DateTime;
use Hash;
use Storage;
use Carbon\Carbon;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

     public function insert(Request $request){

   }
   public function adminLogin(Request $request){
      $userName = $request->input('uname');
      $passWord = Hash::make($request->input('psw'));
      $results = DB::select('select * from admin_table where user_name = ?', [$request->input('uname')]);
      if($results == null){
        echo "null valuse";
      }else{
        foreach ($results as $value){
          if (Hash::check($request->input('psw'), $value->secret_key)){
                // The passwords match...
              $user = Subject::all();
              $slider = Slider::all();
              $news = News::all();
              $general = General::all();
              $location = Location::all();
              $teacherdetail = TeacherDetails::all();
              return view('admin_panel',compact('user','slider','news','general','location','teacherdetail'));
            }else{
              echo "not correct";
            }
        }
      }
      //echo "Record inserted successfully.<br/>".$userName." ".$passWord;
   }
    public function createHash(Request $request){
      $passWord = Hash::make($request->input('psw'));
      echo "Record inserted successfully.<br/> ".$request->input('psw')." ".$passWord;
   }
    public function storeSubjects(Request $request){
      $allSubjects = Subject::all();
    if(Input::hasFile('subjectImage')){
      $subject = new Subject;
      if($allSubjects->isEmpty()){
        $subjectVal = 'subject1';
      }else{
        $subjectLast = DB::table('subjects')->orderBy('created_at', 'desc')->first();
        $subjectVal = str_replace('subject', '', $subjectLast->subjects_id);
        $subjectVal = $subjectVal+1;
        $subjectVal = 'subject'.$subjectVal;

      }
      $file = Input::file('subjectImage');
      $extension = pathinfo(Input::file('subjectImage')->getClientOriginalName(), PATHINFO_EXTENSION);
      $file-> move(public_path().'/images/sub-image',$subjectVal.'.'.$extension);
      $subject->subjects_id = $subjectVal;
      $subject->subject_title = Input::get("subjectTitle");
      $subject->subject_contends = Input::get("subjectContend");
      $subject->subjet_name = $subjectVal.'.'.$extension;
      $subject->save();
      return 'sucess';
    }



   }
  public function createMaster(Request $request){
    $user = TeacherDetails::all();
      if($user->isEmpty()){
        $userVal = 'user1';
      }
      else{
        $teacherLast = DB::table('teacherdetail')->orderBy('created_at', 'desc')->first();
        $userVal = str_replace('user', '', $teacherLast->teacher_id);
        $userVal = $userVal+1;
        $userVal = 'user'.$userVal;
      }
      $passWord = Hash::make(Input::get('password'));
      $userTable = new User;
      $userTable->id = $userVal;
      $userTable->name = Input::get("mem_name");
      $userTable->email = Input::get("emailid");
      $userTable->password = $passWord;
      $userTable->save();

      $teacherDetails = new TeacherDetails;
      $teacherDetails->teacher_id = $userVal;
      $teacherDetails->full_name = Input::get("mem_name");
      $teacherDetails->mobile_number = Input::get("contactnum");
      $teacherDetails->tel_number = Input::get("contactnum2");
      $teacherDetails->profile_name = Input::get("mem_name");
      $teacherDetails->address = "test";
      $teacherDetails->email = Input::get("emailid");
      if(Input::hasFile('file_nm')){
        $file = Input::file('file_nm');
        $extension = pathinfo(Input::file('file_nm')->getClientOriginalName(), PATHINFO_EXTENSION);
        $file-> move(public_path().'/images/master-image',$userVal.'.'.$extension);
        $teacherDetails->profile_pic = $userVal.'.'.$extension;
      }
      $teacherDetails->save();
    return $userVal;
   }

  public function loginUser(Request $request){
    $user = DB::table('users')->where('email', Input::get("username"))->first();
    if (Hash::check($request->input('password'), $user->password)){
      $encryptValue = encrypt($user->id);
      return $encryptValue;
    }else{
      return "fail";
    }
    //$password = (Hash($user->password));*/

  }


    public function showSubjects(){
      //$user = file::all();
      //$user  = Storage::files();
      //$files = Storage::get(public_path().'/uploads/images/15748701_10212025841509319_1491214471_o.jpg');
      //$strFromArr = serialize($files);
      //echo $strFromArr;
   }
    public function updateSubjectScreen(Request $request){
      $array = $request->all();
      $arrayCount = count($array)-1;
      $countVal = 1;
      $keyVal = "";
      foreach ($array as $memu) {
        echo $memu;
        if(str_contains($memu, 'add')){
          $keyVal = str_replace('add', '', $memu);
          DB::table('subjects')
            ->where('subjects_id', $keyVal)
            ->update(['delete_raw' => 0]);
          echo $keyVal;
        }else{
          $keyVal = str_replace('del', '', $memu);
          DB::table('subjects')
            ->where('subjects_id', $keyVal)
            ->update(['delete_raw' => 1]);
          echo $keyVal;

        }

       $countVal++;

       if($countVal == $arrayCount){
        break;
       }

       //echo $memu;
      }
      //echo serialize($array);
      //echo $request->input('0001');
      /*DB::table('subjects')
            ->where('id', 1)
            ->update(['votes' => 1]);*/
    }
    public function manageWelcome(Request $request){
      $userVal = null;
      $master = TeacherDetails::all();
      $user = Subject::all();
      $slider = Slider::all();
      $news = News::all();
      $general = General::all();
      $lastData = TeacherDetails::orderby('created_at', 'desc')->first();
      $topnews = DB::select('select * from news where top_news = ?', ['1']);
      if($lastData == null){
        $lastData = 'null';
      }
      if($master == null){
        $master = 'null';
      }
      return view('welcome',compact('user','slider','master','lastData','news','general','topnews'));
   }
   public function storeSlider(Request $request){
      $allSlider = Slider::all();
    if(Input::hasFile('sliderImage')){
      $slider = new Slider;
      if($allSlider->isEmpty()){
        $userVal = 'slider1';
      }else{
        $sliderLast = DB::table('sliders')->orderBy('created_at', 'desc')->first();
        $userVal = str_replace('slider', '', $sliderLast->slider_id);
        $userVal = $userVal+1;
        $userVal = 'slider'.$userVal;

      }
      $file = Input::file('sliderImage');
      $extension = pathinfo(Input::file('sliderImage')->getClientOriginalName(), PATHINFO_EXTENSION);
      $file-> move(public_path().'/images/slider-image',$userVal.'.'.$extension);
      $slider->slider_id = $userVal;
      $slider->slider_title = Input::get("slider_title");
      $slider->slider_content = Input::get("slider_content");
      $slider->slider_name = $userVal.'.'.$extension;
      $slider->save();
      return 'sucess';
    }
      $subject->save();
      return "data saved...!";
   }
   public function updateSlider(Request $request){
      $array = $request->all();
      $arrayCount = count($array)-1;
      $countVal = 1;
      $keyVal = "";
      foreach ($array as $memu) {
        echo $memu;
        if(str_contains($memu, 'add')){
          $keyVal = str_replace('add', '', $memu);
          DB::table('sliders')
            ->where('slider_id', $keyVal)
            ->update(['delete_raw' => 0]);
          echo $keyVal;
        }else{
          $keyVal = str_replace('del', '', $memu);
          DB::table('sliders')
            ->where('slider_id', $keyVal)
            ->update(['delete_raw' => 1]);
          echo $keyVal;

        }

       $countVal++;

       if($countVal == $arrayCount){
        break;
       }

       //echo $memu;
      }
   }
  public function updateExpiraData(Request $request){
      $update = [ 'start_date' => $request->input('startDate'),
                  'end_date' => $request->input('endDate'),
                ];
        DB::table('teacherdetail')
            ->where('teacher_id', $request->input('teacherId'))
            ->update($update);

  }
  public function storeNews(Request $request){
      $allNews = News::all();
    if(Input::hasFile('newsImage')){
      $news = new News;
      if($allNews->isEmpty()){
        $newsVal = 'news1';
      }else{
        $newsLast = DB::table('news')->orderBy('created_at', 'desc')->first();
        $newsVal = str_replace('news', '', $newsLast->news_id);
        $newsVal = $newsVal+1;
        $newsVal = 'news'.$newsVal;

      }
      $file = Input::file('newsImage');
      $extension = pathinfo(Input::file('newsImage')->getClientOriginalName(), PATHINFO_EXTENSION);
      $file-> move(public_path().'/images/news-image',$newsVal.'.'.$extension);
      $news->news_id = $newsVal;
      $news->news_title = Input::get("newsTitle");
      $news->news_content = Input::get("newsContend");
      $news->news_image = $newsVal.'.'.$extension;
      $news->news_type = Input::get("newsType");
      $news->news_url = Input::get("newsLink");
      $news->save();
      return 'sucess';
    }
      return "data saved...!";
   }

public function storeLocation(Request $request){
      $locationList = Location::all();
      $location = new Location;
      if($locationList->isEmpty()){
        $locationVal = 'location1';
      }else{
        $locationLast = DB::table('location')->orderBy('created_at', 'desc')->first();
        $locationVal = str_replace('location', '', $locationLast->location_id);
        $locationVal = $locationVal+1;
        $locationVal = 'location'.$locationVal;
      }
      $location->location_id = $locationVal;
      $location->location_name = Input::get("locationName");
      $location->save();
      return 'sucess';

}

   public function updateNews(Request $request){
      $array = $request->all();
      $arrayCount = count($array)-1;
      $countVal = 1;
      $keyVal = "";
      foreach ($array as $menu) {
        echo $menu;
        if(str_contains($menu, 'add')){
          $keyVal = str_replace('add', '', $menu);
          DB::table('news')
            ->where('news_id', $keyVal)
            ->update(['delete_raw' => 0]);
          echo $keyVal;
        }else{
          $keyVal = str_replace('del', '', $menu);
          DB::table('news')
            ->where('news_id', $keyVal)
            ->update(['delete_raw' => 1]);
          echo $keyVal;

        }
        if(str_contains($menu, 'atop')){
          $keyVal = str_replace('atop', '', $menu);
          DB::table('news')
            ->where('news_id', $keyVal)
            ->update(['top_news' =>1]);
          echo $keyVal;
        }else{
          //$keyVal = str_replace('dtop', '', $menu);
          DB::table('news')
            ->where('news_id', $keyVal)
            ->update(['top_news' =>0]);
          echo $keyVal;

        }

       $countVal++;

       if($countVal == $arrayCount){
        break;
       }

       //echo $memu;
      }
   }
     public function storeGeneral(Request $request){
      $allGeneral = General::all();
    if(Input::hasFile('generalImage')){
      $general = new General;
      if($allGeneral->isEmpty()){
        $generalVal = 'general1';
      }else{
        $generalLast = DB::table('general')->orderBy('created_at', 'desc')->first();
        $generalVal = str_replace('general', '', $generalLast->general_id);
        $generalVal = $generalVal+1;
        $generalVal = 'general'.$generalVal;

      }
      $file = Input::file('generalImage');
      $extension = pathinfo(Input::file('generalImage')->getClientOriginalName(), PATHINFO_EXTENSION);
      $file-> move(public_path().'/images/general-image',$generalVal.'.'.$extension);
      $general->general_id = $generalVal;
      $general->general_title = Input::get("generalTitle");
      $general->general_content = Input::get("generalContend");
      $general->general_image = $generalVal.'.'.$extension;
      $general->general_type = Input::get("generalType");
      $general->general_url = Input::get("generalLink");
      $general->save();
      return 'sucess';
    }
      return "data saved...!";
   }
   public function updateGeneral(Request $request){
      $array = $request->all();
      $arrayCount = count($array)-1;
      $countVal = 1;
      $keyVal = "";
      foreach ($array as $menu) {
        echo $menu;
        if(str_contains($menu, 'add')){
          $keyVal = str_replace('add', '', $menu);
          DB::table('general')
            ->where('general_id', $keyVal)
            ->update(['delete_raw' => 0]);
          echo $keyVal;
        }else{
          $keyVal = str_replace('del', '', $menu);
          DB::table('general')
            ->where('general_id', $keyVal)
            ->update(['delete_raw' => 1]);
          echo $keyVal;

        }

       $countVal++;

       if($countVal == $arrayCount){
        break;
       }

       //echo $memu;
      }
   }
   public function switchSubjects($subId){
    //echo decrypt($subId);
    return null;
   }
  public function userProfile($userId){
    //echo decrypt($userId);
      $profileId =  decrypt($userId);
      $user = DB::select('select * from users where id = ?', [$profileId]);
      //$locationList = Location::all();
      $profileData = DB::select('select * from teacherdetail where teacher_id = ?', [$profileId]);
      $subjectListData = DB::select('select * from teacher_subjet where teacher_id = ?', [$profileId]);
        //var_dump($subjectListData);
        $subjectData = array();
        foreach ($subjectListData as $value) {
          //var_dump($value->subjectlist);
          $sub = json_decode($value->subjectlist);
          array_push($subjectData, $sub);
          
          //echo $sub->date;
        }
        //var_dump($newdata);
      $finalDate = DB::table('teacherdetail')->select('end_date')->where('teacher_id', $profileId)->first();
      $paiduser = "";
      $date2 = $finalDate->end_date;
      if($date2 == null || $date2 == ""){
        $paiduser = "no";
      }else{
        $nowTime = Carbon::now();
        $currentDate = $nowTime->toDateString();

        $ts2 = strtotime($date2);
        $ts3 = strtotime($currentDate);

        $year2 = date('Y', $ts2);
        $year3 = date('Y', $ts3);

        $month2 = date('m', $ts2);
        $month3 = date('m', $ts3);

        $diff1  = (($year2 - $year3) * 12) + ($month2 - $month3);
        if($diff1 <= 0){
          $paiduser = "no";
        }else{
          $paiduser = "yes";
        }
      }
      //echo $paiduser;
     // echo '$diff :'+ $diff+' $diff1 '+$diff1;
      //return $usableDate;
    return view('profile',compact('user','profileData','subjectData','paiduser'));

   }
    public function autoComplete(Request $request) {
        $query = $request->get('term','');

        $products=Location::where('location_name','LIKE','%'.$query.'%')->get();

        $data=array();
        foreach ($products as $product) {
                $data[]=array('value'=>$product->location_name,'id'=>$product->location_id);
        }
        if(count($data))
             return $data;
        else
            return ['value'=>'No Result Found','id'=>''];
    }
    public function subjectNameAuto(Request $request) {
        $query = $request->get('subName','');

        $products=Subject::where('subject_title','LIKE','%'.$query.'%')->get();

        $data=array();
        foreach ($products as $product) {
                $data[]=array('value'=>$product->subject_title,'id'=>$product->subject_title);
        }
        if(count($data))
             return $data;
        else
            return ['value'=>'No Result Found','id'=>''];
    }
    public function addingTimeTable(Request $request) {
     /* $jsonArrya['subjects'] = array("name"=>"test",
                                    "description"=>"test",
                                    "startdate"=>"2016-02-21T13:00:00.000Z",
                                    "enddate"=>"2016-02-23T13:00:00.000Z");
      $anotherArrya['subjects'] = array("name"=>"test2",
                                    "description"=>"test2",
                                    "startdate"=>"2016-02-21T13:00:00.000Z",
                                    "enddate"=>"2016-02-23T13:00:00.000Z");
      $jsonArry = array_merge_recursive($jsonArrya,$anotherArrya);

      $jsonArrya1['subjects2'] = array("name"=>"test3",
                                    "description"=>"test3",
                                    "startdate"=>"2016-02-21T13:00:00.000Z",
                                    "enddate"=>"2016-02-23T13:00:00.000Z");
      $anotherArrya1['subjects2'] = array("name"=>"test4",
                                    "description"=>"test4",
                                    "startdate"=>"2016-02-21T13:00:00.000Z",
                                    "enddate"=>"2016-02-23T13:00:00.000Z");
      $jsonArry1 = array_merge_recursive($anotherArrya1,$jsonArrya1);
      $mergedArray = array_merge($jsonArry ,$jsonArry1);
      $dataSet = json_encode($mergedArray);
      */
      
      $teacherId = $request->input('subjetEmail');
      //echo $teacherId;
      $teacherSubjetCount = DB::table('teacher_subjet')->orderBy('created_at', 'desc')->first();
      $teacherSubjectList = TeacherSubjectList::all();
      $count = 0;
      $news = new News;
      if($teacherSubjectList->isEmpty()){
        $count = 1;
      }else{
        $count = $teacherSubjetCount->count;
        $count = $count+1;
      }
      $teacherSubjectList = new TeacherSubjectList;
              $jsonArrya = array("location"=>$request->input('search_text'),
                                    "className"=>$request->input('classname'),
                                    "count"=>$count,
                                    "subjectName"=>$request->input('subjectName'),
                                    "date"=>$request->input('classday'),
                                    "classType"=>$request->input('classtype'),
                                    "time"=>$request->input('classtime')
                                    );

        $teacherSubjectList->teacher_id = $teacherId;
        $dataSet = json_encode($jsonArrya);
        $teacherSubjectList->subjectlist = $dataSet;
        $teacherSubjectList->save();
        $subjectListData = DB::select('select * from teacher_subjet where teacher_id = ?', [$teacherId]);
        //var_dump($subjectListData);
        $newdata = array();
        foreach ($subjectListData as $value) {
          //var_dump($value->subjectlist);
          $sub = json_decode($value->subjectlist);
          array_push($newdata, $sub);
          
          //echo $sub->date;
        }
        //var_dump($newdata);
        foreach ($newdata as $value) {
          //echo $value->date;
        }

      //echo $teacherSubjectList;
        return  back();
    }
    public function updateTeacherSubject(Request $request){
      $update = [ 'subjectlist->location' => $request->input('location'),
                  'subjectlist->className' => $request->input('classname'),
                  'subjectlist->subjectName' => $request->input('subjectName'),
                  'subjectlist->date' => $request->input('date'),
                  'subjectlist->classType' => $request->input('classtype'),
                  'subjectlist->time' => $request->input('time'),
                ];
        DB::table('teacher_subjet')
            ->where('count', $request->input('count'))
            ->update($update);
      return back();
    }
    public function updateContact(Request $request){
       $update = [ 'mobile_number' => $request->input('mobile'),
                    'tel_number' => $request->input('tel'),
                    'address' => $request->input('adress'),
                    'email' => $request->input('email'),
                    'twitter' => $request->input('twitter'),
                    'facebook' => $request->input('facebook'),
                  ];
        DB::table('teacherdetail')
            ->where('teacher_id', $request->input('subjetEmail'))
            ->update($update);
      return back();
    }
    public function updateAbout(Request $request){
              $update = [ 'aboutme' => $request->input('about'),
                          'experience' => $request->input('experiences'),
                        ];
        DB::table('teacherdetail')
            ->where('teacher_id', $request->input('subjetEmail'))
            ->update($update);
      return back();
    }
}
