<?php
session_start();
include 'db.php';

if (isset($_POST['submit'])) 
{
	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = mysqli_query($link, "SELECT * FROM user WHERE email='$email' AND password='$password'");
	if (mysqli_num_rows($query) == 0) 
	{
		echo "<script>alert('Email or Password wrong, Please re-login.');document.location.href='index.php'</script>";
	}else{
		$row = mysqli_fetch_assoc($query);
        $_SESSION['email']	= $row['email'];
		$_SESSION['role']  = $row['role'];
		$_SESSION['id'] = $row['id'];
		
		if($row['role'] == "admin")
		{	
			echo "<script>alert('Hi Administrator!');
            document.location.href='layouts/admin/admin_mainpage.php'
            </script>";
		}
		else
		{
			echo "<script>alert('Login Failed !!!');
            document.location.href='index.php'
            </script>";
		}
	}
}else{
	echo "<script>alert('Please fill the form !!!');
    document.location.href='index.php'
    </script>";
}

?>