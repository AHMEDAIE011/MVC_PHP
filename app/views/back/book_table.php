
<?php  require('header.php');  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Article Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Title</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">



        <table class="table">
                  <thead>
                    <tr>
                      <th>name</th>
                      <th>data</th>
                      <th>time</th>
                      <th>phone</th>
                      <th>message</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    


                    <?php foreach($data as $a ):?>
                    <tr>
                      <td><?= $a['f_name']; ?>  <?= $a['l_name']; ?></td>
                      <td><?= $a['data']; ?></td>
                      <td><?= $a['time']; ?></td>
                      <td><?= $a['phone']; ?></td>
                      <td><?= $a['Message']; ?></td>
                      <td><a href="delete/<?= $a['id']; ?>" class=" btn btn-danger">Delete</a></td>
                    </tr>
                    <?php endforeach;?>

                  </tbody>
                </table>
    

 
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<?php  require('footer.php');  ?>
