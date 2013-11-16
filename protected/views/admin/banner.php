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
                            'name'=>'Page File Name',
                            'value'=>'$data->name',
                            'htmlOptions'=>array('style'=>'text-align: center')
                        ),
                        array(
                            'name'=>'View',
                            'type'=>'raw',
                            'value'=>'CHtml::link("View PDF", Yii::app()->baseUrl . "/" . $data->folder . "/" . $data->name, array("target" => "_blank"))',
                            'htmlOptions'=>array('style'=>'text-align: center')
                        ),
                        array
                            (
                            'header'=>'Delete',
                            'class' => 'CButtonColumn',
                            'deleteConfirmation'=>"js:'Are you sure you want to delete this Page?'",
                            'template' => '{delete}',
                            'buttons' => array(
                                'delete' => array('url' => 'Yii::app()->createUrl("admin/pagedelete", array("id"=>$data->id))')
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