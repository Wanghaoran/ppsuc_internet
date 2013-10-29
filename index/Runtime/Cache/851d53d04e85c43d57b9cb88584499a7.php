<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>中国人民公安大学网络学院</title>
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


    <link rel="stylesheet" type="text/css" href="__PUBLIC__/index/css/all.css" media="screen">
    <script src="__PUBLIC__/index/js/all.js" type="text/javascript"></script>
    <div id="home_banner">
      <a id="big_a" href="javascript:;" onclick="pgvSendClick({hottag:'HRTENCENT.HOME.BANNER.BANNER69'});" class="cdefault"><div style="background-image: url(&quot;__PUBLIC__/index/image/show2.jpg&quot;); opacity: 1;" id="big_img"></div></a>

      <div class="relative">
	<div id="small_img">
	  <div class="maxwidth">
	    
	    <div id="small_imgs" style="position: relative; overflow: hidden;"><div style="position: absolute; left: 0px; width: 1092px;">

		<a class="item" href="javascript:;">
		  <div theid="69" l="" b="./image/show1.jpg" class="img" title="">
		    <img src="__PUBLIC__/index/image/show1_small.jpg">
		  </div>
		</a>

		<a class="item" href="javascript:;">
		  <div theid="69" l="" b="./image/show2.jpg" class="img active" title="">
		    <img src="__PUBLIC__/index/image/show2_small.jpg">
		  </div>
		</a>
		<a class="item" href="javascript:;">
		  <div theid="69" l="" b="./image/show1.jpg" class="img" title="">
		    <img src="__PUBLIC__/index/image/show1_small.jpg">
		  </div>
		</a>

		<a class="item" href="javascript:;">
		  <div theid="69" l="" b="./image/show2.jpg" class="img active" title="">
		    <img src="__PUBLIC__/index/image/show2_small.jpg">
		  </div>
		</a>
		<a class="item" href="javascript:;">
		  <div theid="69" l="" b="./image/show1.jpg" class="img" title="">
		    <img src="__PUBLIC__/index/image/show1_small.jpg">
		  </div>
		</a>

		<a class="item" href="javascript:;">
		  <div theid="69" l="" b="./image/show2.jpg" class="img active" title="">
		    <img src="__PUBLIC__/index/image/show2_small.jpg">
		  </div>
		</a>
	    </div>
	  </div>
	    
	    <div class="clr"></div>
	  </div>
	</div>
      </div>
    </div>



    <div class="index inner ptp">
      <div class="mlf lf" style="width:989px;">


	<div class="mri ri" style="float:left;width:320px;margin-right:12px;">
	<div id="hnews" class="newlist br-bg">
	  <h3 class="ti">
	    <a class="more" title="新闻动态" href="__ROOT__/index/newslist">更多&gt;&gt;</a>
	    新闻动态
	  </h3>
	  <div id="hnewsitems" class="newtxtlst" style="height:235px;">
	    <ol class="list-none metlist">
		<?php if(is_array($result_news)): $i = 0; $__LIST__ = $result_news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rn): $mod = ($i % 2 );++$i;?><li class="list top"><span class="time"><?php echo (date("Y-m-d", $rn["addtime"])); ?></span><a target="_self" title="<?php echo ($rn["title"]); ?>" href="__ROOT__/index/news/id/<?php echo ($rn["id"]); ?>"><?php echo ($rn["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
	  </ol>
	  </div>
	  <div class="clear"></div>			   
	</div>
      </div>

<div class="mri ri" style="float:left;width:320px;;margin-right:12px;">
	<div id="hnews" class="newlist br-bg">
	  <h3 class="ti">
	    <a class="more" title="培训班" href="__ROOT__/member.php/index/courseshow">更多&gt;&gt;</a>
	    培训班
	  </h3>
	  <div id="hnewsitems" class="newtxtlst" style="height:235px;">
	    <ol class="list-none metlist">
		<?php if(is_array($result_course)): $i = 0; $__LIST__ = $result_course;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rc): $mod = ($i % 2 );++$i;?><li class="list top"><span class="time"><?php echo (date("Y-m-d", $rn["addtime"])); ?></span><a target="_self" title="<?php echo ($rcc["name"]); ?>" href="__ROOT__/member.php/index/courselist/id/<?php echo ($rc["id"]); ?>">法律文秘培训<?php echo ($i); ?>班</a></li><?php endforeach; endif; else: echo "" ;endif; ?>
	  </ol>
	  </div>
	  <div class="clear"></div>			   
	</div>
      </div>


<div class="mri ri" style="float:left;width:320px;">
	<div id="hnews" class="newlist br-bg">
	  <h3 class="ti">
	    学员登陆
	  </h3>
	  <div id="hnewsitems" class="newtxtlst" style="height:223px;">
		
	   

	  <form action="__ROOT__/member.php/public/checklogin" method="post" style="margin-top:20px;">
	<div style="margin:20px;"><b style="font-size:15px;">邮箱：</b><input type="text" name="email" class="parasearch_inputs" /></div>
	<div style="margin:20px;"><b style="font-size:15px;">密码：</b><input type="password" name="password" class="parasearch_inputs" /></div>
	<div style="margin:40px;"><input type="submit" class="searchgos" value="登陆" /><input style="margin-left:10px;" type="button" class="searchgos" value="注册新学员" onclick="location.href='__URL__/register'" /></div>
	<input type="hidden" name="url_jump" value="<?php echo ($_GET['url_jump']); ?>" />
	</form>
	   
	
	  </div>
	  <div class="clear"></div>			   
	</div>
      </div>

      <div class="clear"></div>

      </div>
       <div class="clear"></div>





    <div class="index inner ptp">
      <div class="mlf lf br-bg" style="width:650px;">
	<div class="src-ico"></div>
	<div class="pd-w">
	  <div class="pronav-srh lf p-d" style="width:282px;">
	    <h3 class="srhtit">课程搜索<span>Product Search</span></h3>
	    <div data-valuez="请输入关键词" class="metsearch">
	      <script language="JavaScript">
	      </script>
	      <ul>
		<form action="__URL__/sourcesearch" method="post">
		  <li><span class="parasearch_title">内容</span><span class="parasearch_input"><input type="text" name="title" value="请输入关键词" onblur="if(this.value == '') this.value = '请输入关键词';"></span></li>
		  <li><span class="parasearch_search"><input type="submit" class="searchgo" value="搜索"></span></li>
		</form>
	      </ul>
	      <div class="clear"></div></div>
	    <h3 class="ct-ti pd-tp">课程展示</h3>
	    <div class="category"><ul class="list-none navnow">
		<?php if(is_array($result_course)): $i = 0; $__LIST__ = array_slice($result_course,0,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rc): $mod = ($i % 2 );++$i;?><li id="navnow1_34"><a class="nav" title="<?php echo ($rc["name"]); ?>" href="__ROOT__/member.php/index/courselist/id/<?php echo ($rc["id"]); ?>"><span><?php echo ($rc["name"]); ?></span></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul><div class="clear"></div></div>
	    <h3 class="ct-ti pd-tp">关于我们</h3>
	    <div class="category">
	      <ul class="list-none navnow">
		<?php if(is_array($result_aboutus)): $i = 0; $__LIST__ = $result_aboutus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ra): $mod = ($i % 2 );++$i;?><li id="navnow1_37"><a class="nav" title="<?php echo ($ra["title"]); ?>" href="__ROOT__/index/aboutus/id/<?php echo ($ra["id"]); ?>"><span><?php echo ($ra["title"]); ?></span></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
	    </ul><div class="clear"></div></div>
	    <div class="pd-tp"></div>
	  </div>		  
	  <div class="news ri p-d" style="width:285px;">
	    <h3 class="ti">
	      新生入学
	    </h3>
	    <div class="txtlist">
	      <ol class="list-none metlist">
		<?php if(is_array($result_school)): $i = 0; $__LIST__ = $result_school;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rs): $mod = ($i % 2 );++$i; if(($i) == "1"): ?><li class="list top">
		<?php else: ?>
		<li class="list"><?php endif; ?>
		<span class="time">-点击查看-</span><a target="_self" title="<?php echo ($rs["title"]); ?>" href="__ROOT__/index/school/id/<?php echo ($rs["id"]); ?>"><?php echo ($rs["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
	    </ol></div>
	  </div>
	  <div class="clear"></div>
	</div>
      </div>
      <div class="mri ri" style="width:327px;">
	<div id="hnews" class="newlist br-bg" style="width:300px;float:right">
	  <h3 class="ti">
	    招生专栏
	  </h3>
	  <div id="hnewsitems" class="newtxtlst" style="height:223px;">
	    <ol class="list-none metlist">
		<?php if(is_array($result_student)): $i = 0; $__LIST__ = $result_student;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rs): $mod = ($i % 2 );++$i;?><li class="list top"><span class="time">-点击查看-</span><a target="_self" title="<?php echo ($rcs["name"]); ?>" href="__ROOT__/index/school/id/<?php echo ($rs["id"]); ?>"><?php echo ($rs["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
	  </ol>
	</div>
	  <div class="clear"></div>			   
	</div>
      </div>
      <div class="clear"></div>
    </div>

    <div id="fr-lk" class="frlk inner">
      <h3 class="lkti">友情链接&nbsp;:</h3>
      <div class="lk-contx" style="width: 895px;">
	<div class="txtlk"><ul class="list-none">
	    <li><a title="" target="_blank" href="http://www.cppsu.edu.cn">中国人民公安大学</a></li>
	    <li><a title="" target="_blank" href="http://www.mps.gov.cn">中华人民共和国公安部</a></li>
	    <li><a title="" target="_blank" href="http://www.moe.gov.cn">中华人民共和国教育部</a></li>
	    <li><a title="" target="_blank" href="http://www.bjpopss.gov.cn">首都社会安全研究基地</a></li>
	  </ul>
	  <div class="clear"></div></div>
	<div class="imglk"><ul class="list-none">
	  </ul>
	  <div class="clear"></div></div>
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
  </body>
</html>