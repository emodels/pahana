<?php $this->pageTitle=Yii::app()->name . ' - Paper';?>
<script type="text/javascript">
$(document).ready(function(){
    $('#lnk_next').click(function(){
        $('.page.selected').next('.page').children('a').click();
    });
    $('#lnk_prev').click(function(){
        $('.page.selected').prev('.page').children('a').click();
    });
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    }); 

    $('.scrollup').click(function(){
        $("html, body").animate({ scrollTop: 250 }, 600);
        return false;
    });
});    
function LoadPage(strFile){
    $('#frmPage').attr('src', strFile);
    $('html,body').animate({
        scrollTop: $("#frmPage").offset().top},
        'slow');
}
</script>
<section id="content">
    <div class="wrapper-after" style="padding: 10px; position: relative">
        <h1 style="font-size: 22px; padding: 10px 0 10px 0"><?php echo ($model->type == 0 ? 'Monthly Issue' : 'Mid Monthly Issue') . ' : ' . date("F", mktime(0, 0, 0, $model->month, 10)) . ' - ' . $model->year; ?></h1>
        <div id="divScroller" style="width: 100%; overflow-x: scroll; overflow-y: hidden; border: solid 1px silver;">
            <div class="row" style="padding-top: 10px; width: 100%; height: 290px;">
                <?php
                $this->widget('zii.widgets.CListView', array(
                    'dataProvider'=>$dataProvider,
                    'itemView'=>'_pages_list',
                    'template'=>"{pager}{items}",
                     'pager' => array(
                        'header' => '&nbsp;',
                        'htmlOptions' => array('style'=>'padding-right: 20px')
                     ),  
                ));
                ?>
            </div>
        </div>
        <div style="position: absolute; top: 135px; right: -20px"><a id="lnk_next" href="javascript:return false;"><img src="<?php echo Yii::app()->baseUrl; ?>/images/right_arrow.png" class="hover_opacity"/></a></div>
        <div style="position: absolute; top: 135px; left: -20px"><a id="lnk_prev" href="javascript:return false;"><img src="<?php echo Yii::app()->baseUrl; ?>/images/left_arrow.png" class="hover_opacity"/></a></div>
        <div>
            <iframe id="frmPage" src="<?php echo Yii::app()->baseUrl . '/' . $dataProvider->data[0]->folder . $dataProvider->data[0]->name; ?>" style="width: 100%; height: 1320px"></iframe>
        </div>
        <a href="#" class="scrollup">Scroll</a>
    </div>
</section>    