<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Work+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;1,300;1,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="index.css">
    <title>LOG-IN Project </title>
</head>
<body>

    <div class="login">
 <form action="post.php" method="POST">           
    <label for="">Login</label><br>
    <input type="text" name="username" id="username"  placeholder="username" autocomplete="off"><br>
    <input type="password" name="password" id="password" placeholder="passworrd" autocomplete="off"><br>
    <button type="submit" name="submit" >login</button>
</form>
    </div>



</body>
</html>