<?php  require("layout/header.php")   ?>


    <section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url(<?= PATH; ?>/site/images/bg_3.jpg);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Our Menu</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Menu</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="ftco-intro">
    	<div class="container-wrap">
    		<div class="wrap d-md-flex align-items-xl-end">
	    		<div class="info">
	    			<div class="row no-gutters">
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-phone"></span></div>
	    					<div class="text">
	    						<h3>000 (123) 456 7890</h3>
	    						<p>A small river named Duden flows by their place and supplies.</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-my_location"></span></div>
	    					<div class="text">
	    						<h3>198 West 21th Street</h3>
	    						<p>	203 Fake St. Mountain View, San Francisco, California, USA</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-clock-o"></span></div>
	    					<div class="text">
	    						<h3>Open Monday-Friday</h3>
	    						<p>8:00am - 9:00pm</p>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="book p-4">
	    			<h3>Book a Table</h3>
	    			<form action="#" class="appointment-form">
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" class="form-control" placeholder="First Name">
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input type="text" class="form-control" placeholder="Last Name">
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<div class="input-wrap">
		            		<div class="icon"><span class="ion-md-calendar"></span></div>
		            		<input type="text" class="form-control appointment_date" placeholder="Date">
	            		</div>
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<div class="input-wrap">
		            		<div class="icon"><span class="ion-ios-clock"></span></div>
		            		<input type="text" class="form-control appointment_time" placeholder="Time">
	            		</div>
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input type="text" class="form-control" placeholder="Phone">
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
	    					<div class="form-group">
		              <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
		            </div>
		            <div class="form-group ml-md-4">
		              <input type="submit" value="Appointment" class="btn btn-white py-3 px-4">
		            </div>
	    				</div>
	    			</form>
	    		</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
        <div class="row">

		<?php foreach ($All_category as $data) :?>
		<?php $All_product = $this->product->GetAllProductsIN_categoryID($data['id']);?>

        	<div class="col-md-6 mb-5 pb-3">
        		<h3 class="mb-5 heading-pricing ftco-animate"><?=$data['name']?></h3>
				<?php foreach ($All_product as $data) :?>

        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(<?= PATH; ?>/site/images/<?=$data['img']?>);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span><?=$data['name']?></span></h3>
	        				<span class="price">$<?=$data['price']?></span>
	        			</div>
	        			<div class="d-block">
	        				<p><?=$data['descrption']?></p>
	        			</div>
        			</div>
        		</div>
				<?php endforeach;?>

        	</div>
			<?php endforeach;?>


        </div>
    	</div>
    </section>

	<section class="ftco-menu mb-5 pb-5">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Discover</span>
            <h2 class="mb-4">Our Products</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>

    		<div class="row d-md-flex">
	    		<div class="col-lg-12 ftco-animate p-md-5">
		    		<div class="row">
		          <div class="col-md-12 nav-link-wrap mb-5">
		            <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		              <a class="nav-link active "  id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true"><?= $category_1->name ;?></a>

		              <a class="nav-link " id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false"><?= $category_2->name; ?></a>
		              <a class="nav-link " id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false"><?= $category_3->name; ?></a>
		              <a class="nav-link " id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false"><?= $category_4->name; ?></a>

		            </div>
		          </div>
		          <div class="col-md-12 d-flex align-items-center">
		            
		            <div class="tab-content ftco-animate" id="v-pills-tabContent">

		              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
		              	<div class="row">
						<?php foreach ($all_cat_1 as $data) :?>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image:url(<?= PATH; ?>/site/images/<?= $data['img']; ?>);"></a>
		              				<div class="text">
		              					<h3><a href="#"><?= $data['name']; ?></a></h3>
		              					<p><?= $data['descrption']; ?></p>
		              					<p class="price"><span><?= $data['price']; ?></span></p>
		              				</div>
		              			</div>
		              		</div>
						<?php endforeach;?>

		              	</div>
		              </div>

					  
		              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
		                <div class="row">
						<?php foreach ($all_cat_2 as $data) :?>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image:url(<?= PATH; ?>/site/images/<?= $data['img']; ?>);"></a>
		              				<div class="text">
		              					<h3><a href="#"><?= $data['name']; ?></a></h3>
		              					<p><?= $data['descrption']; ?></p>
		              					<p class="price"><span><?= $data['price']; ?></span></p>
		              				</div>
		              			</div>
		              		</div>
						<?php endforeach;?>
		              	</div>
		              </div>


		              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
		                <div class="row">
						<?php foreach ($all_cat_3 as $data) :?>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image:url(<?= PATH; ?>/site/images/<?= $data['img']; ?>);"></a>
		              				<div class="text">
		              					<h3><a href="#"><?= $data['name']; ?></a></h3>
		              					<p><?= $data['descrption']; ?></p>
		              					<p class="price"><span><?= $data['price']; ?></span></p>
		              				</div>
		              			</div>
		              		</div>
						<?php endforeach;?>
		              	</div>
		              </div>

					  
		              <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
		                <div class="row">
						<?php foreach ($all_cat_4 as $data) :?>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image:url(<?= PATH; ?>/site/images/<?= $data['img']; ?>);"></a>
		              				<div class="text">
		              					<h3><a href="#"><?= $data['name']; ?></a></h3>
		              					<p><?= $data['descrption']; ?></p>
		              					<p class="price"><span><?= $data['price']; ?></span></p>
		              				</div>
		              			</div>
		              		</div>
						<?php endforeach;?>
		              	</div>
		              </div>

		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
    	</div>
    </section>

<?php  require("layout/footer.php")   ?>
