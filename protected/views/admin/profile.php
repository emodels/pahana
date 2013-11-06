<script type="text/javascript">
    $(document).ready(function(){
        $('.sf-menu li').removeClass('current');
        $('#li_profile').addClass('current');
    });
</script>
<section id="content">
    <div class="wrapper-after" style="padding: 10px; position: relative">
        <h1 style="font-size: 22px; padding: 10px 0 10px 0">Update Profile</h1>
        <div class="form">
            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'update-profile-form',
                'enableClientValidation' => true,
                'clientOptions' => array(
                    'validateOnSubmit' => true,
                    'validateOnChange' => true
                ),
            ));
            ?>            
            <div class="row" style="padding-top: 10px">
                <div class="column" style="padding-top: 5px; width: 200px"><b>First Name</b></div>
                <div class="column"><?php echo $form->textField($model, 'first_name'); ?><?php echo $form->error($model, 'first_name'); ?></div>
                <div class="clearfix"></div>
            </div>
            <div class="row" style="padding-top: 10px">
                <div class="column" style="padding-top: 5px; width: 200px"><b>Last Name</b></div>
                <div class="column"><?php echo $form->textField($model, 'last_name'); ?><?php echo $form->error($model, 'last_name'); ?></div>
                <div class="clearfix"></div>
            </div>
            <div class="row" style="padding-top: 10px">
                <div class="column" style="padding-top: 5px; width: 200px"><b>Email</b></div>
                <div class="column"><?php echo $form->textField($model, 'email'); ?><?php echo $form->error($model, 'email'); ?></div>
                <div class="clearfix"></div>
            </div>
            <div class="row" style="padding-top: 10px">
                <div class="column" style="padding-top: 5px; width: 200px"><b>User Name</b></div>
                <div class="column"><?php echo $form->textField($model, 'username'); ?><?php echo $form->error($model, 'username'); ?></div>
                <div class="clearfix"></div>
            </div>
            <div class="row" style="padding-top: 10px">
                <div class="column" style="padding-top: 5px; width: 200px"><b>Password</b></div>
                <div class="column"><?php echo $form->passwordField($model, 'password'); ?><?php echo $form->error($model, 'password'); ?></div>
                <div class="clearfix"></div>
            </div>
            <div class="row" style="padding-top: 10px">
                <div class="column" style="padding-top: 5px; width: 200px"><b>Confirm Password</b></div>
                <div class="column"><?php echo $form->passwordField($model, 'conf_password'); ?><?php echo $form->error($model, 'conf_password'); ?></div>
                <div class="clearfix"></div>
            </div>
            <div class="row buttons" style="padding-top: 10px">
                <div class="column" style="padding-left: 208px"><?php echo CHtml::submitButton('Update Profile', array('class' => 'button', 'style' => 'padding: 10px; font-size: 20px; cursor: pointer; width:155px')); ?></div>
                <div class="clearfix"></div>
            </div>    
            <?php $this->endWidget(); ?>
        </div>
    </div>
</section>    