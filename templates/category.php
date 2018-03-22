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
    $categoryArray = array(
        array("category" => 'Surfaces','subcategory'=>'Flooring, walls and stone','thumbnail'=>'./images/cate-surfaces.jpg'),
        array("category" => 'Structure','subcategory'=>'Doors, stairs, windows and ceiling','thumbnail'=>'./images/cate-structure.jpg'),
        array("category" => 'Lighting','subcategory'=>'Domestic appliances, lamps and chandeliers ','thumbnail'=>'./images/cate-lighting.jpg'),
        array("category" => 'Outdoor','subcategory'=>'Conservatories, garden and outdoor furniture ','thumbnail'=>'./images/cate-outdoor.jpg')
    );
    $thumbnailArray = array("LD17910_P-300x225.jpg","LD20379_P-300x225.jpg","LD22654_P-300x225.jpg","LD22960_P-300x225.jpg","LD23584_P-300x225.jpg");

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
						<button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sort by Category</button>
						<div class="dropdown-menu dropdown-menu-down" aria-labelledby="dropdownMenuButton">
							<a class="dropdown-item" href="#">Surfaces</a>
							<a class="dropdown-item" href="#">Structure</a>
							<a class="dropdown-item" href="#">Lighting</a>
							<a class="dropdown-item" href="#">Outdoor</a>
						 </div>
					</div>
					<div class="filter-menu">
						<button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sort by Trending</button>
						<div class="dropdown-menu dropdown-menu-down" aria-labelledby="dropdownMenuButton">
							<a class="dropdown-item" href="#">Most recently published</a>
							<a class="dropdown-item" href="#">Most viewed</a>
							<a class="dropdown-item" href="#">Most recommended</a>
						 </div>
					</div>
					<div class="filter-menu">
						<button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sort by Price range</button>
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
					<h5><b>Featured Surfaces Supplier</b></h5>
					<div class="line"></div>
				</div>
				<div class="featured-list">
					<ul class="loop-supplier">
						<?php $i=0; foreach ($partnerArray as $key => $partner):?>
						<li class="item <?php echo ($i == 0 || $i == 1) ? 'wide' : "narrow" ; ?>">
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
							<?php if($i == 4){break;} ?>
						</li>
						<?php $i++; endforeach; ?>
					</ul>
				</div>
				<div class="divider-mid">
					<div class="line"></div>
					<h5><b>Supplier Directory</b></h5>
					<div class="line"></div>
				</div>
				<div class="supplier-list">
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
						</li>
						<?php $i++; endforeach; ?>
					</ul>
				</div>
				<div class="text-center">
					<div class="page-pagin d-inline">
						<span class="label">Page</span>
						<span class="qa"><a href="">«</a></span>
						<span class="qa"><a href="">prev</a></span>
						<span class="active"><a href="">1</a></span> 
						<span><a href="">2</a></span>
						<span><a href="">3</a></span>
						<span><a href="">4</a></span>
						<span><a href="">5</a></span>
						<span class="qa"><a href="">next</a></span>
						<span class="qa"><a href="">»</a></span>
					</div>
				</div>
			</div>
			<!-- End here -->
		</div>
		<div class="cols-1">
			<div class="row-05 bg-crimson"></div>
		</div>
	</div>
</section>
<section class="back-to-top cols-1">
	<div class="dice-button trans">
		<a href="javascript:;" class="svg">
			<object type="image/svg+xml" data="./assets/svg/arrow-up.svg" class="icon-arrow trans" width="16" height="16"></object>
		</a>
	</div>
	<p class="text-center f-brown">Back to top</p>
</section>