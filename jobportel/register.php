<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<meta http-equiv="X-UA-Compactable" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
      margin-top: 3em;
      margin-right: 50em;
      margin-left: 1em;
      padding: 30px;
      box-shadow: 10px 10px 8px 10px #888888;
    }
  </style>
	<title>Register</title>
</head>
<body>
	<div class="container">
	<form action="config.php" method="POST">
      <h1>REGISTER FORM</h1>
  <div class="mb-3">
    <label for="exampleInputName" class="form-label">Full Name</label>
    <input type="text" class="form-control" id="exampleInputName" name="name">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputNumber" class="form-label">Phone Number</label>
    <input type="number" class="form-control" id="exampleInputNumber" name="phone_no">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword2">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  <br>
  Already Registered? <a href="login.php">Login</a>
</form>
	</div>

</body>
</html>