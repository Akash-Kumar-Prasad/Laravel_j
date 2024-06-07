<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>client</title>
</head>
<body>
 <center>
  <form action="getformdata" method="post">
    @csrf
    <input type="text" name="username" id="" placeholder="Enter Name"><br>
    <input type="text" name="useremail" id="" placeholder="Enter Email"><br>
    <input type="submit" value="Click Me">
  </form>
 </center>
</body>
</html>