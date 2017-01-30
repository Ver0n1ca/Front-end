<?php

//print_r($_POST);
if(@$_POST["usertype"]=="admin"){
	echo "<script language='javascript' type = 'text/javascript'>";
	echo "window.location.href = '../login-admin.html';";
	echo "</script>";
}
else{
	echo "<script language='javascript' type = 'text/javascript'>";
	echo "window.location.href = '../login-mem.html';";
	echo "</script>";
}

?>