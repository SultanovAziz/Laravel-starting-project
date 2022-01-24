<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('contact')}}" method="post">
        @csrf
        <input type="text" name="firstname" placeholder="First name">
        <input type="text" name="lastname" placeholder="Last name">
        <input type="submit" value="Send">
    </form>
</body>
</html>
