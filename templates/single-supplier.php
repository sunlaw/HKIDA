<!-- Data -->
<?php 
	$partnerArray = array(
        array("name" => 'Allen Yau','category'=>'Surfaces','logo'=>'./images/lobo-b.png','thumbnail'=>''),
        array("name" => 'Mokum','category'=>'Lighting','logo'=>'./images/logo-upgrade.png','thumbnail'=>''),
        array("name" => 'Seneca Textiles','category'=>'Outdoor','logo'=>'./images/logo-mg.png','thumbnail'=>''),
        array("name" => 'Artisan Flooring','category'=>'Lighting and outdoor','logo'=>'','thumbnail'=>''),
        array("name" => 'Mokum','category'=>'Surface','logo'=>'','thumbnail'=>''),
        array("name" => 'Seneca Textiles','category'=>'Outdoor','logo'=>'','thumbnail'=>''),
    );
    $thumbnailArray = array("LD17910_P-300x225.jpg","LD20379_P-300x225.jpg","LD22654_P-300x225.jpg","LD22960_P-300x225.jpg","LD23584_P-300x225.jpg");
    $galleryArray = array("LD17910_P-300x225.jpg","LD20379_P-300x225.jpg","LD22654_P-300x225.jpg","LD22960_P-300x225.jpg","LD23584_P-300x225.jpg");

?>
<!-- End -->
<!-- Banner -->
<section class="page-content">
	<div class="row  bg-crimson">
		<div class="cols-1 row-1">
		</div>
		<div class="cols-7 row-1">
			<div class="page-title">
				<div class="v-center" >
					<h2>Find Materials</h2>
				</div>
			</div>
		</div>
		<div class="cols-1 row-1">
		</div>
	</div>
	<div class="row">
		<div class="cols-1">
			<div class="row-05 bg-crimson"></div>
		</div>
		<div class="cols-7 bg-white">
			<!-- Main content start here -->
			<div class="content-body">
				<div class="filter-wrapper">
					<div class="filter-menu">
						<button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="d-none d-lg-block">Sort </span>by Category</button>
						<div class="dropdown-menu dropdown-menu-down" aria-labelledby="dropdownMenuButton">
							<a class="dropdown-item" href="#">Surfaces</a>
							<a class="dropdown-item" href="#">Structure</a>
							<a class="dropdown-item" href="#">Lighting</a>
							<a class="dropdown-item" href="#">Outdoor</a>
						 </div>
					</div>
					<div class="filter-menu">
						<button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="d-none d-lg-block">Sort </span>by Trending</button>
						<div class="dropdown-menu dropdown-menu-down" aria-labelledby="dropdownMenuButton">
							<a class="dropdown-item" href="#">Most recent</a>
							<a class="dropdown-item" href="#">Most viewed</a>
							<a class="dropdown-item" href="#">Most recommended</a>
						 </div>
					</div>
					<div class="filter-menu">
						<button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span class="d-none d-lg-block">Sort </span>by Price range</button>
						<div class="dropdown-menu dropdown-menu-down" aria-labelledby="dropdownMenuButton">
							<a class="dropdown-item" href="#">Luxury</a>
							<a class="dropdown-item" href="#">Moderate</a>
							<a class="dropdown-item" href="#">Affordable</a>
						 </div>
					</div>
					<div class="mini-search">
						<input type="search" placeholder="Search">
					</div>
				</div>
				<div class="divider-mid">
					<div class="line"></div>
					<h5><b>Surfaces Supplier</b></h5>
					<div class="line"></div>
				</div>
				<dir class="page-content-body">
					<div class="gallery-containner">
						<div class="gallery-wrapper">
							<?php  $strings = array('left','right',); ?>
							<img src="./images/gallery/Cavalcanti_Profile_Image.jpg" class="<?php echo $strings[array_rand($strings)]; ?>"/>
							<img src="./images/gallery/f8bb3159182513.5a4234a48d2a1.jpg" class="<?php echo $strings[array_rand($strings)]; ?>"/>
							<img src="./images/gallery/8e219559182513.5a4234a48bc4b.jpg" class="<?php echo $strings[array_rand($strings)]; ?>"/>
						</div>
						<div class="loader-containner">
							<div class="v-center">
								<div class="loader" style="margin:0 auto;"><div class="square-spin"><div></div></div></div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="supplier-content col-sm-8">
							<div class="d-flex">
								<div>
									<img class="logo" src="./images/lobo-b.png">
								</div>
								<h4 class="supplier-title">Artisan Flooring</h4>
							</div>
							<p>At Artisan Flooring we specialise in the development and production of exclusively designed and hand-made rugs for the contract, hospitality and residential sectors. Combining traditional textile techniques with contemporary visual concepts, we aim to provide innovative, durable and sustainable design solutions for your project. Our design combines shapes, colours and textures to create unique rugs to suit individual requirements. The quality of our rugs is the result of our commitment to outstanding standards of design and craftsmanship.</p>
							<p>Hand-tufted rugs: up to 9M wide and any length. Handwoven rugs: up to 5M wide and any length. All rugs available in custom sizes and colours.</p>
						</div>
						<div class="supplier-contact col-sm-4">
							<h5 class="f-brown pb-4">Contact</h5>
							<span class="text-crimson">Astisans Flooring  (HK) Ltd.</span><br/>
							216A, InnoCentre, 72 Tat Chee Avenue, <br/>
							Kowloon Tong<br/>
							Tel. (852) 2866 2039<br/>
							Fax: (852) 2866 3261<br/>
							Email :  <a href="mailto:admin@hkida.org" class="text-crimson">admin@hkida.org</a><br/>
							Website :  <a href="www.artisanflooring.com" class="text-crimson">www.artisanflooring.com</a><br/>
					</div>
				</dir>
			</div>
			<!-- End here -->
		</div>
		<div class="cols-1">
			<div class="row-05 bg-crimson"></div>
		</div>
	</div>
	<div class="row ">
		<div class="cols-2 row-1">
		</div>
		<div class="cols-5 row-1">
			<div class="text-center">
				<a href="category" class="button inverse">Back to supplier directory</a>
			</div>
		</div>
		<div class="cols-2 row-1">
		</div>
	</div>
	<div class="row">
		<div class="cols-1">
		</div>
		<div class="cols-7 bg-white">
			<div class="content-body">
				<div class="page-title">
					<div class="divider-mid">
						<div class="line"></div>
						<h5><b>Featured Supplier</b></h5>
						<div class="line"></div>
					</div>
				</div>
				<div class="featured-list">
					<ul class="loop-supplier">
						<?php $i=0; foreach ($partnerArray as $key => $partner):?>
						<li class="item narrow">
							<div class="thumbnail">
								<?php $rand = rand(0,4); ?>
								<a href="single-supplier">
									<img src="<?php echo './images/'.$thumbnailArray[$rand] ?>">
								</a>
							</div>
							<div class="d-flex">
								<?php if($partner['logo']): ?>
								<div>
									<img class="logo" src="<?php echo $partner['logo']; ?>">
								</div>
								<?php endif; ?>
								<div>
									<h5 class="f-brown text-crimson"><?php echo $partner['category']; ?></h5>
									<p><?php echo $partner['name']; ?></p>
								</div>
							</div>
							<?php if($i == 2){break;} ?>
						</li>
						<?php $i++; endforeach; ?>
					</ul>
				</div>
			</div>
		</div>
		<div class="cols-1">
		</div>
	</div>
</section>
<section class="back-to-top cols-1">
	<a href="javascript:;">
	<div class="dice-button trans">
		<a href="javascript:;" class="svg">
			<object type="image/svg+xml" data="./assets/svg/arrow-up.svg" class="icon-arrow trans" width="16" height="16"></object>
		</a>
	</div>
	<p class="text-center f-brown">Back to top</p>
	</a>
</section>
<script type="text/javascript" src="./assets/js/single.js"></script>