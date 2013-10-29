<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo ($result["name"]); ?> - 中国人民公安大学网络学院</title>
    <meta content="中国人民公安大学网络学院" name="description" />
    <meta content="中国人民公安大学网络学院" name="keywords" />
<link data-module="10001" id="metuimodule" href="__PUBLIC__/index/css/metinfo_ui.css" type="text/css" rel="stylesheet" />
    <link href="__PUBLIC__/index/css/metinfo.css" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="__PUBLIC__/index/js/jQuery1.7.2.js"></script>
    <script type="text/javascript" src="__PUBLIC__/index/js/metinfo_ui.js"></script>
    <!--[if IE]>
    <script src="__PUBLIC__/index/js/html5.js" type="text/javascript"></script>
    <![endif]-->
    </head>
<body>

    <header>
    <div class="inner">
      <div class="top-logo inner">
	<a id="web_logo" title="中国人民公安大学网络学院" href="__ROOT__">
	  <img style="margin:15px 0px 0px 0px;" title="中国人民公安大学网络学院" alt="中国人民公安大学网络学院" src="__PUBLIC__/index/image/logo.png">
	</a>
	<ul class="top-nav list-none">
	  <li class="t"><a title="设为首页" style="cursor:pointer;" onclick="SetHome(this,window.location,&quot;非IE浏览器不支持此功能，请手动设置！&quot;);" href="#">设为首页</a><span>|</span><a title="收藏本站" style="cursor:pointer;" onclick="addFavorite(&quot;非IE浏览器不支持此功能，请手动设置！&quot;);" href="#">收藏本站</a></li>
	  <li class="b">
	  <p><strong><span style="font-size:14px;">招生热线：010-83906260</span></strong></p>
	  </li>
	</ul>
      </div>      
    </div>
    <nav>
    <div class="inner">
      <ul class="list-none">
	<?php if((APP_NAME == index) AND (MODULE_NAME == Index) AND (ACTION_NAME == index)): ?><li style="width:122px;" id="nav_10001" class="navdown">
	<?php else: ?>
	<li style="width:122px;" id="nav_10001" class=""><?php endif; ?>
	<a class="nav" title="首页" href="__ROOT__"><span>首页</span></a>
	</li>
	<li class="line"></li>
	<?php if((MODULE_NAME == Index) AND (ACTION_NAME == aboutus)): ?><li style="width:122px;" id="nav_31" class="navdown">
	<?php else: ?>
	<li style="width:122px;" id="nav_31" class=""><?php endif; ?>
	<a class="hover-none nav" title="关于我们" 0="" href="__ROOT__/index/aboutus/id/<?php echo ($result_aboutus["0"]["id"]); ?>"><span>关于我们</span></a>
	<dl class="myCorner" data-corner="bottom 9px" style="border-bottom-left-radius: 9px; border-bottom-right-radius: 9px; width: 122px; display: none;">
	  <?php if(is_array($result_aboutus)): $i = 0; $__LIST__ = $result_aboutus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ra): $mod = ($i % 2 );++$i;?><dd><a title="<?php echo ($ra["title"]); ?>" href="__ROOT__/index/aboutus/id/<?php echo ($ra["id"]); ?>"><?php echo ($ra["title"]); ?></a></dd><?php endforeach; endif; else: echo "" ;endif; ?>
	  
	</dl>
	</li>
	<li class="line"></li>
	<?php if((MODULE_NAME == Index) AND (ACTION_NAME == newslist)): ?><li style="width:122px;" class="navdown" id="nav_39">
	<?php else: ?>
	<li style="width:122px;" id="nav_39"><?php endif; ?>
	<a class="hover-none nav" title="新闻动态" href="__ROOT__/index/newslist"><span>新闻动态</span></a>
	</li>
	<li class="line"></li>
	<li style="width:122px;" id="nav_32">
	<a class="hover-none nav" title="培训班" href="__ROOT__/member.php/index/courseshow"><span>培训班</span></a>
	<dl class="myCorner" data-corner="bottom 9px" style="border-bottom-left-radius: 9px; border-bottom-right-radius: 9px;">
	<?php if(is_array($result_course)): $i = 0; $__LIST__ = $result_course;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rc): $mod = ($i % 2 );++$i;?><dd>
	  <a title="<?php echo ($rc["name"]); ?>" href="__ROOT__/member.php/index/courselist/id/<?php echo ($rc["id"]); ?>">法律文秘培训<?php echo ($i); ?>班</a>
	  <p>
	  <?php if(is_array($rc["course"])): $i = 0; $__LIST__ = $rc["course"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rcc): $mod = ($i % 2 );++$i;?><a title="<?php echo ($rcc["name"]); ?>" href="__ROOT__/member.php/index/course/id/<?php echo ($rcc["id"]); ?>"><?php echo ($rcc["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
	  </p>
	  </dd><?php endforeach; endif; else: echo "" ;endif; ?>
	</dl>
	</li>
	<li class="line"></li>
	<?php if(((APP_NAME == member) AND (MODULE_NAME == Index) AND (ACTION_NAME == index)) OR ((APP_NAME == member) AND (MODULE_NAME == Index) AND (ACTION_NAME == courseshow)) OR ((APP_NAME == member) AND (MODULE_NAME == Index) AND (ACTION_NAME == courselist)) OR ((APP_NAME == member) AND (MODULE_NAME == Index) AND (ACTION_NAME == course))): ?><li style="width:122px;" class="navdown" id="nav_33">
	<?php else: ?>
	<li style="width:122px;" id="nav_33"><?php endif; ?>
	<a class="hover-none nav" title="学员中心" 0="" href="__ROOT__/member.php"><span>学员中心</span></a>
	<dl class="myCorner" data-corner="bottom 9px" style="border-bottom-left-radius: 9px; border-bottom-right-radius: 9px;">
	  <dd><a title="学员注册 " href="__ROOT__/member.php/Public/register">学员注册</a></dd>
	  <dd><a title="课程服务 " href="__ROOT__/member.php/index/courseshow">课程服务</a></dd>
    	</dl>
	</li>
	<li class="line"></li>
	<?php if((APP_NAME == index) AND (MODULE_NAME == Index) AND (ACTION_NAME == map)): ?><li style="width:122px;" class="navdown" id="nav_44">
	<?php else: ?>
	<li style="width:122px;" id="nav_44"><?php endif; ?>
		<a class="hover-none nav" title="教学网络" href="__ROOT__/index/map"><span>教学网络</span></a></li>
	<li class="line"></li>
	<?php if(((APP_NAME == index) AND (MODULE_NAME == Index) AND (ACTION_NAME == image)) OR ((APP_NAME == index) AND (MODULE_NAME == Index) AND (ACTION_NAME == imageinfo))): ?><li style="width:122px;" class="navdown" id="nav_40">
	<?php else: ?>
	<li style="width:122px;" id="nav_40"><?php endif; ?>
	<a class="hover-none nav" title="校园美景" href="__ROOT__/index/image"><span>校园美景</span></a></li><li class="line"></li>
	<?php if((APP_NAME == index) AND (MODULE_NAME == Index) AND (ACTION_NAME == contactuss)): ?><li style="width:122px;" class="navdown" id="nav_41">
	<?php else: ?>
	<li style="width:122px;" id="nav_41"><?php endif; ?>
	<a class="hover-none nav" title="联系我们" href="__ROOT__/index/contactuss"><span>联系我们</span></a></li>
    </ul>
  </div>
  </nav>
  </header>


<div class="inner met_flash"><div class="flash">
<img width="990" height="200" alt="" src="__PUBLIC__/index/image/1369901060.jpg"></div></div>


<div class="sidebar inner">
    <div class="sb_nav">

            <div class="ti1-bg"><span>关于我们</span></div>
			<h3 class="title1"></h3>
			<div data-jsok="2" data-class3="0" data-csnow="37" id="sidebar" class="active">
			  <dl class="list-none navnow">
			    <dt id="part2_37">
			    <a class="zm" title="首页" href="__ROOT__/member.php"><span>首页</span></a></dt>
			</dl>
			<dl class="list-none navnow">
			    <dt id="part2_37">
			    <a class="zm" title="课程服务" href="__APP__/index/courseshow"><span>课程服务</span></a></dt>
			</dl>
			<dl class="list-none navnow">
			    <dt id="part2_37">
			    <a class="zm" title="退出登录" href="__APP__/Public/logout"><span>退出登录</span></a></dt>
			</dl>
			<div class="clear"></div>
		      </div>
		
			<h3 class="title2 line">联系方式</h3>
			<div class="active ct-con">
			<span style="line-height: 2;">
			  <strong><span style="font-size:13px;">中国人民公安大学网络学院</span></strong><br>地址：北京市大兴区团河路
			</span>
<div>
	电话：010-83906260
</div>
<div>
	E-mail：tangping@ppsuc.com
</div>
<div>
	网站：www.ppsuc.edu.cn
</div>
<div class="clear"></div>
</div>

    </div>
    <div class="sb_box br-bg">
	    <h3 class="title">
	      <div class="position">当前位置：<a title="首页" href="__ROOT__">首页</a> &gt; <a href="__ROOT__/member.php/index/courselist/id/<?php echo ($result["cid"]); ?>">课程列表</a> &gt; <a href="">课程详情</a></div>
			<span>课程详情</span>
		</h3>
		<div class="clear"></div>
<div id="shownews" class="active">
<h1 class="title"><?php echo ($result["name"]); ?></h1>
        <div class="editor">
	<div style="float:left;">
	<img src="__UPLOAD__/<?php echo ($result["pic"]); ?>" />
	</div>
	<div style="float:left; margin-left:80px;">
	<?php echo (nl2br($result["content"])); ?>
	</div>
			<div class="clear"></div>
	<hr/>
<div>
	<embed src="<?php echo ($result["file"]); ?>" allowFullScreen="true" quality="high" width="700" height="400" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>
	</div>
		</div>
<div class="met_hits">
<div class="metjiathis">
<div class="jiathis_style">
<span class="jiathis_txt">分享到：</span><a class="jiathis_button_icons_1" title="分享到QQ空间"><span class="jiathis_txt jtico jtico_qzone"></span></a><a class="jiathis_button_icons_2" title="分享到新浪微博"><span class="jiathis_txt jtico jtico_tsina"></span></a><a class="jiathis_button_icons_3" title="分享到腾讯微博"><span class="jiathis_txt jtico jtico_tqq"></span></a><a class="jiathis_button_icons_4" title="分享到微信"><span class="jiathis_txt jtico jtico_weixin"></span></a><a target="_blank" class="jiathis jiathis_txt jtico jtico_jiathis" href="http://www.jiathis.com/share"></a></div><script charset="utf-8" src="http://v3.jiathis.com/code/jia.js?uid=1346378669840136" type="text/javascript"></script></div>&nbsp;&nbsp;更新时间：<?php echo (date("Y-m-d H:i:s", $result["addtime"])); ?>&nbsp;&nbsp;【<a href="javascript:window.print()">打印此页</a>】&nbsp;&nbsp;【<a href="javascript:self.close()">关闭</a>】</div>
</div>

    </div>
    <div class="clear"></div>
</div>


    <footer>
    <div class="inner">
      <div class="foot-nav">
	<a title="关于我们" href="__ROOT__/index/aboutus/id/1">关于我们</a>
	<span>|</span>
	<a title="教学网络" href="__ROOT__/index/map">教学网络</a>
	<span>|</span>
	<a title="学员中心" href="__ROOT__/member.php">学员中心</a>
	<span>|</span>
	<a title="校园美景" href="__ROOT__/index/image">校园美景</a>
	<span>|</span>
	<a title="联系我们" href="__ROOT__/index/contactuss">联系我们</a>
      </div>
      <div class="foot-text">
	<p>中国人民公安大学网络学院 版权所有 京ICP备00000000号 </p>

      </div>
    </div>
    </footer>

<script type="text/javascript" src="__PUBLIC__/index/js/fun.inc.js"></script>
</body></html>