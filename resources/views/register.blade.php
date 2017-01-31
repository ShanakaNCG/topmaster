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

    <link rel="stylesheet" href="{!! asset('css/bootstrap.css')!!}" media="all" " >
    <link rel="stylesheet" href="{!! asset('css/style.css')!!}" media="all" ">

    <!-- Owl carosal style -->
    <!-- <link rel="stylesheet" href="css/docs.theme.min.css"> -->
    <link rel="stylesheet" href="{!! asset('css/owl.carousel.css')!!}" media="all" ">
    <link rel="stylesheet" href="{!! asset('css/owl.theme.default.css')!!}" media="all" ">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

	<!-- Js -->
    <script src="{!! asset('js/jquery.min.js')!!}"></script>
    <script src="{!! asset('js/owl.carousel.js')!!}"></script>


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
                <form class="form-signin" action="loginUser">
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
							    <a class="header-profile-btn" href="">
							    	Create New Profile
							    </a>
						    </li>
						</ul>
		            </div>

		        </div>
	        </div>
        </div>
    </nav>
    <!-- <div class="container">
    	<div class="row">
    		<div class="col-md-12 no-padding">
			    <div class="header-nav">
					<ul class="menu">
						<li><a href="#" />Home</a></li>
						<li><a href="#" />Mcq</a></li>
						<li><a href="#" />Knowledge gallery</a></li>
						<li><a href="#" />Contact us</a></li>
						<li><a href="#" />Help</a></li>
					</ul>
				</div>
			</div>
    	</div>
    </div> -->



    <!-- ======================================= Start content ======================================= -->
	<div class="container index-content-create">

	    <div class="col-md-12 tab-create  no-padding">
		  <a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'as-master')" id="defaultOpen">
		  <div class="col-md-4 tab-create-select no-padding"><h3>As a Master</h3></div>
		  </a>
		  <a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'as-institute')">
		  <div class="col-md-4 tab-create-select no-padding"><h3>As a Institute</h3></div>
		  </a>
		  <a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'as-student')">
		  <div class="col-md-4 tab-create-select no-padding"><h3>As a Student</h3></div>
		  </a>
		</div>

		<div id="as-master" class="tabcontent">
		<!-- ======================================================================= -->



			<div class="row">
		    <div class="col-md-12">
		      <section>
		        <h1 class="entry-title"><span>Sign Up</span> </h1>
		        <hr>
		            <form class="form-horizontal" action="createmaster" method="post" enctype="multipart/form-data" >
		        <div class="form-group">
		          <label class="control-label col-sm-3">Email ID <span class="text-danger">*</span></label>
		          <div class="col-md-8 col-sm-9">
		              <div class="input-group">
		              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
		              <input type="email" class="form-control" name="emailid" id="emailid" placeholder="Enter your Email ID" value="">
		            </div>
		            <small> Your Email Id is being used for ensuring the security of your account, authorization and access recovery. </small> </div>
		        </div>

		        <div class="form-group">
		          <label class="control-label col-sm-3">Set Password <span class="text-danger">*</span></label>
		          <div class="col-md-5 col-sm-8">
		            <div class="input-group">
		              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
		              <input type="password" class="form-control" name="password" id="password" placeholder="Choose password (5-15 chars)" value="">
		           </div>
		          </div>
		        </div>
		        <div class="form-group">
		          <label class="control-label col-sm-3">Confirm Password <span class="text-danger">*</span></label>
		          <div class="col-md-5 col-sm-8">
		            <div class="input-group">
		              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
		              <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Confirm your password" value="">
		            </div>
		          </div>
		        </div>
		        <div class="form-group">
		          <label class="control-label col-sm-3">Full Name <span class="text-danger">*</span></label>
		          <div class="col-md-8 col-sm-9">
		            <input type="text" class="form-control" name="mem_name" id="mem_name" placeholder="Enter your Name here" value="">
		          </div>
		        </div>
		        <div class="form-group">
		          <label class="control-label col-sm-3">Date of Birth <span class="text-danger">*</span></label>
		          <div class="col-xs-8">
		            <div class="form-inline">
		              <div class="form-group">
		                <select name="dd" class="form-control">
		                  <option value="">Date</option>
		                  <option value="1" >1 </option><option value="2" >2 </option><option value="3" >3 </option><option value="4" >4 </option><option value="5" >5 </option><option value="6" >6 </option><option value="7" >7 </option><option value="8" >8 </option><option value="9" >9 </option><option value="10" >10 </option><option value="11" >11 </option><option value="12" >12 </option><option value="13" >13 </option><option value="14" >14 </option><option value="15" >15 </option><option value="16" >16 </option><option value="17" >17 </option><option value="18" >18 </option><option value="19" >19 </option><option value="20" >20 </option><option value="21" >21 </option><option value="22" >22 </option><option value="23" >23 </option><option value="24" >24 </option><option value="25" >25 </option><option value="26" >26 </option><option value="27" >27 </option><option value="28" >28 </option><option value="29" >29 </option><option value="30" >30 </option><option value="31" >31 </option>                </select>
		              </div>
		              <div class="form-group">
		                <select name="mm" class="form-control">
		                  <option value="">Month</option>
		                  <option value="1">Jan</option><option value="2">Feb</option><option value="3">Mar</option><option value="4">Apr</option><option value="5">May</option><option value="6">Jun</option><option value="7">Jul</option><option value="8">Aug</option><option value="9">Sep</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option>                </select>
		              </div>
		              <div class="form-group" >
		                <select name="yyyy" class="form-control">
		                  <option value="0">Year</option>
		                  <option value="1955" >1955 </option><option value="1956" >1956 </option><option value="1957" >1957 </option><option value="1958" >1958 </option><option value="1959" >1959 </option><option value="1960" >1960 </option><option value="1961" >1961 </option><option value="1962" >1962 </option><option value="1963" >1963 </option><option value="1964" >1964 </option><option value="1965" >1965 </option><option value="1966" >1966 </option><option value="1967" >1967 </option><option value="1968" >1968 </option><option value="1969" >1969 </option><option value="1970" >1970 </option><option value="1971" >1971 </option><option value="1972" >1972 </option><option value="1973" >1973 </option><option value="1974" >1974 </option><option value="1975" >1975 </option><option value="1976" >1976 </option><option value="1977" >1977 </option><option value="1978" >1978 </option><option value="1979" >1979 </option><option value="1980" >1980 </option><option value="1981" >1981 </option><option value="1982" >1982 </option><option value="1983" >1983 </option><option value="1984" >1984 </option><option value="1985" >1985 </option><option value="1986" >1986 </option><option value="1987" >1987 </option><option value="1988" >1988 </option><option value="1989" >1989 </option><option value="1990" >1990 </option><option value="1991" >1991 </option><option value="1992" >1992 </option><option value="1993" >1993 </option><option value="1994" >1994 </option><option value="1995" >1995 </option><option value="1996" >1996 </option><option value="1997" >1997 </option><option value="1998" >1998 </option><option value="1999" >1999 </option><option value="2000" >2000 </option><option value="2001" >2001 </option><option value="2002" >2002 </option><option value="2003" >2003 </option><option value="2004" >2004 </option><option value="2005" >2005 </option><option value="2006" >2006 </option>                </select>
		              </div>
		            </div>
		          </div>
		        </div>
		        <div class="form-group">
		          <label class="control-label col-sm-3">Gender <span class="text-danger">*</span></label>
		          <div class="col-md-8 col-sm-9">
		            <label>
		            <input name="gender" type="radio" value="Male" checked>
		            Male </label>
		               
		            <label>
		            <input name="gender" type="radio" value="Female" >
		            Female </label>
		          </div>
		        </div>
		        <div class="form-group">
		          <label class="control-label col-sm-3">Contact No. <span class="text-danger">*</span></label>
		          <div class="col-md-5 col-sm-8">
		          	<div class="input-group">
		              <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
		            <input type="text" class="form-control" name="contactnum" id="contactnum" placeholder="Enter your Primary contact no." value="">
		            </div>
		          </div>
		        </div>
		        <div class="form-group">
		          <label class="control-label col-sm-3">Alternate No. <br>
		          <small>(if any)</small></label>
		          <div class="col-md-5 col-sm-8">
		            <input type="text" class="form-control" name="contactnum2" id="contactnum2" placeholder="Any other or Landline no (if any)" value="">
		          </div>
		        </div>
		        <div class="form-group">
		          <label class="control-label col-sm-3">Profile Photo <br>
		          <small>(optional)</small></label>
		          <div class="col-md-5 col-sm-8">
		            <div class="input-group"> <span class="input-group-addon" id="file_upload"><i class="glyphicon glyphicon-upload"></i></span>
		              <input type="file" name="file_nm" id="file_nm" class="form-control upload" placeholder="" aria-describedby="file_upload">
		            </div>
		          </div>
		        </div>
		        <div class="form-group">
		          <label class="control-label col-sm-3">Security Code </label>
		          <div class="col-md-5 col-sm-8">
		            <div >

		                <input type="text" name="captcha" id="captcha" class="form-control label-warning"  />
		              </div>
		          </div>
		        </div>
		        <div class="form-group">
		          <div class="col-xs-offset-3 col-md-8 col-sm-9"><span class="text-muted"><span class="label label-danger">Note:-</span> By clicking Sign Up, you agree to our <a href="#">Terms</a> and that you have read our <a href="#">Policy</a>, including our <a href="#">Cookie Use</a>.</span> </div>
		        </div>
		        <div class="form-group">
		          <div class="col-xs-offset-3 col-xs-10">
		            <input name="Submit" type="submit" value="Sign Up" class="btn btn-primary">
		            <input type="hidden" name="_token" value="{{csrf_token()}}">
		          </div>
		        </div>
		      </form>
		    </div>
		</div>



		<!-- ======================================================================= -->
		</div>

		<div id="as-institute" class="tabcontent">
		  <div class="row">
		    <div class="col-md-12">
		      <section>
		        <h1 class="entry-title"><span>Sign Up</span> </h1>
		        <hr>
		            <form class="form-horizontal" method="post" name="signup" id="signup" enctype="multipart/form-data" >
		        <div class="form-group">
		          <label class="control-label col-sm-3">Email ID <span class="text-danger">*</span></label>
		          <div class="col-md-8 col-sm-9">
		              <div class="input-group">
		              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
		              <input type="email" class="form-control" name="emailid" id="emailid" placeholder="Enter your Email ID" value="">
		            </div>
		            <small> Your Email Id is being used for ensuring the security of your account, authorization and access recovery. </small> </div>
		        </div>

		        <div class="form-group">
		          <label class="control-label col-sm-3">Set Password <span class="text-danger">*</span></label>
		          <div class="col-md-5 col-sm-8">
		            <div class="input-group">
		              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
		              <input type="password" class="form-control" name="password" id="password" placeholder="Choose password (5-15 chars)" value="">
		           </div>
		          </div>
		        </div>
		        <div class="form-group">
		          <label class="control-label col-sm-3">Confirm Password <span class="text-danger">*</span></label>
		          <div class="col-md-5 col-sm-8">
		            <div class="input-group">
		              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
		              <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Confirm your password" value="">
		            </div>
		          </div>
		        </div>
		        <div class="form-group">
		          <label class="control-label col-sm-3">Full Name <span class="text-danger">*</span></label>
		          <div class="col-md-8 col-sm-9">
		            <input type="text" class="form-control" name="mem_name" id="mem_name" placeholder="Enter your Name here" value="">
		          </div>
		        </div>
		        <div class="form-group">
		          <label class="control-label col-sm-3">Date of Birth <span class="text-danger">*</span></label>
		          <div class="col-xs-8">
		            <div class="form-inline">
		              <div class="form-group">
		                <select name="dd" class="form-control">
		                  <option value="">Date</option>
		                  <option value="1" >1 </option><option value="2" >2 </option><option value="3" >3 </option><option value="4" >4 </option><option value="5" >5 </option><option value="6" >6 </option><option value="7" >7 </option><option value="8" >8 </option><option value="9" >9 </option><option value="10" >10 </option><option value="11" >11 </option><option value="12" >12 </option><option value="13" >13 </option><option value="14" >14 </option><option value="15" >15 </option><option value="16" >16 </option><option value="17" >17 </option><option value="18" >18 </option><option value="19" >19 </option><option value="20" >20 </option><option value="21" >21 </option><option value="22" >22 </option><option value="23" >23 </option><option value="24" >24 </option><option value="25" >25 </option><option value="26" >26 </option><option value="27" >27 </option><option value="28" >28 </option><option value="29" >29 </option><option value="30" >30 </option><option value="31" >31 </option>                </select>
		              </div>
		              <div class="form-group">
		                <select name="mm" class="form-control">
		                  <option value="">Month</option>
		                  <option value="1">Jan</option><option value="2">Feb</option><option value="3">Mar</option><option value="4">Apr</option><option value="5">May</option><option value="6">Jun</option><option value="7">Jul</option><option value="8">Aug</option><option value="9">Sep</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option>                </select>
		              </div>
		              <div class="form-group" >
		                <select name="yyyy" class="form-control">
		                  <option value="0">Year</option>
		                  <option value="1955" >1955 </option><option value="1956" >1956 </option><option value="1957" >1957 </option><option value="1958" >1958 </option><option value="1959" >1959 </option><option value="1960" >1960 </option><option value="1961" >1961 </option><option value="1962" >1962 </option><option value="1963" >1963 </option><option value="1964" >1964 </option><option value="1965" >1965 </option><option value="1966" >1966 </option><option value="1967" >1967 </option><option value="1968" >1968 </option><option value="1969" >1969 </option><option value="1970" >1970 </option><option value="1971" >1971 </option><option value="1972" >1972 </option><option value="1973" >1973 </option><option value="1974" >1974 </option><option value="1975" >1975 </option><option value="1976" >1976 </option><option value="1977" >1977 </option><option value="1978" >1978 </option><option value="1979" >1979 </option><option value="1980" >1980 </option><option value="1981" >1981 </option><option value="1982" >1982 </option><option value="1983" >1983 </option><option value="1984" >1984 </option><option value="1985" >1985 </option><option value="1986" >1986 </option><option value="1987" >1987 </option><option value="1988" >1988 </option><option value="1989" >1989 </option><option value="1990" >1990 </option><option value="1991" >1991 </option><option value="1992" >1992 </option><option value="1993" >1993 </option><option value="1994" >1994 </option><option value="1995" >1995 </option><option value="1996" >1996 </option><option value="1997" >1997 </option><option value="1998" >1998 </option><option value="1999" >1999 </option><option value="2000" >2000 </option><option value="2001" >2001 </option><option value="2002" >2002 </option><option value="2003" >2003 </option><option value="2004" >2004 </option><option value="2005" >2005 </option><option value="2006" >2006 </option>                </select>
		              </div>
		            </div>
		          </div>
		        </div>
		        <div class="form-group">
		          <label class="control-label col-sm-3">Gender <span class="text-danger">*</span></label>
		          <div class="col-md-8 col-sm-9">
		            <label>
		            <input name="gender" type="radio" value="Male" checked>
		            Male </label>
		               
		            <label>
		            <input name="gender" type="radio" value="Female" >
		            Female </label>
		          </div>
		        </div>
		        <div class="form-group">
		          <label class="control-label col-sm-3">Contact No. <span class="text-danger">*</span></label>
		          <div class="col-md-5 col-sm-8">
		          	<div class="input-group">
		              <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
		            <input type="text" class="form-control" name="contactnum" id="contactnum" placeholder="Enter your Primary contact no." value="">
		            </div>
		          </div>
		        </div>
		        <div class="form-group">
		          <label class="control-label col-sm-3">Alternate No. <br>
		          <small>(if any)</small></label>
		          <div class="col-md-5 col-sm-8">
		            <input type="text" class="form-control" name="contactnum2" id="contactnum2" placeholder="Any other or Landline no (if any)" value="">
		          </div>
		        </div>
		        <div class="form-group">
		          <label class="control-label col-sm-3">Profile Photo <br>
		          <small>(optional)</small></label>
		          <div class="col-md-5 col-sm-8">
		            <div class="input-group"> <span class="input-group-addon" id="file_upload"><i class="glyphicon glyphicon-upload"></i></span>
		              <input type="file" name="file_nm" id="file_nm" class="form-control upload" placeholder="" aria-describedby="file_upload">
		            </div>
		          </div>
		        </div>
		        <div class="form-group">
		          <label class="control-label col-sm-3">Security Code </label>
		          <div class="col-md-5 col-sm-8">
		            <div >

		                <input type="text" name="captcha" id="captcha" class="form-control label-warning"  />
		              </div>
		          </div>
		        </div>
		        <div class="form-group">
		          <div class="col-xs-offset-3 col-md-8 col-sm-9"><span class="text-muted"><span class="label label-danger">Note:-</span> By clicking Sign Up, you agree to our <a href="#">Terms</a> and that you have read our <a href="#">Policy</a>, including our <a href="#">Cookie Use</a>.</span> </div>
		        </div>
		        <div class="form-group">
		          <div class="col-xs-offset-3 col-xs-10">
		            <input name="Submit" type="submit" value="Sign Up" class="btn btn-primary">
		          </div>
		        </div>
		      </form>
		    </div>
		</div>
		</div>

		<div id="as-student" class="tabcontent">
		  <div class="row">
		    <div class="col-md-12">
		      <section>
		        <h1 class="entry-title"><span>Sign Up</span> </h1>
		        <hr>
		            <form class="form-horizontal" method="post" name="signup" id="signup" enctype="multipart/form-data" >
		        <div class="form-group">
		          <label class="control-label col-sm-3">Email ID <span class="text-danger">*</span></label>
		          <div class="col-md-8 col-sm-9">
		              <div class="input-group">
		              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
		              <input type="email" class="form-control" name="emailid" id="emailid" placeholder="Enter your Email ID" value="">
		            </div>
		            <small> Your Email Id is being used for ensuring the security of your account, authorization and access recovery. </small> </div>
		        </div>

		        <div class="form-group">
		          <label class="control-label col-sm-3">Set Password <span class="text-danger">*</span></label>
		          <div class="col-md-5 col-sm-8">
		            <div class="input-group">
		              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
		              <input type="password" class="form-control" name="password" id="password" placeholder="Choose password (5-15 chars)" value="">
		           </div>
		          </div>
		        </div>
		        <div class="form-group">
		          <label class="control-label col-sm-3">Confirm Password <span class="text-danger">*</span></label>
		          <div class="col-md-5 col-sm-8">
		            <div class="input-group">
		              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
		              <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Confirm your password" value="">
		            </div>
		          </div>
		        </div>
		        <div class="form-group">
		          <label class="control-label col-sm-3">Full Name <span class="text-danger">*</span></label>
		          <div class="col-md-8 col-sm-9">
		            <input type="text" class="form-control" name="mem_name" id="mem_name" placeholder="Enter your Name here" value="">
		          </div>
		        </div>
		        <div class="form-group">
		          <label class="control-label col-sm-3">Date of Birth <span class="text-danger">*</span></label>
		          <div class="col-xs-8">
		            <div class="form-inline">
		              <div class="form-group">
		                <select name="dd" class="form-control">
		                  <option value="">Date</option>
		                  <option value="1" >1 </option><option value="2" >2 </option><option value="3" >3 </option><option value="4" >4 </option><option value="5" >5 </option><option value="6" >6 </option><option value="7" >7 </option><option value="8" >8 </option><option value="9" >9 </option><option value="10" >10 </option><option value="11" >11 </option><option value="12" >12 </option><option value="13" >13 </option><option value="14" >14 </option><option value="15" >15 </option><option value="16" >16 </option><option value="17" >17 </option><option value="18" >18 </option><option value="19" >19 </option><option value="20" >20 </option><option value="21" >21 </option><option value="22" >22 </option><option value="23" >23 </option><option value="24" >24 </option><option value="25" >25 </option><option value="26" >26 </option><option value="27" >27 </option><option value="28" >28 </option><option value="29" >29 </option><option value="30" >30 </option><option value="31" >31 </option>                </select>
		              </div>
		              <div class="form-group">
		                <select name="mm" class="form-control">
		                  <option value="">Month</option>
		                  <option value="1">Jan</option><option value="2">Feb</option><option value="3">Mar</option><option value="4">Apr</option><option value="5">May</option><option value="6">Jun</option><option value="7">Jul</option><option value="8">Aug</option><option value="9">Sep</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option>                </select>
		              </div>
		              <div class="form-group" >
		                <select name="yyyy" class="form-control">
		                  <option value="0">Year</option>
		                  <option value="1955" >1955 </option><option value="1956" >1956 </option><option value="1957" >1957 </option><option value="1958" >1958 </option><option value="1959" >1959 </option><option value="1960" >1960 </option><option value="1961" >1961 </option><option value="1962" >1962 </option><option value="1963" >1963 </option><option value="1964" >1964 </option><option value="1965" >1965 </option><option value="1966" >1966 </option><option value="1967" >1967 </option><option value="1968" >1968 </option><option value="1969" >1969 </option><option value="1970" >1970 </option><option value="1971" >1971 </option><option value="1972" >1972 </option><option value="1973" >1973 </option><option value="1974" >1974 </option><option value="1975" >1975 </option><option value="1976" >1976 </option><option value="1977" >1977 </option><option value="1978" >1978 </option><option value="1979" >1979 </option><option value="1980" >1980 </option><option value="1981" >1981 </option><option value="1982" >1982 </option><option value="1983" >1983 </option><option value="1984" >1984 </option><option value="1985" >1985 </option><option value="1986" >1986 </option><option value="1987" >1987 </option><option value="1988" >1988 </option><option value="1989" >1989 </option><option value="1990" >1990 </option><option value="1991" >1991 </option><option value="1992" >1992 </option><option value="1993" >1993 </option><option value="1994" >1994 </option><option value="1995" >1995 </option><option value="1996" >1996 </option><option value="1997" >1997 </option><option value="1998" >1998 </option><option value="1999" >1999 </option><option value="2000" >2000 </option><option value="2001" >2001 </option><option value="2002" >2002 </option><option value="2003" >2003 </option><option value="2004" >2004 </option><option value="2005" >2005 </option><option value="2006" >2006 </option>                </select>
		              </div>
		            </div>
		          </div>
		        </div>
		        <div class="form-group">
		          <label class="control-label col-sm-3">Gender <span class="text-danger">*</span></label>
		          <div class="col-md-8 col-sm-9">
		            <label>
		            <input name="gender" type="radio" value="Male" checked>
		            Male </label>
		               
		            <label>
		            <input name="gender" type="radio" value="Female" >
		            Female </label>
		          </div>
		        </div>
		        <div class="form-group">
		          <label class="control-label col-sm-3">Contact No. <span class="text-danger">*</span></label>
		          <div class="col-md-5 col-sm-8">
		          	<div class="input-group">
		              <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
		            <input type="text" class="form-control" name="contactnum" id="contactnum" placeholder="Enter your Primary contact no." value="">
		            </div>
		          </div>
		        </div>
		        <div class="form-group">
		          <label class="control-label col-sm-3">Alternate No. <br>
		          <small>(if any)</small></label>
		          <div class="col-md-5 col-sm-8">
		            <input type="text" class="form-control" name="contactnum2" id="contactnum2" placeholder="Any other or Landline no (if any)" value="">
		          </div>
		        </div>
		        <div class="form-group">
		          <label class="control-label col-sm-3">Profile Photo <br>
		          <small>(optional)</small></label>
		          <div class="col-md-5 col-sm-8">
		            <div class="input-group"> <span class="input-group-addon" id="file_upload"><i class="glyphicon glyphicon-upload"></i></span>
		              <input type="file" name="file_nm" id="file_nm" class="form-control upload" placeholder="" aria-describedby="file_upload">
		            </div>
		          </div>
		        </div>
		        <div class="form-group">
		          <label class="control-label col-sm-3">Security Code </label>
		          <div class="col-md-5 col-sm-8">
		            <div >

		                <input type="text" name="captcha" id="captcha" class="form-control label-warning"  />
		              </div>
		          </div>
		        </div>
		        <div class="form-group">
		          <div class="col-xs-offset-3 col-md-8 col-sm-9"><span class="text-muted"><span class="label label-danger">Note:-</span> By clicking Sign Up, you agree to our <a href="#">Terms</a> and that you have read our <a href="#">Policy</a>, including our <a href="#">Cookie Use</a>.</span> </div>
		        </div>
		        <div class="form-group">
		          <div class="col-xs-offset-3 col-xs-10">
		            <input name="Submit" type="submit" value="Sign Up" class="btn btn-primary">
		          </div>
		        </div>
		      </form>
		    </div>
		</div>
		</div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
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


</body>
	<script type="text/javascript">

    </script>

</html>