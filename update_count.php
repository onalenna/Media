<?php
$con=mysqli_connect('localhost','root','','abs');
$type=$_POST['type'];
$id=$_POST['id'];
if($type=='like'){
	$sql="update abs set likes=likes+1 where textID=$id";
}

if($type=='view'){
	$sql="update abs set views=views+1 where textID=$id";
}

if($type=='dislike'){
	$sql="update abs set dislikes=dislikes+1 where textID=$id";
}
$res=mysqli_query($con,$sql);
?>