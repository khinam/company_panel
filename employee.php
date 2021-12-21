<?php
  include 'common.php';
  $data = new Common();
  //$datas = $data->getAll("SELECT * FROM employee");

  // print_r($datas);
  // exit();
?>
<?php include 'header.php'?>

<?php include 'sidebar.php' ?>

<!-- top navigation -->
<?php include 'top_nav.php' ?>
<!-- /top navigation -->

<?php
    require_once('pagination/pagination_start.php');

      $table = 'employee'; 
      $query = $data->getAll("SELECT * FROM $table");
      $result_count = count($query);
      $total_no_of_pages = ceil($result_count / $total_records_per_page);
      $second_last = $total_no_of_pages - 1;  
      $datas = $data->getAll("SELECT * FROM $table LIMIT $offset, $total_records_per_page");
?>

<!-- page content -->
<div class="right_col" role="main">
  <a href="add_employee.php" class="btn btn-success btn-sm mb-3">Add New Employee</a>
  <table class="table">
    <thead>
      <tr>
        <th>StaffID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Company</th>
        <th>Department</th>
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
        <td><?= $data['address']?></td>
        <td>
          <a href="editEmployee.php?edit=<?= $data['emId']; ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
          <a href="deleteEmployee.php?delete=<?= $data['emId']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
        </td>
      </tr>
      <?php endforeach;?>
    </tbody>
  </table>
  <ul class="pagination">
      <?php
          include_once('pagination/pagination.php');
      ?>
  </ul>
</div>
<!-- /page content -->


<?php include 'footer.php'?>