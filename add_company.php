<?php include 'header.php'?>

<?php include 'sidebar.php' ?>

<!-- top navigation -->
<?php include 'top_nav.php' ?>
<!-- /top navigation -->

<!-- page content -->
<div class="right_col" role="main">
  <div class="x_content">
    <form action="addComAction.php" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
      <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="">Company Name: <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
          <input type="text" id="name" name="name" required="required" class="form-control">
        </div>
      </div>
      <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="">Email: <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
          <input type="email" id="email" name="email" required="required" class="form-control">
        </div>
      </div>
      <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="">Address: <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
          <textarea type="text" class="form-control" name="address"></textarea>
        </div>
      </div>
      <div class="item form-group mt-3">
        <div class="col-md-6 col-sm-6 offset-md-3">
          <a href="index.php" class="btn btn-secondary btn-sm" type="button">Cancel</a>
          <button type="submit" class="btn btn-primary btn-sm">Submit</button>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- /page content -->


<?php include 'footer.php'?>