<?php
  session_start();
?>
<?php
  include 'header.php';
?>
<?php
  //select option for company
  include 'common.php';

  $comem = new Common();
  $comdata = $comem->getAll("SELECT * FROM company");

  $id = $_GET['edit'];
  $em= $comem->getAllRow("SELECT * FROM employee WHERE emId = ? ", [$id]);

?>

<?php include 'sidebar.php' ?>

<!-- top navigation -->
<?php include 'top_nav.php' ?>
<!-- /top navigation -->

<!-- page content -->
<div class="right_col" role="main">
  <div class="x_content">
    <form action="updateEmployee.php?update=<?= $em['emId']; ?>" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
    <input type="hidden" name="id" value="<?= $em['emId']; ?>">  
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">First Name: <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
          <input type="text" id="name" name="st_name" required="required" class="form-control" value="<?= $em['firstName']?>">
        </div>
      </div>
      <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="">Last Name: <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
          <input type="text" id="" name="se_name" required="required" class="form-control" value="<?= $em['lastName']; ?>">
        </div>
      </div>
      <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="">StaffID: <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
          <input type="text" id="" name="staff" required="required" class="form-control" value="<?= $em['staffID']?>">
        </div>
      </div>
      <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Email: <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
          <input type="email" id="email" name="email" required="required" class="form-control" value="<?= $em['email']?>">
        </div>
      </div>
      <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="">Phone: <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
          <input type="text" id="email" name="phone" required="required" class="form-control" value="<?= $em['phone']; ?>">
        </div>
      </div>
      <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="">Company: <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
          <select class="form-control" name="com_category">
            <option value=""></option>
            <?php foreach($comdata as $com):?>
            <option value="<?= $com['comId']; ?>"<?php if($com['comId'] == $em['companyId']) echo "selected"; ?>><?= $com['company']; ?></option>
            <?php endforeach;?>
          </select>
        </div>
      </div>
      <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="">Department: <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
          <input type="text" id="email" name="depart" required="required" class="form-control" value="<?= $em['department']; ?>">
        </div>
      </div>
      <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="">Password: <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
          <input type="password" id="" name="password" required="required" class="form-control" value="<?= $em['password']; ?>">
        </div>
      </div>
      <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="">Address: <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
          <textarea type="text" class="form-control" name="address"><?= $em['address']; ?></textarea>
        </div>
      </div>
      <div class="item form-group mt-3">
        <div class="col-md-6 col-sm-6 offset-md-3">
          <a href="employee.php" class="btn btn-secondary btn-sm" type="button">Cancel</a>
          <button type="submit" class="btn btn-primary btn-sm">Submit</button>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- /page content -->


<?php include 'footer.php'?>