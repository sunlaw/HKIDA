<!-- Data -->
<?php 
    $memberArray = array(
        array("name" => 'Allen Yau','company'=>'AL Design & Associates Ltd','website'=>'http://www.example.com'),
        array("name" => 'Banks Nicholas A. H.','company'=>'Atelier Pacific Ltd','website'=>''),
        array("name" => 'Benji ','company'=>'Benji Li Interiors Ltd','website'=>'http://www.example.com'),
        array("name" => 'Bourquin Frederic','company'=>'Atelier B Limited','website'=>'http://www.example.com'),
        array("name" => 'Banks Nicholas A. H.','company'=>'Atelier Pacific Ltd','website'=>'http://www.example.com'),
        array("name" => 'Chan Alan ','company'=>'SPAZE DESIGN LTD.','website'=>''),
        array("name" => 'Chan Antony','company'=>'Cream','website'=>'http://www.example.com'),
        array("name" => 'Chan Arick','company'=>'Arick Chan Design Ltd','website'=>''),
        array("name" => 'Chan Arthur','company'=>'DPWT Design Ltd','website'=>'http://www.example.com'),
        array("name" => 'Chan Chi Chun','company'=>'Apex design Consultant company','website'=>''),
        array("name" => 'Chan Chi Wing, Louis','company'=>'JASEDO','website'=>'http://www.example.com'),
        array("name" => 'Chan Chun Ho, John','company'=>'John Chan Design Ltd','website'=>'http://www.example.com'),
        array("name" => 'Chan Hang Kan, Thomas','company'=>'Iso Ceramic Design Ltd.','website'=>'http://www.example.com'),
        array("name" => 'Chan Ho Chun, Oscar','company'=>'PLOTCREATIVE Interior Design','website'=>''),
        array("name" => 'Chan Hung Pun, Ben ','company'=>'ChanLi Inteiror Design','website'=>'http://www.example.com'),
        array("name" => 'Chan Hung Sum, Deep','company'=>'MTR corporation limited','website'=>'http://www.example.com'),
        array("name" => 'Chan K. C., Thomas','company'=>'Thomas Chan Designs Ltd','website'=>''),
        array("name" => 'Chan Ki Fung, Ken ','company'=>'Wynn Design & Development','website'=>'http://www.example.com'),
        array("name" => 'Chan Kwan Ngai, Brian','company'=>'BC&A International Ltd','website'=>'http://www.example.com')
    );
?>
<!-- End -->
<section class="banner">
	<div class="row">
		<div class="cols-8">
			<div class="banner-container">
				<h1>Members directory</h1>
				<!-- overlay line -->
				<div class="overlap-line">
					<div class="row">
						<div class="cols-1"></div>
						<div class="cols-1"></div>
						<div class="cols-1"></div>
						<div class="cols-1"></div>
						<div class="cols-1"></div>
						<div class="cols-1"></div>
						<div class="cols-1"></div>
						<div class="cols-1"></div>
					</div>
				</div>
				<!-- end -->
			</div>
		</div>
		<div class="cols-1 bg-crimson row-1">
		</div>
	</div>
</section>
<section class="page-content">
	<div class="row">
		<div class="cols-3">
			<section class="sitebar bg-crimson">
				<h5 class="f-brown text-black">Our People</h5>
				<ul>
					<li><h4><a href="#">Classification of Membership</a></h4></li>
					<li><h4><a href="#">Member subscriptions</a></h4></li>
					<li><h4><a href="#">Member registration</a></h4></li>
					<li><h4><a href="#">Member login</a></h4></li>
					<li><h4><a href="#">Members directory</a></h4></li>
				</ul>
			</section>
		</div>
		<div class="cols-5 bg-white">
			<section class="content-body">
				<div class="page-title mt-4">
					<h2>Professional Member</h2>
				</div>
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
				<div class="page-content-body">
					<div class="row loop-header">
						<div class="f-brown col-4"><b>Name</b></div>
						<div class="f-brown col-6"><b>Company</b></div>
						<div class="f-brown col-2"><b>Web</b></div>
					</div>
					<ul class="loop-member">
						<?php $i=0; foreach ($memberArray as $key => $member):?>
						<li class="item row" data-index="<?php echo $i; ?>">
							<div class="f-brown col-4"><a href="single-profile" class="text-black"><?php echo $member['name']; ?></a></div>
							<div class="col-6"><?php echo $member['company']; ?></div>
							<div class="col-2" style="position: relative;">
								<?php if($member['website']): ?>
								<a href="" class="svg" target="_blank" style="width: :100%; height: 100%;">
									<object type="image/svg+xml" data="./assets/svg/icon-webiste.svg" class="svg-icon position-absolute icon-website vh-center" width="40" height="40">
									</object>
								</a>
								<?php endif; ?>
							</div>
						</li>
						<?php $i++; endforeach; ?>
					</ul>
					<div class="page-pagin">
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
			</section>
		</div>
		<div class="cols-1">
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