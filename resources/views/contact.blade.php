<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 8 Form</title>
</head>
<body>
    <form action="contact" method="post">
        @csrf
       Name: <input type="text" name="name">
       <br>
       Email: <input type="text" name="email">
       <br>
       <input type="submit" value="submit">
    </form>
</body>
</html>