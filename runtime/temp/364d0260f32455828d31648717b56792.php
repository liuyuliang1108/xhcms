<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:62:"D:\WWW\xhcms\home/../application/admin\view\catagory\info.html";i:1557145214;s:58:"D:\WWW\xhcms\application\admin\view\common\_container.html";i:1556258932;}*/ ?>
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
<input type="hidden" name='class_id' id='class_id' value="<?php echo $info['class_id']; ?>" />
	<div class="ibox-content layui-form">
		<div class="form-horizontal" id="CodeInfoForm">
			<div class="row" style="margin-top:-20px;">
				<div class="layui-tab layui-tab-brief" lay-filter="test">
					<ul class="layui-tab-title">
						<li class="layui-this">基本信息</li>
						<li>拓展信息</li>
					</ul>
					<div class="layui-tab-content" style="margin-top:10px;">
						<div class="layui-tab-item layui-show">
							<div class="col-sm-12">
							<!-- form start -->
					<div class="form-group">
						<label class="col-sm-2 control-label">所属父级：</label>
						<div class="col-sm-9">
							<select lay-ignore name="pid" class="form-control" id="pid">
								<option value="">请选择</option>
								<?php $_result=db()->query('select class_id,class_name,pid from cd_catagory');if($_result)$_result = formartList(explode(",","class_id,pid,class_name,class_name"),$_result);foreach($_result as $key=>$sql):?>
									<option value="<?php echo $sql['class_id']; ?>" <?php if($info['pid'] == $sql['class_id']): ?>selected<?php endif; ?>><?php echo $sql['class_name']; ?></option>
								<?php endforeach?>
							</select>
							<span class="help-block m-b-none">当前栏目的上级分类</span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">分类名称：</label>
						<div class="col-sm-9">
							<input type="text" id="class_name" value="<?php echo $info['class_name']; ?>" name="class_name" class="form-control" placeholder="请输入分类名称">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">栏目属性：</label>
						<div class="col-sm-9">
							<?php if(!isset($info['type'])){ $info['type'] = 1; }; ?>
							<input name="type" value="1" type="radio" <?php if($info['type'] == '1'): ?>checked<?php endif; ?> title="频道">
							<input name="type" value="2" type="radio" <?php if($info['type'] == '2'): ?>checked<?php endif; ?> title="列表">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">栏目模板：</label>
						<div class="col-sm-6">
							<input type="text" id="list_tpl" value="<?php echo $info['list_tpl']; ?>" name="list_tpl" class="form-control" placeholder="请输入栏目模板">
						</div>
						<div class="col-sm-3" style="margin-left:-30px;">
							<select lay-ignore class="form-control" target="#list_tpl">
								<option value="">请选择</option>
								<?php if(is_array($tpList) || $tpList instanceof \think\Collection || $tpList instanceof \think\Paginator): if( count($tpList)==0 ) : echo "" ;else: foreach($tpList as $key=>$vo): ?>
								<option value="<?php echo $vo['name']; ?>"><?php echo $vo['file']; ?></option>
								<?php endforeach; endif; else: echo "" ;endif; ?>			
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">内容模板：</label>
						<div class="col-sm-6">
							<input type="text" id="detail_tpl" value="<?php echo $info['detail_tpl']; ?>" name="detail_tpl" class="form-control" placeholder="请输入内容模板">
						</div>
						<div class="col-sm-3" style="margin-left:-30px;">
							<select lay-ignore class="form-control" target="#detail_tpl">
								<option value="">请选择</option>
								<?php if(is_array($tpList) || $tpList instanceof \think\Collection || $tpList instanceof \think\Paginator): if( count($tpList)==0 ) : echo "" ;else: foreach($tpList as $key=>$vo): ?>
								<option value="<?php echo $vo['name']; ?>"><?php echo $vo['file']; ?></option>
								<?php endforeach; endif; else: echo "" ;endif; ?>								
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">栏目图片：</label>
						<div class="col-sm-6">
							<input type="text" id="pic" value="<?php echo $info['pic']; ?>" name="pic" <?php echo hook('view_big_pic',['type'=>2]); ?> class="form-control" placeholder="请输入栏目图片">
						</div>
						<div class="col-sm-2" style="position:relative; right:30px;">
							<span id="pic_upload"></span>
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
						<label class="col-sm-2 control-label">绑定模型：</label>
						<div class="col-sm-9">
							<select lay-ignore name="module_id" class="form-control" id="module_id">
								<option value="">请选择</option>
								<?php $_result=db()->query('select extend_id,title from cd_extend where type = 1');if($_result)foreach($_result as $key=>$sql):?>
									<option value="<?php echo $sql['extend_id']; ?>" <?php if($info['module_id'] == $sql['extend_id']): ?>selected<?php endif; ?>><?php echo $sql['title']; ?></option>
								<?php endforeach?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">上传配置：</label>
						<div class="col-sm-9">
							<select lay-ignore name="module_id" class="form-control" id="upload_config_id">
								<option value="">请选择</option>
								<?php $_result=db()->query('select id,title from cd_config_upload where status = 1');if($_result)foreach($_result as $key=>$sql):?>
									<option value="<?php echo $sql['id']; ?>" <?php if($info['upload_config_id'] == $sql['id']): ?>selected<?php endif; ?>><?php echo $sql['title']; ?></option>
								<?php endforeach?>
							</select>
						</div>
					</div>
							<!-- form end -->
							</div>
						</div>
						<div class="layui-tab-item">
							<div class="col-sm-12">
							<!-- form start -->
					<div class="form-group">
						<label class="col-sm-2 control-label">副标题：</label>
						<div class="col-sm-9">
							<input type="text" id="subtitle" value="<?php echo $info['subtitle']; ?>" name="subtitle" class="form-control" placeholder="请输入副标题">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">文件路径：</label>
						<div class="col-sm-9">
							<input type="text" id="filepath" value="<?php echo $info['filepath']; ?>" name="filepath" class="form-control" placeholder="请输入文件保存路径">
							<span class="help-block m-b-none">静态化生成的文件路径 斜杠 /开头</span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">生成文件名：</label>
						<div class="col-sm-9">
							<?php if(!isset($info['filename'])){ $info['filename'] = 'index.html'; }; ?>
							<input type="text" id="filename" value="<?php echo $info['filename']; ?>" name="filename" class="form-control" placeholder="请输入文件名">
							<span class="help-block m-b-none">静态化生成的文件名</span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">栏目关键词：</label>
						<div class="col-sm-9">
							<input type="text" id="keyword" value="<?php echo $info['keyword']; ?>" name="keyword" class="form-control" placeholder="请输入栏目关键词">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">栏目描述：</label>
						<div class="col-sm-9">
							<textarea id="description" name="description"  class="form-control" placeholder="请输入栏目描述"><?php echo $info['description']; ?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">跳转地址：</label>
						<div class="col-sm-9">
							<input type="text" id="jumpurl" value="<?php echo $info['jumpurl']; ?>" name="jumpurl" class="form-control" placeholder="请输入跳转地址">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">排序：</label>
						<div class="col-sm-9">
							<input type="text" id="sortid" value="<?php echo $info['sortid']; ?>" name="sortid" class="form-control" placeholder="请输入排序">
						</div>
					</div>
							<!-- form end -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="hr-line-dashed"></div>
			<div class="row btn-group-m-t">
				<div class="col-sm-9 col-sm-offset-1">
					<button type="button" class="btn btn-primary" onclick="<?php if($info['class_id'] != ''): ?>CodeInfoDlg.update()<?php else: ?>CodeInfoDlg.add()<?php endif; ?>" id="ensure">
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
<script src="__PUBLIC__/static/js/admin/Catagory.js?t=<?php echo rand(1000,9999)?>" charset="utf-8"></script>
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
uploader('pic_upload','pic','image',false,'','<?php echo url("admin/Upload/uploadImages"); ?>');

$(function(){
	$("select").change(function(){
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
