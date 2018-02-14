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
        <nav>
    		<div class="row f-brown store-1">
                <div class="cols-3 bg-l-grey logo-container">
                    <a href="/"><img class="site-logo" src="./assets/images/IDA_logo_en.png" /></a>
                </div>
                <div class="cols-1 bg-l-grey">
                    <a href="introduction">About HKIDA</a>
                </div>
                <div class="cols-1 bg-l-grey">
                    <a href="#">What is on</a>
                </div>
                <div class="cols-1 bg-crimson">
                    <a href="#">Our People</a>
                </div>
                <div class="cols-1 bg-crimson">
                    <a href="#">Find Materials</a>
                </div>
                <div class="cols-1 bg-crimson">
                    <a href="#">Get in touch</a>
                </div>
                 <div class="cols-1 bg-crimson hunberger">
                    <a href="#"></a>
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


