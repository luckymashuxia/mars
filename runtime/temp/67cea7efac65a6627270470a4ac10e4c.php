<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:78:"E:\project2017\mx6.0\public/../application/console\view\formbuilder\index.html";i:1484795529;s:74:"E:\project2017\mx6.0\public/../application/console\view\template\base.html";i:1495164278;s:77:"E:\project2017\mx6.0\public/../application/console\view\template\sidebar.html";i:1495164304;s:76:"E:\project2017\mx6.0\public/../application/console\view\template\topbar.html";i:1499060453;s:76:"E:\project2017\mx6.0\public/../application/console\view\template\footer.html";i:1488519734;}*/ ?>
<!DOCTYPE html>
<html lang="zh_cn">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo $mate_title; ?>-<?php echo get_conf('web_name'); ?></title>
  
  <link href="__CONSOLE__/css/style.default.css" rel="stylesheet">
  <!--   sweetalert弹出样式 -->
  <link href="__PLUGIN__/sweetalert/css/sweetalert.css" rel="stylesheet">

  <script src="__CONSOLE__/js/jquery-1.11.1.min.js"></script>
  <script src="__PLUGIN__/sweetalert/js/sweetalert.min.js"></script>
  
<style>
.droppable-active{background-color:#ffe!important}.tools a{cursor:pointer;font-size:80%}.form-body .col-md-6,.form-body .col-md-12{min-height:400px}.draggable{cursor:move}
</style>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="__CONSOLE__/js/html5shiv.js"></script>
  <script src="__CONSOLE__/js/respond.min.js"></script>
  <![endif]-->
  
</head>
<body>
<!-- Preloader -->
<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>
<section>
  

  <div class="leftpanel">

    <div class="logopanel">
        <h1><span>[</span> <?php echo get_conf('web_name'); ?> <span>]</span></h1>
    </div><!-- logopanel -->

    <div class="leftpanelinner">

        <!-- This is only visible to small devices -->
        <div class="visible-xs hidden-sm hidden-md hidden-lg">
            <div class="media userlogged">
                <img alt="" src="__CONSOLE__/images/photos/user<?php echo $user['avatar']; ?>.jpg" class="media-object">
                <div class="media-body">
                    <h4><?php echo $user['username']; ?></h4>
                    <span><?php echo $user['nickname']; ?></span>
                </div>
            </div>
            <ul class="nav nav-pills nav-stacked nav-bracket mb30">
              <li><a href="#" data-toggle="modal" data-target=".bs-myinfo-modal-lg"><i class="fa fa-user"></i> <span>我的信息</span></a></li><!-- 
              <li><a href=""><i class="fa fa-cog"></i> <span>账号设置</span></a></li>
              <li><a href=""><i class="fa fa-question-circle"></i> <span>帮助</span></a></li> -->
              <li><a onClick="logout('<?php echo url('Console/login/logout'); ?>');"><i class="fa fa-sign-out"></i> <span>退出</span></a></li>
            </ul>
        </div>
      <ul class="nav nav-pills nav-stacked nav-bracket">
              <?php if(is_array($menu_left) || $menu_left instanceof \think\Collection): $i = 0; $__LIST__ = $menu_left;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;if($menu['set'] == 1): ?>
                     <li class="<?php if($menu['active'] == 1): ?>active<?php endif; ?>">
                        <a href="<?php echo $menu['low']['0']['url']; ?>"><i class="<?php echo $menu['class']; ?>"></i> <span><?php echo $menu['low']['0']['keyname']; ?></span></a>                           
                      </li>
                     <?php else: ?>
                    <li class="nav-parent <?php if($menu['active'] == 1): ?> active<?php endif; ?>">
                        <a ><i class="<?php echo $menu['class']; ?>"></i> <span><?php echo $menu['title']; ?></span></a>
                            <ul class="children" <?php if($menu['active'] == 1): ?>style="display:block;"<?php else: ?>style="display:none;"<?php endif; ?>>
                                 <?php if(is_array($menu['low']) || $menu['low'] instanceof \think\Collection): $i = 0; $__LIST__ = $menu['low'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu_2): $mod = ($i % 2 );++$i;?>   
                                      <li <?php if($menu_2['active'] == 1): ?>class="active"<?php endif; ?>>
                                          <a href="<?php echo $menu_2['url']; ?>"><i class="fa fa-caret-right"></i> <?php echo $menu_2['keyname']; ?></a>
                                      </li>
                                 <?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>  
                      </li>
                      <?php endif; endforeach; endif; else: echo "" ;endif; ?>
      </ul>
  

    </div><!-- leftpanelinner -->
  </div><!-- leftpanel -->
  
  <div class="mainpanel">
    
     <div class="headerbar">

      <a class="menutoggle"><i class="fa fa-bars"></i></a>

      <div class="header-right">
        <ul class="headermenu">
          <li>
            <div class="btn-group">
            <a href="/index.php" target="_blank">
              <button class="btn btn-default tp-icon" title="预览网站">
                <i class="fa fa-send"></i>
              </button>
              </a>
            </div>
          </li>
          <li>
            <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <img src="__CONSOLE__/images/photos/user<?php echo $user['avatar']; ?>.jpg" alt="">
                <?php echo $user['username']; ?>
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                <li><a href="#" data-toggle="modal" data-target=".bs-myinfo-modal-lg"><i class="fa fa-user"></i> 我的信息</a></li><!-- 
                <li><a href="#"><i class="glyphicon glyphicon-cog"></i> 账号设置</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-question-sign"></i> 帮助</a></li> -->
                <li><a onClick="logout('<?php echo url('Console/login/logout'); ?>');"><i class="fa fa-sign-out"></i> 退出</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div><!-- header-right -->

    </div><!-- headerbar -->


   
    
    <div class="pageheader">
      <h2><i class="fa fa-home"></i> <?php echo $mate_title; ?> <span><?php echo $mate_operate; ?></span></h2>
      <div class="breadcrumb-wrapper">
        <span class="label">现在所在位置:</span>
        <ol class="breadcrumb">
          <li><?php echo $mate_title; ?> </li>
          <li class="active"><?php echo $mate_operate; ?></li>
        </ol>
      </div>
    </div>
    <div class="contentpanel">
         

          <div class="row">
        <div class="col-md-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="panel-btns">
                <a href="" class="panel-close">&times;</a>
                <a href="" class="minimize">&minus;</a>
              </div>
              <h4 class="panel-title">表单元素</h4>
              <p>基本元素</p>
            </div>
            <div class="panel-body">
                        <div class="alert alert-info">
                            拖拽左侧的表单元素到右侧区域，即可生成相应的HTML代码，表单代码，轻松搞定！
                        </div>
                        <form role="form" class="form-horizontal m-t">
                            <div class="form-group draggable">
                                <label class="col-sm-3 control-label">文本框</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="" placeholder="请输入文本">
                                </div>
                            </div>
                            <div class="form-group draggable">
                                <label class="col-sm-3 control-label">密码框</label>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control" name="password" placeholder="请输入密码">
                                </div>
                            </div>
                            <div class="form-group draggable">
                                <label class="col-sm-3 control-label">下拉列表</label>
                                <div class="col-sm-6">
                                    <select class="form-control" name="">
                                        <option>选项 1</option>
                                        <option>选项 2</option>
                                        <option>选项 3</option>
                                        <option>选项 4</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group draggable">
                                <label class="col-sm-3 control-label">纯文本</label>
                                <div class="col-sm-6">
                                    <p class="form-control-static">这里是纯文字信息</p>
                                </div>
                            </div>
                            <div class="form-group draggable">
                                <label class="col-sm-3 control-label">审核状态</label>
                                <div class="col-sm-6 wh-inline">
                                   <div class="rdio rdio-primary">
                                        <input type="radio" id="radio1" value="1" name="status" checked/>
                                        <label for="radio1">通过</label>
                                      </div><!-- rdio -->
                                      <div class="rdio rdio-primary">
                                        <input type="radio" id="radio2" value="0" name="status"/>
                                        <label for="radio2">拒绝</label>
                                      </div><!-- rdio -->

                                </div>
                            </div>
                            <div class="form-group draggable">
                                <label class="col-sm-3 control-label">复选框</label>
                                <div class="col-sm-6 wh-inline">
                                     <div class="ckbox ckbox-primary">
                                      <input type="checkbox" id="int_website" value="m1" name="int[]" required />
                                      <label for="int_website">Website</label>
                                    </div><!-- rdio -->
                                    <div class="ckbox ckbox-primary">
                                      <input type="checkbox" id="int_website2" value="m2" name="int[]" />
                                      <label for="int_website2">Website2</label>
                                    </div><!-- rdio -->
                                    <div class="ckbox ckbox-primary">
                                      <input type="checkbox" id="int_website3" value="m3" name="int[]" />
                                      <label for="int_website3">Website3</label>
                                    </div><!-- rdio -->
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                             <div class="panel-footer draggable">
                                 <div class="row">
                                    <div class="col-sm-6 col-sm-offset-3">
                                      <button class="btn btn-primary" type="submit">提交</button>
                                      <button class="btn btn-default" type="button" onclick="javascript:history.back(-1);">返回</button>
                                    </div>
                                 </div>
                             </div>
                        </form>
                        <div class="clearfix"></div>
            </div><!-- panel-body -->
          </div><!-- panel -->
        </div><!-- col-md-6 -->

        <div class="col-md-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="panel-btns" style="float: right;">
                            <select id="n-columns">
                                <option value="1">显示1列</option>
                                <option value="2">显示2列</option>
                            </select>
              </div>
              <h4 class="panel-title">表单区域</h4>
              <p>拖拽左侧表单元素到此区域 </p>
            </div>
            <div class="panel-body">
                        <div class="row form-body form-horizontal m-t">
                            <div class="col-md-12 droppable sortable">
                            </div>
                            <div class="col-md-6 droppable sortable" style="display: none;">
                            </div>
                            <div class="col-md-6 droppable sortable" style="display: none;">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-warning" data-clipboard-text="testing" id="copy-to-clipboard">复制代码</button>
                
              
            </div><!-- panel-body -->
          </div><!-- panel -->
        </div><!-- col-md-6 -->
     </div>

    </div><!-- contentpanel -->
  </div><!-- mainpanel -->
  
  
</section>

<script src="__CONSOLE__/js/jquery-migrate-1.2.1.min.js"></script>
<script src="__CONSOLE__/js/bootstrap.min.js"></script>
<script src="__CONSOLE__/js/modernizr.min.js"></script>
<script src="__CONSOLE__/js/jquery.sparkline.min.js"></script>
<script src="__CONSOLE__/js/toggles.min.js"></script>
<script src="__CONSOLE__/js/retina.min.js"></script>
<script src="__CONSOLE__/js/jquery.cookies.js"></script>

<script src="__CONSOLE__/js/select2.min.js"></script>
<script src="__CONSOLE__/js/custom.js"></script>
<!-- 验证 -->
<script src="__CONSOLE__/js/bootstrapValidator.js"></script>


<!-- 拖拽 -->
<script src="__CONSOLE__/js/jquery-ui-1.10.4.min.js"></script>
<script src="__CONSOLE__/js/beautifyhtml.js"></script>


<script>
    $(document).ready(function() {

    setup_draggable();
    $("#n-columns").on("change",
    function() {
        var v = $(this).val();
        if (v === "1") {
            var $col = $(".form-body .col-md-12").toggle(true);
            $(".form-body .col-md-6 .draggable").each(function(i, el) {
                $(this).remove().appendTo($col)
            });
            $(".form-body .col-md-6").toggle(false)
        } else {
            var $col = $(".form-body .col-md-6").toggle(true);
            $(".form-body .col-md-12 .draggable").each(function(i, el) {
                $(this).remove().appendTo(i % 2 ? $col[1] : $col[0])
            });
            $(".form-body .col-md-12").toggle(false)
        }
    });
    $("#copy-to-clipboard").on("click",
    function() {
        var $copy = $(".form-body").clone().appendTo(document.body);
        $copy.find(".tools, :hidden").remove();
        $.each(["draggable", "droppable", "sortable", "dropped", "ui-sortable", "ui-draggable", "ui-droppable", "form-body"],
        function(i, c) {
            $copy.find("." + c).removeClass(c).removeAttr("style")
        });
        var html = html_beautify($copy.html());
        $copy.remove();
        $modal = get_modal(html).modal("show");
        $modal.find(".btn").remove();
        $modal.find(".modal-title").html("复制HTML代码");
        $modal.find(":input:first").select().focus();
        return false
    })
});
var setup_draggable = function() {
    $(".draggable").draggable({
        appendTo: "body",
        helper: "clone"
    });
    $(".droppable").droppable({
        accept: ".draggable",
        helper: "clone",
        hoverClass: "droppable-active",
        drop: function(event, ui) {
            $(".empty-form").remove();
            var $orig = $(ui.draggable);
            if (!$(ui.draggable).hasClass("dropped")) {
                var $el = $orig.clone().addClass("dropped").css({
                    "position": "static",
                    "left": null,
                    "right": null
                }).appendTo(this);
                var id = $orig.find(":input").attr("id");
                if (id) {
                    id = id.split("-").slice(0, -1).join("-") + "-" + (parseInt(id.split("-").slice( - 1)[0]) + 1);
                    $orig.find(":input").attr("id", id);
                    $orig.find("label").attr("for", id)
                }
                $('<p class="tools col-sm-12 col-sm-offset-3">                      <a class="edit-link">编辑HTML<a> |                        <a class="remove-link">移除</a></p>').appendTo($el)
            } else {
                if ($(this)[0] != $orig.parent()[0]) {
                    var $el = $orig.clone().css({
                        "position": "static",
                        "left": null,
                        "right": null
                    }).appendTo(this);
                    $orig.remove()
                }
            }
        }
    }).sortable()
};
var get_modal = function(content) {
    var modal = $('<div class="modal fade bs-example-modal-lg" style="overflow: auto;" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">    <div class="modal-dialog modal-lg"><div class="modal-content"><div class="modal-header"><button aria-hidden="true" data-dismiss="modal" class="close" type="button">&times;</button><h4 class="modal-title">编辑HTML</h4></div><div class="modal-body"> <textarea class="form-control" style="resize: vertical;min-height:200px;margin-bottom: 10px;font-family: Monaco, Fixed">' + content + '</textarea><button class="btn btn-success">更新HTML</button></div>        </div></div></div>').appendTo(document.body);
    return modal
};
$(document).on("click", ".edit-link",
function(ev) {
    var $el = $(this).parent().parent();
    var $el_copy = $el.clone();
    var $edit_btn = $el_copy.find(".edit-link").parent().remove();
    var $modal = get_modal(html_beautify($el_copy.html())).modal("show");
    $modal.find(":input:first").focus();
    $modal.find(".btn-success").click(function(ev2) {
        var html = $modal.find("textarea").val();
        if (!html) {
            $el.remove()
        } else {
            $el.html(html);
            $edit_btn.appendTo($el)
        }
        $modal.modal("hide");
        return false
    })
});
$(document).on("click", ".remove-link",
function(ev) {
    $(this).parent().parent().remove()
});
    </script>


 <!-- 我的信息弹出 -->
    <div class="modal fade bs-myinfo-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">&times;</button>
                <h4 class="modal-title">我的信息</h4>
            </div>
            <div class="modal-body">
             <form class="form-horizontal form-bordered" id="myinfoForm" action="<?php echo url('console/login/myinfo'); ?>" method="post" >
                 <div class="form-group">
                  <label class="col-sm-3 control-label">用户名:</label>
                  <div class="col-sm-6">
                      <input type="text" class="form-control" name="username" placeholder="请输入用户名"  value="<?php echo isset($user['username']) ? $user['username'] :  ''; ?>" readonly>
                  </div>
              </div>
              <div class="form-group">
                  <label class="col-sm-3 control-label">密码:</label>
                  <div class="col-sm-6">
                      <input type="password" class="form-control" name="password" placeholder="请输入密码">
                  </div>
              </div>
              <div class="form-group">
                  <label class="col-sm-3 control-label">确认密码:</label>
                  <div class="col-sm-6">
                      <input type="password" class="form-control" name="repassword" placeholder="请输入确认密码">
                  </div>
              </div>
               <div class="form-group">
                  <label class="col-sm-3 control-label">昵称:</label>
                  <div class="col-sm-6">
                      <input type="text" class="form-control" name="nickname" placeholder="请输入昵称"  value="<?php echo isset($user['nickname']) ? $user['nickname'] :  ''; ?>" required>
                  </div>
              </div>
              <div class="form-group">
                  <label class="col-sm-3 control-label">手机号:</label>
                  <div class="col-sm-6">
                      <input type="text" class="form-control" name="mobile" placeholder="请输入手机号"  value="<?php echo isset($user['mobile']) ? $user['mobile'] :  ''; ?>" required>
                  </div>
              </div>
               <div class="form-group">
                    <label class="col-sm-3 control-label">头像选择:</label>
                    <div class="col-sm-6 avatar-size">
                        <input type="hidden" name="avatar" value="<?php echo isset($user['avatar']) ? $user['avatar'] :  1; ?>" id="avatar2">
                        <?php $__FOR_START_4969__=1;$__FOR_END_4969__=9;for($i=$__FOR_START_4969__;$i < $__FOR_END_4969__;$i+=1){ ?>
                        <img src="__CONSOLE__/images/photos/user<?php echo $i; ?>.jpg" class="img-circle" onClick="chooseImg2(<?php echo $i; ?>);" myflagImg="<?php echo $i; ?>">
                        <?php } ?>
                    </div>
                </div>

                    <div class="panel-footer">
                     <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="hidden" name="id" value="<?php echo isset($user['id']) ? $user['id'] :  ''; ?>">
                        <button type="submit" class="btn btn-primary">提交</button>
                        <button type="button" class="btn btn-default" aria-hidden="true" data-dismiss="modal" class="close">关闭</button>
                      </div>
                     </div>
                    </div><!-- panel-footer -->

                </form>
            </div>
        </div>
      </div>
    </div>
    <!-- 我的信息弹出 --> 
    <script>
         $(document).ready(function() {
            $("[myflagImg='<?php echo isset($user['avatar']) ? $user['avatar'] :  '1'; ?>']").addClass("choosed");
            $('#myinfoForm').bootstrapValidator({
                message: '这个值是无效的',
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                 fields: {
                    password: {
                        validators: {
                           identical: {
                                field: 'repassword',
                                message: '密码和确认密码不一致'
                            }
                        }
                    },
                    repassword: {
                        validators: {
                            identical: {
                                field: 'password',
                                message: '密码和确认密码不一致'
                            }
                        }
                    },
                    nickname: {
                        validators: {
                            stringLength: {
                                min: 5,
                                max: 30,
                                message: '昵称长度5~30之间'
                            },
                            remote: {
                                url: "<?php echo url('console/common/validonly',['table'=>'manager']); ?>",
                                message: '昵称已经存在'
                            }
                        }
                    },
                    mobile: {
                        validators: {
                            regexp: {
                                regexp: /^1(3[0-9]|4[57]|5[0-35-9]|7[0135678]|8[0-9])\d{8}$/,//手机号正则表达式
                                message: '手机号格式不正确'
                            },
                            remote: {
                                url: "<?php echo url('console/common/validonly',['table'=>'manager']); ?>",
                                message: '手机号已经存在'
                            }
                        }
                    }
                }
            });
        });
         //选择头像效果
      function chooseImg2(num){
        $('#avatar2').val(num);
        $("[myflagImg='"+num+"']").siblings().removeClass('choosed').end().addClass("choosed");
      }
      function logout(url){
          swal({   
            title: "确定要退出?",   
            text: "你将退出管理后台!",   
            type: "warning",   
            showCancelButton: true,    
            confirmButtonText: "确认", 
            cancelButtonText: '取消',
            closeOnConfirm: false
          }, function(){ 
             top.location=url;   
             return true;
          });
      }
    </script>
</body>
</html>