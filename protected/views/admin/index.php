<section id="content">
    <div class="wrapper-after" style="padding: 10px; position: relative">
        <h1 style="font-size: 22px; padding: 10px 0 10px 0">Newspaper Listing</h1>
        <div class="form" style="padding-top: 20px">
            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'papers-form',
                'enableClientValidation' => true,
                'clientOptions' => array(
                    'validateOnSubmit' => true,
                    'validateOnChange' => true
                ),
            ));
            ?>            
            <div class="row" style="margin-top: -65px">
                <?php
                $this->widget('zii.widgets.grid.CGridView', array(
                    'id' => 'grid_papers',
                    'dataProvider' => $dataProvider,
                    'ajaxUpdate' => true,
                    'htmlOptions'=>array('style'=>'text-align: center'),
                    'enablePagination' => true,
                    'template'=>"{summary}{pager}<br>{items}{pager}",
                    'columns' => array(
                        array(
                            'name'=>'Year',
                            'value'=>'$data->year',
                            'htmlOptions'=>array('style'=>'text-align: center; font-weight: bold; color: navy')
                        ),
                        array(
                            'name'=>'Month',
                            'value'=>'date("F", mktime(0, 0, 0, $data->month, 10))',
                            'htmlOptions'=>array('style'=>'text-align: center; font-weight: bold; color: navy')
                        ),
                        array(
                            'name'=>'Issue Type',
                            'value'=>'$data->type == 0 ? "Monthly Issue" : "Mid Monthly Issue"',
                            'htmlOptions'=>array('style'=>'text-align: center; font-weight: bold; color: navy')
                        ),
                        array(
                            'name'=>'Number of Pages',
                            'value'=>'$data->page_count',
                            'htmlOptions'=>array('style'=>'text-align: center; font-weight: bold; color: navy')
                        ),
                        array(
                            'name'=>'Status',
                            'value'=>'$data->status == 0 ? "<img src=" . Yii::app()->baseUrl . "/images/pause.png title=Not-Published />" : "<img src=" . Yii::app()->baseUrl . "/images/ok.png title=Published />"',
                            'htmlOptions'=>array('style'=>'text-align: center'),
                            'type'=>'raw',
                        ),
                        array(
                            'name'=>'View',
                            'type'=>'raw',
                            'value'=>'"<a href=\'" . Yii::app()->baseUrl . "/property/id/$data->id\' target=\'_blank\'><img src=\'" . Yii::app()->baseUrl . "/images/view.png\'/></a>"',
                            'htmlOptions'=>array('style'=>'width: 50px; text-align: center')
                        ),
                        array(
                            'name'=>'Edit',
                            'type'=>'raw',
                            'value'=>'"<a href=\'" . Yii::app()->baseUrl . "/admin/edit/$data->id\'><img src=\'" . Yii::app()->baseUrl . "/images/edit.png\'/></a>"',
                            'htmlOptions'=>array('style'=>'width: 50px; text-align: center')
                        ),
                        array
                            (
                            'header'=>'Delete',
                            'class' => 'CButtonColumn',
                            'deleteConfirmation'=>"js:'Are you sure you want to delete this Paper?'",
                            'template' => '{delete}',
                            'buttons' => array(
                                'delete' => array('url' => 'Yii::app()->createUrl("admin/delete", array("id"=>$data->id))', 'imageUrl'=>'images/delete.png',)
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