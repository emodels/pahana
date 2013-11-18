<script type="text/javascript">
    $(document).ready(function(){
        $('.sf-menu li').removeClass('current');
        $('#li_banner').addClass('current');
    });
</script>
<section id="content">
    <div class="wrapper-after" style="padding: 10px; position: relative">
        <h1 style="font-size: 22px; padding: 10px 0 0 0">Add / Delete Banners</h1>
        <div class="form" style="padding-top: 20px">
            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'add-banner-form',
                'enableClientValidation' => true,
                'clientOptions' => array(
                    'validateOnSubmit' => true,
                    'validateOnChange' => true
                ),
            ));
            ?>            
            <div class="row">
                <h1 style="font-size: 16px; padding: 10px 0 20px 0"><b>Upload Contact Us page Banner Image - <font style="color: red">Width and Height of this image should be 458px X 570px</font></b></h1>
                <img id="img_contact" src="<?php echo $contact_image; ?>" style="width: 100px" /><br/><br/>
                <div class="column">
                    <?php $this->widget('ext.EAjaxUpload.EAjaxUpload',
                    array(
                        'id'=>'upload_contact_banner',
                        'config'=>array(
                            'action'=>Yii::app()->createUrl('admin/uploadbanner/mode/conatct'),
                            'allowedExtensions'=>array("jpg", "png"),
                            'sizeLimit'=>100*1024*1024,
                            'onComplete'=>"js:function(id, fileName, responseJSON){ d = new Date(); $('#img_contact').attr('src','" . Yii::app()->baseUrl . "/images/banners/' + responseJSON['filename'] + '?' + d.getTime()); }",
                        )   
                    )); ?>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row" style="border-top: dotted 2px silver">
                <h1 style="font-size: 16px; padding: 10px 0 20px 0"><b>Upload Home page Slide-show Images - <font style="color: red">Width and Height of each image should be 940px X 368px</font></b></h1>
                <div class="column">
                    <?php $this->widget('ext.EAjaxUpload.EAjaxUpload',
                    array(
                        'id'=>'upload_banner',
                        'config'=>array(
                            'action'=>Yii::app()->createUrl('admin/uploadbanner'),
                            'allowedExtensions'=>array("jpg", "png"),
                            'sizeLimit'=>100*1024*1024,
                            'onComplete'=>'js:function(){$.fn.yiiGridView.update("grid_banners")}'
                        )
                    )); ?>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row" style="margin-top: -90px">
                <?php
                $this->widget('zii.widgets.grid.CGridView', array(
                    'id' => 'grid_banners',
                    'dataProvider' => $dataProvider,
                    'ajaxUpdate' => true,
                    'htmlOptions'=>array('style'=>'text-align: center'),
                    'enablePagination' => true,
                    'template'=>"{summary}{pager}<br>{items}{pager}",
                    'columns' => array(
                        array(
                            'name'=>'File Name',
                            'value'=>'$data->name',
                            'htmlOptions'=>array('style'=>'text-align: center')
                        ),
                        array(
                            'name'=>'View',
                            'type'=>'raw',
                            'value'=>'CHtml::image(Yii::app()->baseUrl . "/images/banners/" . $data->name, "", array("style"=>"width: 100px"))',
                            'htmlOptions'=>array('style'=>'text-align: center')
                        ),
                        array
                            (
                            'header'=>'Delete',
                            'class' => 'CButtonColumn',
                            'deleteConfirmation'=>"js:'Are you sure you want to delete this Banner?'",
                            'template' => '{delete}',
                            'buttons' => array(
                                'delete' => array('url' => 'Yii::app()->createUrl("admin/bannerdelete", array("id"=>$data->id))')
                            )
                        )                    
                )));
                ?>
                <div class="clearfix"></div>
            </div>
            <?php $this->endWidget(); ?>
        </div>
    </div>
</section>    