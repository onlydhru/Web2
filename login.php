<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body class="loginbody">
    
  <div class="indexcol">
    <div class="row">
      <div class="text-bg-dark p-3">
        STUDENT LOGIN 
      </div>
</div>
</div>
    <form action="action_page.php" method="post">
        <img src="logo1.jpg" alt="Avatar" class="avatar1">
        <hr class="hr1">
        <div class="container3">
          <label for="uname"><b>Username</b></label>
          <input class="logininput" type="text" placeholder="Enter Username" name="uname" required>
      
          <label for="psw"><b>Password</b></label>
          <input class="logininput" type="password" placeholder="Enter Password" name="psw" required>
      
          <button type="submit">Login</button>

        </div>
      
        <div class="container1">
          <span>Register Here!  <a href="registration.php">Dont have acoount?</a></span>
        </div>
      </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>