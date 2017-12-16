<?php include('views/elements/header.php');?>

<div class="container">
	<div class="page-header">
   <h1>Manage Posts</h1>
  </div>

  <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
  <?php }?>

  <div class="row">
      <div class="span8">

        <a href="<?php echo BASE_URL;?>manageposts/add" class="btn btn-primary">Add Post</a>
          <a href="<?php echo BASE_URL; ?>categories" class="btn btn-primary">Manage Categories</a>
      </div>




  </div>

    <?php foreach ($posts as $p) { ?>
        <h3><?php echo $p['title']; ?></h3>
        <p class="post-meta-data"><?php echo $p['date'] = date('F j, Y', strtotime($p['date'])); ?></a></p>
        <a class="btn" href="<?php echo BASE_URL ?>blog/post/<?php echo $p['pID']; ?>">View Post</a>
        <a class="btn" href="<?php echo BASE_URL ?>manageposts/edit/<?php echo $p['pID']; ?>">Edit Post</a>
        <a class="btn" href="<?php echo BASE_URL ?>manageposts/delete/<?php echo $p['pID']; ?>">Delete Post</a>

    <?php } ?>

</div>
<?php include('views/elements/footer.php');?>
