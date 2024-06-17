
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


        <form action="<?= PATH;?>/adminproduct/postupdate" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label>name</label>
                    <input type="text" name="name" value="<?= $data->name;?>" class="form-control" placeholder="Enter product name" required>
                  </div>
                  <div class="form-group">
                    <label>descrption</label>
                    <input type="text"  name="descrption" value="<?= $data->descrption;?>" class="form-control" placeholder="descrption" required>

                  </div>
                  <div class="form-group">
                    <label>price</label>
                    <input type="number" name="price" value="<?= $data->price;?>" class="form-control" placeholder="price" required>
                  </div>

                  <div class="form-group">
                    <label>Review</label>
                    <input type="number" name="review" value="<?= $data->review;?>" class="form-control" placeholder="review" required>
                  </div>
                  <label>category name</label>
                  <select class="form-select" name="category_id" aria-label="Default select example" required>
                              <option selected value='<?= $data->category_id;?>' >--Select any category--</option>
                                <?php foreach($category as $key=>$cat_data ):?>
                                  <?php ?>
                                    <option value='<?= $cat_data['id']; ?>'> <?= $cat_data['name']; ?> </option>
                                <?php endforeach; ?>
                        </select>
                  </div>
                  <div class="form-group">
                    <img src="<?= PATH.'img/'.$data->img;?>"width="100px"height="100px" alt="">
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
                  <input type="hidden" name="id" value="<?= $data->id;?>">
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">update</button>
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
