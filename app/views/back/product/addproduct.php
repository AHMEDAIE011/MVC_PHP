
<?php  require('header.php');  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add categore Page</h1>
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

          <?php if ($valid ) :?>
            <div class="row">
            <?php foreach($valid as $a ):?>
                <div class="alert alert-danger col-sm-4  offset-1" role="alert">
                <p class="alert-heading"><?php print_r( $a) ?> </p>
              </div>
              <?php endforeach;?>
            </div>
          <?php endif;?>
          
      
        

        <form action="postadd" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label>name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter category name">

                  </div>
                  <div class="form-group">
                    <label>descrption</label>
                    <textarea name="descrption" class="form-control" cols="30" rows="10" placeholder="descrption"></textarea>
                  </div>
                  <div class="form-group">
                    <label>price</label>
                    <input type="number"  name="price" class="form-control" placeholder="price  ">
                  </div>
                  
                  <div class="form-group">
                    <label>price</label>
                    <input type="number" value="0"  name="review" class="form-control" placeholder="Review  ">
                  </div>

                    <div class="form-group">
                        <label >category <span class="text-danger">*</span></label>
                        <select class="form-select" name="category_id" aria-label="Default select example">
                              <option selected>--Select any category--</option>
                                <?php foreach($category as $key=>$cat_data ):?>
                                    <option value='<?= $cat_data['id']; ?>'> <?= $cat_data['name']; ?> </option>
                                <?php endforeach; ?>
                        </select>
                    </div>

                  <div class="form-group">
                    <label for="exampleInputFile">img</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file"  name="img" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">save</button>
                </div>
              </form>


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
