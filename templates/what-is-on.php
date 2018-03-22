<!-- Data -->
<?php 
    $thumbnailArray = array("LD17910_P-300x225.jpg","LD20379_P-300x225.jpg","LD22654_P-300x225.jpg","LD22960_P-300x225.jpg","LD23584_P-300x225.jpg");

?>
<!-- End -->
<!-- Banner -->
<section class="page-content">
	<div class="row bg-l-grey">
		<div class="cols-1 row-1">
		</div>
		<div class="cols-7 row-1">
			<div class="page-title">
				<div class="v-center" >
					<h2>News & Events</h2>
				</div>
			</div>
		</div>
		<div class="cols-1 row-1">
		</div>
	</div>
	<div class="row">
		<div class="cols-1">
		</div>
		<div class="cols-7">
			<!-- Main content start here -->
			<div class="content-body">
				<div class="news-list">
					<ul class="loop-news">
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