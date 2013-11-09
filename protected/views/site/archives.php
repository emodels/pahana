<?php $this->pageTitle=Yii::app()->name . ' - Archives';?>
<script type="text/javascript">
    $(document).ready(function(){
        $('.sf-menu li').removeClass('current');
        $('#li_archives').addClass('current');
    });
</script>
<section id="content">
    <div class="wrapper-after" style="padding: 10px; position: relative">
        <h1 style="font-size: 22px; padding: 10px 0 10px 0">Newspaper Archives</h1>
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
            <div class="row">
                <div class="column" style="width: 50px">Year</div>
                <div class="column" style="width: 120px">
                    <?php
                    $current_year = date("Y");
                    
                    for ($x = 0; $x < 10; $x++) {
                       $array_years[($current_year + $x)] = ($current_year + $x);
                    }
                    ?>
                    <?php echo $form->dropDownList($model, 'year', $array_years, array('empty'=>'Select', 'style'=>'width: 105px')); ?>
                </div>
                <div class="column" style="width: 50px">Month</div>
                <div class="column" style="width: 120px">
                    <?php
                    $array_months = array(1 => 'january',2 => 'february',3 => 'march',4 => 'april',5 => 'may',6 => 'june',7 => 'july',8 => 'august',9 => 'september',10 => 'october',11 => 'november',12 => 'december');
                    ?>
                    <?php echo $form->dropDownList($model, 'month', $array_months, array('empty'=>'Select', 'style'=>'width: 105px; text-transform: capitalize;')); ?>
                </div>
                <div class="column" style="width: 80px">Issue Type</div>
                <div class="column" style="width: 120px">
                    <?php echo $form->dropDownList($model, 'type', array(0 => 'Monthly Issue', 1 => 'Mid Monthly Issue'), array('empty'=>'Select', 'style'=>'width: 105px')); ?>
                </div>
                <div class="column" style="position: relative; top: -5px"><input type="submit" class="button" value="Search" style="padding: 2px 10px 2px 10px"/></div>
                <div class="clearfix"></div>
            </div>
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
                            'name'=>'View',
                            'type'=>'raw',
                            'value'=>'"<a href=\'" . Yii::app()->baseUrl . "/paper/id/$data->id\' target=\'_blank\'><img src=\'" . Yii::app()->baseUrl . "/images/view.png\'/></a>"',
                            'htmlOptions'=>array('style'=>'width: 50px; text-align: center')
                        ),
                )));
                ?>
                <div class="clearfix"></div>
            </div>
            <?php $this->endWidget(); ?>
        </div>
    </div>
</section>    