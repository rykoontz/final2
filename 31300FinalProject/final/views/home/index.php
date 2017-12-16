<?php
include('views/elements/header.php');?>
<div class="container">
	<div class="page-header">
        <h1><?php echo $maintitle;?></h1>
        <div id="image">
            <img src="<?php echo BASE_URL ?>views/img/banner.jpg" width="100%" class="img  no-repeat center top" />
        </div>
  </div>
    <div class='span3'><h1>Latest News from <?php echo $title;?></h1><?php echo $data; ?>
    </div>

</div>
<?php include('views/elements/footer.php');?>
