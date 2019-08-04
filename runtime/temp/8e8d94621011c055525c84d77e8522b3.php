<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:61:"D:\WWW\xhcms\home/../application/admin\view\content\info.html";i:1557145214;s:58:"D:\WWW\xhcms\application\admin\view\common\_container.html";i:1556258932;}*/ ?>
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
<input type="hidden" name='content_id' id='content_id' value="<?php echo $info['content_id']; ?>" />
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
						<label class="col-sm-2 control-label">文章标题：</label>
						<div class="col-sm-9">
							<input type="text" id="title" value="<?php echo $info['title']; ?>" name="title" class="form-control" placeholder="请输入文章标题">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">所属栏目：</label>
						<div class="col-sm-9">
							<select lay-ignore name="class_id" class="form-control" id="class_id">
								<option value="">请选择</option>
								<?php $_result=db()->query('select class_id,class_name,pid from cd_catagory');if($_result)$_result = formartList(explode(",","class_id,pid,class_name,class_name"),$_result);foreach($_result as $key=>$sql):?>
									<option value="<?php echo $sql['class_id']; ?>" <?php if($info['class_id'] == $sql['class_id']): ?>selected<?php endif; ?>><?php echo $sql['class_name']; ?></option>
								<?php endforeach?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">缩略图：</label>
						<div class="col-sm-6">
							<input type="text" id="pic" value="<?php echo $info['pic']; ?>" name="pic" <?php echo hook('view_big_pic',['type'=>2]); ?> class="form-control" placeholder="请输入缩略图">
							<span class="help-block m-b-none">请先选择栏目，再上传才能生成相应的缩略图</span>
						</div>
						<div class="col-sm-2" style="position:relative; right:30px;">
							<span id="pic_upload"></span>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">文章详情：</label>
						<div class="col-sm-9">
							<script id="detail" type="text/plain" name="detail" style="width:100%;height:300px;"><?php echo $info['detail']; ?></script>
							<script type="text/javascript">
								var ue = UE.getEditor('detail');
								scaleEnabled:true
							</script>
						</div>
					</div>
					<div id="extend"></div>
							<!-- form end -->
							</div>
						</div>
						<div class="layui-tab-item">
							<div class="col-sm-12">
							<!-- form start -->
					<div class="form-group">
						<label class="col-sm-2 control-label">文章状态：</label>
						<div class="col-sm-9">
							<?php if(!isset($info['status'])){ $info['status'] = 10; }; ?>
							<input name="status" value="10" type="radio" <?php if($info['status'] == '10'): ?>checked<?php endif; ?> title="发布">
							<input name="status" value="danger" type="radio" <?php if($info['status'] == 'danger'): ?>checked<?php endif; ?> title="不发布">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">推荐位：</label>
						<div class="col-sm-9">
							<?php $_result=db('position')->where("")->select();if($_result)foreach($_result as $key=>$query):?>
							<input name="position" value="<?php echo $query['position_id']; ?>" type="checkbox" <?php if(in_array($query['position_id'],explode(',',$info['position']))): ?>checked<?php endif; ?> title="<?php echo $query['title']; ?>">
							<?php endforeach;else?><?php echo "";?>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">跳转：</label>
						<div class="col-sm-9">
							<input type="text" id="jumpurl" value="<?php echo $info['jumpurl']; ?>" name="jumpurl" class="form-control" placeholder="请输入跳转">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">发布时间：</label>
						<div class="col-sm-9">
							<input type="text" value="<?php if($info['create_time'] != ''): ?><?php echo date('Y-m-d H:i:s',$info['create_time']); else: ?><?php echo date('Y-m-d H:i:s'); endif; ?>" name="create_time"  placeholder="请输入发布时间" class="form-control layer-date" onclick="laydate({istime: true, format: 'YYYY-MM-DD hh:mm:ss'})" id="create_time">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">关键词：</label>
						<div class="col-sm-9">
							<input type="text" id="keyword" value="<?php echo $info['keyword']; ?>" name="keyword" class="form-control" placeholder="请输入关键词">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">描述：</label>
						<div class="col-sm-9">
							<textarea id="description" name="description"  class="form-control" placeholder="请输入描述"><?php echo $info['description']; ?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">浏览量：</label>
						<div class="col-sm-9">
							<input type="text" id="views" value="<?php echo $info['views']; ?>" name="views" class="form-control" placeholder="请输入浏览量">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">排序：</label>
						<div class="col-sm-9">
							<?php if(!isset($info['sortid'])){ $info['sortid'] = '100'; }; ?>
							<input type="text" id="sortid" value="<?php echo $info['sortid']; ?>" name="sortid" class="form-control" placeholder="请输入排序">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">来源：</label>
						<div class="col-sm-9">
							<?php if(!isset($info['author'])){ $info['author'] = 'admin'; }; ?>
							<input type="text" id="author" value="<?php echo $info['author']; ?>" name="author" class="form-control" placeholder="请输入来源">
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
				<div class="col-sm-10">
					<button type="button" class="btn btn-primary" onclick="<?php if($info['content_id'] != ''): ?>CodeInfoDlg.update()<?php else: ?>CodeInfoDlg.add()<?php endif; ?>" id="ensure">
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
<script src="__PUBLIC__/static/js/admin/Content.js?t=<?php echo rand(1000,9999)?>" charset="utf-8"></script>
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
	$('#class_id').change(function() {
		uploader('pic_upload','pic','image',false,'','<?php echo url("admin/Upload/uploadImages"); ?>?class_id=' + $("#class_id option:selected").val()); //此段主要是为了加载当前class_id  否则可以不用写
		var ajax = new $ax(Feng.ctxPath + "/Content/getExtends", function (data) {
			$("#extend").html(data.data);
			var fieldList = data.fieldList;
			for(var p in fieldList){
				//单图上传
				if(fieldList[p]['type'] == 8){
					uploader(fieldList[p]['field']+'_upload',fieldList[p]['field'],'image',false,'','<?php echo url("admin/Upload/uploadImages"); ?>');
				}
				//多图上传
				if(fieldList[p]['type'] == 9){
					var images = $("#"+fieldList[p]['field']).val();
					var default_value;
					var images = images.substr(0,images.length-1);
					
					if(images !== ''){
						var images_value;
						if(images.indexOf("|") == -1){
							images_value = '["'+images+'"]';
						}else{
							images_value = JSON.stringify(images.split("|"));
						}
						default_value = images_value;				
					}else{
						default_value = '';
					}
					
					uploader(fieldList[p]['field']+'_upload',fieldList[p]['field'],'image',true,default_value,'<?php echo url("admin/Upload/uploadImages"); ?>');
				}
				//文件上传
				if(fieldList[p]['type'] == 10){				
					uploader(fieldList[p]['field']+'_upload',fieldList[p]['field'],'file',false,'','<?php echo url("admin/Upload/uploadImages"); ?>');
				}
				
				layui.config({dir: '__PUBLIC__/static/js/plugins/layui/'});
					layui.use(['layer', 'form'], function () {
					window.layer = layui.layer;
					form = layui.form();
					form.render();
				});
				
				
			}
			
		});
		ajax.set('class_id', $(this).find('option:selected').val());
		ajax.set('content_id', $("#content_id").val());
		ajax.start();
	})
	<?php if($info['content_id'] != ''): ?>
	$('#class_id').change();
	<?php endif; ?>
})

</script>



</div>
<script src="__PUBLIC__/static/js/content.js?v=1.0.0"></script>

</body>
</html>
