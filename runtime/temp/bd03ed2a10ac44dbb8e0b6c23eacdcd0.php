<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:61:"D:\WWW\xhcms\home/../application/admin\view\do_html\info.html";i:1556598567;s:58:"D:\WWW\xhcms\application\admin\view\common\_container.html";i:1556258932;}*/ ?>
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
	<div class="ibox-title">
		<h5>静态生成</h5>
		<button style="float:right; margin-top:-10px;" title="刷新页面" type="button" class="btn btn-default btn-outline" onclick="window.location.reload()" id="">
			<i class="fa fa-refresh"></i>
		</button>
	</div>
	<div class="ibox-content layui-form">
		<div class="form-horizontal" id="CodeInfoForm">
			<div class="row">
				<div class="col-sm-7">
				<!-- form start -->
					<div class="form-group">
						<label class="col-sm-2 control-label">首页模板：</label>
						<div class="col-sm-3">
							<input type="text" id="index_tpl" value="index" name="index_tpl" class="form-control" placeholder="请输入内容模板">
						</div>
						<div class="col-sm-3" style="margin-left:-30px;">
							<select lay-ignore id="tplSelect" class="form-control" target="#index_tpl">
								<option value="">请选择</option>
								<?php if(is_array($tpList) || $tpList instanceof \think\Collection || $tpList instanceof \think\Paginator): if( count($tpList)==0 ) : echo "" ;else: foreach($tpList as $key=>$vo): ?>
								<option value="<?php echo $vo['name']; ?>"><?php echo $vo['file']; ?></option>
								<?php endforeach; endif; else: echo "" ;endif; ?>								
							</select>
						</div>
					</div>
					
				<!-- form end -->
				</div>
			</div>
			<div class="row btn-group-m-t">
				<div class="col-sm-9">
					<button type="button" class="btn btn-primary" onclick="CodeInfoDlg.doIndex()" id="ensure">
						<i class="fa fa-check"></i>&nbsp;生成首页
					</button>
				</div>
			</div>
			<div class="hr-line-dashed"></div>
			<div class="row" style="margin-top:20px;">
				<div class="col-sm-7">
				<!-- form start -->
					<div class="form-group">
						<label class="col-sm-2 control-label">请选择栏目：</label>
						<div class="col-sm-6">
							<select lay-ignore class="form-control" id="list_class_id">
								<option value="">请选择栏目</option>
								<?php $_result=db()->query('select class_id,class_name,pid from cd_catagory');if($_result)$_result = formartList(explode(",","class_id,pid,class_name,class_name"),$_result);foreach($_result as $key=>$sql):?>
								<option value="<?php echo $sql['class_id']; ?>"><?php echo $sql['class_name']; ?></option>
								<?php endforeach?>
							</select>
							<span class="help-block m-b-none">默认不选择则更新全部栏目</span>
						</div>
					</div>
					
				<!-- form end -->
				</div>
			</div>
			<div class="row btn-group-m-t">
				<div class="col-sm-9">
					<button type="button" class="btn btn-primary" onclick="CodeInfoDlg.doList()" id="ensure">
						<i class="fa fa-check"></i>&nbsp;生成列表页
					</button>
				</div>
			</div>
			<div class="hr-line-dashed"></div>
			<div class="row" style="margin-top:20px;">
				<div class="col-sm-7">
				<!-- form start -->
					<div class="form-group">
						<label class="col-sm-2 control-label">请选择栏目：</label>
						<div class="col-sm-6">
							<select lay-ignore class="form-control" id="view_class_id">
								<option value="">请选择栏目</option>
								<?php $_result=db()->query('select class_id,class_name,pid from cd_catagory');if($_result)$_result = formartList(explode(",","class_id,pid,class_name,class_name"),$_result);foreach($_result as $key=>$sql):?>
								<option value="<?php echo $sql['class_id']; ?>"><?php echo $sql['class_name']; ?></option>
								<?php endforeach?>
							</select>
							<span class="help-block m-b-none">默认不选择则更新全部栏目</span>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">起始ID：</label>
						<div class="col-sm-6">
							<input type="text" id="startId"  name="startId" class="form-control" placeholder="请输入起始ID">
						</div>
					</div>
					
					
					<div class="form-group">
						<label class="col-sm-2 control-label">结束ID：</label>
						<div class="col-sm-6">
							<input type="text" id="endId"  name="endId" class="form-control" placeholder="请输入结束ID">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">每次更新条数：</label>
						<div class="col-sm-6">
							<input type="text" id="pagesize"  name="pagesize" value="20" class="form-control" placeholder="每页更新条数">
						</div>
					</div>
				<!-- form end -->
				</div>
			</div>
			<div class="row btn-group-m-t">
				<div class="col-sm-9">
					<button type="button" class="btn btn-primary" onclick="CodeInfoDlg.doView()" id="ensure">
						<i class="fa fa-check"></i>&nbsp;生成详情页
					</button>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="__PUBLIC__/static/js/admin/Html.js?t=<?php echo rand(1000,9999)?>" charset="utf-8"></script>
<script src="__PUBLIC__/static/js/plugins/layui/layui.js?t=1498856285724" charset="utf-8"></script>
<script>
layui.config({dir: '__PUBLIC__/static/js/plugins/layui/'});
	layui.use(['layer', 'form'], function () {
	window.layer = layui.layer;
	window.form = layui.form();
});
$(function(){
	$("#tplSelect").change(function(){
		pick = $(this).attr('target');
		var val = $(this).find('option:selected').val();
		$(pick).val(val);
	});
})
</script>



</div>
<script src="__PUBLIC__/static/js/content.js?v=1.0.0"></script>

</body>
</html>
