<?php
	session_start();
	include(dirname(__FILE__)."/smarty.php");
	include(dirname(__FILE__)."/db/db_connection.php");

	if (isset($_SESSION['username']) && !empty($_SESSION['username'])){
		$course_id = $_SESSION['course_id'];
		doDB();
		$sql_videos = "select * from video where 1=1 and course_id='".$course_id."'";
		$res_videos = $mysqli->query($sql_videos);


		if ($res_videos){
			$videos = $res_videos->fetch_all(MYSQLI_ASSOC);
			if (count($videos) == 0) {
				$videos = '';
			}
		}
		else{
			$videos = '';
		}	
		$smarty->assign('videos', $videos);



		$sql_references = "select * from reference where 1=1 and course_id='".$course_id."'";
		$res_references = $mysqli->query($sql_references);

		if ($res_references) {
			$references = $res_references->fetch_all(MYSQLI_ASSOC);
			if (count($references) == 0) {
				$references = '';
			}
		}else{
			$references = '';
		}	
		$smarty->assign('references', $references);

		$smarty->display('file/file_display.html');
	
	}else{
		echo "未登录,点击<a href='login.html'>返回</a>,重新登录";

	}







?>