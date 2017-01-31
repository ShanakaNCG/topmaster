<!DOCTYPE html>
<html>
    <head>
        <title>Admin Panel</title>
    </head>
    <body>
        <form action="storesubjects" method="post" enctype="multipart/form-data">
			<label for="subjectName">Subject Name</label>
			<input type="text" name="subjetName"><br/>

			<label for="subjectTitle">Subject Title </label>
			<input type="text" name="subjectTitle"><br/>

			<label for="subjectContend">Subject Contend</label>
			<input type="text" name="subjectContend"><br/>

			<label for="subjectImage">Image Of Subject</label>
			<input type="file" name="subjectImage"><br/>

			<input type="submit" name="submit" value="Submit">

            <input type="hidden" name="_token" value="{{csrf_token()}}">
        </form>
        <form action="updateSubjectScreen" method="post" enctype="multipart/form-data">
        @foreach($user  as $users)
                <img src="/images/sub-image/{{$users->subjet_name}}" alt="" width="150" height="150">
                @if($users->delete_raw == 0)
                    <input type="radio" name="{{$users->subjects_id}}" value="add{{$users->subjects_id}}" checked> Add to list
                    <input type="radio" name="{{$users->subjects_id}}" value="del{{$users->subjects_id}}"> Remove list
                @else
                    <input type="radio" name="{{$users->subjects_id}}" value="add{{$users->subjects_id}}" > Add to list
                    <input type="radio" name="{{$users->subjects_id}}" value="del{{$users->subjects_id}}" checked> Remove list
                @endif


        @endforeach
            <input type="submit" name="submit" value="Update Subject Screen">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
        </form>
        <form action="storeSlider" method="post" enctype="multipart/form-data">
            <label for="sliderTitle">Slider title</label>
            <input type="text" name="sliderTitle"><br/>

            <label for="sliderContend">Slider Contend</label>
            <input type="text" name="sliderContend"><br/>

            <label for="sliderImage">Image Of Subject</label>
            <input type="file" name="sliderImage"><br/>

            <input type="submit" name="submit" value="Submit">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
        </form>
        <form action="updateSlider" method="post" enctype="multipart/form-data">
            @foreach($slider  as $sliders)
                    <img src="/images/slider-image/{{$sliders->slider_name}}" alt="" width="150" height="150">
                    @if($sliders->delete_raw == 0)
                        <input type="radio" name="{{$sliders->slider_id}}" value="add{{$sliders->slider_id}}" checked> Add to list
                        <input type="radio" name="{{$sliders->slider_id}}" value="del{{$sliders->slider_id}}"> Remove list
                    @else
                        <input type="radio" name="{{$sliders->slider_id}}" value="add{{$sliders->slider_id}}" > Add to list
                        <input type="radio" name="{{$sliders->slider_id}}" value="del{{$sliders->slider_id}}" checked> Remove list
                    @endif
            @endforeach
            <input type="submit" name="submit" value="Update Subject Screen">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
        </form>
        <form action="storeNews" method="post" enctype="multipart/form-data">
            <label for="newsTitle">News title</label>
            <input type="text" name="newsTitle"><br/>

            <label for="newsContend">News Contend</label>
            <input type="text" name="newsContend"><br/>

            <label for="newsImage">Image Of News</label>
            <input type="file" name="newsImage"><br/>

            <label for="newsLink">Link of news</label>
            <input type="text" name="newsLink"><br/>

            <label for="newsType">type Of news</label>
            <input type="text" name="newsType"><br/>

            <input type="submit" name="submit" value="Submit">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
        </form>
        <form action="updateNews" method="post" enctype="multipart/form-data">
            @foreach($news  as $newses)
                    <img src="/images/news-image/{{$newses->news_image}}" alt="" width="150" height="150">
                    @if($newses->delete_raw == 0)
                        <input type="radio" name="{{$newses->news_id}}" value="add{{$newses->news_id}}" checked> Add to list
                        <input type="radio" name="{{$newses->news_id}}" value="del{{$newses->news_id}}"> Remove list
                    @else
                        <input type="radio" name="{{$newses->news_id}}" value="add{{$newses->news_id}}" > Add to list
                        <input type="radio" name="{{$newses->news_id}}" value="del{{$newses->news_id}}" checked> Remove list
                    @endif
                    @if($newses->top_news == 0)
                        <input type="radio" name="topNews" value="atop{{$newses->news_id}}">Top News
                    @else
                        <input type="radio" name="topNews" value="dtop{{$newses->news_id}}" checked>Top News
                    @endif
            @endforeach
            <input type="submit" name="submit" value="Update New Screen">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
        </form>
        <form action="storeGeneral" method="post" enctype="multipart/form-data">
            <label for="generalTitle">General title</label>
            <input type="text" name="generalTitle"><br/>

            <label for="generalContend">General Contend</label>
            <input type="text" name="generalContend"><br/>

            <label for="generalImage">Image Of General</label>
            <input type="file" name="generalImage"><br/>

            <label for="generalLink">Link of General</label>
            <input type="text" name="generalLink"><br/>

            <label for="generalType">type Of General</label>
            <input type="text" name="generalType"><br/>

            <input type="submit" name="submit" value="Submit">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
        </form>
        <form action="updateGeneral" method="post" enctype="multipart/form-data">
            @foreach($general  as $generals)
                    <img src="/images/general-image/{{$generals->general_image}}" alt="" width="150" height="150">
                    @if($generals->delete_raw == 0)
                        <input type="radio" name="{{$generals->general_id}}" value="add{{$generals->general_id}}" checked> Add to list
                        <input type="radio" name="{{$generals->general_id}}" value="del{{$generals->general_id}}"> Remove list
                    @else
                        <input type="radio" name="{{$generals->general_id}}" value="add{{$generals->general_id}}" > Add to list
                        <input type="radio" name="{{$generals->general_id}}" value="del{{$generals->general_id}}" checked> Remove list
                    @endif
            @endforeach
            <input type="submit" name="submit" value="Update General Screen">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
        </form>
        @foreach($location  as $locations)
            <h4>{{$locations->location_name}}</h4>
        @endforeach
        <form action="storeLocation" method="post" enctype="multipart/form-data">
            <label for="locationName">Location name</label>
            <input type="text" name="locationName"><br/>
            <input type="submit" name="submit" value="Add Locations">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
        </form>
        @foreach($teacherdetail  as $teacherdetails)
            <form action="updateExpiraData" method="post" enctype="multipart/form-data">
                <input type="text" name="teacherId" readonly="readonly" value={{$teacherdetails->teacher_id}}>
                <label for="userEmail">{{$teacherdetails->email}}</label>
                <label for="starDate">Start Date</label>
                <input type="text" name="startDate" placeholder="YYYY-MM-DD" value={{$teacherdetails->start_date}}>
                <label for="endDate">End Date</label>
                <input type="text" name="endDate" placeholder="YYYY-MM-DD" value={{$teacherdetails->end_date}}>
                <input type="submit" name="submit" value="Add Dates">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
            </form>
        @endforeach
    </body>
</html>
