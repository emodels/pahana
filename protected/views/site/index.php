<?php $this->pageTitle=Yii::app()->name; ?>
<script type="text/javascript">
        $(window).load(function() {			
        jQuery('.flexslider').flexslider({
                            animation: "fade",			
                            slideshow: true,			
                            slideshowSpeed: 7000,
                            animationDuration: 600,
                            prevText: "",
                            nextText: "",
                            controlNav: true		
                    });
        $('.bookshelf_book').hover(
            function(){
                $(this).attr('width', '108%') 
            },
            function(){
                $(this).attr('width', '100%') 
            }
        );
    });
</script>
<div class="main-slider">
    <div class="flexslider clearfix">
        <ul class="slides">
            <li><img alt="" src="images/slide.jpg">
                <div class="flex-caption">
                        <div class="inner">
                            <strong></strong>
                        </div>
                </div>
                </li>
            <li><img alt="" src="images/slide-1.jpg">
                <div class="flex-caption">
                        <div class="inner">
                            <strong></strong>
                        </div>
                </div>
                </li>
            <li><img alt="" src="images/slide-2.jpg">
                <div class="flex-caption">
                        <div class="inner">
                            <strong></strong>
                        </div>
                </div>
            </li>
        </ul>
    </div>
</div>
<section id="content">
    <div class="wrapper-after">
        <div class="grid_6">
            <div class="indent">
                <h2 class="ind">Welcome to Pahana</h2>
                <img src="images/sigiriya.png" alt="" class="block-img p2">
                <p style="text-align: justify">Pahana Magazine is a free distributed Sri Lankan Community Magazine that aims to reach a Sri Lankan population of over 70,000 all over Australia and New Zealand. Pahana is published twice a month. Pahana and Pahana Extra 1st Saturday and 3rd Saturday.</p>
                <p style="text-align: justify">The demand for entertainment in literacy media itself gave birth to Pahana. We reach out to readers of all ages and life styles with a wide range of articles in both English and Sinhala providing entertainment and education.</p>
                <a href="<?php echo Yii::app()->request->baseUrl; ?>/about" class="button top" style="margin-top: -35px; position: absolute; left: 372px">Read More</a>
            </div>

        </div>
        <div class="grid_3" style="border-bottom: dotted 2px silver; padding-bottom: 30px">
            <div class="indent">
                <h2 class="ind1">Main objective</h2>
                <ul class="list p3">
                        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/objective">To promote traditional values and activities among the Sri Lankans in Australia, enbling them to retain their cultural identity aas an integral section of multicultural Australia</a></li>
                        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/objective">To disseminate information and ideas among the Sri Lankans in order for them to make a meaningful contribution to the Australian way of life</a></li>
                </ul>
                <a href="<?php echo Yii::app()->request->baseUrl; ?>/objective" class="button top" style="margin-top: -20px; position: absolute; right: 10px">Read More</a>
            </div>
        </div>
        <div style="float: left; display: inline; margin-left: 65px; margin-right: 10px; position: relative;">
            <div class="padding bookshelf">
                <div class="books">
                    <ul>
                    <?php if(isset($month_paper)){ ?>
                        <li><a href="<?php echo Yii::app()->baseUrl . '/paper/id/' . $month_paper->id; ?>"><img src="images/month_book.jpg" alt="" class="bookshelf_book"></a></li>
                    <?php } ?>
                    <?php if(isset($mid_month_paper)){ ?>    
                        <li><a href="<?php echo Yii::app()->baseUrl . '/paper/id/' . $mid_month_paper->id; ?>"><img src="images/midmonth_book.jpg" alt="" class="bookshelf_book"></a></li>  
                    <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="books_title">
                <ul style="text-align: center">
                    <?php if(isset($month_paper)){ ?>
                        <li style="display: inline-block; padding-right:40px; padding-left: 50px"><a href="<?php echo Yii::app()->baseUrl . '/paper/id/' . $month_paper->id; ?>"><b>Monthly Issue</b><br/><?php echo date("F", mktime(0, 0, 0, $month_paper->month, 10)) . ' - ' . $month_paper->year; ?></a></li>
                    <?php } ?>
                    <?php if(isset($mid_month_paper)){ ?>    
                        <li style="display: inline-block;"><a href="<?php echo Yii::app()->baseUrl . '/paper/id/' . $mid_month_paper->id; ?>"><b>Mid Monthly Issue</b><br/><?php echo date("F", mktime(0, 0, 0, $mid_month_paper->month, 10)) . ' - ' . $mid_month_paper->year; ?></a></li>  
                    <?php } ?>
                </ul>
            </div>
        </div>    
    </div><!--///wrapper-->
</section>
