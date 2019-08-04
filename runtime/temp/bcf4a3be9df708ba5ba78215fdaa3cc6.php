<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:61:"D:\WWW\xhcms\home/../application/admin\view\config\index.html";i:1557145214;s:58:"D:\WWW\xhcms\application\admin\view\common\_container.html";i:1556258932;}*/ ?>
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
	<div class="ibox-content layui-form">
		<div class="form-horizontal" id="CodeInfoForm">
			<div class="row">
				<div class="layui-tab layui-tab-brief" lay-filter="test">
					<ul class="layui-tab-title">
						<li class="layui-this">基本设置</li>
						<li>站点配置</li>
						<li>移动端配置</li>
						<li>上传配置</li>
						<li>邮箱配置</li>
						
					</ul>
					<div class="layui-tab-content" style="margin-top:10px;">
						<div class="layui-tab-item layui-show">
							<div class="col-sm-7">
							<!-- form start -->
								<div class="form-group">
									<label class="col-sm-2 control-label">站点名称：</label>
									<div class="col-sm-9">
										<input type="text" id="site_title" value="<?php echo $info['site_title']; ?>" name="site_title" class="form-control" placeholder="请输入站点名称">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">副标题：</label>
									<div class="col-sm-9">
										<input type="text" id="sub_title" value="<?php echo $info['sub_title']; ?>" name="sub_title" class="form-control" placeholder="请输入副标题">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">站点LOGO：</label>
									<div class="col-sm-5">
										<input type="text" id="site_logo" value="<?php echo $info['site_logo']; ?>" name="site_logo" <?php echo hook('view_big_pic',['type'=>2]); ?> class="form-control" placeholder="请输入站点LOGO">
									</div>
									<div class="col-sm-2" style="position:relative; right:30px;">
										<span id="site_logo_upload"></span>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">关键词站点：</label>
									<div class="col-sm-9">
										<input type="text" id="keyword" value="<?php echo $info['keyword']; ?>" name="keyword" class="form-control" placeholder="请输入关键词站点">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">站点描述：</label>
									<div class="col-sm-9">
										<textarea id="description" name="description"  class="form-control" placeholder="请输入站点描述"><?php echo $info['description']; ?></textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">站点版权：</label>
									<div class="col-sm-9">
										<input type="text" id="copyright" value="<?php echo $info['copyright']; ?>" name="copyright" class="form-control" placeholder="请输入站点版权">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">cnzz统计：</label>
									<div class="col-sm-9">
										<textarea id="cnzz" name="cnzz"  class="form-control" placeholder="请输入cnzz统计"><?php echo $info['cnzz']; ?></textarea>
									</div>
								</div>
					
							<!-- form end -->
							</div>
						</div>
						<div class="layui-tab-item">
							<div class="col-sm-7">
							<!-- form start -->
								<div class="form-group">
									<label class="col-sm-2 control-label">站点状态：</label>
									<div class="col-sm-9">
										<?php if(!isset($info['site_status'])){ $info['site_status'] = 1; }; ?>
										<input name="site_status" value="1" type="radio" <?php if($info['site_status'] == '1'): ?>checked<?php endif; ?> title="开启">
										<input name="site_status" value="2" type="radio" <?php if($info['site_status'] == '2'): ?>checked<?php endif; ?> title="关闭">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">关闭提示语：</label>
									<div class="col-sm-9">
										<textarea id="off_msg" name="off_msg"  class="form-control" placeholder="请输入站点关闭提示语"><?php echo $info['off_msg']; ?></textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">url形式：</label>
									<div class="col-sm-9">
										<?php if(!isset($info['url_type'])){ $info['url_type'] = 1; }; ?>
										<input name="url_type" value="1" type="radio" <?php if($info['url_type'] == '1'): ?>checked<?php endif; ?> title="伪静态">
										<input name="url_type" value="2" type="radio" <?php if($info['url_type'] == '2'): ?>checked<?php endif; ?> title="纯静态">
										<span class="help-block m-b-none">切换成伪静态需要删除根目录下的index.html 不然不生效</span>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">静态文件存储：</label>
									<div class="col-sm-9">
										<input type="text" id="filepath" value="<?php echo $info['filepath']; ?>" name="filepath" class="form-control" placeholder="请输入生成静态文件保存目录">
										<span class="help-block m-b-none">静态化生成保存的文件目录文件路径 斜杠 /开头</span>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">默认首页：</label>
									<div class="col-sm-9">
										<input type="text" id="index_name" value="<?php echo $info['index_name']; ?>" name="index_name" class="form-control" placeholder="默认首页生成静态文件名">
										<span class="help-block m-b-none">默认首页生成静态文件名</span>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">默认主题：</label>
									<div class="col-sm-6">
										<input type="text" id="default_themes" value="<?php echo $info['default_themes']; ?>" name="default_themes" class="form-control" placeholder="请输入默认主题模板">
									</div>
									<div class="col-sm-3" style="margin-left:-30px;">
										<select lay-ignore class="form-control themes" target="#default_themes">
											<option value="">请选择</option>
											<?php if(is_array($themesList) || $themesList instanceof \think\Collection || $themesList instanceof \think\Paginator): if( count($themesList)==0 ) : echo "" ;else: foreach($themesList as $key=>$vo): ?>
											<option value="<?php echo $vo['file']; ?>"><?php echo $vo['file']; ?></option>
											<?php endforeach; endif; else: echo "" ;endif; ?>								
										</select>
									</div>
								</div>
					
							<!-- form end -->
							</div>
						</div>
						<div class="layui-tab-item">
							<div class="col-sm-7">
							<!-- form start -->
								<div class="form-group">
									<label class="col-sm-2 control-label">移动端状态：</label>
									<div class="col-sm-9">
										<?php if(!isset($info['mobil_status'])){ $info['mobil_status'] = 2; }; ?>
										<input name="mobil_status" value="1" type="radio" <?php if($info['mobil_status'] == '1'): ?>checked<?php endif; ?> title="开启">
										<input name="mobil_status" value="2" type="radio" <?php if($info['mobil_status'] == '2'): ?>checked<?php endif; ?> title="关闭">
										<span class="help-block m-b-none">开启后才会渲染移动端模板</span>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">移动端主题：</label>
									<div class="col-sm-6">
										<input type="text" id="mobil_themes" value="<?php echo $info['mobil_themes']; ?>" name="mobil_themes" class="form-control" placeholder="请输入移动端主题">
									</div>
									<div class="col-sm-3" style="margin-left:-30px;">
										<select lay-ignore class="form-control themes" target="#mobil_themes">
											<option value="">请选择</option>
											<?php if(is_array($themesList) || $themesList instanceof \think\Collection || $themesList instanceof \think\Paginator): if( count($themesList)==0 ) : echo "" ;else: foreach($themesList as $key=>$vo): ?>
											<option value="<?php echo $vo['file']; ?>"><?php echo $vo['file']; ?></option>
											<?php endforeach; endif; else: echo "" ;endif; ?>								
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">绑定域名：</label>
									<div class="col-sm-9">
										<input type="text" id="mobil_domain" value="<?php echo $info['mobil_domain']; ?>" name="mobil_domain" class="form-control" placeholder="移动端访问域名">
										<span class="help-block m-b-none">移动端访问域名，如果没有为空 会直接主域名访问 无需带http://</span>
									</div>
								</div>
					
							<!-- form end -->
							</div>
						</div>
						<div class="layui-tab-item">
							<div class="col-sm-7">
							<!-- form start -->
								<div class="form-group">
									<label class="col-sm-2 control-label">上传文件大小：</label>
									<div class="col-sm-9">
										<input type="text" id="file_size" value="<?php echo $info['file_size']; ?>" name="file_size" class="form-control" placeholder="请输入上传文件大小">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">图片水印开关：</label>
									<div class="col-sm-9">
										<?php if(!isset($info['water_status'])){ $info['water_status'] = 1; }; ?>
										<input name="water_status" value="1" type="radio" <?php if($info['water_status'] == '1'): ?>checked<?php endif; ?> title="开启">
										<input name="water_status" value="0" type="radio" <?php if($info['water_status'] == '0'): ?>checked<?php endif; ?> title="关闭">
										<span class="help-block m-b-none">全局水印开关</span>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">水印logo：</label>
									<div class="col-sm-5">
										<input type="text" id="water_logo" value="<?php echo $info['water_logo']; ?>" name="water_logo" <?php echo hook('view_big_pic',['type'=>2]); ?> class="form-control" placeholder="请输入水印logo">
									</div>
									<div class="col-sm-2" style="position:relative; right:30px;">
										<span id="water_logo_upload"></span>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">文件类型：</label>
									<div class="col-sm-9">
										<textarea id="file_type" name="file_type"  class="form-control" placeholder="请输入文件类型"><?php echo $info['file_type']; ?></textarea>
									</div>
								</div>
							<!-- form end -->
							</div>
						</div>
						<div class="layui-tab-item">
							<div class="col-sm-7">
							<!-- form start -->
								<div class="form-group">
									<label class="col-sm-2 control-label">邮箱账号：</label>
									<div class="col-sm-9">
										<input type="text" id="email_user" value="<?php echo $info['email_user']; ?>" name="email_user" class="form-control" placeholder="请输入邮箱账号">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">邮箱密码：</label>
									<div class="col-sm-9">
										<input type="password" id="email_pwd" value="<?php echo $info['email_pwd']; ?>" name="email_pwd" class="form-control" placeholder="请输入邮箱密码">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">smtp服务器：</label>
									<div class="col-sm-9">
										<input type="text" id="smtp" value="<?php echo $info['smtp']; ?>" name="smtp" class="form-control" placeholder="请输入smtp服务器">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">端口：</label>
									<div class="col-sm-9">
										<input type="text" id="port" value="<?php echo $info['port']; ?>" name="port" class="form-control" placeholder="请输入端口">
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
				<div class="col-sm-7">
					<button type="button" class="btn btn-primary" onclick="CodeInfoDlg.index()" id="ensure">
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
<script src="__PUBLIC__/static/js/admin/Config.js?t=<?php echo rand(1000,9999)?>" charset="utf-8"></script>
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
		uploader('water_logo_upload','water_logo','image',false,'','<?php echo url("admin/Upload/uploadImages"); ?>');
	});
});

$(function(){
	$(".themes").change(function(){
		pick = $(this).attr('target');
		var val = $(this).find('option:selected').val();
		$(pick).val(val);
	});
})

uploader('site_logo_upload','site_logo','image',false,'','<?php echo url("admin/Upload/uploadImages"); ?>');
uploader('water_logo_upload','water_logo','image',false,'','<?php echo url("admin/Upload/uploadImages"); ?>');
</script>



</div>
<script src="__PUBLIC__/static/js/content.js?v=1.0.0"></script>

</body>
</html>
