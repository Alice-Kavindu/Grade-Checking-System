<?php
   function grade_func(int $marks){
    $grade = $marks;

    if ($marks >= 80 ) {
       $grade ='A';
    }
    else if ($marks >= 75 ) {
       $grade = 'A-';
    }
    
    else if ($marks >= 70 ) {
       $grade = 'B+';
    }
    
    else if ($marks >= 65 ) {
       $grade = 'B';
    }
    
    else if ($marks >= 60 ) {
       $grade = 'B-';
    }
    
    else if ($marks >= 55 ) {
       $grade = 'C+';
    }
    
    else if ($marks >= 50 ) {
       $grade = 'C';
    }

    else if ($marks >= 45 ) {
       $grade = 'C-';
    }
    
    else if ($marks >= 40 ) {
       $grade = 'D+';
    }
    
    else if ($marks >= 35 ) {
       $grade = 'D';
    }
    
    else if ($marks >= 30 ) {
       $grade = 'D-';
    }
    
    else if ($marks <= 29) {
       $grade = 'E';
    }
    

   return $grade;
}
   
   if (isset($_POST['marks_btn'])) {
     $marks= $_POST['marks'];

    }

    
?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>
<body>
  
<div class="container">
  	<div class="row">
  		<div class="col-md-2"></div>
  		<div class="col-md-8">
  		  <h4 style="text-align: center; margin-top: 20px; margin-bottom: 20px; font-family: Georgia, serif; color: #000; font-size: 25px;">Online Student Grade Checking System</h4>
  			<form method="POST" action="<?php echo($_SERVER['PHP_SELF'])?>">
  				<input type="number" name="marks" class="form-control" required="" placeholder="enter your points"><br>
  				  <div class="container">
  					<div class="row">
  						<div class="col-md-6">
  				          <button type="submit" name="marks_btn" class="btn btn-primary"  style="width: 100%;">CHECK GRADE</button>
  				        </div>
  				       <div class="col-md-6">
  				       	<a href="http://localhost/grading/index.php" class="btn btn-danger" style="width: 100%; margin-top: 20px;">CHANGE MARKS</a>
  				       </div>
  			        </div>
  		          </div>
                 
                 <?php 
                   
                     if (isset($_POST['marks_btn'])) {
                     

                 ?>
  		          <h5 style="margin-top: 20px;">Your Grade is: <?php echo grade_func($marks)?></h5>
  		          <h5 style="margin-top: 20px;">Your points are: <?php echo $marks?></h5>

  		        <?php 
                   
                   }
                   
  		        ?>
  		    <h4 style="text-align: center; margin-top: 20px; margin-bottom: 20px; font-family: Georgia, serif; color: #000; font-size: 20px;">Thank you for using this application.</h4>
  			</form>
  		</div>
  		<div class="col-md-2"></div>
  	</div>
  </div>
</body>
</html>