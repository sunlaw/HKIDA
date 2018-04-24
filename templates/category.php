<!-- Data -->
<?php 
    $featuredPartnerArray = array(
        array("name" => 'Allen Yau','category'=>'Surfaces','logo'=>'./images/lobo-b.png','thumbnail'=>''),
        array("name" => 'Mokum','category'=>'Lighting','logo'=>'./images/logo-upgrade.png','thumbnail'=>''),
        array("name" => 'Seneca Textiles','category'=>'Outdoor','logo'=>'./images/logo-mg.png','thumbnail'=>''),
        array("name" => 'Artisan Flooring','category'=>'Lighting and outdoor','logo'=>'','thumbnail'=>''),
        array("name" => 'Mokum','category'=>'Surface','logo'=>'','thumbnail'=>''),
        array("name" => 'Seneca Textiles','category'=>'Outdoor','logo'=>'','thumbnail'=>'')
    );
     $partnerArray = array(
        array("address" => '123 6th St. Melbourne, FL 32904','company'=>'AL Design & Associates Ltd', 'email'=>'abc@abc.com', 'website'=>'http://www.example.com'),
        array("address" => '44 Shirley Ave. West Chicago, IL 60185','company'=>'Atelier Pacific Ltd', 'email'=>'abc@abc.com', 'website'=>''),
        array("address" => '777 Lawrence St. Lombard, IL 60148','company'=>'Benji Li Interiors Ltd','email'=>'abc@abc.com', 'website'=>'http://www.example.com'),
        array("address" => 'Bourquin Frederic','company'=>'Atelier B Limited','website'=>'http://www.example.com'),
        array("address" => '123 6th St. Melbourne, FL 32904','company'=>'Atelier Pacific Ltd','email'=>'abc@abc.com', 'website'=>'http://www.example.com'),
        array("address" => '885 White Rd. Maineville, OH 45039','company'=>'SPAZE DESIGN LTD.', 'email'=>'abc@abc.com', 'website'=>''),
        array("address" => '123 6th St. Melbourne, FL 32904','company'=>'Cream','website'=>'http://www.example.com'),
        array("address" => '777 Lawrence St. Lombard, IL 60148','company'=>'Arick Chan Design Ltd','email'=>'abc@abc.com', 'website'=>''),
        array("address" => '782 Creek St. Pickerington, OH 43147','company'=>'DPWT Design Ltd','website'=>'http://www.example.com'),
        array("address" => '516 Hillcrest Street Geneva, IL 60134','company'=>'Apex design Consultant company','email'=>'abc@abc.com', 'website'=>''),
        array("address" => '630 Pierce Court Missoula, MT 59801','company'=>'JASEDO','email'=>'abc@abc.com', 'website'=>'http://www.example.com'),
        array("address" => '44 Shirley Ave. West Chicago, IL 60185, John','company'=>'John Chan Design Ltd','email'=>'abc@abc.com', 'website'=>'http://www.example.com'),
        array("address" => 'Chan Hang Kan, Thomas','company'=>'Iso Ceramic Design Ltd.','email'=>'abc@abc.com', 'website'=>'http://www.example.com'),
        array("address" => '123 6th St. Melbourne, FL 32904','company'=>'PLOTCREATIVE Interior Design','email'=>'abc@abc.com', 'website'=>''),
        array("address" => '44 Shirley Ave. West Chicago, IL 60185','company'=>'ChanLi Inteiror Design','email'=>'abc@abc.com', 'website'=>'http://www.example.com'),
        array("address" => '630 Pierce Court Missoula, MT 59801','company'=>'MTR corporation limited','email'=>'abc@abc.com', 'website'=>'http://www.example.com'),
        array("address" => '885 White Rd. Maineville, OH 45039','company'=>'Thomas Chan Designs Ltd','email'=>'abc@abc.com', 'website'=>''),
        array("address" => '516 Hillcrest Street Geneva, IL 60134, Ken ','company'=>'Wynn Design & Development','email'=>'abc@abc.com', 'website'=>'http://www.example.com'),
        array("address" => '44 Shirley Ave. West Chicago, IL 60185','company'=>'BC&A International Ltd','email'=>'abc@abc.com','website'=>'http://www.example.com')
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
							<a class="dropdown-item" href="#">Surfaces</a>
							<a class="dropdown-item" href="#">Structure</a>
							<a class="dropdown-item" href="#">Lighting</a>
							<a class="dropdown-item" href="#">Outdoor</a>
							<a class="dropdown-item" href="#">Surfaces</a>
							<a class="dropdown-item" href="#">Structure</a>
							<a class="dropdown-item" href="#">Lighting</a>
							<a class="dropdown-item" href="#">Outdoor</a>
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
						 </div>
					</div>
					<div class="filter-menu">
						<button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sort by TBC</button>
						<div class="dropdown-menu dropdown-menu-down" aria-labelledby="dropdownMenuButton">
							<a class="dropdown-item" href="#">TBC</a>
							<a class="dropdown-item" href="#">TBC</a>
							<a class="dropdown-item" href="#">TBC</a>
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
						<?php $i=0; foreach ($featuredPartnerArray as $key => $partner):?>
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
									<p><?php echo $partner['name']; ?></p>
								</div>
							</div>
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
					<div class="row loop-header mobile-hidden">
						<div class="col-8">
							<div class="row">
								<div class="f-brown col-5"><b>Company</b></div>
								<div class="f-brown col-7"><b>Address</b></div>
							</div>
						</div>
						<div class="col-4">
							<div class="row">
								<div class="f-brown col-6 text-center"><b>Email</b></div>
								<div class="f-brown col-6 text-center"><b>Web</b></div>
							</div>
						</div>
					</div>
					<ul class="loop-supplier raw">
						<?php $i=0; foreach ($partnerArray as $key => $partner):?>
						<li class="item row raw" data-index="<?php echo $i; ?>">
							<div class="col-8">
								<div class="row">
									<div class="col-sm-5"><?php echo $partner['company']; ?></div>
									<div class="col-sm-7"><?php echo $partner['address']; ?></div>
								</div>
							</div>
							<div class="col-4">
								<div class="row">
									<div class="col-6" style="position: relative; height: 30px;">
										<?php if($partner['email']): ?>
										<a href="emailto:<?php echo $partner['email'];?>" class="svg" target="_blank" style="display:block; width: :100%; height: 100%; ">
											<object type="image/svg+xml" data="./assets/svg/icon-email.svg" class="svg-icon position-absolute icon-website vh-center" width="40" height="40" >
											</object>
										</a>
										<?php endif; ?>
									</div>
									<div class="col-6" style="position: relative;  height: 30px;">
										<?php if($partner['website']): ?>
										<a href="<?php echo $partner['website'];?>" class="svg" target="_blank" style="display:block;  width: :100%; height: 100%;">
											<object type="image/svg+xml" data="./assets/svg/icon-webiste.svg" class="svg-icon position-absolute icon-website vh-center" width="40" height="40">
											</object>
										</a>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</li>
						<?php $i++; endforeach; ?>
					</ul>
				</div>
				<!-- <div class="text-center">
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
				</div> -->
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