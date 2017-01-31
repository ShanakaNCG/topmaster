<!DOCTYPE html>
<html>
    <head>
        <title>Admin Panel</title>
    </head>
    <body>
        @foreach($user  as $users)
        	<img src="{{$users->subjet_name}}" alt="" width="150" height="150">
        @endforeach
    </body>
</html>
