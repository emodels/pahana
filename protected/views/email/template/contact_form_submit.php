<html>
    <body>    
        <div style="position: relative; padding: 10px"> 
            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                    <td style="text-align: left">
                        <p>
                            Dear Site Admin, <br/><br/>New contact enquiry received with following information on <?php echo Yii::app()->dateFormatter->formatDateTime(time(), 'short'); ?>
                            <br/>
                            <br/>Best regards,  
                            <br/><br/><img src="<?php echo 'http://'. ((Yii::app()->request->getServerName() == 'localhost' || Yii::app()->request->getServerName() == '54.243.210.21') ? Yii::app()->request->getServerName() . '/pahana' : Yii::app()->request->getServerName()); ?>/images/logo.png" style="width: 150px"/>
                        </p>
                    </td>
                </tr>
            </table>    
        </div>    
        <div style="position: relative; padding: 20px; margin-left: 10px; border: solid 1px silver; background: #f7f7f7; border-radius: 10px; font-size: 15px; width: 100%">
            <table border="0" cellpadding="2" cellspacing="2" width="100%">
                <tr>
                    <td style="width: 200px"><b>Name</b></td>
                    <td><?php echo $model->name; ?></td>
                </tr>
                <tr>
                    <td style="width: 200px"><b>Email</b></td>
                    <td><?php echo $model->email; ?></td>
                </tr>
                <tr>
                    <td style="width: 200px"><b>Subject</b></td>
                    <td><?php echo $model->subject; ?></td>
                </tr>
                <tr>
                    <td style="width: 200px"><b>Message</b></td>
                    <td><?php echo $model->body; ?></td>
                </tr>
            </table>
        </div>
    </body>
</html>