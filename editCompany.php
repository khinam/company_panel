<?php
  session_start();
?>
<?php
  include 'header.php';
?>
<?php

  include 'common.php';
  $id = $_GET['edit'];
  $common = new Common();
  $ddata = $common->getAllRow("SELECT * FROM company WHERE comId = ?",[$id]);

    // include 'config.php';
    // $id = $_GET['edit'];
    // $data = $con->prepare("SELECT * FROM company WHERE comId = ? ");
    // $data->execute([$id]);
    // $ddata=$data->fetch(PDO::FETCH_ASSOC);
    // print_r($ddata);
    // echo $ddata;
    // exit();

?>

<?php include 'sidebar.php' ?>

<!-- top navigation -->
<?php include 'top_nav.php' ?>
<!-- /top navigation -->

<!-- page content -->
<div class="right_col" role="main">
  <div class="x_content">
    <form action="updateCompany.php?update=<?= $ddata['comId']; ?>" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
    <input type="hidden" name="id" value="<?= $ddata['comId']; ?>">  
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="">Company Name: <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
          <input type="text" id="name" name="name" required="required" class="form-control" value="<?= $ddata['company']; ?>">
        </div>
      </div>
      <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="">Email: <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
          <input type="email" id="email" name="email" required="required" class="form-control" value="<?= $ddata['email']; ?>">
        </div>
      </div>
      <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="">Address: <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
          <textarea type="text" class="form-control" name="address"><?= $ddata['address']; ?></textarea>
        </div>
      </div>
      <div class="item form-group mt-3">
        <div class="col-md-6 col-sm-6 offset-md-3">
          <a href="company.php" class="btn btn-secondary btn-sm" type="button">Cancel</a>
          <button type="submit" class="btn btn-primary btn-sm">Submit</button>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- /page content -->


<?php include 'footer.php'?>