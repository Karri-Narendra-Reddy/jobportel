<?php include 'header.php'?>
<?php

$server='localhost';
$username='root';
$password='';
$database='jobs';

$conn=mysqli_connect($server,$username,$password,$database);

if(!$conn){
  die("Connection failed:". myysqli_connect_error());
}
if(isset($_POST['jobpost'])){
  $cname=$_POST['cname'];
  $pos=$_POST['pos'];
  $Jdesc=$_POST['Jdesc'];
  $skills=$_POST['skills'];
  $CTC=$_POST['CTC'];

  $sql="INSERT INTO `job`(`cname`, `position`, `Jdesc`, `skills`, `CTC`) VALUES ('$cname','$pos','$Jdesc','$skills','$CTC')";
  if(mysqli_query($conn,$sql)){
    echo "NEW JOB POSTED";
  }
  else{
    echo "FAILED to post the job $sql. " . mysqli_error($conn);
  }
}
?>
<!-- Page content -->
<div class="content">
  <p>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    JOB POST
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <form action="" method="POST">
  <div class="mb-3">
    <label for="Company Name" class="form-label">Company Name</label>
    <input type="text" class="form-control" id="" name="cname">
  </div>
  <div class="mb-3">
    <label for="exampleInputPosition" class="form-label">Position</label>
    <input type="text" class="form-control" id="exampleInputPosition" name="pos">
  </div>
  <div class="mb-3">
    <label for="JobDesc" class="form-label">Job Description</label>
    <textarea name="" id="" cols="30" rows="10" class="form-control" name="Jdesc"></textarea>
  </div>
  <div class="mb-3">
    <label for="Skills" class="form-label">Skills Required</label>
    <input type="text" class="form-control" id="skills" name="skills">
  </div>
  <div class="mb-3">
    <label for="CTC" class="form-label">CTC</label>
    <input type="text" class="form-control" id="CTC" name="CTC">
  </div>
  
  <button type="submit" class="btn btn-primary" name="jobpost">Submit</button>
</form>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company Name</th>
      <th scope="col">Position</th>
      <th scope="col">CTC</th>
    </tr>
  </thead>  
  <?php $sql="SELECT cname,position,CTC FROM job";
    $result = mysqli_query($conn,$sql);
    $i=0;
  if($result->num_rows > 0){

    while($row = $result->fetch_assoc()){
      echo "
    <tbody>
      <tr>
        <td>".++$i."</td>
        <td>".$row['cname']."</td>
        <td>".$row['position']."</td>
        <td>".$row['CTC']."</td>
      </tr>";
  }}
  else{
    echo "";
  }?>
  </tbody>
</table>

</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

</body>
</html>