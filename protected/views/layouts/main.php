<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/superfish.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.responsivemenu.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.mobilemenu.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/script.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.flexslider.js"></script>
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<div class="main">
	<div class="container_12">
	<!--==============================header=================================-->
	<header>
            <h1 style="margin-left: -20px; margin-top: -5px"><a href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" alt="" class="logo"></a></h1>
            <div style="position: absolute; right: 0px; top: 23px"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/banner_1.jpg"/></div>
            <div class="wrapper"></div>
            <nav>
                <ul class="sf-menu">
                    <li id="li_home" class="current"><strong></strong><a href="<?php echo Yii::app()->request->baseUrl; ?>">Home</a></li>
                    <li id="li_about"><strong></strong><a href="<?php echo Yii::app()->request->baseUrl; ?>/about">About Us</a></li>
                    <li><strong></strong><a href="#">Archives</a></li>
                    <li><strong></strong><a href="#">Objective</a></li>
                    <li><strong></strong><a href="#">Privacy Policy</a></li>
                    <li><strong></strong><a href="#">Contacts</a></li>
                </ul>
                <div class="clear"></div>
            </nav>
        </header>
        <?php echo $content; ?>
        </div>
        <div class="clear"></div>
        <!--==============================footer=================================-->
        <footer>
            <aside style="float: left; width: 300px; padding-left: 20px">
                <div class="container_12">
                    <div class="wrapper">
                        <div class="grid_4">
                            <div class="indent">
                                    <div class="telphone">
                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/tel.png" alt="" class="fleft">
                                    <div class="extra-wrap">
                                        <span>Contact</span>
                                        <span>+ 61 41 454 6833</span>
                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div><!--///wrapper-->
                </div> 
            </aside>
            <div class="container_12" style="float: left; width: 700px; padding-top: 10px">
                <div style="text-align: center; font-weight: bold; color: white">
                    <a href="#" style="padding-right: 20px; border-bottom: solid 1px black" class="button">Home</a>
                    <a href="#" style="padding-right: 5px">&nbsp;</a>
                    <a href="#" style="padding-right: 20px; border-bottom: solid 1px black" class="button">About Us</a>
                    <a href="#" style="padding-right: 5px">&nbsp;</a>
                    <a href="#" style="padding-right: 20px; border-bottom: solid 1px black" class="button">Archives</a>
                    <a href="#" style="padding-right: 5px">&nbsp;</a>
                    <a href="#" style="padding-right: 20px; border-bottom: solid 1px black" class="button">Objective</a>
                    <a href="#" style="padding-right: 5px">&nbsp;</a>
                    <a href="#" style="padding-right: 20px; border-bottom: solid 1px black" class="button">Privacy Policy</a>
                    <a href="#" style="padding-right: 5px">&nbsp;</a>
                    <a href="#" style="padding-right: 20px; border-bottom: solid 1px black" class="button">Contacts</a>
                </div>
                <div style="text-align: center; margin-top: 10px; padding-top: 5px; border-top: dotted 1px silver"><div class="indent"><strong>Pahana</strong> &copy; 2013 - <a href="http://www.snt3.com">Design by SNT3</a> <br><!-- {%FOOTER_LINK} --></div></div>
            </div>
            <div class="clear"></div>
        </footer>
    </div>
</body>
</html>