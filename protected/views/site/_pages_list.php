<div class="column" style="width:220px; position: relative; margin: 0 0 0 12px; text-align: center">
    <a href="javascript:LoadPage('<?php echo Yii::app()->baseUrl . '/' . $data->folder . $data->name; ?>');">
        <div style="position: absolute; width: 200px; height: 260px; border: solid 2px black; left: 8px"></div>
    </a>    
    <div style="text-align: center; color: navy; font-weight: bold; display: inline-block">
    <iframe src="<?php echo Yii::app()->baseUrl . '/' . $data->folder . $data->name; ?>#toolbar=0&navpanes=0" scrolling="no" frameborder="0" style="width: 200px; height: 262px; overflow: hidden;" marginheight="0" marginwidth="0"></iframe><br/>
    <a href="javascript:LoadPage('<?php echo Yii::app()->baseUrl . '/' . $data->folder . $data->name; ?>');">Page - <?php echo str_replace('.pdf', '', $data->name); ?></a>
    </div>
</div>
