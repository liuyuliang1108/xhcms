<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:67:"D:\WWW\xhcms\home/../application/admin\view\upload_config\info.html";i:1557145214;s:58:"D:\WWW\xhcms\application\admin\view\common\_container.html";i:1556258932;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit"/><!-- 让360浏览器默认选择webkit内核 -->

    <!-- 全局css -->
    <link rel="shortcut icon" href="__PUBLIC__/static/favicon.ico">
    <link href="__PUBLIC__/static/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="__PUBLIC__/static/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="__PUBLIC__/static/css/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">
    <link href="__PUBLIC__/static/css/plugins/validate/bootstrapValidator.min.css" rel="stylesheet">
    <link href="__PUBLIC__/static/css/animate.css" rel="stylesheet">
    <link href="__PUBLIC__/static/css/style.css?v=4.1.0" rel="stylesheet">
     <link rel="stylesheet" href="__PUBLIC__/static/js/plugins/layui/css/layui.css?ver=170803"  media="all">
    
    <link href="__PUBLIC__/static/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="__PUBLIC__/static/css/plugins/webuploader/webuploader.css" rel="stylesheet">
    <link href="__PUBLIC__/static/css/plugins/ztree/zTreeStyle.css" rel="stylesheet">
    <link href="__PUBLIC__/static/css/plugins/jquery-treegrid/css/jquery.treegrid.css" rel="stylesheet"/>
    <!-- <link href="__PUBLIC__/static/css/plugins/ztree/demo.css" rel="stylesheet"> -->

    <!-- 全局js -->
    <script src="__PUBLIC__/static/js/jquery.min.js?v=2.1.4"></script>
    <script src="__PUBLIC__/static/js/bootstrap.min.js?v=3.3.6"></script>
    <script src="__PUBLIC__/static/js/plugins/ztree/jquery.ztree.all.min.js"></script>
    <script src="__PUBLIC__/static/js/plugins/bootstrap-table/bootstrap-table.min.js"></script>
    <script src="__PUBLIC__/static/js/plugins/validate/bootstrapValidator.min.js"></script>
    <script src="__PUBLIC__/static/js/plugins/validate/zh_CN.js"></script>
    <script src="__PUBLIC__/static/js/plugins/bootstrap-table/bootstrap-table-mobile.min.js"></script>
    <script src="__PUBLIC__/static/js/plugins/bootstrap-table/locale/bootstrap-table-zh-CN.min.js"></script>
    <script src="__PUBLIC__/static/js/plugins/jquery-treegrid/js/jquery.treegrid.min.js"></script>
    <script src="__PUBLIC__/static/js/plugins/jquery-treegrid/js/jquery.treegrid.bootstrap3.js"></script>
    <script src="__PUBLIC__/static/js/plugins/jquery-treegrid/extension/jquery.treegrid.extension.js"></script>
    <script src="__PUBLIC__/static/js/plugins/layer/layer.min.js"></script>
    <script src="__PUBLIC__/static/js/plugins/iCheck/icheck.min.js"></script>
    <script src="__PUBLIC__/static/js/plugins/layer/laydate/laydate.js"></script>
    <script src="__PUBLIC__/static/js/plugins/webuploader/webuploader.min.js"></script>
    <script src="__PUBLIC__/static/js/common/ajax-object.js"></script>
    <script src="__PUBLIC__/static/js/common/bootstrap-table-object.js"></script>
    <script src="__PUBLIC__/static/js/common/tree-table-object.js"></script>
    <script src="__PUBLIC__/static/js/common/web-upload-object.js"></script>
    <script src="__PUBLIC__/static/js/common/ztree-object.js"></script>
    <script src="__PUBLIC__/static/js/common/Feng.js"></script>
	<script type="text/javascript" src="__PUBLIC__/static/js/ueditor/ueditor.config.js"></script>
	<script type="text/javascript" src="__PUBLIC__/static/js/ueditor/ueditor.all.min.js"> </script>
	<script type="text/javascript" src="__PUBLIC__/static/js/xheditor/xheditor-1.2.2.min.js"></script>
	<script type="text/javascript" src="__PUBLIC__/static/js/xheditor/xheditor_lang/zh-cn.js"></script>
    <script type="text/javascript">
		
        Feng.addCtx("<?php echo str_replace('.html','',url('@'.request()->module()))?>");
        Feng.sessionTimeoutRegistry();
    </script>
</head>

<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight">
	
<div class="ibox float-e-margins">
<input type="hidden" name='id' id='id' value="<?php echo $info['id']; ?>" />
	<div class="ibox-content layui-form">
		<div class="form-horizontal" id="CodeInfoForm">
			<div class="row">
				<div class="col-sm-12">
				<!-- form start -->
					<div class="form-group">
						<label class="col-sm-2 control-label">配置名称：</label>
						<div class="col-sm-9">
							<input type="text" id="title" value="<?php echo $info['title']; ?>" name="title" class="form-control" placeholder="请输入配置名称">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">覆盖同名文件：</label>
						<div class="col-sm-9">
							<?php if(!isset($info['upload_replace'])){ $info['upload_replace'] = 0; }; ?>
							<input name="upload_replace" value="1" type="radio" <?php if($info['upload_replace'] == '1'): ?>checked<?php endif; ?> title="开启">
							<input name="upload_replace" value="0" type="radio" <?php if($info['upload_replace'] == '0'): ?>checked<?php endif; ?> title="关闭">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">缩略图开关：</label>
						<div class="col-sm-9">
							<?php if(!isset($info['thumb_status'])){ $info['thumb_status'] = 0; }; ?>
							<input name="thumb_status" value="1" type="radio" <?php if($info['thumb_status'] == '1'): ?>checked<?php endif; ?> title="开启">
							<input name="thumb_status" value="0" type="radio" <?php if($info['thumb_status'] == '0'): ?>checked<?php endif; ?> title="关闭">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">水印开关：</label>
						<div class="col-sm-9">
							<?php if(!isset($info['water_status'])){ $info['water_status'] = 0; }; ?>
							<input name="water_status" value="1" type="radio" <?php if($info['water_status'] == '1'): ?>checked<?php endif; ?> title="开启">
							<input name="water_status" value="0" type="radio" <?php if($info['water_status'] == '0'): ?>checked<?php endif; ?> title="关闭">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">缩图方式：</label>
						<div class="col-sm-9">
							<?php if(!isset($info['thumb_type'])){ $info['thumb_status'] = 1; }; ?>
							<select lay-ignore name="thumb_type" class="form-control" id="thumb_type">
								<option value="">请选择</option>
								<option value="1" <?php if($info['thumb_type'] == 1): ?>selected<?php endif; ?>>等比例缩放</option>
								<option value="2" <?php if($info['thumb_type'] == 2): ?>selected<?php endif; ?>>缩放后填充</option>
								<option value="3" <?php if($info['thumb_type'] == 3): ?>selected<?php endif; ?>>居中裁剪</option>
								<option value="4" <?php if($info['thumb_type'] == 4): ?>selected<?php endif; ?>>左上角裁剪</option>
								<option value="5" <?php if($info['thumb_type'] == 5): ?>selected<?php endif; ?>>右下角裁剪</option>
								<option value="6" <?php if($info['thumb_type'] == 6): ?>selected<?php endif; ?>>固定尺寸缩放</option>

							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">缩放宽度：</label>
						<div class="col-sm-9">
							<input type="text" id="thumb_width" value="<?php echo $info['thumb_width']; ?>" name="thumb_width" class="form-control" placeholder="缩放宽度">
							<span class="help-block m-b-none">单位px</span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">缩放高度：</label>
						<div class="col-sm-9">
							<input type="text" id="thumb_height" value="<?php echo $info['thumb_height']; ?>" name="thumb_height" class="form-control" placeholder="缩放高度">
							<span class="help-block m-b-none">单位px</span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">水印位置：</label>
						<div class="col-sm-9">
							<?php if(!isset($info['water_position'])){ $info['thumb_status'] = 9; }; ?>
							<select lay-ignore name="water_position" class="form-control" id="water_position">
								<option value="">请选择</option>
								<option value="1" <?php if($info['water_position'] == 1): ?>selected<?php endif; ?>>左上角水印</option>
								<option value="2" <?php if($info['water_position'] == 2): ?>selected<?php endif; ?>>上居中水印</option>
								<option value="3" <?php if($info['water_position'] == 3): ?>selected<?php endif; ?>>右上角水印</option>
								<option value="4" <?php if($info['water_position'] == 4): ?>selected<?php endif; ?>>左居中水印</option>
								<option value="5" <?php if($info['water_position'] == 5): ?>selected<?php endif; ?>>居中水印</option>
								<option value="6" <?php if($info['water_position'] == 6): ?>selected<?php endif; ?>>右居中水印</option>
								<option value="7" <?php if($info['water_position'] == 7): ?>selected<?php endif; ?>>左下角水印</option>
								<option value="8" <?php if($info['water_position'] == 8): ?>selected<?php endif; ?>>下居中水印</option>
								<option value="9" <?php if($info['water_position'] == 9): ?>selected<?php endif; ?>>右下角水印</option>

							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">状态：</label>
						<div class="col-sm-9">
							<?php if(!isset($info['status'])){ $info['status'] = 1; }; ?>
							<input name="status" value="1" type="radio" <?php if($info['status'] == '1'): ?>checked<?php endif; ?> title="开启">
							<input name="status" value="0" type="radio" <?php if($info['status'] == '0'): ?>checked<?php endif; ?> title="关闭">
						</div>
					</div>
					
				<!-- form end -->
				</div>
			</div>
			<div class="hr-line-dashed"></div>
			<div class="row btn-group-m-t">
				<div class="col-sm-9 col-sm-offset-1">
					<button type="button" class="btn btn-primary" onclick="<?php if($info['id'] != ''): ?>CodeInfoDlg.update()<?php else: ?>CodeInfoDlg.add()<?php endif; ?>" id="ensure">
						<i class="fa fa-check"></i>&nbsp;确认提交
					</button>
					<button type="button" class="btn btn-danger" onclick="CodeInfoDlg.close()" id="cancel">
						<i class="fa fa-eraser"></i>&nbsp;取消
					</button>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="__PUBLIC__/static/js/admin/UploadConfig.js?t=<?php echo rand(1000,9999)?>" charset="utf-8"></script>
<script src="__PUBLIC__/static/js/upload.js" charset="utf-8"></script>
<script src="__PUBLIC__/static/js/plugins/layui/layui.js?t=1498856285724" charset="utf-8"></script>
<script>
layui.config({dir: '__PUBLIC__/static/js/plugins/layui/'});
	layui.use(['layer', 'form'], function () {
	window.layer = layui.layer;
	window.form = layui.form();
});
layui.use('element', function(){
	var element = layui.element();
	element.on('tab(test)', function(elem){
	});
});
</script>



</div>
<script src="__PUBLIC__/static/js/content.js?v=1.0.0"></script>

</body>
</html>
