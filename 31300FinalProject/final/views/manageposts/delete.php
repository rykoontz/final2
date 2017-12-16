<?php include('views/elements/header.php');?>

<div class="container">
	<div class="page-header">
   <h1>Delete Post</h1>
  </div>

  <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
<?php echo $message?>
    </div>
<?php }?>


</div>
<script>
  // View Blog Content
  $(document).ready(function() {
    $(".post-loader").click(function(event) {
      event.preventDefault();
      var el = $(this);
      $.ajax({
        url: el.attr('href'),
        type: "POST",
        success: function(data){
          el.parent().append(data);
          el.remove();
        }
      });
    });
  });




</script>
<?php include('views/elements/footer.php');?>
