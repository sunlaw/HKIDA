<!-- Data -->
<?php 
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
					<h2>Members directory</h2>
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
						<button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sort by name</button>
						<div class="dropdown-menu dropdown-menu-down" aria-labelledby="dropdownMenuButton">
							<a class="dropdown-item" href="#">A ———— B</a>
							<a class="dropdown-item" href="#">C ———— D</a>
							<a class="dropdown-item" href="#">E ———— F</a>
							<a class="dropdown-item" href="#">G ———— H</a>
							<a class="dropdown-item" href="#">I ———— J</a>
							<a class="dropdown-item" href="#">K ———— L</a>
							<a class="dropdown-item" href="#">M ———— N</a>
							<a class="dropdown-item" href="#">O ———— P</a>
							<a class="dropdown-item" href="#">Q ———— R</a>
							<a class="dropdown-item" href="#">S ———— T</a>
							<a class="dropdown-item" href="#">U ———— V</a>
							<a class="dropdown-item" href="#">W ———— X</a>
							<a class="dropdown-item" href="#">Y ———— Z</a>
						 </div>
					</div>
					<div class="mini-search">
						<input type="search" placeholder="Search">
					</div>
				</div>
				<dir class="page-content-body">
					<ul class="profile-list">
						<li class="item row">
							<div class="f-brown col-3">
								<a href="single-profile" class="text-black">Name</a>
							</div>
							<div class="col-7">Chan Kwan Ngai, Brian</div>
							<div class="col-2" style="position: relative;">
							</div>
						</li>
						<li class="item row">
							<div class="f-brown col-3">
								<a href="single-profile" class="text-black">Company</a>
							</div>
							<div class="col-7">BC&A International Ltd</div>
							<div class="col-2" style="position: relative;">
							</div>
						</li>
						<li class="item row">
							<div class="f-brown col-3">
								<a href="single-profile" class="text-black">Address</a>
							</div>
							<div class="col-7">2608 Paul Y Ctr 51 Hung To Road Kwun Tong, Kowloon</div>
							<div class="col-2" style="position: relative;">
							</div>
						</li>
						<li class="item row">
							<div class="f-brown col-3">
								<a href="single-profile" class="text-black">Tel</a>
							</div>
							<div class="col-7">2521 2722</div>
							<div class="col-2" style="position: relative;">
							</div>
						</li>
						<li class="item row">
							<div class="f-brown col-3">
								<a href="single-profile" class="text-black">Fax</a>
							</div>
							<div class="col-7">2521 2723</div>
							<div class="col-2" style="position: relative;">
							</div>
						</li>
						<li class="item row">
							<div class="f-brown col-3">
								<a href="single-profile" class="text-black">Email</a>
							</div>
							<div class="col-7"><a href="mailto:brian.chan@bcna.com.hk" class="text-crimson">brian.chan@bcna.com.hk</a></div>
							<div class="col-2" style="position: relative;">
								<a href="" class="svg" target="_blank" style="width: :100%; height: 100%;">
									<object type="image/svg+xml" data="./assets/svg/icon-email.svg" class="svg-icon position-absolute icon-website vh-center" width="40" height="40">
									</object>
								</a>
							</div>
						</li>
						<li class="item row">
							<div class="f-brown col-3">
								<a href="single-profile" class="text-black">Website</a>
							</div>
							<div class="col-7"><a href="www.bcna.com.hk" class="text-crimson">www.bcna.com.hk</a></div>
							<div class="col-2" style="position: relative;">
								<a href="" class="svg" target="_blank" style="width: :100%; height: 100%;">
									<object type="image/svg+xml" data="./assets/svg/icon-webiste.svg" class="svg-icon position-absolute icon-website vh-center" width="40" height="40">
									</object>
								</a>
							</div>
						</li>
						<li class="item row">
							<div class="f-brown col-3">
								<a href="single-profile" class="text-black">Member No</a>
							</div>
							<div class="col-7">PM00210</div>
							<div class="col-2" style="position: relative;">
							</div>
						</li>
					</ul>
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
					
				</dir>
			</div>
			<!-- End here -->
		</div>
		<div class="cols-1">
			<div class="row-05 bg-crimson"></div>
		</div>
	</div>
	<div class="row ">
		<div class="cols-2 row-1 d-none d-md-block">
		</div>
		<div class="cols-5 row-1">
			<div class="text-center">
				<a href="directory" class="button inverse">Back to Members directory</a>
			</div>
		</div>
		<div class="cols-2 row-1 d-none d-md-block">
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