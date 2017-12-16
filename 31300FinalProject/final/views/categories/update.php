
<?php include('views/elements/header.php');?>
<div class="container">
    <div class="page-header">
        <h1>Manage Category</h1>
        <ul class="nav nav-pills">
            <li>
                <a class="btn btn-success" href="<?php echo BASE_URL ?>manageposts/add">New Post</a>
            </li>

            <li>
                <a href="<?php echo BASE_URL ?>manageposts/">Manage Posts</a>
            </li>
            <li class="active">
                <a class="load-it" href="<?php echo BASE_URL; ?>categories/">Categories</a>
            </li>
        </ul>
    </div>
</div>
</header><!-- from header.php -->


<div class="container top body">
    <?php if($message): ?>
        <div class="alert alert-success">
            <button type="button" class="close" style="margin-top: 1em;" data-dismiss="alert">×</button>
            <?php echo $message?>
        </div>
    <?php endif; ?>
    <?php foreach($categories as $key=>$value): ?>
        <h3><?php echo $value; ?></h3>
        <a class='btn btn-warning' href="<?php echo BASE_URL ?>categories/edit/<?php echo $key; ?>">Edit Category</a>
        <a class='btn btn-warning' href="<?php echo BASE_URL ?>categories/delete/<?php echo $key; ?>">Delete Category</a>
        <hr>
    <?php endforeach; ?>
    <form class="btm-2-em" action="<?php echo BASE_URL ?>categories/add" method="POST">
        <label for="newCategory">New Category</label>
        <input type="text" name="newCategory" class="input-sm" id="newCategory">
        <input type="submit" class='btn btn-primary' value="Add">
    </form>
</div>
