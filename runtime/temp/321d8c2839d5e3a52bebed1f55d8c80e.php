<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:69:"D:\phpStudy\WWW\xhcms\home/../application/index\view\index\index.html";i:1556969737;s:62:"D:\phpStudy\WWW\xhcms\application\index\view\index\header.html";i:1556813246;s:60:"D:\phpStudy\WWW\xhcms\application\index\view\index\foot.html";i:1556813246;}*/ ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=7">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $media['title']; ?></title>
<meta name="keywords" content="<?php echo $media['keywords']; ?>">
<meta name="description" content="<?php echo $media['description']; ?>">
<link href="__PUBLIC__/static/cms/css/HituxBlue/style.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/static/cms/css/HituxBlue/common.css" rel="stylesheet" type="text/css" />
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
<div id="Focus">
<ul>
<?php $_result=db('content')->field('content_id,title,pic,jumpurl,create_time')->where(" class_id in (19,19) and status = 10")->order('sortid desc,content_id desc')->limit(5)->select();if($_result)foreach($_result as $key=>$newslist):$newslist["url"]=getListUrl($newslist); $newslist["spic"]=getSpic($newslist); ?>
<li><a href='' target='_blank'><img src='<?php echo $newslist['spic']; ?>' alt='intel'/></a></li>
<?php endforeach;else?><?php echo "";?>
</ul>
</div>
<!--foncus end-->

<div class="HeightTab clearfix"></div>
<!--ProductShow start-->
<DIV class="ProductShow">
<div class="topic">
<div class="TopicTitle"> 产品展示  Product</div>
<div class="TopicMore"> <a  href='<?php echo U(8); ?>'><img src="__PUBLIC__/static/cms/images/more.png"></a></div>
</div>
<?php $_result=db('content')->field('content_id,title,pic,jumpurl,create_time')->where(" class_id in (8,8,13,14,15,16,20,21,17) and status = 10")->order('sortid desc,content_id desc')->limit(5)->select();if($_result)foreach($_result as $key=>$newslist):$newslist["url"]=getListUrl($newslist); $newslist["spic"]=getSpic($newslist); ?>
<div class='albumblock' style="padding: 10px 10px 30px 12px;
">
<div class='inner'><a href='<?php echo $newslist['url']; ?>'><img src='<?php echo $newslist['pic']; ?>' /><div class='albumtitle'><?php echo $newslist['title']; ?></div></a></div></div>
<?php endforeach;else?><?php echo "";?>
<div class="clearfix"></div>
</DIV>
<!--ProductShow end-->



<div class="HeightTab clearfix"></div>
<!--MainBlock start-->
<div class="MainBlock">
<!--left start-->
<div class="right">
<div class="topic">
<div class="TopicTitle">公司简介 About</div>
<div class="TopicMore"> <a  href='<?php echo U(7); ?>'><img src="__PUBLIC__/static/cms/images/more.png"></a></div>
</div>
<div class="img"><img src="__PUBLIC__/static/cms/images/Up_Images/2012521212111.jpg" width="220" height="100" alt="关于有数"></div>
<div class="txt ColorLink">
<?php $sig=$_result=db('frament')->field('content,pic')->where("frament_id = 1")->find(); echo $sig['content'];?>
</div>

<div class=" clearfix"></div>

</div>
<!--left end-->
<div class="WidthTab"></div>
<!--right start-->
<div class="left">
<div class="topic">
<div class="TopicTitle">新闻资讯 News</div>
<div class="TopicMore"> <a  href='<?php echo U(9); ?>'><img src="__PUBLIC__/static/cms/images/more.png"></a></div>
</div>


<div class="HeightTab clearfix"></div>
<!--links start-->

<div class="HeightTab clearfix"></div>
<table id="MBlockTable" width="100%" border="0" cellspacing="0" cellpadding="0">
<ul>
<?php $_result=db('content')->field('content_id,title,pic,jumpurl,create_time')->where(" class_id in (9,9) and status = 10")->order('sortid desc,content_id desc')->limit(6)->select();if($_result)foreach($_result as $key=>$newslist):$newslist["url"]=getListUrl($newslist); $newslist["spic"]=getSpic($newslist); ?>
<tr><td width='75%'>· <a href='<?php echo $newslist['url']; ?>'><?php echo $newslist['title']; ?></a>
</td>
<?php endforeach;else?><?php echo "";?>
</tr>
</ul>
  </table>
</div>
<!--right end-->
<!--right2 start-->
<div class="right2">
<div class="topic">
<div class="TopicTitle">联系我们 Contact</div>
<div class="TopicMore"> <a  href='<?php echo U(12); ?>'><img src="__PUBLIC__/static/cms/images/more.png"></a></div>
</div>
<div class="img"><img src="__PUBLIC__/static/cms/images/Contact_img.jpg" width="250" height="100" alt="联系方式"></div>
<div class="txt ColorLink">
<?php $sig=$_result=db('frament')->field('content,pic')->where("frament_id = 3")->find(); echo $sig['content'];?>
</div>

<div class=" clearfix"></div>

</div>
<!--right2 end-->

</div>
<!--MainBlock end-->

<div class="HeightTab clearfix"></div>
<div id="Links">
<span>友情链接：</span>
<?php $_result=db('link')->where("")->limit(12)->select();if($_result)foreach($_result as $key=>$query):?>
<a href='<?php echo $query['jumpurl']; ?>' target='_blank' ><?php echo $query['title']; ?></a>
<?php endforeach;else?><?php echo "";?>
</div>
<!--links end-->

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






