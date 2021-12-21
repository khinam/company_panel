<?php
  include 'common.php';
?>
<?php
  $data = new Common();
  //$ddata = $data->getAll("SELECT * FROM company");
?>
<?php include 'header.php'?>

<?php include 'sidebar.php' ?>

<!-- top navigation -->
<?php include 'top_nav.php' ?>
<!-- /top navigation -->

<?php
    require_once('pagination/pagination_start.php');

      $table = 'company'; 
      $query = $data->getAll("SELECT * FROM $table");
      $result_count = count($query);
      $total_no_of_pages = ceil($result_count / $total_records_per_page);
      $second_last = $total_no_of_pages - 1;  
      $ddata = $data->getAll("SELECT * FROM $table LIMIT $offset, $total_records_per_page");
?>

<!-- page content -->
<div class="right_col" role="main">
  <a href="add_company.php" class="btn btn-success btn-sm mb-3">Add New Company</a>
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach($ddata as $row) :?>
        <tr>
        <td><?= $row['company']; ?></td>
        <td><?= $row['email']; ?></td>
        <td><?= $row['address']; ?></td>
        <td>
          <a href="editCompany.php?edit=<?= $row['comId']?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
          <a href="deleteCompany.php?delete=<?= $row['comId']?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
        </td>
        </tr>
        <?php endforeach;?>

      <!-- <tr>
        <td>Staff One</td>
        <td>staff1@gmail.com</td>
        <td>yangon</td>
        <td>
          <a href="" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
          <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
        </td>
      </tr> -->
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