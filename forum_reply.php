<?php
	session_start();
	include(dirname(__FILE__)."/smarty.php");
	include(dirname(__FILE__)."/db/db_connection.php");

	if (isset($_SESSION['username']) && !empty($_SESSION['username'])){
		doDB();

		$comment_id = $_SESSION['comment_id'];
		$course_id = $_SESSION['course_id'];
		$content = $_POST['content'];
		$critic_type = $_SESSION['usertype'];	

		if ($comment_id == 0) {
	/*		$sql_type = "select * from subject where 1=1 and id='".$_SESSION['subject_id']."'";
			$res_type = $mysqli->query($sql_type);
			$type = $res_type->fetch_array(MYSQLI_ASSOC);*/

			$sql_new = "insert into comment(subject_id, comment_parent, isroot, isleaf, critic, content, critic_type, course_id, critic_parent_type, comment_time) 
						values('".$_SESSION['subject_id']."', 0, 1, 1, '".$_SESSION['userid']."', 
						'".$content."', '".$critic_type."', '".$course_id."', 'student', now())";
			$res_new = $mysqli->query($sql_new);
			$sql_num = "select * from comment where 1=1 and subject_id='".$_SESSION['subject_id']."' order by comment_time desc";
			$res_num = $mysqli->query($sql_num);
			$comment_count = $res_num->num_rows;
			$comments = $res_num->fetch_all(MYSQLI_ASSOC);
			$comment_time =  $comments[0]['comment_time'];


			$sql_count_update = "update subject s set s.comment_count='".$comment_count."' ,s.date_modified='".$comment_time."' where 1=1 and id='".$_SESSION['subject_id']."'";
			echo $sql_count_update;
			$res_count_update = $mysqli->query($sql_count_update);
			echo $res_count_update;
			if ($res_count_update) {
				header("Location: forum_comment_display.php?subject_id={$_SESSION['subject_id']}&course_id={$course_id}");
			}


/*			if ($res_new) {

				header("Location: forum_comment_display.php?subject_id={$_SESSION['subject_id']}&course_id={$course_id}");
			}*/	
		}else{
				$sql_parent = "select * from comment where 1=1 and id='".$comment_id."'";
	//			echo $sql_parent;
				$res_parent = $mysqli->query($sql_parent);
				$parent = $res_parent->fetch_array(MYSQLI_ASSOC);
				$subject_id = $parent['subject_id'];
			//	echo $subject_id;
				$sql_update = "update comment c set c.isleaf=0 where id='".$comment_id."'";
				$res_update = $mysqli->query($sql_update);
				if ($res_update) {
					$sql_new = "insert into comment(subject_id, comment_parent, isroot, isleaf, critic, content, critic_type, course_id, critic_parent_type, comment_time) 
								values('".$parent['subject_id']."', '".$parent['id']."', 0, 1, '".$_SESSION['userid']."', 
								'".$content."', '".$critic_type."', '".$course_id."', '".$parent['critic_type']."', now())";
					$res_new = $mysqli->query($sql_new);


					if ($res_new) {
						$sql_num = "select * from comment where 1=1 and subject_id='".$subject_id."' order by comment_time desc";
						$res_num = $mysqli->query($sql_num);
						$comment_count =$res_num->num_rows;
						$comments = $res_num->fetch_all(MYSQLI_ASSOC);
						$comment_time =  $comments[0]['comment_time'];

						$sql_count_update = "update subject s set s.comment_count='".$comment_count."', s.date_modified='".$comment_time."' where 1=1 and id='".$subject_id."'";
						echo $sql_count_update;
						$res_count_update = $mysqli->query($sql_count_update);
						echo $res_count_update;
						if ($res_count_update) {
							header("Location: forum_comment_display.php?subject_id={$subject_id}&course_id={$course_id}");
						}
					}
				}
	/*			if ($parent['comment_parent'] == 0) {
					$sql_update = "update comment c set c.isleaf=0 where id='".$comment_id."'";
					echo $sql_update;
					$res_update = $mysqli->query($sql_update);
					if ($res_update) {
						$sql_new = "insert into comment(subject_id, comment_parent, isroot, isleaf, critic, content, critic_type, course_id, critic_parent_type, comment_time) 
									values('".$parent['subject_id']."', '".$parent['id']."', 0, 1, '".$_SESSION['userid']."', 
									'".$content."', '".$critic_type."', '".$course_id."', '".$parent['critic_type']."', now())";
						$res_new = $mysqli->query($sql_new);
						if ($res_new) {
							header("Location: forum_comment_display.php?subject_id={$subject_id}&course_id={$course_id}");
						}
					}
				}*/
		}
	}else{
		echo "未登录,点击<a href='login.html'>返回</a>,重新登录";

	}


?>