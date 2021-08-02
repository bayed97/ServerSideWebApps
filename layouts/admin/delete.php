<?php

include '../../db.php';

if(isset($_GET['id'])){
	$sql ="DELETE FROM comments WHERE id =".$_GET['id'];
	if(mysqli_query($link, $sql)){
		echo "<script>
		alert('Data has been deleted!');
		location.href='admin_user_view.php'
		</script>";
	}else{
		echo "Error : ".mysqli_error($link);
	}
}

?>