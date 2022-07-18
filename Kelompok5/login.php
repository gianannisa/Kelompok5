<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" 
    rel="stykesheet">
</head>

<body>
<div class="login">
    <form action="cek_login.php" method="post">
    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>
        <h2>FORM LOGIN</h2>
    <div class="user">
        <input type=" text" name="username" >
        <span>Username </span>
    </div>
    <div class="user">
         <input type="password" name="password">
        <span>Password  </span>
    </div>
    <div class="user">
        <input type="submit" value="Login" class="tombol">
    </div>
    </form>
</div>
</body>

</html>