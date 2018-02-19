<?php
     require 'config.php';
     
     if(isset($_POST['register'])) {
        $name=$_POST['name'];
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        
        $query="select * from tbl where user_name='$username'";
				$sql=mysqli_query($con,$query);
				if(mysqli_num_rows($sql)>0){
					echo '<script type="text/javascript">alert("user already exists ....try another username")</script>';
					
				}else
				{
					 $qry = "INSERT INTO `tbl` ( `user_name`, `name`,`email`, `password`) VALUES ('$username','$name', '$email', '$password')";
					 $sql=mysqli_query($con,$qry);
					if($sql){
						echo '<script type="text/javascript">alert("user registered ...go to login page")</script>';
					}
					else{
						echo '<script type="text/javascript">alert("error")</script>';
					}
				}
         
		   }
?>

<!DOCTYPE html>
<html>
    <head>
            <title>Registration</title>
           
    </head>   
    <body>
        <div class="header">
           <h1>SMART CLASS BOOKING</h1>
               <a href="" > REGISTER </a>
               <a href="login.php" > LOGIN </a>
        </div>
        <div class="content">                
                <form class="form" method="post" action="">
		        Name<input type="text" name="name"><br />
		        UserName<input type="text" name="username"><br />
		        Email<input type="text" name="email"><br />
		        Password<input type="password" name="password"><br />
		        <input type="submit" name="register" value="REGISTER">
                 </form>
       </div> 
    </body>  
</html>


