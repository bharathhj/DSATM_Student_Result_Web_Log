<html>
<head>
       <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>DSATM</title>
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
       <link rel="stylesheet" href="resources/css/style.css">
 


   
    
</head>


    
<body>
    
    
     <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
        <a class="navbar-brand" href="index.html"><img id="dsatm" src="https://www.dsatm.edu.in/templates/dsce/images/dsatm_logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <%= typeof page !== 'undefined' && page === 'firms' ? 'active' : '' %>">
                    <a href="/firms" class="nav-link"></a>
                </li>
            </ul>
        </div>
    </nav>

    <?php

require_once 'text.php';
session_start ();
$x  = $_SESSION['usn']; 
// $usn = $_POST['usn'];


if($conn){
    
    $sql = "SELECT * FROM result WHERE usn='$x'";
    $result = mysqli_query($conn, $sql);

?>


<div class="student-info" >
    <h1> STUDENT RESULT </h1>
    <br>
    <br>
   <?php if(mysqli_num_rows($result)==0){?>
    <h5 class="alert alert-danger" style="width:700px;">
  <?php echo "RESULT OF THE STUDENT NOT FOUND " ; ?> </h5>

<?php }
    while($row = mysqli_fetch_assoc($result)){
      
      $usn = $row["usn"];
      $name = $row["name"];
      $sem = $row["sem"];
      $SGPA = $row["SGPA"];
  



    ?>

    <table style="width:65%;">
  <tr>
    <td><span class="sisub-headings"><b>USN</b></span></td>
    <td > <?php echo($usn);?></td>
  </tr>
  <tr>
    <td><span class="sisub-headings"><b>Name</b></span></td>
    <td><?php echo($name);?></td>
    
  </tr>
  <tr>
    <td><span class="sisub-headings"><b>Semester</b></span></td>
    <td><?php echo($sem);?></td>
    
  </tr>
  <tr>
    <td><span class="sisub-headings"><b>SGPA</b></span></td>
    <td><?php echo($SGPA);?></td>
    
  </tr>
</table>

<?php 
    }
  }
?>

<?php

require_once 'text.php';
session_start ();
$x  = $_SESSION['usn']; 
// $usn = $_POST['usn'];


if($conn){
    
    $sql1 = "SELECT * FROM reminders WHERE usn='$x'";
    $result1 = mysqli_query($conn, $sql1);


    while($row1 = mysqli_fetch_assoc($result1)){
      
      $usn2 = $row1["usn"];
      $message = $row1["message"];
    }

  }

?>
<br>
<h5 class="alert alert-primary" style="width:550px; height:75px;">
  <?php echo $message ; ?> </h5>

        <br>
        <br>
        <a href="result.php" ><button type="button" class="btn btn-danger button-custom-">Result</button></a>
        <a href="cocurricular.php" ><button type="button" class="btn btn-primary button-custom-">Cocurricular</button></a>
        <a href="extracurricular.php" ><button type="button" class="btn btn-primary button-custom-">Extra-Cocurricular</button></a>
        



</div>

</body>
    
<footer id="footer">
    <div class="container">
        <p class="text-muted"><a style="text-decoration: none;color: rgba(237,237,237,0.54);" href="https://www.dsatm.edu.in/index.php/maps-directions">Maps &amp; Direction</a>&nbsp;&nbsp;|&nbsp;&nbsp;&copy; DSATM P I 2020&nbsp;&nbsp;|&nbsp;&nbsp;<a style="text-decoration: none;color: rgba(237,237,237,0.54);;" href="https://www.dsatm.edu.in/index.php/terms-of-use">Terms of Use</a></p>
    </div>
</footer>
<!-- Bootstrap and its dependencies -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- Custom JS for search feature -->
<script src="/scripts/search.js" async defer></script>


</html>