<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:60:"D:\WWW\xhcms\home/../application/admin\view\login\index.html";i:1555211715;}*/ ?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="noindex,nofollow" />
<title><?php echo config('site_title'); ?></title>
<link rel="stylesheet" href="__PUBLIC__/static/login/css/login.css"/>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="renderer" content="webkit"/><!-- 让360浏览器默认选择webkit内核 -->
<!-- 全局js -->
<script src="__PUBLIC__/static/js/jquery.min.js?v=2.1.4"></script>
<script src="__PUBLIC__/static/js/plugins/layer/layer.min.js"></script>
<script src="__PUBLIC__/static/js/common/ajax-object.js"></script>
<script src="__PUBLIC__/static/js/common/Feng.js"></script>
</head>
<body>
<div id="loginTopBar" class="tips_3 mt_5">友情提示：为保证后台账号安全，建议在不使用后台时 <span class=font_red>关闭浏览器</span> 或者 点击后台的 <span class=font_red>退出</span> 按钮。</div>
<div class="wrapper_login">
<div class="section_left">
<div id="loginRandomBG"></div>
</div>
<div class="section_right">
<div class="bg0">
<div class="logo_login"><h1>网站后台管理系统</h1></div>
<dl class="loginF">
<dt class="t">请输入<span class="font_blue">用户名:</span></dt>
<dd class="f"><input name="username" id="username" type="text" class="field_t1"></dd>
<dt class="t">请输入<span class="font_blue">密码:</span></dt>
<dd class="f"><input name="password" id="password" type="password" class="field_t1"></dd>
<dt class="t">请输入<span class="font_blue">验证码:</span></dt>
<dd class="f"><input name="verify" id="averfiy" type="text" class="field_t2"><img src="/admin/Login/Verify" onClick="this.src=this.src+'?'+Math.random()" alt="点击刷新验证码" id="img" style=" margin-left:10px; cursor:pointer"></dd>
<dt class="b"><input name="提交" id="submit" type="button" onClick="login()" class="btn_login0" value="登录">&nbsp;&nbsp;<input name="重置" type="reset" class="btn_login1" onclick="reset()" value="重置"></dt>
</dl>
</div>
</div>
<div class="clearLoginBottom"></div>
<?php echo hook('login', array('name'=>'heyingmin','value'=>'')); ?>
</div>

<script type="text/javascript">
document.onkeydown = function(e){ 
	var ev = document.all ? window.event : e;
	if(ev.keyCode==13) {
	  login();
	}
};

$('#username').focus();

function login(){
	var username = $("#username").val();
	var password = $("#password").val();
	var verify = $("#averfiy").val();
	
	if(!username || !password){
		Feng.info("请输入用户名或者密码！");
	    return false;
	}
	
	if(!verify){
		Feng.info("请输入验证码！");
	    return false;
	}
	
	var ajax = new $ax(Feng.ctxPath + "/admin/Login", function (data) {
		if (1 === data.code) {
			Feng.success(data.msg);
			$("#submit").val('正在登陆');
			window.location.href= data.url;
		} else {
			$("#img").attr('src','/admin/Login/Verify');
			Feng.error(data.msg);
		}
		
	});
	ajax.set('username',username);
	ajax.set('password',password);
	ajax.set('verify',verify);
	ajax.start();
}

function reset(){
	$("#username").val('');
	$("#password").val('')
	$("#averfiy").val('')
}

</script>

</body>
</html>