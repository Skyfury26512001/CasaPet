<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
</head>
<body>
    <form action="{{route('loginP')}}" method="POST">
        @csrf
        <label>Email :</label> <input type="text" name="email">
        <label>Password :</label> <input type="text" name="password">
        <button>Submit</button>
    </form>
</body>
</html>