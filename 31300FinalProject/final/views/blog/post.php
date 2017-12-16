
<?php include('views/elements/header.php');?>
<?php
if( is_array($post) ) {
    extract($post);

    // Pulling out all the variables from the $post array so we can access them easily
    // extract($post); // $post: found in post model. check getPost()
}?>


	<div class="container page-header">
	</div>

	<div class="container body">

        <h1><?php echo $title; ?></h1>
        <h4>Posted: <?php echo $date; ?> by: <?php echo $first_name; ?> <?php echo $last_name; ?></h4>
		<div class="blog-post">
			<!-- Main Content -->
			<h2 class="news"><?php echo $titls ?></h2>
			<p class="blog-p"><?php echo $content; ?></p>
		</div>

        <h4>Comments</h4>

		<?php // Login or Register to post a comment ?>
		<?php if (!$u->isRegistered() && !$u->isAdmin()): ?>
			<h4><a href="<?php echo BASE_URL; ?>login" class="primary">Login</a> or <a href="<?php echo BASE_URL; ?>register">Register</a> to post comment!</h4>
		<?php endif; ?>

		<?php // Displaying comments ?>
		<?php foreach ($comments as $comment): ?>
			<?php if ($u->isRegistered()): ?>

				<div class="sweet">
					<?php echo $comment['commentText']; ?><br>
                    Posted <?php echo $comment['date']; ?> By: <?php echo $comment['first_name']; ?> <?php echo $comment['last_name']; ?>
                    <br><br>
					<?php if ($u->isAdmin()): ?>
					<form method="post">
						<input type="hidden" name="commentID" value="<?php echo $comment['commentID']; ?>" />
						<input class="comment-delete btn btn-danger" type="submit" name="action" value="Delete" />
					</form>
					<?php endif; ?>
				</div>
			<?php endif; ?>
		<?php endforeach; ?>

		<?php // Adding comments ?>
		<?php if ($u->isRegistered()): ?>
			<div class="commentage">
				<form method="post">
					<input type="hidden" name="postID" value="<?php echo $pID; ?>" />
					<input type="hidden" name="uID" value="<?php echo $u->uID; ?>" />
                    <?php // set timezone
                    date_default_timezone_set('America/Indiana/Indianapolis');?>
                    <input name="date" id="date" size="16" type="hidden" value="<?php echo $date = date('Y-m-d H:i:s'); ?>">
					<label for="comment">Comment</label>
					<textarea class="form-control" rows="3" id="comment" name="commentText"></textarea>
					<input class="btn btn-success" type="submit" name="action" value="Add Comment">
				</form>
			</div>
		<?php endif; ?>

	</div><!-- End container -->
<?php include('views/elements/footer.php');?>
