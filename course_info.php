<?php
	session_start();
	include(dirname(__FILE__)."/db/db_connection.php");

	if (isset($_SESSION['username']) && !empty($_SESSION['username'])){
		$_SESSION['course_id'] = $_GET['course_id'];
		$course_id = $_GET['course_id'];
		doDB();
		$sql_course = "select * from course where 1=1 and id='".$course_id."'";
		$res_course = $mysqli->query($sql_course);
		$course = $res_course->fetch_array(MYSQLI_ASSOC);
		$course_name = $course['name'];



		echo "<a href='forum_subject_display.php?course_id=$course_id'>".$course_name."课程论坛</a><br>";
		echo "<a href='file_display.php'>".$course_name."资料</a>";

	}else{
		echo "未登录,点击<a href='login.html'>返回</a>,重新登录";

	}

?>