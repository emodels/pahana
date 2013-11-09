<?php $this->pageTitle = Yii::app()->name . ' - Contact Us'; ?>
<script type="text/javascript">
    $(document).ready(function(){
        $('.sf-menu li').removeClass('current');
        $('#li_contact').addClass('current');
    });
</script>
<section id="content">
    <div class="wrapper-after" style="padding: 10px; position: relative;">
        <h1 style="font-size: 22px; padding: 10px 0 25px 0">Contact Us</h1>
        <div style="font-size: 18px; padding-bottom: 10px"><strong>Mihirie Dissanayake</strong></div>
        <div><img src="images/telephone.png" style="padding-right: 20px"/>+ 61 41 454 6833</div>
        <div><img src="images/fax.png" style="padding-right: 20px"/>+ 61 03 9802 3651</div>
        <div><img src="images/email.png" style="padding-right: 20px"/><a href="mailto:mihirie@pahana.com.au" style="text-decoration: underline; color: #8c8c8c">mihirie@pahana.com.au</a> / <a href="mailto:info@pahana.com.au" style="text-decoration: underline; color: #8c8c8c">info@pahana.com.au</a></div>
        <p style="padding-top: 20px"><strong>If you have business inquiries or other questions, please fill out <br>the following form to contact us. Thank you.</strong></p>
        <div class="form">
            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'contac-form',
                'enableClientValidation' => true,
                'clientOptions' => array(
                    'validateOnSubmit' => true,
                    'validateOnChange' => true,
                ),
            ));
            ?>
            <div class="row">
                <div class="column" style="width: 90px"><label>Name</label></div>
                <div class="column"><?php echo $form->textField($model, 'name', array('style'=>'width: 347px')); ?><?php echo $form->error($model, 'name'); ?></div>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <div class="column" style="width: 90px"><label>Email</label></div>
                <div class="column"><?php echo $form->textField($model, 'email', array('style'=>'width: 347px')); ?><?php echo $form->error($model, 'email'); ?></div>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <div class="column" style="width: 90px"><label>Subject</label></div>
                <div class="column"><?php echo $form->textField($model, 'subject', array('style'=>'width: 347px')); ?><?php echo $form->error($model, 'subject'); ?></div>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <div class="column" style="width: 90px"><label>Message</label></div>
                <div class="column"><?php echo $form->textArea($model, 'body', array('rows' => 6, 'cols' => 30, 'style'=>'width:347px; height: 100px')); ?><?php echo $form->error($model, 'body'); ?></div>
                <div class="clearfix"></div>
            </div>
            <?php if (CCaptcha::checkRequirements()): ?>
            <div class="row">
                <div class="column" style="width: 90px"><label>Verify Code</label></div>
                <div class="column">
                    <?php $this->widget('CCaptcha'); ?><br/>
                    <?php echo $form->textField($model, 'verifyCode'); ?>
                    <div class="hint">Please enter the letters as they are shown in the image above. Letters are not case-sensitive.</div>
                    <?php echo $form->error($model, 'verifyCode'); ?>
                </div>
                <div class="clearfix"></div>
            </div>
            <?php endif; ?>
            <div class="row buttons">
                <div class="column" style="width: 90px">&nbsp;</div>
                <div class="column"><input type="submit" class="button" value="Submit" style="width: 152px"/></div>
                <div class="clearfix"></div>
            </div>
            <?php $this->endWidget(); ?>
        </div>
        <div style="position: absolute; top: 25px; right: 10px; z-index: 1000"><img src="images/contact_page_banner.jpg" /></div>
    </div>
</section>    
