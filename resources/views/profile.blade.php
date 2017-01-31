<!DOCTYPE html>
<html>
<head>
  <title>Topmaster.lk | Create Profile</title>
  <link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon" />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="generator" content="" />
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:url" content="" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="" />
  <meta property="og:description" content="" />

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Bootstrap and default Style -->
  <link rel="stylesheet" href="{!! asset('css/bootstrap.css')!!}" media="all" " >
  <link rel="stylesheet" href="{!! asset('css/style.css')!!}" media="all" ">
  <link href="http://demo.expertphp.in/css/jquery.ui.autocomplete.css" rel="stylesheet">
  <script src="http://demo.expertphp.in/js/jquery.js"></script>

  <!-- Owl carosal style -->
  <!-- <link rel="stylesheet" href="css/docs.theme.min.css"> -->


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

  <!-- Js -->
  <script src="{!! asset('js/jquery.min.js')!!}"></script>
  <script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
</head>
<body>


  <nav class="header-top" role="navigation">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12 no-padding">
          <div class="header-top-navigation">
            <a class="top-navigation-brand" href="#">
              <img class="img-responsive header-top-logo" src="../images/logo.png" alt="topmaster logo">
            </a>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 no-padding">
          <div class="header-top-login">
            <ul class="ds-btn">
              <li class="box-popop1">
                <a class="header-login-btn" href="#popup1">
                  Login&nbsp;&nbsp;<i class="fa fa-user" aria-hidden="true"></i>
                </a>
              </li>
              <div id="popup1" class="overlay">
                <div class="popup">
                  <a class="close" href="#">&times;</a>
                  <div class="account-box">
                    <div class="login-popup-header">
                      Login
                    </div>
                    <form class="form-signin" action="#">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username" required autofocus />
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" required />
                      </div>
                      <label class="checkbox-01 checkbox">
                        <input type="checkbox" value="remember-me" />
                        Keep me signed in
                      </label>
                    </form>
                    <div class="or-box row-block">
                      <div class="row">
                        <div class="col-md-12 row-block">
                          <a href="#" class="btn btn-primary btn-block">Create New Account</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <li>
                <a class="header-profile-btn" href="../create-profile/">
                  Create New Profile
                </a>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col-md-12 no-padding">
        <div class="header-nav">
          <ul class="menu">
            <li><a href="#" />Home</a></li>
            <li><a href="#" />Mcq</a></li>
            <li><a href="#" />Knowledge Gallery</a></li>
            <li><a href="#" />About Us</a></li>
            <li><a href="#" />Contact Us</a></li>
            <li><a href="#" />My Profile</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>



  <!-- ======================================= Start content ======================================= -->
  <div class="container index-content-create">
    <div class="row no-margin">
      <div class="fb-profile col-md-12 no-padding">
        <div class="fb-profile-text col-md-12">
          @if($user != 'null')
          @endif
          @foreach($profileData  as $profileDatas)
          <h1>{{$profileDatas->full_name}}</h1>

        </div>
        <img align="left" class="fb-image-lg img-responsive" src="../images/profile-banner.jpg" alt="Profile image example"/>
        <img align="left" class="fb-image-profile  img-responsive" src="/images/master-image/{{$profileDatas->profile_pic}}" alt="Profile image example"/>
        @endforeach
        <div class="col-md-12">
          <button type="button" class="btn btn-info btn-xs">Edit</button>
          <button type="button" class="btn btn-success btn-xs">Save</button>
        </div>
      </div>
    </div>

    <div class="col-md-12 no-padding" id="tabs">
      <div class="col-md-3 no-padding">
        <ul>
          <li>
            <a href="#pro-01">Class Details</a>
          </li>
          <li>
            <a href="#pro-02">About Me</a>
          </li>
          <li>
            <a href="#pro-03">Contact</a>
          </li>
          @if($paiduser == 'yes')
          <li>
            <a href="#pro-04">Reviews</a>
          </li>
          <li>
            <a href="#pro-05">Ranking</a>
          </li>
          <li>
            <a href="#pro-06">Events Gallery</a>
          </li>
          @endif
                    <!-- <li>
                        <a href="#pro-07">Downloads</a>
                      </li> -->
                    </ul>
                  </div>
                  <div class="col-md-9 no-padding">
                    <div id="pro-01">
                      <div class="col-md-12 tab-create-02  no-padding">
                        <a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'subject-01')" id="defaultOpen">
                          <div class="col-md-6 tab-create-select-02 no-padding"><h3>Subject 01</h3></div>
                        </a>
                        <a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'subject-02')">
                          <div class="col-md-6 tab-create-select-02 no-padding"><h3>Subject 02</h3></div>
                        </a>
                      </div>

                      <div id="subject-01" class="tabcontent2">
                        <div class="row">
                          <div class="col-md-12 time-table">
                            <meta name="csrf-token" content="{{ csrf_token() }}">
                            <form id="timetabelform" action="/addingTimeTable">
                              {{ csrf_field() }}
                              <div>
                                {!! Form::text('search_text', null, array('placeholder' => 'Class Location','class' => 'form-control','id'=>'search_text')) !!}
                              </div><br/>
                              <div>
                                {!! Form::text('subjectName', null, array('placeholder' => 'subject name','class' => 'form-control','id'=>'subjectName')) !!}
                              </div>
                              <input type="text" class="form-control" name="classname" placeholder="class name"  autofocus />

                              <div class="time-table-01">
                                <table class="table table-hover table-bordered">
                                  <thead>
                                    <tr class="table-header">
                                      <th class="text-center table-title">Class</th>
                                      <th class="text-center table-title">Day</th>
                                      <th class="text-center table-title">Time</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td class="text-center">
                                        <input type="text" class="form-control" name="classtype" placeholder="Theory"  autofocus /></td>
                                        <td class="text-center">
                                          <input type="text" class="form-control" name="classday" placeholder="Saturday"  autofocus /></td>
                                          <td class="text-center">
                                            <input type="text" class="form-control" name="classtime" placeholder="8.30-10.30"  autofocus /></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                    <div class="col-md-12 no-padding">
                                      @if($user != 'null')
                                      @endif
                                      @foreach($profileData  as $profileDatas)  
                                      <input type="hidden" name="subjetEmail" value={{$profileDatas->teacher_id}}>
                                      @endforeach
                                      <input name="submit" type="submit" value="Save" class="btn btn-success btn-xs">
                                    </div>
                                  </form>

                                </div>
                                <div id="timeTable">
                                  @foreach($subjectData  as $key => $subjectDatas)
                                  <div class="col-md-12 time-table">
                                    <h3><input id="myInput"  type="text"  readonly="readonly" value={{$subjectDatas->location}}></h3>  <h3><input id="myInput"  type="text"  readonly="readonly" value={{$subjectDatas->className}} /></h3>
                                    <div class="row">
                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                      </div>
                                    </div>
                                    <div class="time-table-01">
                                      <form id="updateform" action="/updateteachersubjet">
                                        <table class="table table-hover table-bordered">
                                          <thead>
                                            <tr class="table-header">
                                              <th class="text-center table-title">Class Location</th>
                                              <th class="text-center table-title">Class Name</th>
                                              <th class="text-center table-title">Subject</th>
                                              <th class="text-center table-title">Class</th>
                                              <th class="text-center table-title">Day</th>
                                              <th class="text-center table-title">Time</th>
                                            </tr>
                                          </thead>

                                          <tbody>
                                            <tr>

                                              <td class="text-center">
                                                <input type="text" class="form-control" name="location" placeholder="location" value={{$subjectDatas->location}}  autofocus />
                                              </td>
                                              <td class="text-center">
                                                <input type="text" class="form-control" name="classname" value={{$subjectDatas->className}} placeholder="Theory"  autofocus />
                                              </td>
                                              <td class="text-center">
                                                <input type="text" class="form-control" name="subjectName" value={{$subjectDatas->subjectName}} placeholder="Theory"  autofocus />
                                              </td>
                                              <td class="text-center">
                                                <input type="text" class="form-control" name="classtype" value={{$subjectDatas->classType}} placeholder="Theory"  autofocus />
                                              </td>
                                              <td class="text-center">
                                                <input type="text" class="form-control" name="date" value={{$subjectDatas->date}} placeholder="Theory"  autofocus />
                                              </td>
                                              <td class="text-center">
                                                <input type="text" class="form-control" name="time" value={{$subjectDatas->time}} placeholder="Theory"  autofocus />
                                              </td>
                                              <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                              <input type="hidden" name="count" id="count" value={{$subjectDatas->count}}>
                                              <td>
                                                <div class="col-md-12 no-padding">
                                                  <!--<button type="button" id={{ $key }} onClick="editButton(this.id)" class="btn btn-info btn-xs">Edit</button>-->
                                                  <input name="submit" type="submit" name={{ $key }} value="Update" class="btn btn-success btn-xs">
                                                </div>
                                              </td>
                                            </tr>
                                          </tbody>

                                        </table>
                                      </form>
                                    </div>
                                  </div>
                                  @endforeach
                                </div>
                              </div>



                              <!-- ======================================================================= -->
                            </div>
                            <div id="subject-02" class="tabcontent2">
                              <div class="row">
                                <div class="col-md-12 time-table">
                                  <h3>Horan - Shipla</h3>

                                  <div class="time-table-01">
                                    <table class="table table-hover table-bordered">
                                      <thead>
                                        <tr class="table-header">
                                          <th class="text-center table-title">Class</th>
                                          <th class="text-center table-title">Day</th>
                                          <th class="text-center table-title">Time</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td class="text-center">Theory</td>
                                          <td class="text-center">Saturday</td>
                                          <td class="text-center">8.30-10.30</td>
                                        </tr>
                                        <tr>
                                          <td class="text-center">Revision</td>
                                          <td class="text-center">Sunday</td>
                                          <td class="text-center">8.30-10.30</td>
                                        </tr>
                                        <tr>
                                          <td class="text-center">Paper</td>
                                          <td class="text-center">Monday</td>
                                          <td class="text-center">8.30-10.30</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="col-md-12 no-padding">
                                    <button type="button" class="btn btn-info btn-xs">Edit</button>
                                    <button type="button" class="btn btn-success btn-xs">Save</button>
                                  </div>

                                </div>
                                <div class="col-md-12 time-table">
                                  <h3>Horan - Shipla</h3>

                                  <div class="time-table-01">
                                    <table class="table table-hover table-bordered">
                                      <thead>
                                        <tr class="table-header">
                                          <th class="text-center table-title">Class</th>
                                          <th class="text-center table-title">Day</th>
                                          <th class="text-center table-title">Time</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td class="text-center">Theory</td>
                                          <td class="text-center">Saturday</td>
                                          <td class="text-center">8.30-10.30</td>
                                        </tr>
                                        <tr>
                                          <td class="text-center">Revision</td>
                                          <td class="text-center">Sunday</td>
                                          <td class="text-center">8.30-10.30</td>
                                        </tr>
                                        <tr>
                                          <td class="text-center">Paper</td>
                                          <td class="text-center">Monday</td>
                                          <td class="text-center">8.30-10.30</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="col-md-12 no-padding">
                                    <button type="button" class="btn btn-info btn-xs">Edit</button>
                                    <button type="button" class="btn btn-success btn-xs">Save</button>
                                  </div>

                                </div>
                                <div class="col-md-12 time-table">
                                  <h3>Horan - Shipla</h3>

                                  <div class="time-table-01">
                                    <table class="table table-hover table-bordered">
                                      <thead>
                                        <tr class="table-header">
                                          <th class="text-center table-title">Class</th>
                                          <th class="text-center table-title">Day</th>
                                          <th class="text-center table-title">Time</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td class="text-center">Theory</td>
                                          <td class="text-center">Saturday</td>
                                          <td class="text-center">8.30-10.30</td>
                                        </tr>
                                        <tr>
                                          <td class="text-center">Revision</td>
                                          <td class="text-center">Sunday</td>
                                          <td class="text-center">8.30-10.30</td>
                                        </tr>
                                        <tr>
                                          <td class="text-center">Paper</td>
                                          <td class="text-center">Monday</td>
                                          <td class="text-center">8.30-10.30</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                  <div class="col-md-12 no-padding">
                                    <button type="button" class="btn btn-info btn-xs">Edit</button>
                                    <button type="button" class="btn btn-success btn-xs">Save</button>
                                  </div>

                                </div>
                              </div>
                            </div>

                            <script>
                            function openCity(evt, cityName) {
                              var i, tabcontent, tablinks;
                              tabcontent = document.getElementsByClassName("tabcontent2");
                              for (i = 0; i < tabcontent.length; i++) {
                                tabcontent[i].style.display = "none";
                              }
                              tablinks = document.getElementsByClassName("tablinks");
                              for (i = 0; i < tablinks.length; i++) {
                                tablinks[i].className = tablinks[i].className.replace(" active", "");
                              }
                              document.getElementById(cityName).style.display = "block";
                              evt.currentTarget.className += " active";
                            }

                        // Get the element with id="defaultOpen" and click on it
                        document.getElementById("defaultOpen").click();
                        </script>
                      </div>
                      @foreach($profileData  as $profileDatas)
                      <form id="updateaboutform" action="/updateabout">
                        <div id="pro-02">
                          <div class="col-xs-12 no-padding tp-about">
                            <h3>About Me</h3>
                            <input type="text" class="form-control" name="about" placeholder="about" value={{$profileDatas->aboutme}}  autofocus />
                          </div>
                          <div class="col-xs-12 no-padding tp-experience">
                            <h3>Qualifications & Experiences</h3>
                            <input type="text" class="form-control" name="experiences" placeholder="experiences" value={{$profileDatas->experience}}  autofocus />
                            @foreach($profileData  as $profileDatas)  
                            <input type="hidden" name="subjetEmail" value={{$profileDatas->teacher_id}}>
                            @endforeach
                            <div class="col-md-12 no-padding">
                              <input name="submit" type="submit" value="Update" class="btn btn-success btn-xs">
                            </div>
                          </div>
                        </div>
                      </form>
                      @endforeach
                      <div id="pro-03">
                        <div class="col-md-12 tp-contact">
                          @foreach($profileData  as $profileDatas)
                          <section class="panel panel-default">
                            <form id="updatecontactform" action="/updatecontact">
                              <div class="panel-body">
                                <div class="item-contact clearfix">
                                  <div class="icon-contact"> <i class="fa fa-map-marker"></i></div>
                                  <p class="title">Address:</p>
                                  <input type="text" class="form-control" name="adress" placeholder="adress" value={{$profileDatas->address}}  autofocus />
                                </div>

                                <div class="item-contact clearfix">
                                  <div class="icon-contact"> <i class="fa fa-phone"></i></div>
                                  <p class="title">teliphone:</p>
                                  <input type="text" class="form-control" name="mobile" placeholder="mobile" value={{$profileDatas->mobile_number}}  autofocus />
                                  <input type="text" class="form-control" name="tel" placeholder="telephone" value={{$profileDatas->tel_number}}  autofocus />
                                </div>

                                <div class="item-contact clearfix">
                                  <div class="icon-contact"> <i class="fa fa-envelope"></i></div>
                                  <p class="title">Email:</p>
                                  <input type="text" class="form-control" name="email" placeholder="email" value={{$profileDatas->email}}  autofocus />
                                </div>

                                <div class="item-contact clearfix">
                                  <div class="icon-contact"> <i class="fa fa-facebook"></i></div>
                                  <p class="title">Facebook</p>
                                  <input type="text" class="form-control" name="facebook" placeholder="Face Book" value={{$profileDatas->facebook}}  autofocus />
                                </div>

                                <div class="item-contact clearfix">
                                  <div class="icon-contact"> <i class="fa fa-twitter"></i></div>
                                  <p class="title">Twitter</p>
                                  <input type="text" class="form-control" name="twitter" placeholder="Twitter" value={{$profileDatas->twitter}}  autofocus />
                                </div>

                              </div>
                            </section>
                            <div class="col-md-12 no-padding">
                              @foreach($profileData  as $profileDatas)  
                              <input type="hidden" name="subjetEmail" value={{$profileDatas->teacher_id}}>
                              @endforeach
                              <input name="submit" type="submit" value="Update" class="btn btn-success btn-xs">
                            </div>
                          </form>
                          @endforeach
                        </div>
                      </div>
                @if($paiduser == 'yes')
                      <div id="pro-04">
                        <div class="col-xs-12 no-padding tp-review">
                          <h3>Udara Ruwarshana - Student</h3>
                          <p>
                            <i class="fa fa-quote-left" aria-hidden="true"></i>&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.&nbsp;&nbsp;<i class="fa fa-quote-right" aria-hidden="true"></i>
                          </p>
                          <div class="col-md-12 no-padding">
                            <button type="button" class="btn btn-info btn-xs">Accept</button>
                            <button type="button" class="btn btn-danger btn-xs">Delete</button>
                          </div>
                        </div>
                        <div class="col-xs-12 no-padding tp-review">
                          <h3>Udara Ruwarshana - Student</h3>
                          <p>
                            <i class="fa fa-quote-left" aria-hidden="true"></i>&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.&nbsp;&nbsp;<i class="fa fa-quote-right" aria-hidden="true"></i>
                          </p>
                          <div class="col-md-12 no-padding">
                            <button type="button" class="btn btn-info btn-xs">Accept</button>
                            <button type="button" class="btn btn-danger btn-xs">Delete</button>
                          </div>
                        </div>
                        <div class="col-md-12 no-padding">
                          <form class="form-horizontal" method="post" name="signup" id="signup" enctype="multipart/form-data" >

                            <div class="form-group">
                              <label class="control-label col-sm-2" style="text-align: left;">Your Name</label>
                              <div class="col-md-7 col-sm-8">
                                <div class="input-group">
                                  <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                  <input type="text" class="form-control" name="institute_name" id="institute_name" placeholder="Enter Your Name" value="">
                                </div>
                              </div>
                            </div>


                            <div class="form-group">
                              <label class="control-label col-sm-2" style="text-align: left;">Your Review</label>
                              <div class="col-md-7 col-sm-8">
                                <div class="input-group">
                                  <textarea rows="4" cols="70" name="comment" form="usrform"></textarea>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-xs-offset-3 col-xs-10">
                                <input name="Submit" type="submit" value="Submit" class="btn btn-primary">
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                      <div id="pro-05">
                        <div class="add-ranking">
                          <h3>Add Ranking</h3>
                          <form class="form-horizontal" method="post" name="signup" id="signup" enctype="multipart/form-data"  style="margin-top: 20px;">
                            <div class="form-group" style="margin-left: 0px;">
                              <label for="exampleInputFile">Upload image</label>
                              <input type="file" id="exampleInputFile">
                            </div>

                            <div class="form-group">
                              <label class="control-label col-md-1 col-sm-3" style="text-align: left;">Name</label>
                              <div class="col-md-5 col-sm-8">
                                <div class="input-group">
                                  <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                  <input type="text" class="form-control" name="first_name" id="first_name" value="">
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-1 col-sm-3" style="text-align: left;">Rank</label>
                              <div class="col-md-5 col-sm-8">
                                <div class="input-group">
                                  <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                  <input type="text" class="form-control" name="last_name" id="last_name" value="">
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-md-1 col-sm-3" style="text-align: left;">Year</label>
                              <div class="col-md-5 col-sm-8">
                                <div class="input-group">
                                  <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                  <input type="email" class="form-control" name="emailid" id="emailid" value="">
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-md-1 col-sm-3" style="text-align: left;">School</label>
                              <div class="col-md-5 col-sm-8">
                                <div class="input-group">
                                  <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                  <input type="text" class="form-control" name="username" id="username" value="">
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-md-2 col-xs-10">
                                <input name="Submit" type="submit" value="Submit" class="btn btn-primary">
                              </div>
                            </div>

                          </form>
                        </div>

                        <div class="col-md-6 lib-item" data-category="view">
                          <div class="lib-panel">
                            <div class="row box-shadow">
                              <div class="col-md-5">
                                <img class="img-responsive lib-img-show" src="../images/sub-image/te.jpg">
                              </div>
                              <div class="col-md-7  ranking-content">
                                <div class="lib-row lib-header">
                                  Udara Ruwarshana
                                  <div class="lib-header-seperator"></div>
                                </div>
                                <div class="lib-row lib-desc">
                                  Island 1st
                                </div>
                                <div class="lib-row lib-desc">
                                  2015 AL (Maths)
                                </div>
                                <div class="lib-row lib-desc">
                                  S.W.R.D Bandaranayke
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 lib-item" data-category="ui">
                          <div class="lib-panel">
                            <div class="row box-shadow">
                              <div class="col-md-5">
                                <img class="img-responsive lib-img" src="../images/sub-image/te.jpg">
                              </div>
                              <div class="col-md-7  ranking-content">
                                <div class="lib-row lib-header">
                                  Udara Ruwarshana
                                  <div class="lib-header-seperator"></div>
                                </div>
                                <div class="lib-row lib-desc">
                                  Island 1st
                                </div>
                                <div class="lib-row lib-desc">
                                  2015 AL (Maths)
                                </div>
                                <div class="lib-row lib-desc">
                                  S.W.R.D Bandaranayke
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>

                      <div id="pro-06">
                        <div class="add-ranking">
                          <h3>Add Event</h3>
                          <form class="form-horizontal" method="post" name="signup" id="signup" enctype="multipart/form-data" style="margin-top: 20px;">
                            <div class="form-group" style="margin-left: 0px;">
                              <label for="exampleInputFile">Upload image</label>
                              <input type="file" id="exampleInputFile">
                            </div>
                            <div class="form-group">
                              <label class="control-label col-sm-2" style="text-align: left;">Your Review</label>
                              <div class="col-md-7 col-sm-8">
                                <div class="input-group">
                                  <textarea rows="4" cols="70" name="comment" form="usrform"></textarea>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-md-2 col-xs-10">
                                <input name="Submit" type="submit" value="Submit" class="btn btn-primary">
                              </div>
                            </div>

                          </form>
                        </div>


                        <div class="row no-margin">
                          <div class="col-md-12 event-gallery">
                            <div class="col-md-6 no-padding">
                              <img class="event-gal img-responsive" src="../images/sub-image/ivent-01.jpg">
                            </div>
                            <div  class="col-md-6 no-padding">
                              <h3>Lorem ipsum dolor sit amet</h3>
                              <p>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                              </p>
                            </div>
                          </div>
                          <div class="col-md-12 event-gallery">
                            <div class="col-md-6 no-padding">
                              <img class="event-gal img-responsive" src="../images/sub-image/ivent-01.jpg">
                            </div>
                            <div  class="col-md-6 no-padding">
                              <h3>Lorem ipsum dolor sit amet</h3>
                              <p>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>

                @endif
                      <!-- <div id="pro-07">
                      Content of C
                    </div> -->
                  </div>

                </div>

                <script type="text/javascript">
                $('#tabs')
                .tabs()
                .addClass('ui-tabs-vertical ui-helper-clearfix');
                </script>





              </div>



              <footer>
                <div class="container">
                  <div class="row">
                    <div class="col-md-4 col-sm-6 footerleft">
                      <div class="logofooter">
                        <img class="img-responsive footer-logo-size" src="../images/footer-logo.png">
                      </div>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>


                    </div>
                    <div class="col-md-4 col-sm-6 paddingtop-bottom bottom-mid-pad">
                      <h6 class="heading7">Genaral Links</h6>
                      <ul class="footer-ul">
                        <li><a href="#" />Home</a></li>
                        <li><a href="#" />Mcq</a></li>
                        <li><a href="#" />Knowledge gallery</a></li>
                        <li><a href="#" />Contact us</a></li>
                        <li><a href="#" />Help</a></li>
                      </ul>
                    </div>
                    <div class="col-md-4 col-sm-6 paddingtop-bottom">
                      <h6 class="heading7">Connect with us</h6>
                      <div class="post">
                        <p><i class="fa fa-map-marker"></i> &nbsp;210, Mathugama Rd, Mathugama, Sri Lanka</p>
                        <p><i class="fa fa-phone"></i> &nbsp;Phone : (+94) 771 123455</p>
                        <p><i class="fa fa-envelope"></i> &nbsp;E-mail : topmaster.lk@gmail.com</p>
                      </div>

                    </div>
                  </div>
                </div>
              </footer>


              <div class="copyright">
                <div class="container">
                  <div class="col-md-12 no-padding">
                    <p>© 2016 - All Rights with <a href="#">topmaster.lk</a></p>
                  </div>
                </div>
              </div>
              <script>
              $(document).ready(function() {
               src = "{{ route('searchajax') }}";
               $("#search_text").autocomplete({
                 source: function(request, response) {
                   $.ajax({
                     url: src,
                     dataType: "json",
                     data: {
                       term : request.term
                     },
                     success: function(data) {
                       response(data);

                     }
                   });
                 },
                 min_length: 3,

               });
               srcs = "{{ route('subjectNameajax') }}";
               $("#subjectName").autocomplete({
                 source: function(request, response) {
                   $.ajax({
                     url: srcs,
                     dataType: "json",
                     data: {
                       subName : request.subName
                     },
                     success: function(data) {
                       response(data);

                     }
                   });
                 },
                 min_length: 3,
               });
               $(function(){
                $("#timetabelform").submit(function(e) {
                  e.preventDefault();
                  var $form = $(this);
                  $.post($form.attr("action"), $('form#timetabelform').serialize())
                  .done(function(data) {
                    var values = data;
                    $('#timeTable').load(document.URL +  ' #timeTable');
            //alert(values);
            // Some stuff there
            //window.location = '/userProfile/addingTimeTable/'+ values;
            //window.location.href = "{!! route('subjectswitch', ['subId'=>"values"]) !!}"
          })
                  .fail(function() {
                    alert("fail");
            // Dispatch errors in modal
          });
                });
              });

               $(function(){
                $("#updateform1").submit(function(e) { 
                  e.preventDefault();
                  var $form = $(this);
                  $.post($form.attr("action"), $('form#updateform1').serialize())
                  .done(function(data) {
                    var values = data;
            //$('#timeTable').load(document.URL +  ' #timeTable');
            //alert(values);
            // Some stuff there
            //window.location = '/userProfile/addingTimeTable/'+ values;
            //window.location.href = "{!! route('subjectswitch', ['subId'=>"values"]) !!}"
          })
                  .fail(function() {
                    alert("fail");
            // Dispatch errors in modal
          });
                });
              });
               $(function(){
                $("#updatecontactform").submit(function(e) { 
                  e.preventDefault();
                  var $form = $(this);
                  $.post($form.attr("action"), $('form#updatecontactform').serialize())
                  .done(function(data) {
                    var values = data;
            //$('#timeTable').load(document.URL +  ' #timeTable');
            //alert(values);
            // Some stuff there
            //window.location = '/userProfile/addingTimeTable/'+ values;
            //window.location.href = "{!! route('subjectswitch', ['subId'=>"values"]) !!}"
          })
                  .fail(function() {
                    alert("fail");
            // Dispatch errors in modal
          });
                });
              });

               function editButton(clicked_id){
                document.getElementById("classname"+clicked_id).removeAttribute('readonly');
                document.getElementById("classtype"+clicked_id).removeAttribute('readonly');
                document.getElementById("date"+clicked_id).removeAttribute('readonly');
                document.getElementById("time"+clicked_id).removeAttribute('readonly');
                document.getElementById("location"+clicked_id).removeAttribute('readonly');
              }
              </script>

            </body>


            </html>