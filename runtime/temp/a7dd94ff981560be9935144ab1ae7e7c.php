<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:58:"D:\WWW\xhcms\home/../application/admin\view\node\info.html";i:1556768021;s:58:"D:\WWW\xhcms\application\admin\view\common\_container.html";i:1556258932;}*/ ?>
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
						<label class="col-sm-2 control-label">所属分组：</label>
						<div class="col-sm-9">
							<select lay-ignore name="pid" class="form-control" id="pid">
								<option value="">请选择</option>
								<?php $_result=db()->query('select id,title,pid from cd_node');if($_result)$_result = formartList(explode(",","id,pid,title,title"),$_result);foreach($_result as $key=>$sql):?>
									<option value="<?php echo $sql['id']; ?>" <?php if($info['pid'] == $sql['id']): ?>selected<?php endif; ?>><?php echo $sql['title']; ?></option>
								<?php endforeach?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">中文名称：</label>
						<div class="col-sm-9">
							<input type="text" id="title" value="<?php echo $info['title']; ?>" name="title" class="form-control" placeholder="请输入中文名称">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">英文名称：</label>
						<div class="col-sm-9">
							<input type="text" id="val" value="<?php echo $info['val']; ?>" name="val" class="form-control" placeholder="请输入英文名称">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">排序：</label>
						<div class="col-sm-9">
							<?php if(!isset($info['sortid'])){ $info['sortid'] = 100; }; ?>
							<input type="text" id="sortid" value="<?php echo $info['sortid']; ?>" name="sortid" class="form-control" placeholder="请输入排序">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">状态：</label>
						<div class="col-sm-9">
							<?php if(!isset($info['status'])){ $info['status'] = 10; }; ?>
							<input name="status" value="10" type="radio" <?php if($info['status'] == '10'): ?>checked<?php endif; ?> title="正常">
							<input name="status" value="1" type="radio" <?php if($info['status'] == '1'): ?>checked<?php endif; ?> title="禁用">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">是否左侧菜单：</label>
						<div class="col-sm-9">
							<?php if(!isset($info['is_menu'])){ $info['is_menu'] = 1; }; ?>
							<input name="is_menu" value="1" type="radio" <?php if($info['is_menu'] == '1'): ?>checked<?php endif; ?> title="是">
							<input name="is_menu" value="2" type="radio" <?php if($info['is_menu'] == '2'): ?>checked<?php endif; ?> title="否">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">图标：</label>
						<div class="col-sm-9">
							<input type="text" id="icon" value="<?php echo $info['icon']; ?>" name="icon" class="form-control" placeholder="请输入图标">
							<span class="help-block m-b-none"><a  target="_blank" style="color:#ff0000" onclick="CodeInfoDlg.icon('menu_icon')">点击查看图标列表 </a></span>
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
<script src="__PUBLIC__/static/js/admin/Node.js?t=<?php echo rand(1000,9999)?>" charset="utf-8"></script>
<script src="__PUBLIC__/static/js/upload.js" charset="utf-8"></script>
<script src="__PUBLIC__/static/js/plugins/layui/layui.js?t=1498856285724" charset="utf-8"></script>
<script>
layui.config({dir: '__PUBLIC__/static/js/plugins/layui/'});
	layui.use(['layer', 'form'], function () {
	window.layer = layui.layer;
	window.form = layui.form();
});
</script>



</div>
<script src="__PUBLIC__/static/js/content.js?v=1.0.0"></script>

</body>
</html>
