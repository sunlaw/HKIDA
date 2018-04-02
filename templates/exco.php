<!-- Data -->
<?php 
    $boardArray = array(
        array("name" => 'Joey HO','title'=>'Chairman','picture'=>'./images/board/pic-1.png'),
        array("name" => 'Antony CHAN','title'=>'Past Chairman','picture'=>'./images/board/pic-2.png'),
        array("name" => 'Horace PAN','title'=>'Vice-chairman & Chairman of RIDA Project','picture'=>'./images/board/pic-3.png'),
        array("name" => 'Louisa YOUNG','title'=>'Vice-chairman & Chairman of Membership','picture'=>'./images/board/pic-4.png'),
    );
?>
<!-- End -->
<!-- Banner -->
<section class="banner">
	<div class="row">
		<div class="cols-8">
			<div class="banner-container">
				<h1>About HKIDA</h1>
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
				<h5 class="f-brown text-black">About HKIDA</h5>
				<ul>
					<li><h4><a href="#">Introduction</a></h4></li>
					<li><h4><a href="#">Chairman message</a></h4></li>
					<li><h4><a href="#">Introduction</a></h4></li>
					<li><h4><a href="#">Aims</a></h4></li>
					<li><h4><a href="exco">Exco</a></h4></li>
					<li><h4><a href="#">Code</a></h4></li>
					<li><h4><a href="#">Definition</a></h4></li>
				</ul>
				<h5 class="f-brown">Download Memorandum and Articles of Association</h5>
			</section>
		</div>
		<div class="cols-5 bg-white">
			<section class="content-body">
				<div class="page-title mt-4">
					<h2>Exco</h2>
				</div>
				<div class="page-content-body">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. </p>
				</div>
				<ul class="loop-board">
					<?php $i=0; foreach ($boardArray as $key => $board):?>
					<li class="row">
						<div class="col-7">
							<div class="picture">
								<img src="<?php echo $board['picture']; ?>">
							</div>
						</div>
						<div class="col-5">
							<div class="full-vh">
								<div class="v-center">
									<div class="">
										<p class="f-brown"><?php echo $board['name']; ?></p>
										<p class=""><?php echo $board['title']; ?></p>
									</div>
								</div>
							</div>
						</div>
					</li>
					<?php endforeach; ?>
				</ul>
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