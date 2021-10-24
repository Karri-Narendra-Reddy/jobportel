<?php include 'config.php'?>
<!DOCTYPE html>
<html>
<head>
  <title>LOGIN</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
  <style>
    body{
      background-image: url("images/jobportel_background.jpg") ;
      background-size: cover;


    }
    body h1{
      padding-bottom: 35px;
      font-size: 18px;
      font-weight: bolder;
      font-family: sans-serif;
      text-align: center;
      text-decoration: underline;
      text-decoration-color: gold;
      text-shadow: 1px 1px;

    }
    form{
      background-color: white;
      margin-top: 10em;
      margin-right: 50em;
      margin-left: 1em;
      padding: 30px;
      box-shadow: 10px 10px 8px 10px #888888;
    }
  </style>
</head>
<body>
	<div class="container">
		<form method="POST">
      <h1>LOGIN FORM</h1>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label" >Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <button type="submit" class="btn btn-primary" name="Login">Submit</button>
        <br>
        <p style="text-align: left;padding-top: 10px;">New User?<br>Create Account <a href="register.php">Register</a></p>
    </form>
	</div>
</body>
</html>