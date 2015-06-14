<?php
	session_start();
	include(dirname(__FILE__)."/db/db_connection.php");
//	include(dirname(__FILE__)."/file_display.php");
	include(dirname(__FILE__)."/smarty.php");
	if (isset($_SESSION['username']) && !empty($_SESSION['username'])){
		doDB();
		$course_id = $_GET['course_id'];
		$sql_content = "select tr.*, tv.video_url, tv.video_name from
				(select r.*, t1.sec_name, t1.chap_name, t1.chap_num, t1.sec_num from reference r inner join
				(select cs.id, cs.sec_name, cc.chap_name, cc.chap_num, cs.sec_num from course_section cs inner join 
				(select * from course_chapter where 1=1 and course_id='".$course_id."')as cc
				where 1=1 and cs.chapter_id=cc.id) as t1 where 1=1 and r.section=t1.id) as tr
				inner join
				(select v.* from video v inner join
				(select cs.id from course_section cs inner join 
				(select * from course_chapter where 1=1 and course_id='".$course_id."')as cc
				where 1=1 and cs.chapter_id=cc.id) as t1 where 1=1 and v.section=t1.id) as tv
				where 1=1 and tr.section=tv.section";
		$res_content = $mysqli->query($sql_content);
		$course_content = $res_content->fetch_all(MYSQLI_ASSOC);
		$smarty->assign('course_content', $course_content);
//		$smarty->display('file/file_display.html');

//		$sql_course = "select * from course where 1=1 and id='".$course_id."'";
		$smarty->display('subject.html');










/*		$_SESSION['course_id'] = $_GET['course_id'];
		$course_id = $_GET['course_id'];
		doDB();
		$sql_course = "select * from course where 1=1 and id='".$course_id."'";
		$res_course = $mysqli->query($sql_course);
		$course = $res_course->fetch_array(MYSQLI_ASSOC);
		$course_name = $course['name'];



		echo "<a href='forum_subject_display.php?course_id=$course_id'>".$course_name."课程论坛</a><br>";
		echo "<a href='file_display.php'>".$course_name."资料</a>";*/

	}else{
		echo "未登录,点击<a href='loginschool.html'>返回</a>,重新登录";

	}

?>