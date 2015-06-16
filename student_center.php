<?php
	session_start();
	include('db/db_connection.php');
	include(dirname(__FILE__)."/smarty.php");

	if (isset($_SESSION['username']) && !empty($_SESSION['username'])){
		doDB();
		$res_courses = $mysqli->query("call get_stu_classes('".$_SESSION['userid']."')");
		$courses = $res_courses->fetch_all(MYSQLI_ASSOC);
		$smarty->assign('courses', $courses);
		$smarty->display('stucenter.html');

	}else{
			echo "未登录,点击<a href='login.html'>返回</a>,重新登录";

	}
?>