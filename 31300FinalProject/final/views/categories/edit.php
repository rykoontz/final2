<?php include('views/elements/header.php');?>

    <div class="container">
        <div class="page-header">
            <h1>Edit Category</h1>
        </div>

        <?php if($message){?>
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <?php echo $message?>
            </div>
        <?php }?>

        <div class="row">
            <div class="span8">
                <form action="<?php echo BASE_URL?>categories/<?php echo $task?>" method="post" onsubmit="editor.post()">
                    <label>Name</label>
<!--                    <input type="text" class="span6" name="title" value="--><?php //echo $category?><!--" required="title">-->
<!--                    <input type="text" class="span6" name="title" value="--><?php //echo $category?><!--" required="title">-->
                    <input type="hidden" class="span6" name="categoryID" value="<?php echo $categoryID?>" required="title">
                    <input type="text" class="span6" name="categoryname" value="<?php echo $name?>" required="title">
                    <button id="submit" type="submit" class="btn btn-primary">Submit</button>
                </form>


            </div>
        </div>
    </div>
<?php include('views/elements/footer.php');?>
