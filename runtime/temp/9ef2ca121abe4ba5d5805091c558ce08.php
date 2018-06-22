<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:68:"E:\project2017\mx6.0\public/../application/home\view\join\index.html";i:1492505634;s:69:"E:\project2017\mx6.0\public/../application/home\view\public\base.html";i:1493361785;s:68:"E:\project2017\mx6.0\public/../application/home\view\public\top.html";i:1492495898;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo \think\Config::get('web_config.web_name'); ?></title>
  <meta name="description" content="<?php echo \think\Config::get('web_config.web_description'); ?>" />
  <meta name="author" content="<?php echo \think\Config::get('web_config.web_author'); ?>" />
  <link rel="stylesheet" href="__HOME__/css/amazeui.css" />
  <link rel="stylesheet" href="__HOME__/css/common.min.css" />
  
<link rel="stylesheet" href="__HOME__/css/join.min.css" />

</head>
<body>
  <div class="layout">
    <!--===========layout-header================-->
        <div class="layout-header am-hide-sm-only">
      <div class="header-box" data-am-sticky>
        <!--header start-->
          <div class="container">
            <div class="header">
              <div class="am-g">
                <div class="am-u-lg-2 am-u-sm-12">
                  <div class="logo">
                   <a href="<?php echo url('home/index/index'); ?>"><?php echo \think\Config::get('web_config.web_name'); ?></a>
                  </div>
                </div>
                <div class="am-u-md-10">
                  <div class="header-right am-fr">
                    <div class="header-contact">
                      <div class="header_contacts--item">
  											<div class="contact_mini">
  												<i style="color:#7c6aa6" class="contact-icon am-icon-phone"></i>
  												<strong><?php echo \think\Config::get('web_config.web_hotline'); ?></strong>
  												<span><?php echo \think\Config::get('web_config.web_hotline_more'); ?></span>
  											</div>
  										</div>
                      <div class="header_contacts--item">
  											<div class="contact_mini">
  												<i style="color:#7c6aa6" class="contact-icon am-icon-envelope-o"></i>
  												<strong><?php echo \think\Config::get('web_config.web_email'); ?></strong>
  												<span><?php echo \think\Config::get('web_config.web_email_more'); ?></span>
  											</div>
  										</div>
                      <div class="header_contacts--item">
  											<div class="contact_mini">
  												<i style="color:#7c6aa6" class="contact-icon am-icon-map-marker"></i>
  												<strong><?php echo \think\Config::get('web_config.web_address'); ?></strong>
  												<span><?php echo \think\Config::get('web_config.web_address_more'); ?></span>
  											</div>
  										</div>
                    </div>
                    <?php if($uid == '0'): ?>
                    <a href="<?php echo url('home/login/index'); ?>" class="contact-btn">
                      <button type="button" class="am-btn am-btn-secondary am-radius">登录</button>
                    </a>&nbsp;&nbsp;
                    <a href="<?php echo url('home/login/reg'); ?>" class="contact-btn">
                      <button type="button" class="am-btn am-btn-secondary am-radius">注册</button>
                    </a>
                    <?php else: ?>
                    <a href="<?php echo url('home/login/logout'); ?>" class="contact-btn">
                      <button type="button" class="am-btn am-btn-secondary am-radius">注销</button>
                    </a>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!--header end-->


        <!--nav start-->
        <div class="nav-contain">
          <div class="nav-inner">
            <ul class="am-nav am-nav-pills am-nav-justify">
              <?php if(is_array($nav) || $nav instanceof \think\Collection): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
      				   <li><a href="<?php echo $vo['url']; ?>"><?php echo $vo['title']; ?></a>
      				   <?php if(!(empty($vo['sub']) || ($vo['sub'] instanceof \think\Collection && $vo['sub']->isEmpty()))): ?>
      				    <ul class="sub-menu">
      				      <?php if(is_array($vo['sub']) || $vo['sub'] instanceof \think\Collection): $i = 0; $__LIST__ = $vo['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?>
	                  <li class="menu-item"><a href="<?php echo $vo1['url']; ?>"><?php echo $vo1['title']; ?></a></li>
	                  <?php endforeach; endif; else: echo "" ;endif; ?>
	                </ul>
      				   <?php endif; ?>
      				   </li>
      			  <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
          </div>
        </div>
        <!--nav end-->
      </div>
    </div>

    <!--mobile header start-->
    <div class="m-header">
      <div class="am-g am-show-sm-only">
        <div class="am-u-sm-2">
          <div class="menu-bars">
            <a href="#doc-oc-demo1" data-am-offcanvas="{effect: 'push'}"><i class="am-menu-toggle-icon am-icon-bars"></i></a>
            <!-- 侧边栏内容 -->
            <nav data-am-widget="menu" class="am-menu  am-menu-offcanvas1" data-am-menu-offcanvas >
            <a href="javascript: void(0)" class="am-menu-toggle"></a>

            <div class="am-offcanvas" >
              <div class="am-offcanvas-bar">
              <ul class="am-menu-nav am-avg-sm-1">
                  <?php if(is_array($nav) || $nav instanceof \think\Collection): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if(!(empty($vo['sub']) || ($vo['sub'] instanceof \think\Collection && $vo['sub']->isEmpty()))): ?>
        					   <li class="am-parent"><a href="<?php echo $vo['url']; ?>"><?php echo $vo['title']; ?></a>
        					    <ul class="am-menu-sub am-collapse ">
        					      <?php if(is_array($vo['sub']) || $vo['sub'] instanceof \think\Collection): $i = 0; $__LIST__ = $vo['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?>
  		                  <li class=""><a href="<?php echo $vo1['url']; ?>" class=""><?php echo $vo1['title']; ?></a></li>
  		                  <?php endforeach; endif; else: echo "" ;endif; ?>
  		                </ul>
  		               <?php else: ?>
  		               <li><a href="<?php echo $vo['url']; ?>"><?php echo $vo['title']; ?></a>
        					   <?php endif; ?>
        					   </li>
        				  <?php endforeach; endif; else: echo "" ;endif; if($uid == '0'): ?>
                  <li class=""><a href="<?php echo url('home/login/index'); ?>" class="" >登录</a></li>
                  <li class=""><a href="<?php echo url('home/login/reg'); ?>" class="" >注册</a></li>
                  <?php endif; ?>
              </ul>

              </div>
            </div>
          </nav>

          </div>
        </div>
        <div class="am-u-sm-5 am-u-end">
          <div class="m-logo">
            <a href="<?php echo url('home/index/index'); ?>"><?php echo \think\Config::get('web_config.web_name'); ?></a>
          </div>
        </div>
      </div>
    <!--mobile header end-->
    </div>
  </div>



    <!--===========layout-container================-->
    
<div class="layout-container">
     <div class="section">
      <div class="container">
        <div class="section--header">
          <h2 class="section--title">加入我们</h2>
        </div>

        <div class="join-container">
          <div class="am-g">
            <div class="am-u-md-3">
              <div class="careers--articles">
                  <h3 class="careers--subtitle">福利待遇</h3>
                  <div class="careers_articles">
                    <div class="careers_article">
                      <i class="careers_article--icon am-icon-diamond"></i>
                      <div class="careers_article--text">
                        <p>
                         <?php echo \think\Config::get('web_config.web_treatment'); ?>
                        </p> 
                      </div>
                    </div>
                  </div>
                </div>
            </div>

            <div class="am-u-md-9">
              <h3 class="careers--subtitle">招贤纳士</h3>
              <div class="careers--vacancies">
                <div class="am-panel-group" id="accordion">
                 <?php if(is_array($list) || $list instanceof \think\Collection): $key = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($key % 2 );++$key;?>
                  <div class="am-panel am-panel-default">
                    <div class="am-panel-hd">
                      <h4 class="am-panel-title" data-am-collapse="{parent: '#accordion', target: '#do-not-say-<?php echo $vo['id']; ?>'}">
                        <?php echo $vo['title']; ?>
                      </h4>
                    </div>
                    <div id="do-not-say-<?php echo $vo['id']; ?>" class="am-panel-collapse am-collapse <?php if($key == 1): ?>am-in<?php endif; ?>">
                      <div class="am-panel-bd">
                            <h5>职位描述：</h5>
                            <?php echo $vo['content']; ?>

                            <h5>请将您的简历发送至： <a href="mailto:<?php echo \think\Config::get('web_config.web_email'); ?>"><?php echo \think\Config::get('web_config.web_email'); ?></a></h5>
                      </div>
                    </div>
                  </div>
                  <?php endforeach; endif; else: echo "" ;endif; ?>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

    


  <!--===========layout-footer================-->
  <div class="layout-footer">
    <div class="footer">
      <div style="background-color:#383d61" class="footer--bg"></div>
      <div class="footer--inner">
        <div class="container">
          <div class="footer_main">
            <div class="am-g">
              <div class="am-u-md-3 ">
                <div class="footer_main--column">
                  <strong class="footer_main--column_title">公司简介</strong>
                  <div class="footer_about">
                      <p class="footer_about--text">
                        <?php echo \think\Config::get('web_config.web_company'); ?>
                      </p>
                    </div>
                </div>
              </div>

              <div class="am-u-md-9 ">
                <div class="footer_main--column">
                  <strong class="footer_main--column_title">联系我们</strong>
                  <ul class="footer_contact_info">
                    <li class="footer_contact_info--item"><i class="am-icon-phone"></i><span><?php echo \think\Config::get('web_config.web_hotline'); ?></span></li>
                    <li class="footer_contact_info--item"><i class="am-icon-envelope-o"></i><span><?php echo \think\Config::get('web_config.web_email'); ?></span></li>
                    <li class="footer_contact_info--item"><i class="am-icon-map-marker"></i><span><?php echo \think\Config::get('web_config.web_address_more'); ?><?php echo \think\Config::get('web_config.web_address'); ?></span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="__HOME__/js/jquery-2.1.0.js" charset="utf-8"></script>
  <script src="__HOME__/js/amazeui.js" charset="utf-8"></script>
  

</body>

</html>

