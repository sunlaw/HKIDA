<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>HKIDA Front-end Source Code</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include_once('head.php'); ?>
</head>
<?php

    define('BASE_PATH', '/routing_test');

    require_once 'inc/routing.php';

?>
<body class="bg-l-grey">
	<header>
        <nav class="mobile-nav">
            <div class="row f-brown">
                <div class="cols-6 bg-l-grey logo-container">
                     <a href="/"><img class="site-logo" src="./assets/images/IDA_logo_en.png" /></a>
                </div>
                <div class="cols-3 bg-crimson hunberger">
                    <div class="v-center">
                         <div class="hunberger-menu" aria-controls="main-nav" aria-expanded="false">
                            <div class="line-menu start"></div>
                            <div class="line-menu mid"></div>
                            <div class="line-menu end"></div>
                             <div class="text-center label">Menu</div>
                         </div>
                     </div>
                </div>
            </div>
        </nav>
        <nav id="main-nav" class="main-nav" role="main-nav">
    		<div class="row f-brown store-1">
                <div class="cols-3 bg-l-grey logo-container d-none d-md-block">
                    <a href="/"><img class="site-logo" src="./assets/images/IDA_logo_en.png" /></a>
                </div>
                <div class="cols-1 bg-crimson">
                	<div class="v-center">
                		<a href="introduction">About HKIDA</a>
                            <!-- second level menu -->
                            <ul class="menu-secondary">
                                <li><h4><a href="introduction">Introduction</a></h4></li>
                                <li><h4><a href="#">Chairman message</a></h4></li>
                                <li><h4><a href="#">Introduction</a></h4></li>
                                <li><h4><a href="#">Aims</a></h4></li>
                                <li><h4><a href="exco">Exco</a></h4></li>
                                <li><h4><a href="#">Code</a></h4></li>
                                <li><h4><a href="#">Definition</a></h4></li>
                            </ul>
                            <!-- end -->
                	</div>
                  
                </div>
                <div class="cols-1 bg-crimson">
                	<div class="v-center">
                    	<a href="what-is-on">What is on</a>
                    </div>
                </div>
                <div class="cols-1 bg-crimson">
                	<div class="v-center">
                    	<a href="people">Our People</a>
                         <!-- second level menu -->
                        <ul class="menu-secondary">
                            <li><h4><a href="people">Become our member</a></h4></li>
                            <li><h4><a href="#">Classification of Membership</a></h4></li>
                            <li><h4><a href="#">Member subscriptions</a></h4></li>
                            <li><h4><a href="#">Member registration</a></h4></li>
                            <li><h4><a href="#">Member login</a></h4></li>
                            <li><h4><a href="#">Members directory</a></h4></li>
                        </ul>
                         <!-- end -->
                    </div>
                </div>
                <div class="cols-1 bg-crimson">
                	<div class="v-center">
                    	<a href="materials">Find Materials</a>
                    </div>
                </div>
                <div class="cols-1 bg-crimson">
                	<div class="v-center">
                    	<a href="contact-us">Get in touch</a>
                    </div>
                </div>
                 <div class="cols-1 bg-crimson hunberger d-none d-lg-block">
                 	<div class="v-center">
	                    <div class="hunberger-menu" aria-controls="main-nav" aria-expanded="false">
							<div class="line-menu start"></div>
							<div class="line-menu mid"></div>
							<div class="line-menu end"></div>
							<div class="text-center label">Menu</div>
						</div>
					</div>
					
                </div>
            </div>
            <div class="row f-brown store-2">
                <div class="cols-3 bg-l-grey logo-container d-none d-md-block">
                </div>
                <div class="cols-1 bg-crimson">
                	<div class="">
                    	<a href="introduction">Sponsors</a>
                    </div>
                </div>
                <div class="cols-1 bg-crimson">
                	<div class="">
                    	<a href="opportunities">Job board</a>
                    </div>
                </div>
                <div class="cols-1 bg-crimson">
                	<div class="">
                    	<a href="#" target="_new" class="text-black">APIDA</a>
                    </div>
                </div>
                <div class="cols-1 bg-crimson">
                	<div class="">
                    	<a href="#" target="_new" class="text-black">PIDA project</a>
                    </div>
                </div>
                <div class="cols-1 bg-crimson">
                	<div class="">
                    	<a href="#"><b>中文</b></a>
                    </div>
                </div>
                 <div class="cols-1 bg-crimson">
                </div>
            </div>
         </nav>
	</header>
    <?php 
        $pageName = getPageName(0);
        $subpageName = getPageName(1);
        if($pageName == 'default'){
            $pageName = 'landing'; // get back landing if no page parameter
        }
    ?>
	<main class="site-content <?php echo $pageName; ?>">
		<?php
        	if (file_exists($file = 'templates/' . $pageName . '.php')) {
                include $file;
            } else {
            	echo 'Page not found';
            }


