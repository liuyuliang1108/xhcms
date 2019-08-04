<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:61:"D:\WWW\xhcms\home/../application/admin\view\extend\index.html";i:1556170061;s:58:"D:\WWW\xhcms\application\admin\view\common\_container.html";i:1556258932;}*/ ?>
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
	
<div class="row">
	<div class="col-sm-12">
		<div class="ibox float-e-margins">
			<div class="ibox-title">
				<h5>栏目拓展模型</h5>
				<button style="float:right; margin-top:-10px;" title="刷新页面" type="button" class="btn btn-default btn-outline" onclick="window.location.reload()" id="">
					<i class="fa fa-refresh"></i>
				</button>
			</div>
			<div class="ibox-content">
				<div class="row row-lg">
					<div class="col-sm-12">
						<div class="row" id="searchGroup">
							<!-- search start -->
							<div class="col-sm-2">
								<div class="input-group">
									<div class="input-group-btn">
										<button data-toggle="dropdown" class="btn btn-white dropdown-toggle" type="button">名称</button>
									</div>
									<input type="text" class="form-control" id="title" placeholder="名称" />
								</div>
							</div>
							<div class="col-sm-2">
								<div class="input-group">
									<div class="input-group-btn">
										<button data-toggle="dropdown" class="btn btn-white dropdown-toggle" type="button">表名</button>
									</div>
									<input type="text" class="form-control" id="table_name" placeholder="表名" />
								</div>
							</div>
							<div class="col-sm-2">
								<div class="input-group">
									<div class="input-group-btn">
										<button data-toggle="dropdown" class="btn btn-white dropdown-toggle" type="button">类别</button>
									</div>
									<select class="form-control" id="type">
										<option value="">请选择</option>
										<option value="1">内容拓展模型</option>
										<option value="2">表单模型</option>
									</select>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="input-group">
									<div class="input-group-btn">
										<button data-toggle="dropdown" class="btn btn-white dropdown-toggle" type="button">状态</button>
									</div>
									<select class="form-control" id="status">
										<option value="">请选择</option>
										<option value="10">正常</option>
										<option value="0">禁用</option>
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
							<?php if(in_array('/admin/Extend/add',session('admin.nodes')) || session('admin.role') == 1): ?>
							<button type="button" id="add" class="btn btn-primary button-margin" onclick="CodeGoods.add()">
								<i class="fa fa-plus"></i>&nbsp;添加
							</button>
							<?php endif; if(in_array('/admin/Extend/update',session('admin.nodes')) || session('admin.role') == 1): ?>
							<button type="button" id="update" class="btn btn-primary button-margin" onclick="CodeGoods.update()">
								<i class="fa fa-edit"></i>&nbsp;修改
							</button>
							<?php endif; if(in_array('/admin/Extend/delete',session('admin.nodes')) || session('admin.role') == 1): ?>
							<button type="button" id="delete" class="btn btn-danger button-margin" onclick="CodeGoods.delete()">
								<i class="fa fa-trash"></i>&nbsp;删除
							</button>
							<?php endif; if(in_array('/admin/Field/index',session('admin.nodes')) || session('admin.role') == 1): ?>
							<button type="button" id="fieldlist" class="btn btn-primary button-margin" onclick="CodeGoods.fieldlist()">
							<i class="fa fa-plus"></i>&nbsp;字段管理
							</button>
							<?php endif; ?>
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
 			{field: 'selectItem', radio: true},
 			{title: '编号', field: 'extend_id', visible: true, align: 'center', valign: 'middle'},
 			{title: '名称', field: 'title', visible: true, align: 'center', valign: 'middle'},
 			{title: '表名', field: 'table_name', visible: true, align: 'center', valign: 'middle'},
 			{title: '类别', field: 'type', visible: true, align: 'center', valign: 'middle',formatter: 'CodeGoods.typeFormatter'},
 			{title: '状态', field: 'status', visible: true, align: 'center', valign: 'middle',formatter: 'CodeGoods.statusFormatter'},
			{title: '排序', field: 'sortid', visible: true, align: 'center', valign: 'middle',formatter: 'CodeGoods.sortFormatter'},
 			{title: '操作', field: 'extend_id', visible: true, align: 'center', valign: 'middle',formatter: 'CodeGoods.buttonFormatter'},
 		];
 	};

	CodeGoods.buttonFormatter = function(value,row,index) {
		if(value){
			var str= '';
			str += '<button type="button" class="btn btn-primary btn-xs" title="字段管理"  onclick="CodeGoods.fieldlist('+value+')"><i class="fa fa-outdent"></i></button>&nbsp;'
			str += '<button type="button" class="btn btn-primary btn-xs" title="修改"  onclick="CodeGoods.update('+value+')"><i class="fa fa-edit"></i></button>&nbsp;'
			str += '<button type="button" class="btn btn-danger btn-xs" title="删除"  onclick="CodeGoods.delete('+value+')"><i class="fa fa-trash"></i></button>&nbsp;'
			return str;
		}
	}
	
	CodeGoods.sortFormatter = function(value,row,index) {
		return '<input type="text" value="'+value+'" onblur="CodeGoods.upsort('+row.extend_id+',this.value)" style="width:50px; border:1px solid #ddd; text-align:center">';
	}
	
	CodeGoods.upsort = function(id,sortid)
    {
		var ajax = new $ax(Feng.ctxPath + "/Extend/updateSort", function (data) {
			if ('00' === data.status) {
			} else {
				Feng.error(data.msg);
			}
		});
		ajax.set('sortid', sortid);
		ajax.set('extend_id', id);
		ajax.start();
    }
	
	CodeGoods.arrowFormatter = function(value,row,index) {
		return '<i class="fa fa-long-arrow-up" onclick="CodeGoods.sort('+value+',1)" style="cursor:pointer;" title="上移"></i>&nbsp;<i class="fa fa-long-arrow-down" style="cursor:pointer;" onclick="CodeGoods.sort('+value+',2)"  title="下移"></i>';
	}
	
	CodeGoods.sort = function (value,type) {
		var ajax = new $ax(Feng.ctxPath + "/Extend/setSort", function (data) {
			if ('00' === data.status) {
					Feng.success(data.msg);
					CodeGoods.table.refresh();
			} else {
				Feng.error(data.msg);
			}
		});
		ajax.set('extend_id', value);
		ajax.set('type', type);
		ajax.start();
	}

	CodeGoods.typeFormatter = function(value,row,index) {
		if(value !== null){
			var value = value.toString();
			switch(value){
				case '1':
					return '<span class="label label-primary">内容拓展模型</span>';
				break;
				case '2':
					return '<span class="label label-success">表单模型</span>';
				break;
			}
		}
	}

	CodeGoods.statusFormatter = function(value,row,index) {
		if(value !== null){
			var value = value.toString();
			switch(value){
				case '10':
					return '<span class="label label-primary">正常</span>';
				break;
				case '0':
					return '<span class="label label-danger">禁用</span>';
				break;
			}
		}
	}

	CodeGoods.formParams = function() {
		var queryData = {};
		queryData['title'] = $("#title").val();
		queryData['table_name'] = $("#table_name").val();
		queryData['type'] = $("#type").val();
		queryData['status'] = $("#status").val();
		return queryData;
	}

	CodeGoods.check = function () {
		var selected = $('#' + this.id).bootstrapTable('getSelections');
		if(selected.length == 0){
			Feng.info("请先选中表格中的某一记录！");
			return false;
		}else{
			CodeGoods.seItem = selected[0];
			return true;
		}
	};

	CodeGoods.add = function (value) {
		var url = location.search;
		var index = layer.open({type: 2,title: '创建数据',area: ['800px', '550px'],fix: false, maxmin: true,content: Feng.ctxPath + '/Extend/add'+url});
		this.layerIndex = index;
	}


	CodeGoods.update = function (value) {
		if(value){
			var index = layer.open({type: 2,title: '编辑数据',area: ['800px', '550px'],fix: false, maxmin: true,content: Feng.ctxPath + '/Extend/update/extend_id/'+value});
		}else{
			if (this.check()) {
				var index = layer.open({type: 2,title: '编辑数据',area: ['800px', '550px'],fix: false, maxmin: true,content: Feng.ctxPath + '/Extend/update/extend_id/'+this.seItem.extend_id});
				this.layerIndex = index;
			}
		}
	}


	CodeGoods.delete = function (value) {
		if(value){
			Feng.confirm("是否删除选中项？", function () {
				var ajax = new $ax(Feng.ctxPath + "/Extend/delete", function (data) {
					if ('00' === data.status) {
						Feng.success(data.msg);
						CodeGoods.table.refresh();
					} else {
						Feng.error(data.msg);
					}
				});
				ajax.set('ids', value);
				ajax.start();
			});
		}else{
			if (this.check()) {
				
				Feng.confirm("是否删除选中项？", function () {
					var ajax = new $ax(Feng.ctxPath + "/Extend/delete", function (data) {
						if ('00' === data.status) {
							Feng.success(data.msg);
							CodeGoods.table.refresh();
						} else {
							Feng.error(data.msg);
						}
					});
					ajax.set('ids', this.seItem.extend_id);
					ajax.start();
				});
			}
		}
	}
	
	CodeGoods.fieldlist = function (value) {
		if(value){
			var index = layer.open({type: 2,title: '字段管理',area: ['99%', '99%'],fix: false, maxmin: true,content: Feng.ctxPath + '/Field/index/extend_id/'+value});
		}else{
			if (this.check()) {
				var index = layer.open({type: 2,title: '字段管理',area: ['99%', '99%'],fix: false, maxmin: true,content: Feng.ctxPath + '/Field/index/extend_id/'+this.seItem.extend_id});
				this.layerIndex = index;
			}
		}
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
		var defaultColunms = CodeGoods.initColumn();
		var url = location.search;
		var table = new BSTable(CodeGoods.id, Feng.ctxPath+"/Extend/index"+url,defaultColunms,20);
		table.setPaginationType("server");
		table.setQueryParams(CodeGoods.formParams());
		CodeGoods.table = table.init();
	});
</script>

</div>
<script src="__PUBLIC__/static/js/content.js?v=1.0.0"></script>

</body>
</html>
