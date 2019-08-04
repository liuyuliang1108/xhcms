<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:69:"D:\phpStudy\WWW\xhcms\home/../application/index\view\index\about.html";i:1556813246;s:62:"D:\phpStudy\WWW\xhcms\application\index\view\index\header.html";i:1556813246;s:60:"D:\phpStudy\WWW\xhcms\application\index\view\index\left.html";i:1556813246;s:60:"D:\phpStudy\WWW\xhcms\application\index\view\index\foot.html";i:1556813246;}*/ ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=7">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $media['title']; ?></title>
<meta name="keywords" content="<?php echo $media['keywords']; ?>">
<meta name="description" content="<?php echo $media['description']; ?>">
<link href="__PUBLIC__/static/cms/css/HituxBlue/inner.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/static/cms/css/HituxBlue/common.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/static/cms/qqkefu/HituxBlue/qq_right.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="__PUBLIC__/static/cms/js/jquery.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/static/cms/js/functions.js"></script>
<script type="text/javascript" src="__PUBLIC__/static/cms/images/iepng/iepngfix_tilebg.js"></script>
</head>

<body>
<div id="wrapper">

<!--head start-->
<div id="head">

<!--top start -->
<div class="top">
<div class="TopInfo"><div class="link"><a onclick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://www.wellcard.cn');" href="#">设为首页</a> | <a href="javascript:window.external.AddFavorite('http://www.wellcard.cn','有数配件')">加入收藏</a></div>
</div>
<div class="clearfix"></div>
<div class="TopLogo">
<div class="logo"><a href="/"><img src="<?php echo config('site_logo'); ?>" alt="有数配件"></a></div>
<!--<div class="tel">
<div class="SearchBar">
<form method="get" action="/Search/index.asp">
				<input type="text" name="q" id="search-text" size="15" onBlur="if(this.value=='') this.value='请输入关键词';" 
onfocus="if(this.value=='请输入关键词') this.value='';" value="请输入关键词" /><input type="submit" id="search-submit" value="搜索" />
			</form>
</div>
</div>-->
<div class="tel">
<div class="SearchBar">
<form method="get" action="#">
				<input type="text" name="q" id="search-text" size="15" onBlur="if(this.value=='') this.value='请输入关键词';" 
onfocus="if(this.value=='请输入关键词') this.value='';" value="请输入关键词" /><input type="submit" id="search-submit" value="搜索" />
			</form>
</div>
</div>
</div>

</div>
<!--top end-->


<!--nav start-->
<div id="NavLink">
<div class="NavBG">
<!--Head Menu Start-->
<ul id='sddm'>
<li class='CurrentLi'><a href='/'>首  页</a></li> 
<?php $_result=db('catagory')->field('class_id,class_name,jumpurl,filepath,filename')->where(" pid=0 ")->order('sortid asc')->limit(6)->select();if($_result)foreach($_result as $key=>$class):$class["url"]=getClassUrl($class); ?>
<li>
<a href='<?php echo $class['url']; ?>' onmouseover=mopen('m<?php echo $key+1; ?>') onmouseout='mclosetime()'><?php echo $class['class_name']; ?></a> 
 <div id='m<?php echo $key+1; ?>' onmouseover='mcancelclosetime()' onmouseout='mclosetime()'>
 <?php $_result=db('catagory')->field('class_id,class_name,jumpurl,filepath,filename')->where(" pid=$class[class_id] ")->order('sortid asc')->select();if($_result)foreach($_result as $key=>$class):$class["url"]=getClassUrl($class); ?>
 <a href='<?php echo $class['url']; ?>'><?php echo $class['class_name']; ?></a>
 <?php endforeach;else?><?php echo "";?>
 </div>

</li> 
<?php endforeach;else?><?php echo "";?>
</ul>
<!--Head Menu End-->
</div>
<div class="clearfix"></div>
</div>
<!--nav end-->

</div>
<!--head end-->
<!--body start-->
<div id="body">
<!--focus start-->
<div id="InnerBanner">

</div>
<!--foncus end-->
<div class="HeightTab clearfix"></div>
<!--inner start -->
<div class="inner">
<!--left start-->
<div class="left">
<div class="Sbox">
<div class="topic"><?php echo $pname; ?></div>
<div class="blank"><ul>
<?php $_result=db('catagory')->field('class_id,class_name,jumpurl,filepath,filename')->where(" pid=$pid ")->order('sortid asc')->select();if($_result)foreach($_result as $key=>$class):$class["url"]=getClassUrl($class); ?>
<li><A href='<?php echo $class['url']; ?>'><?php echo $class['class_name']; ?></A></li>
<?php endforeach;else?><?php echo "";?>
</ul></div>
</div>
<div class="HeightTab clearfix"></div>
<div class="Sbox">
<div class="topic">最新资讯&nbsp;&nbsp;&nbsp;New</div>
<div class="list">
<dl>
<?php $_result=db('content')->field('content_id,title,pic,jumpurl,create_time')->where(" class_id in (9,9) and status = 10")->order('sortid desc,content_id desc')->limit(4)->select();if($_result)foreach($_result as $key=>$newslist):$newslist["url"]=getListUrl($newslist); $newslist["spic"]=getSpic($newslist); ?>
<dt><?php echo date("Y/m/d",$newslist['create_time']); ?></dt><dd><a href='<?php echo $newslist['url']; ?>' target='_blank'><?php echo $newslist['title']; ?></a></dd>
<?php endforeach;else?><?php echo "";?>
</dl>
</div>

</div>
<div class="HeightTab clearfix"></div>
<div class="Sbox">
<div class="topic">搜索&nbsp;&nbsp;&nbsp;Search</div>
<div class="SearchBar">
<form method="get" action="#">
				<input type="text" name="q" id="search-text" size="15" onBlur="if(this.value=='') this.value='请输入关键词';" 
onfocus="if(this.value=='请输入关键词') this.value='';" value="请输入关键词" /><input type="submit" id="search-submit" value="搜索" />
			</form>
</div>
</div>
</div>
<!--left end-->
<!--right start-->
<div class="right">
<div class="Position"><span><?php echo $position; ?></span></div>
<div class="HeightTab clearfix"></div>
<!--main start-->
<div class="main">

<!--content start-->
<div class="content">
<div class="maincontent clearfix">
<div id="MainContent" class="maincontent clearfix">
<?php echo $info['detail']; ?>
</div>
</div>
</div>

</div>
<!--content end-->

</div>
<!--main end-->
</div>
<!--right end-->
</div>
<!--inner end-->
</div>
<!--body end-->
<div class="HeightTab clearfix"></div>
<!--footer start-->
<div id="footer">
<div class="inner">
<p>
 <?php $sig=$_result=db('frament')->field('content,pic')->where("frament_id = 2")->find(); echo $sig['content'];?>
</p>
</div>
</div>
<!--footer end -->


</div>
<script type="text/javascript">
window.onerror=function(){return true;}
</script>
</body>
</html>
<!--
Powered By HuiguerCMS ASP V3.6   
-->




