<?php
	include "../model/pdo.php";
	include "../model/comment.php";
	session_start();
	if(isset($_SESSION['id'])){
		if(isset($_POST['binhluan'])&&$_POST['binhluan']){
				$idpro=$_POST['id'];
				$iduser=$_SESSION['id'];
				$name=$_SESSION['name'];
				$content=$_POST['content'];
				cmt($iduser,$idpro,$name,$content);
			}
		if(isset($_GET['id'])){
			$idpro=$_GET['id'];
		}
		if(isset($_POST['binhluan'])&&$_POST['binhluan']){
			$idpro=$_POST['id'];
		}
		$dsbl=showcmt($idpro);
		foreach ($dsbl as $cmt) {
			echo '<div style="padding-left:500px;" class="user_review_container d-flex flex-column flex-sm-row">
										<div class="user">
											<div class="user_pic"></div>
											<div class="user_rating">
												<ul class="star_rating">
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
												</ul>
											</div>
										</div>
										<div class="review">
											<!-- <div class="review_date">27 Aug 2016</div> -->
											<div class="user_name">'.$cmt['name'].'</div>
											<p>'.$cmt['content'].'.</p>
										</div>
									</div>';
		}	
	}else{
		 $idpro=$_GET['id'];
        $comment=showcmt($idpro);
		foreach ($comment as $cmt) {
			echo '<div style="padding-left:500px;" class="user_review_container d-flex flex-column flex-sm-row">
										<div class="user">
											<div class="user_pic"></div>
											<div class="user_rating">
												<ul class="star_rating">
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
												</ul>
											</div>
										</div>
										<div class="review">
											<!-- <div class="review_date">27 Aug 2016</div> -->
											<div class="user_name">'.$cmt['name'].'</div>
											<p>'.$cmt['content'].'.</p>
										</div>
									</div>';
		}	
		if(isset($_POST['binhluan'])&&$_POST['binhluan']){
			echo 'Ban can dang nhap de binh luan!!!';
		}
	}
	
	
?>

<link rel="stylesheet" type="text/css" href="../view/styles/single_styles.css">
<link rel="stylesheet" type="text/css" href="../view/styles/single_responsive.css">
<div style="text-align: center;" class="col-lg-6 add_review_col">
	<div class="add_review">
									
		<form action="bl.php" method="post">
			
			<input type="hidden" name="id" value="<?=$_GET['id']?>">
			<input type="hidden" name="name" value="<?=$_SESSION['name']?>">
			<textarea  type="comment" name="content" cols="30" rows="5"></textarea>
			<input type="submit" name="binhluan" value="add comment">
		</form>
									
	</div>
</div>
