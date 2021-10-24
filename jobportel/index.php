
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compactable" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
	<title>Career</title>
	<style>
	.navbar{
  		overflow: hidden;
  		background-color: #333;
  		position: fixed;
  		top: 0;
  		width: 100%;
	}

	h1,
	p {
		color: #fff;
	}

	.jobs{
		border:1px solid black;
		box-shadow:5px 5px 4px 5px grey;
		margin:10px;
		padding: 10px;
	}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Job Portel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="login.php">Account</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="jobs.php">Job Applied</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
		<div class="row" style="background-image: url('images/banner-1.jpg'); background-size: cover; height: 15cm;">
			<div class="col-12">
				<div class="jumbotron jumbotron-fluid" >
					<div class="container">
						<h1 class="display-4" style="color: red; font-weight: bolder; padding-top: 60px; text-align: center;">
							JOB PORTEL
						</h1>
						<p class="lead" style="color: white; font-weight: bolder; text-align: center;">BEST JOBS AVAILABLE MATCHING YOUR SKILLS</p>
						<p class="lead" style="color: gold; font-weight: bolder; text-align: center;"><marquee>DONE BY : KARRI NARENDRA REDDY</marquee></p>
						</div>
					</div>
			</div>
		</div>
		<div class="row">
			<?php
			$server='localhost';
			$username='root';
			$password='';
			$database='jobs';

			$conn=mysqli_connect($server,$username,$password,$database);

			if(!$conn){
				die("Connection failed:". myysqli_connect_error());
			}

			$sql="SELECT id,cname,position,Jdesc,skills,CTC from job";
			$result=mysqli_query($conn,$sql);
			if($result->num_rows>0){
				while($rows=$result->fetch_assoc()){
					echo'
					<div class="col-md-4">
						<div class="jobs">
						<h3 style="text-align:center;">'.$rows['position'].'</h3>
						<h4 style="text-align:center;">'.$rows['cname'].'<h4>
						<p style="color:black;text-align:justify;">'.$rows['Jdesc'].'</p>
						<p style="color:black;"><b>Skills Required:</b>'.$rows['skills'].'</p>
						<p style="color:black;"><b>CTC:</b>'.$rows['CTC'].'</p>
						<button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false" aria-controls="collapseExample">
					    Apply Now
					  </button>
						</div>
						</div>';
				}
			}

			?>
			<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apply for Jobs</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      	
        <form method="POST" action="authentication.php">
        	
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Name</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Applying For</label>
            <input type="text" class="form-control" name="apply">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Qualification</label>
            <input type="text" class="form-control" name="qual">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Year passout</label>
            <input type="text" class="form-control" name="year">
          </div>
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submit">Apply</button>
        
      </div>
      </form>        
      </div>
      
    </div>
  </div>
</div>


		</div>
		
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>