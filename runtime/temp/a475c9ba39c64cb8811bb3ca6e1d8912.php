<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:59:"D:\WWW\xhcms\home/../application/admin\view\field\info.html";i:1556161663;s:58:"D:\WWW\xhcms\application\admin\view\common\_container.html";i:1556258932;}*/ ?>
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
<input type="hidden" name="id" id="id" value="<?php echo $info['id']; ?>">
<input type="hidden" name="extend_id" id="extend_id" value="<?php echo $info['extend_id']; ?>">
	<div class="ibox-content layui-form">
		<div class="form-horizontal" id="CodeInfoForm">
			<div class="row">
				<div class="col-sm-10">
				<!-- form start -->
					<div class="form-group">
						<label class="col-sm-2 control-label">字段名：</label>
						<div class="col-sm-9">
							<input type="text" value="<?php echo $info['name']; ?>" id="name" name="name" class="form-control" placeholder="请输入字段名称">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">字段：</label>
						<div class="col-sm-9">
							<input type="text" value="<?php echo $info['field']; ?>" id="field" name="field" class="form-control" placeholder="请输入字段">
							<span class="help-block m-b-none">如果是地区三级联动请用|隔开 也支持一级  二级 如province|city|district</span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">字段类型：</label>
						<div class="col-sm-9">
							<select lay-ignore name="type" class="form-control" id="type">
								<option value="">请选择</option>
								<?php if(is_array($fieldList) || $fieldList instanceof \think\Collection || $fieldList instanceof \think\Paginator): $i = 0; $__LIST__ = $fieldList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
									<option value="<?php echo $key; ?>" <?php if($info['type'] == $key): ?>selected<?php endif; ?>><?php echo $vo['name']; ?></option>
								<?php endforeach; endif; else: echo "" ;endif; ?>
							</select>
							<span class="help-block m-b-none">注意下拉框、单选框、多选框数据类型是int，如需更改亲到数据库改</span>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">是否列表显示：</label>
						<div class="col-sm-9">
						<?php if(!isset($info['list_show'])){ $info['list_show'] = 1; }; ?>
							<input name="list_show" value="1" type="radio" <?php if($info['list_show'] == 1): ?>checked<?php endif; ?> title="是">
							<input name="list_show" value="0" type="radio" <?php if($info['list_show'] == 0): ?>checked<?php endif; ?> title="否">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">是否搜索：</label>
						<div class="col-sm-9">
						<?php if(!isset($info['is_search'])){ $info['is_search'] = 1; }; ?>
							<input name="is_search" value="1" type="radio" <?php if($info['is_search'] == 1): ?>checked<?php endif; ?> title="是">
							<input name="is_search" value="0" type="radio" <?php if($info['is_search'] == 0): ?>checked<?php endif; ?> title="否">
						</div>
					</div>
					

					
					<div class="form-group">
						<label class="col-sm-2 control-label">状态：</label>
						<div class="col-sm-9">
						<?php if(!isset($info['status'])){ $info['status'] = 1; }; ?>
							<input name="status" value="1" type="radio" <?php if($info['status'] == 1): ?>checked<?php endif; ?> title="正常">
							<input name="status" value="0" type="radio" <?php if($info['status'] == 0): ?>checked<?php endif; ?> title="禁用">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">字段显示位置：</label>
						<div class="col-sm-9">
							<select lay-ignore name="align" class="form-control" id="align">
								<option value="">请选择</option>
								<option value="left" <?php if($info['align'] == 'left'): ?>selected<?php endif; ?>>居左</option>
								<option value="center" <?php if($info['align'] == 'center'): ?>selected<?php endif; ?>>居中</option>
								<option value="right" <?php if($info['align'] == 'right'): ?>selected<?php endif; ?>>居右</option>
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">字段配置：</label>
						<div class="col-sm-9">
							<textarea id="config"  name="config"  class="form-control" placeholder="请输入字段配置"><?php echo $info['config']; ?></textarea>
							<span class="help-block m-b-none">名称|值|标签背景色，
							<span class="label label-primary">primary</span>
							<span class="label label-success">success</span>
							<span class="label label-info">info</span>
							<span class="label label-warning">warning</span>
							<span class="label label-danger">danger</span></span>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">字段默认值：</label>
						<div class="col-sm-9">
							<textarea id="default_value" name="block_name" class="form-control" placeholder="表单默认输入值"><?php echo $info['default_value']; ?></textarea>
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">字段说明：</label>
						<div class="col-sm-9">
							<textarea id="note" name="block_name" class="form-control" placeholder="请输入字段说明"><?php echo $info['note']; ?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">验证方式：</label>
						<div class="col-sm-9">
							<select lay-ignore name="validate" class="form-control" id="validate">
								<option value="">请选择</option>
								<option value="notEmpty" <?php if($info['validate'] == 'notEmpty'): ?>selected<?php endif; ?>>不为空</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">验证规则：</label>
						<div class="col-sm-6">
							<input type="text" id="rule" name="rule" value="<?php echo $info['rule']; ?>" class="form-control" placeholder="字段验证">
						</div>
						<div class="col-sm-2" style="margin-left:-30px;">
							<select lay-ignore name="ruleType" class="form-control" id="ruleType">
								<option value="">验证规则</option>
								<option value="/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/">邮箱</option>
								<option value="/^((ht|f)tps?):\/\/([\w\-]+(\.[\w\-]+)*\/)*[\w\-]+(\.[\w\-]+)*\/?(\?([\w\-\.,@?^=%&:\/~\+#]*)+)?/">网址</option>
								<option value="/^([1-9][0-9]*)+(.[0-9]{1,2})?$/">货币</option>
								<option value="/^[0-9]*$/">数字</option>
								<option value="/^1[34578]\d{9}$/">手机号</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">错误提示：</label>
						<div class="col-sm-9">
							<input type="text" id="message" name="message" value="<?php echo $info['message']; ?>" class="form-control" placeholder="请输入错误提示">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">排序：</label>
						<div class="col-sm-9">
							<input type="text" id="sortid" value="<?php echo $info['sortid']; ?>" name="sortid" class="form-control" placeholder="请输入排序号">
						</div>
					</div>
				<!-- form end -->
				</div>
			</div>
			<div class="row btn-group-m-t">
				<div class="col-sm-10">
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
<script src="__PUBLIC__/static/js/admin/Field.js?t=<?php echo rand(1000,9999)?>" charset="utf-8"></script>
<script src="__PUBLIC__/static/js/plugins/layui/layui.js?t=1498856285724" charset="utf-8"></script>
<script>
layui.config({dir: '__PUBLIC__/static/js/plugins/layui/'});
	layui.use(['layer', 'form'], function () {
	window.layer = layui.layer;
	window.form = layui.form();
});

$(function(){
	$("#ruleType").change(function(){
		val = $("#ruleType option:selected").val();
		$("#rule").val(val);
	});
})

</script>



</div>
<script src="__PUBLIC__/static/js/content.js?v=1.0.0"></script>

</body>
</html>
