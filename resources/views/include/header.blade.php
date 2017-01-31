
<nav class="header-top" role="navigation">
<meta name="csrf-token" content="{{ csrf_token() }}">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12 no-padding">
				<div class="header-top-navigation">
					<a class="top-navigation-brand" href="#">
						<img class="img-responsive header-top-logo" src="images/logo.png" alt="topmaster logo">
					</a>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12 no-padding">
				<div class="header-top-login">
					<ul class="ds-btn">
						<li class="box-popop1">
							<a class="header-login-btn" href="#popup1">
								Loginff&nbsp;&nbsp;<i class="fa fa-user" aria-hidden="true"></i>
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
										{{ csrf_field() }}
										<div class="form-group">
											<input type="text" class="form-control" name="username" placeholder="Username" required autofocus />
										</div>
										<div class="form-group">
											<input type="password" class="form-control" name="password" placeholder="Password" required />
										</div>
										<input name="Submit" type="submit" value="Sign In" class="btn btn-primary">
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
							<a class="header-profile-btn" href="<?php echo url('createAccount') ?>">
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
					<li><a href="#" />Knowledge gallery</a></li>
					<li><a href="#" />Contact us</a></li>
					<li><a href="#" />Help</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<script>
$(function(){
        $("form").submit(function(e) {
          e.preventDefault();
          var $form = $(this);
          $.post($form.attr("action"), $form.serialize())
          .done(function(data) {
          	var values = data;
          	window.location = '/userProfile/'+ values;
          	//alert(values);
            // Some stuff there
            
            //window.location.href = "{!! route('userView', ['userId'=>"values"]) !!}"
          })
          .fail(function() {
          	alert("fail");
            // Dispatch errors in modal
          });
        });
      });
    </script>