<?php
require 'config.php';

 if(isset($_POST['book'])) {
        $name=$_POST['name'];
        $department=$_POST['department'];
        $datee=$_POST['date'];
        $from=$_POST['from'];
        $to=$_POST['to'];
        
        $query="select * from book where fromm='$from' AND too='$to' AND date='$datee'";
        $sql=mysqli_query($con,$query);
	if(mysqli_num_rows($sql)>0){
		echo '<script type="text/javascript">alert("Someone has already booked in this period of time")</script>';
	}else{	
	echo "insert";			
         $qry = "INSERT INTO `book`( `name`, `department`,`date`,`fromm`,`too`) VALUES ('$name','$department', '$datee', '$from','$to')";
         $sql=mysqli_query($con,$query);
	if($sql){
		echo '<script type="text/javascript">alert("You have booked the projector")</script>';
	}
    }
  }		
?>

<!DOCTYPE html>
<html>
<head>
<title>Projector Booking</title>
</head>
<body>
	<h2>Projector Booking</h2>
	<form action="" method="POST">
		Name<input type="text" name="name"><br />
		Department<input type="text" name="department"><br />
		ChooseDate<input type="date" id="book" name="date" min="2018-01-01" max="2018-12-30"> <br />
         	ChooseFromTime<input type="text" id="book" name="from"><br />
		ChooseToTime<input type="text" id="book" name="to"><br />
		<input type="submit" name="book" value="BOOKING">
	</form>
</body>

</html>
