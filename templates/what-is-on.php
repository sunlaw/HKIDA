<!-- Data -->
<?php 
	 $newsArray = array(
        array("date" => '02.03.2017','title'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit'),
        array("date" => '02.03.2017','title'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit'),
        array("date" => '02.03.2017','title'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit'),
        array("date" => '02.03.2017','title'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit'),
        array("date" => '02.03.2017','title'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit'),
        array("date" => '02.03.2017','title'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit'),
        array("date" => '02.03.2017','title'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit'),
        array("date" => '02.03.2017','title'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit'),
        array("date" => '02.03.2017','title'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit'),
    );
    $thumbnailArray = array("news-1.jpg","news-2.jpg","news-3.jpg");

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
						<?php $i=0; foreach ($newsArray as $key => $news):?>
						<li class="item ">
							<div class="img-placeholder">
								<a href="">
									<?php $rand = rand(0,2); ?>
									<img src="./images/news/<?php echo $thumbnailArray[$rand]; ?>"/>
								</a>
							</div>
							<div class="content-placeholder">
								<h5 class="f-brown text-crimson"><?php echo $news['date']; ?></h5>
								<p class="text-black"><?php echo $news['title']; ?></p>
							</div>
						</li>
						<?php $i++; endforeach; ?>
					</ul>
				</div>
				<div class="text-center">
					<div class="page-pagin d-inline text-m-grey">
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