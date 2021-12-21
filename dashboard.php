<?php
  include 'common.php';
  $data = new Common();

  // $url = $_SERVER['REQUEST_URI'];
  // echo $url;
  // exit();
  //$datas = $data->getAll("SELECT * FROM employee");
?>
<?php include 'header.php'?>

<?php include 'sidebar.php' ?>

<!-- top navigation -->
<?php include 'top_nav.php' ?>
<!-- ================================== pagination ====================== -->
<?php
    require_once('pagination/pagination_start.php');

      $table = 'employee'; 
      $query = $data->getAll("SELECT * FROM $table");
      $result_count = count($query);
      // print_r('<pre>');
      // print_r($result_count);
      // exit();
      $total_no_of_pages = ceil($result_count / $total_records_per_page);
      $second_last = $total_no_of_pages - 1;  
      $datas = $data->getAll("SELECT * FROM $table LIMIT $offset, $total_records_per_page");
?>
<!-- /top navigation -->

<!-- page content -->
<div class="right_col" role="main">
    <div class="exportSearch">
        <div class="">
          <a href="export-csv.php" class="btn btn-success btn-sm">Export CSV</a>
        </div>
        <form action="" method="post">
          <div class="input-group">
              <input type="text" class="form-control" name="keyword" placeholder="Search for ..">
              <div class="input-group-append">
              <button class="btn btn-secondary" type="submit" name="search">
                  <i class="fa fa-search"></i>
              </button>
              </div>
          </div>
        </form>
    </div>
  <?php
    if(isset($_POST['search'])) { 

      $keyword = $_POST['keyword'];
      $data = new Common();
      $datas = $data->getAll("SELECT * FROM employee WHERE staffID LIKE '%$keyword%' OR concat(firstName ,' ', lastName) LIKE '%$keyword%' OR email LIKE '%$keyword%' OR phone LIKE '%$keyword%' ");
      // print_r('<pre>');
      // print_r($datas);
      // die();
  ?>

    <table class="table">
        <thead>
          <tr>
            <th>StaffID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Company</th>
            <th>Department</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          foreach($datas as $data):
            $comdta = new Common();
            $comname = $comdta->getAllRow("SELECT company FROM company WHERE comId = ? ", [$data['companyId']]);
          ?>
          <tr>
            <td><?= $data['staffID']; ?></td>
            <td><?= $data['firstName'].' '.$data['lastName']; ?></td>
            <td><?= $data['email']; ?></td>
            <td>
              <?= $comname['company']; ?>
            </td>
            <td><?= $data['department'];?></td>
            <td><?= $data['phone']; ?></td>
            <td><?= $data['address']?></td>
            <td>
              <a href="editDashboard.php?edit=<?= $data['emId']; ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
              <a href="deleteDashboard.php?delete=<?= $data['emId']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
            </td>
          </tr>
          <?php endforeach;?>
        </tbody>
      </table>

  <?php } else { ?>

  <table class="table">
    <thead>
      <tr>
        <th>StaffID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Company</th>
        <th>Department</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $user_arr = array();
      foreach($datas as $data):
        $comdta = new Common();
        $comname = $comdta->getAllRow("SELECT company FROM company WHERE comId = ? ", [$data['companyId']]);
       ?>
      <tr>
        <td><?= $data['staffID']; ?></td>
        <td><?= $data['firstName'].' '.$data['lastName']; ?></td>
        <td><?= $data['email']; ?></td>
        <td>
          <?= $comname['company']; ?>
        </td>
        <td><?= $data['department'];?></td>
        <td><?= $data['phone']; ?></td>
        <td><?= $data['address']; ?></td>
        <td>
          <a href="editDashboard.php?edit=<?= $data['emId']; ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
          <a href="deleteDashboard.php?delete=<?= $data['emId']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
        </td>
      </tr>
      <?php endforeach;?>
    </tbody>
  </table>
  <?php
    $serialize_user = serialize($user_arr);
  ?>
  <textarea name="export_data" id="" style="display:none;"><?= $serialize_user; ?></textarea>
  <ul class="pagination">
      <?php
          include_once('pagination/pagination.php');
      ?>
  </ul>
  <?php } ?>
</div>
<!-- /page content -->


<?php include 'footer.php'?>