<section id="content">
    <div class="wrapper-after" style="padding: 10px; position: relative">
        <h1 style="font-size: 22px; padding: 10px 0 10px 0">Add / Delete PDF Pages and Publish Newspaper</h1>
        <div class="row">
            <div class="column" style="width: 150px"><b>Year</b></div>
            <div><?php echo $model->year; ?></div>
        </div>     
        <div class="row">
            <div class="column" style="width: 150px"><b>Month</b></div>
            <div><?php echo date("F", mktime(0, 0, 0, $model->month, 10)); ?></div>
        </div>     
        <div class="row">
            <div class="column" style="width: 150px"><b>Issue Type</b></div>
            <div><?php echo $model->type == 0 ? 'Monthly Issue' : 'Mid Monthly Issue'; ?></div>
        </div>     
        <div class="row">
            <div class="column" style="width: 150px"><b>Number of Pages</b></div>
            <div><?php echo $model->page_count; ?></div>
        </div>     
        <div class="form" style="padding-top: 20px">
            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'add-page-form',
                'enableClientValidation' => true,
                'clientOptions' => array(
                    'validateOnSubmit' => true,
                    'validateOnChange' => true
                ),
            ));
            ?>            
            <div class="row">
                <div class="column">
                    <?php $this->widget('ext.EAjaxUpload.EAjaxUpload',
                    array(
                        'id'=>'upload_pdf',
                        'config'=>array(
                            'action'=>Yii::app()->createUrl('admin/upload',array('id'=>$model->id, 'type'=>$model->type, 'month'=>$model->month, 'year'=>$model->year)),
                            'allowedExtensions'=>array("pdf"),
                            'sizeLimit'=>100*1024*1024,
                            'onComplete'=>'js:function(){$.fn.yiiGridView.update("grid_pages")}'
                        )
                    )); ?>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row" style="margin-top: -90px">
                <?php
                $this->widget('zii.widgets.grid.CGridView', array(
                    'id' => 'grid_pages',
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
            <div class="row" style="padding-top: 10px">
                <div class="column"><input type="submit" value="Publish Newspaper" class="button" style="padding: 10px; font-size: 20px; cursor: pointer"/></div>
                <div class="clearfix"></div>
            </div>
            <?php $this->endWidget(); ?>
        </div>
    </div>
</section>    