<section id="content">
    <div class="wrapper-after" style="padding: 10px; position: relative">
        <h1 style="font-size: 22px; padding: 10px 0 10px 0">Update Newspaper</h1>
        <div class="form">
            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'update-paper-form',
                'enableClientValidation' => true,
                'clientOptions' => array(
                    'validateOnSubmit' => true,
                    'validateOnChange' => true
                ),
            ));
            ?>            
            <div class="row">
                <div class="column" style="width: 150px">Year</div>
                <div class="column">
                    <?php
                    $current_year = date("Y") - 5;
                    
                    for ($x = 0; $x < 10; $x++) {
                       $array_years[($current_year + $x)] = ($current_year + $x);
                    }
                    ?>
                    <?php echo $form->dropDownList($model, 'year', $array_years, array('empty'=>'Select', 'style'=>'width: 305px')); ?>
                    <?php echo $form->error($model, 'year', array('style'=>'width: auto')); ?>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <div class="column" style="width: 150px">Month</div>
                <div class="column">
                    <?php
                    $array_months = array(1 => 'january',2 => 'february',3 => 'march',4 => 'april',5 => 'may',6 => 'june',7 => 'july',8 => 'august',9 => 'september',10 => 'october',11 => 'november',12 => 'december');
                    ?>
                    <?php echo $form->dropDownList($model, 'month', $array_months, array('empty'=>'Select', 'style'=>'width: 305px; text-transform: capitalize;')); ?>
                    <?php echo $form->error($model, 'month', array('style'=>'width: auto')); ?>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <div class="column" style="width: 150px">Issue Type</div>
                <div class="column">
                    <?php echo $form->dropDownList($model, 'type', array(0 => 'Monthly Issue', 1 => 'Mid Monthly Issue'), array('empty'=>'Select', 'style'=>'width: 305px')); ?>
                    <?php echo $form->error($model, 'type', array('style'=>'width: auto')); ?>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <div class="column" style="width: 150px">Number of Pages</div>
                <div class="column">
                    <?php echo $form->textField($model, 'page_count', array('style'=>'width: 300px')); ?>
                    <?php echo $form->error($model, 'page_count', array('style'=>'width: auto')); ?>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <div class="column" style="width: 150px">Status</div>
                <div class="column">
                    <?php echo $form->dropDownList($model, 'status', array(0 => 'Not-Published', 1 => 'Published'), array('empty'=>'Select', 'style'=>'width: 305px')); ?>
                    <?php echo $form->error($model, 'status', array('style'=>'width: auto')); ?>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row" style="padding-top: 10px">
                <div class="column" style="width: 150px">&nbsp;</div>
                <div class="column"><input type="submit" value="Update Newspaper" class="button" style="padding: 10px; font-size: 20px; cursor: pointer"/>&nbsp;&nbsp;&nbsp;<input type="button" value="Add / Delete PDF Pages" class="button" onclick="javascript:window.document.location.replace('<?php echo Yii::app()->baseUrl; ?>/admin/addpages/<?php echo $model->id; ?>');" style="padding: 10px; font-size: 20px; cursor: pointer"/></div>
                <div class="clearfix"></div>
            </div>
            <?php $this->endWidget(); ?>
        </div>
    </div>
</section>    