<h1>新增外部站连接</h1>
<div class="block">
	<h3><a href="<?php echo TCClick::app()->root_url, 'externalSites'?>">&lt;&lt; 返回外部站管理</a></h3>
	<?php $this->renderPartial('_form', array('user'=>$site))?>
</div>
