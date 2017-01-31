<html>

   <head>
      <title>Student Management | Add</title>
   </head>

   <body>
                     <form class="form-signin" action="loginUser" method="post" enctype="multipart/form-data">
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
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                </form>

   </body>
</html>