<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:62:"D:\WWW\xhcms\home/../application/admin\view\content\index.html";i:1556598465;s:58:"D:\WWW\xhcms\application\admin\view\common\_container.html";i:1556258932;}*/ ?>
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
	
<style>
a {color:#666}
</style>
<div class="row ibox" style="background-color:#fff; margin-top:-15px;">
	<div class="col-sm-2" >
		<div class="ibox-title" style="border:none;">
			<h3 style="font-size:16px; color:#000; margin-bottom:10px;">栏目列表</h3>	
		</div>
		<ul id="treeList"></ul>
	</div>
	<div class="col-sm-10" style="border-left:10px solid #ddd;">
		<div class="float-e-margins">
			<div class="ibox-title" style="border:none;">
			<h3>文章列表</h3>	
		</div>
			<div class="ibox-content">
				<div class="row row-lg">
					<div class="col-sm-12">
						<div class="row" id="searchGroup">
							<!-- search start -->
							<div class="col-sm-3">
								<div class="input-group">
									<div class="input-group-btn">
										<button data-toggle="dropdown" class="btn btn-white dropdown-toggle" type="button">文章标题</button>
									</div>
									<input type="text" class="form-control" id="title" placeholder="文章标题" />
								</div>
							</div>
							<div class="col-sm-3">
								<div class="input-group">
									<div class="input-group-btn">
										<button data-toggle="dropdown" class="btn btn-white dropdown-toggle" type="button">所属栏目</button>
									</div>
									<select class="form-control" id="class_id">
										<option value="">请选择</option>
										<?php $_result=db()->query('select class_id,class_name,pid from cd_catagory');if($_result)$_result = formartList(explode(",","class_id,pid,class_name,class_name"),$_result);foreach($_result as $key=>$sql):?>
										<option value="<?php echo $sql['class_id']; ?>"><?php echo $sql['class_name']; ?></option>
										<?php endforeach?>
									</select>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="input-group">
									<div class="input-group-btn">
										<button data-toggle="dropdown" class="btn btn-white dropdown-toggle" type="button">文章状态</button>
									</div>
									<select class="form-control" id="status">
										<option value="">请选择</option>
										<option value="10">发布</option>
										<option value="danger">不发布</option>
									</select>
									
								</div>
							</div>
							<!-- search end -->
							<div class="col-sm-2">
									<button type="button" class="btn btn-primary " onclick="CodeGoods.search()" id="">
										<i class="fa fa-search"></i>&nbsp;搜索
									</button>
							</div>
						</div>
						<div id="CodeGoodsTableToolbar" role="group">
							<?php if(in_array('/admin/Content/add',session('admin.nodes')) || session('admin.role') == 1): ?>
							<button type="button" id="add" class="btn btn-primary button-margin" onclick="CodeGoods.add()">
								<i class="fa fa-plus"></i>&nbsp;添加
							</button>
							<?php endif; if(in_array('/admin/Content/update',session('admin.nodes')) || session('admin.role') == 1): ?>
							<button type="button" id="update" class="btn btn-primary button-margin" onclick="CodeGoods.update()">
								<i class="fa fa-edit"></i>&nbsp;修改
							</button>
							<?php endif; if(in_array('/admin/Content/setStatus',session('admin.nodes')) || session('admin.role') == 1): ?>
							<button type="button" id="setStatus" class="btn btn-success button-margin" onclick="CodeGoods.setStatus(1)">
								<i class="fa fa-edit"></i>&nbsp;发布
							</button>
							<?php endif; if(in_array('/admin/Content/setStatus',session('admin.nodes')) || session('admin.role') == 1): ?>
							<button type="button" id="setStatus" class="btn btn-success button-margin" onclick="CodeGoods.setStatus(2)">
								<i class="fa fa-edit"></i>&nbsp;草稿
							</button>
							<?php endif; if(in_array('/admin/Content/delete',session('admin.nodes')) || session('admin.role') == 1): ?>
							<button type="button" id="delete" class="btn btn-danger button-margin" onclick="CodeGoods.delete()">
								<i class="fa fa-trash"></i>&nbsp;删除
							</button>
							<?php endif; ?>
							<select style="border:1px solid #ddd;" class="btn" id="selectAction">
								<option value="">选择操作</option>
								<option value="100">移动</option>
								<?php $_result=db()->query('select position_id,title from cd_position');if($_result)foreach($_result as $key=>$sql):?>
								<option value="<?php echo $sql['position_id']; ?>"><?php echo $sql['title']; ?></option>
								<?php endforeach?>
							</select>
							<select style="border:1px solid #ddd;" class="btn" id="moveId">
								<option value="">移动至</option>
								<?php $_result=db()->query('select class_id,class_name,pid from cd_catagory');if($_result)$_result = formartList(explode(",","class_id,pid,class_name,class_name"),$_result);foreach($_result as $key=>$sql):?>
								<option value="<?php echo $sql['class_id']; ?>"><?php echo $sql['class_name']; ?></option>
								<?php endforeach?>
							</select>
							<button type="button" class="btn btn-primary button-margin" onclick="CodeGoods.do()" id="">
								<i class="fa fa-check"></i>&nbsp;确定
							</button>
						</div>
						<table id="CodeGoodsTable" data-mobile-responsive="true" data-click-to-select="true">
							<thead><tr><th data-field="selectItem" data-checkbox="true"></th></tr></thead>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	var CodeGoods = {id: "CodeGoodsTable",seItem: null,table: null,layerIndex: -1};

	CodeGoods.initColumn = function () {
 		return [
 			{field: 'selectItem', checkbox: true},
 			{title: '编号', field: 'content_id', visible: true, align: 'center', valign: 'middle'},
 			{title: '文章标题', field: 'title', visible: true, align: 'left', valign: 'middle'},
 			{title: '所属栏目', field: 'class_name', visible: true, align: 'center', valign: 'middle'},
 			{title: '文章状态', field: 'status', visible: true, align: 'center', valign: 'middle',formatter: 'CodeGoods.statusFormatter'},
			{title: '排序', field: 'sortid', visible: true, align: 'center', valign: 'middle',formatter: 'CodeGoods.sortFormatter'},
 			{title: '发布时间', field: 'create_time', visible: true, align: 'center', valign: 'middle',formatter: 'CodeGoods.create_timeFormatter'},
			{title: '操作', field: 'content_id', visible: true, align: 'center', valign: 'middle',formatter: 'CodeGoods.buttonFormatter'},	
 		];
 	};
	

	CodeGoods.buttonFormatter = function(value,row,index) {
		if(value){
			var str= '';
			str += '<button type="button" class="btn btn-primary btn-xs" title="修改"  onclick="CodeGoods.update('+value+')"><i class="fa fa-edit"></i></button>&nbsp;'
			str += '<button type="button" class="btn btn-danger btn-xs" title="删除"  onclick="CodeGoods.delete('+value+')"><i class="fa fa-trash"></i></button>&nbsp;'
			return str;
		}
	}
	
	CodeGoods.sortFormatter = function(value,row,index) {
		return '<input type="text" value="'+value+'" onblur="CodeGoods.upsort('+row.content_id+',this.value)" style="width:50px; border:1px solid #ddd; text-align:center">';
	}
	
	CodeGoods.upsort = function(content_id,sortid)
    {
		var ajax = new $ax(Feng.ctxPath + "/Content/updateSort", function (data) {
			if ('00' === data.status) {
			} else {
				Feng.error(data.msg);
			}
		});
		ajax.set('sortid', sortid);
		ajax.set('content_id', content_id);
		ajax.start();
    }
	
	CodeGoods.statusFormatter = function(value,row,index) {
		if(value !== null){
			var value = value.toString();
			switch(value){
				case '10':
					return '<span class="label label-primary">发布</span>';
				break;
				case '0':
					return '<span class="label label-danger">草稿</span>';
				break;
			}
		}
	}

	CodeGoods.create_timeFormatter = function(value,row,index) {
		if(value){
			return formatDateTime(value);	
		}
	}

	CodeGoods.formParams = function() {
		var queryData = {};
		queryData['title'] = $("#title").val();
		queryData['class_id'] = $("#class_id").val();
		queryData['status'] = $("#status").val();
		queryData['create_time'] = $("#create_time").val();
		return queryData;
	}

	CodeGoods.check = function () {
		var selected = $('#' + this.id).bootstrapTable('getSelections');
		if(selected.length == 0){
			Feng.info("请先选中表格中的某一记录！");
			return false;
		}else{
			CodeGoods.seItem = selected;
			return true;
		}
	};

	CodeGoods.add = function (value) {
		var url = location.search;
		var index = layer.open({type: 2,title: '创建数据',area: ['800px', '100%'],fix: false, maxmin: true,content: Feng.ctxPath + '/Content/add'+url});
		this.layerIndex = index;
	}


	CodeGoods.update = function (value) {
		if(value){
			var index = layer.open({type: 2,title: '编辑数据',area: ['800px', '100%'],fix: false, maxmin: true,content: Feng.ctxPath + '/Content/update/content_id/'+value});
		}else{
			if (this.check()) {
				var idx = '';

				$.each(CodeGoods.seItem, function() {
					idx += ',' + this.content_id;
				});

				idx = idx.substr(1);
				if(idx.indexOf(",") !== -1){
					Feng.info("请选择单条数据！");
					return false;
				}
				var index = layer.open({type: 2,title: '编辑数据',area: ['800px', '100%'],fix: false, maxmin: true,content: Feng.ctxPath + '/Content/update/content_id/'+idx});
				this.layerIndex = index;
			}
		}
	}


	CodeGoods.delete = function (value) {
		if(value){
			Feng.confirm("是否删除选中项？", function () {
				var ajax = new $ax(Feng.ctxPath + "/Content/delete", function (data) {
					if ('00' === data.status) {
						Feng.success(data.msg);
						CodeGoods.table.refresh();
					} else {
						Feng.error(data.msg);
					}
				});
				ajax.set('content_ids', value);
				ajax.start();
			});
		}else{
			if (this.check()) {
				var idx = '';

				$.each(CodeGoods.seItem, function() {
					idx += ',' + this.content_id;
				});

				idx = idx.substr(1);
				Feng.confirm("是否删除选中项？", function () {
					var ajax = new $ax(Feng.ctxPath + "/Content/delete", function (data) {
						if ('00' === data.status) {
							Feng.success(data.msg);
							CodeGoods.table.refresh();
						} else {
							Feng.error(data.msg);
						}
					});
					ajax.set('content_ids', idx);
					ajax.start();
				});
			}
		}
	}
	
	CodeGoods.do = function () {
		
		var type =  $("#selectAction option:selected").val();
		if(type == 100){
			CodeGoods.move();
		}else{
			CodeGoods.position(type);
		}
	}
	
	CodeGoods.move = function (value) {
		if (this.check()) {
			var idx = '';

			$.each(CodeGoods.seItem, function() {
				idx += ',' + this.content_id;
			});
			
			idx = idx.substr(1);
			
			var class_id = $("#moveId option:selected").val();
			if(class_id == ''){
				Feng.error('请选择移动到的栏目');
			}
			
			Feng.confirm("是否移动选中项？", function () {
				var ajax = new $ax(Feng.ctxPath + "/Content/move", function (data) {
					if ('00' === data.status) {
						Feng.success(data.message);
						CodeGoods.table.refresh();
					} else {
						Feng.error(data.msg);
					}
				});
				ajax.set('content_ids', idx);
				ajax.set('class_id', class_id);
				ajax.start();
			});
		}
		
	}
	
	CodeGoods.setStatus = function (value) {

		if (this.check()) {
			var idx = '';

			$.each(CodeGoods.seItem, function() {
				idx += ',' + this.content_id;
			});
			
			idx = idx.substr(1);
			
			Feng.confirm("是否移动选中项？", function () {
				var ajax = new $ax(Feng.ctxPath + "/Content/setStatus", function (data) {
					if ('00' === data.status) {
						Feng.success(data.message);
						CodeGoods.table.refresh();
					} else {
						Feng.error(data.msg);
					}
				});
				ajax.set('content_ids', idx);
				ajax.set('value', value);
				ajax.start();
			});
		}
		
	}
	
	CodeGoods.position = function (type) {
		if (this.check()) {
			var idx = '';

			$.each(CodeGoods.seItem, function() {
				idx += ',' + this.content_id;
			});
			
			idx = idx.substr(1);
		
			Feng.confirm("是否操作选中项？", function () {
				var ajax = new $ax(Feng.ctxPath + "/Content/setPosition", function (data) {
					if ('00' === data.status) {
						Feng.success(data.message);
						CodeGoods.table.refresh();
					} else {
						Feng.error(data.msg);
					}
				});
				ajax.set('content_ids', idx);
				ajax.set('position_id', type);
				ajax.start();
			});
		}
		
	}

	
	CodeGoods.delPosition = function (position_id,content_id) {
		Feng.confirm("确定删除推荐位吗", function () {
			var ajax = new $ax(Feng.ctxPath + "/Content/delPosition", function (data) {
				if ('00' === data.status) {
					Feng.success(data.message);
					CodeGoods.table.refresh();
				} else {
					Feng.error(data.msg);
				}
			});
			ajax.set('content_id', content_id);
			ajax.set('position_id', position_id);
			ajax.start();
		});
		
	}


	CodeGoods.search = function() {
		CodeGoods.table.refresh({query : CodeGoods.formParams()});
	};

	CodeGoods.orderby = function() {
		var queryData = CodeGoods.formParams();
		queryData['orderby'] = $("#orderby").val();
		CodeGoods.table.refresh({query : queryData});
	};

	$(function() {
		$("#moveId").hide();
		$('#selectAction').change(function() {
			var type = $(this).val();
			if(type == 100){
				$("#moveId").show();
			}else{
				$("#moveId").hide();
			}
		});

		var defaultColunms = CodeGoods.initColumn();
		var url = location.search;
		var table = new BSTable(CodeGoods.id, Feng.ctxPath+"/Content/index/"+url,defaultColunms,20);
		
		table.setPaginationType("server");
		table.setQueryParams(CodeGoods.formParams());
		CodeGoods.table = table.init();	
	});
	
	
	

	
		
</script>


<script src="__PUBLIC__/static/js/plugins/layui/layui.js?t=1498856285724" charset="utf-8"></script>
<script>
layui.config({dir: '__PUBLIC__/static/js/plugins/layui/'});
	layui.use(['layer'], function () {
	window.layer = layui.layer;
});
layui.use('tree', function(){
	layui.tree({
		elem: '#treeList',
		nodes: JSON.parse('<?php echo $catagoryInfo; ?>'),
		click:function(node) {
			var queryData = CodeGoods.formParams();
			queryData['class_id'] = node.id;
			CodeGoods.table.refresh({query : queryData});
		}
	});	
});

//监听指定开关
       

</script>


</div>
<script src="__PUBLIC__/static/js/content.js?v=1.0.0"></script>

</body>
</html>
