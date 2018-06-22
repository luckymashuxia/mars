<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:75:"E:\project2017\mx6.0\public/../application/console\view\manager\create.html";i:1484803333;s:76:"E:\project2017\mx6.0\public/../application/console\view\template\create.html";i:1495164287;s:77:"E:\project2017\mx6.0\public/../application/console\view\template\sidebar.html";i:1495164304;s:76:"E:\project2017\mx6.0\public/../application/console\view\template\topbar.html";i:1485229261;s:76:"E:\project2017\mx6.0\public/../application/console\view\template\footer.html";i:1488519734;}*/ ?>
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
  <link href="__PLUGIN__/Fileinput/css/fileinput.css" rel="stylesheet">
  
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
            <a href="<?php echo url('Home/index/index'); ?>" target="_blank">
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
      <h2><i class="fa fa-edit"></i> <?php echo $mate_title; ?> <span><?php echo $mate_operate; ?></span></h2>
      <div class="breadcrumb-wrapper">
        <span class="label">现在所在位置:</span>
        <ol class="breadcrumb">
          <li><?php echo $mate_title; ?> </li>
          <li class="active"><?php echo $mate_operate; ?></li>
        </ol>
      </div>
    </div>
    <div class="contentpanel">
         
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="panel-btns">
            <a href="" class="panel-close">&times;</a>
            <a href="" class="minimize">&minus;</a>
          </div>
          <h4 class="panel-title"><?php echo $mate_operate; ?>-<?php echo $mate_title; ?></h4>
        </div>
        <div class="panel-body panel-body-nopadding">
          
          <form class="form-horizontal form-bordered" id="defaultForm" action="" method="post" >
            
             <div class="form-group">
                  <label class="col-sm-3 control-label">用户名:</label>
                  <div class="col-sm-6">
                      <input type="text" class="form-control" name="username" placeholder="请输入用户名"  value="<?php echo isset($vo['username']) ? $vo['username'] :  ''; ?>" <?php if(\think\Request::instance()->action() == 'update'): ?>readonly<?php else: ?>required<?php endif; ?> >
                  </div>
              </div>
              <div class="form-group">
                  <label class="col-sm-3 control-label">密码:</label>
                  <div class="col-sm-6">
                      <input type="password" class="form-control" name="password" placeholder="请输入密码" <?php if(\think\Request::instance()->action() == 'create'): ?>required<?php endif; ?>>
                  </div>
              </div>
              <div class="form-group">
                  <label class="col-sm-3 control-label">确认密码:</label>
                  <div class="col-sm-6">
                      <input type="password" class="form-control" name="repassword" placeholder="请输入确认密码" <?php if(\think\Request::instance()->action() == 'create'): ?>required<?php endif; ?>>
                  </div>
              </div>
               
              <div class="form-group">
                  <label class="col-sm-3 control-label">昵称:</label>
                  <div class="col-sm-6">
                      <input type="text" class="form-control" name="nickname" placeholder="请输入昵称"  value="<?php echo isset($vo['nickname']) ? $vo['nickname'] :  ''; ?>" required>
                  </div>
              </div>
              <div class="form-group">
                  <label class="col-sm-3 control-label">手机号:</label>
                  <div class="col-sm-6">
                      <input type="text" class="form-control" name="mobile" placeholder="请输入手机号"  value="<?php echo isset($vo['mobile']) ? $vo['mobile'] :  ''; ?>" required>
                  </div>
              </div>
             <div class="form-group">
                  <label class="col-sm-3 control-label">头像选择:</label>
                  <div class="col-sm-6 avatar-size">
                      <input type="hidden" name="avatar" value="<?php echo isset($vo['avatar']) ? $vo['avatar'] :  1; ?>" id="avatar">
                      <?php $__FOR_START_4675__=1;$__FOR_END_4675__=9;for($i=$__FOR_START_4675__;$i < $__FOR_END_4675__;$i+=1){ ?>
                      <img src="__CONSOLE__/images/photos/user<?php echo $i; ?>.jpg" class="img-circle" onClick="chooseImg(<?php echo $i; ?>);" flagImg="<?php echo $i; ?>">
                      <?php } ?>
                  </div>
              </div>
             <div class="form-group">
                  <label class="col-sm-3 control-label">管理组:</label>
                  <div class="col-sm-6">
                      <select class="select2" name="group_id" required>
                          <option value="">请选择所属管理组</option>
                          <?php if(is_array($authgroup) || $authgroup instanceof \think\Collection): $i = 0; $__LIST__ = $authgroup;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$auth): $mod = ($i % 2 );++$i;?>
                               <option value="<?php echo $auth['id']; ?>"><?php echo $auth['title']; ?></option>
                         <?php endforeach; endif; else: echo "" ;endif; ?>
                      </select>
                  </div>
              </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">状态：</label>
                <div class="col-sm-6 wh-inline">
                    <div class="rdio rdio-primary">
                        <input type="radio" name="status" id="status-1" value="1">
                        <label for="status-1">启用</label>
                    </div>
                    <div class="rdio rdio-primary">
                        <input type="radio" name="status" id="status-0" value="0">
                        <label for="status-0">禁用</label>
                    </div>
                </div>
            </div>

             <div class="panel-footer">
             <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <input type="hidden" name="id" value="<?php echo isset($vo['id']) ? $vo['id'] :  ''; ?>">
                <button type="submit" class="btn btn-primary">提交</button>
                <button type="button" class="btn btn-default" onclick="javascript:history.back(-1);">返回</button>
              </div>
             </div>
            </div><!-- panel-footer -->
            
          </form>
          
        </div><!-- panel-body -->
 
    </div><!-- contentpanel -->
  </div><!-- mainpanel -->
  
  
</section>

<script src="__CONSOLE__/js/jquery-1.11.1.min.js"></script>
<script src="__CONSOLE__/js/jquery-migrate-1.2.1.min.js"></script>
<script src="__CONSOLE__/js/bootstrap.min.js"></script>
<script src="__CONSOLE__/js/modernizr.min.js"></script>
<script src="__CONSOLE__/js/jquery.sparkline.min.js"></script>
<script src="__CONSOLE__/js/toggles.min.js"></script>
<script src="__CONSOLE__/js/retina.min.js"></script>
<script src="__CONSOLE__/js/jquery.cookies.js"></script>

<script src="__CONSOLE__/js/select2.min.js"></script>
<script src="__CONSOLE__/js/custom.js"></script>
<script src="__PLUGIN__/sweetalert/js/sweetalert.min.js"></script>
<!-- 时间控件 -->
<script src="__PLUGIN__/datepicker/WdatePicker.js"></script>
<!-- 验证 -->
<script src="__CONSOLE__/js/bootstrapValidator.js"></script>

<!-- 图片上传 -->
<script src="__PLUGIN__/Fileinput/js/fileinput.js"></script>
<script>
//单图上传
function fileinputOne(fileid,field){
      var widths = arguments[2] ? arguments[2] : 'auto';//设置默认的图片宽度
      var heights = arguments[3] ? arguments[3] : '160px';//设置默认的图片高度
      //单图上传
      var $input = $("#"+fileid);
      var $picurl = $("#"+field); 
        
      var $Preview =[];
      var $Config =[];
      if($picurl.val()!=''){
         $Preview =["<img class='kv-preview-data file-preview-image' style='width:"+widths+";height:"+heights+";' src='__ROOT__"+$picurl.val()+"'>"];
         $Config =[{key: 1}];
      }
      $input.fileinput({
          uploadUrl: "<?php echo url('Console/common/upload'); ?>",
          deleteUrl: "<?php echo url('Console/common/updel'); ?>",
          autoReplace: true,
          overwriteInitial: true,
          showUploadedThumbs: false,
          maxFileCount: 1,
          initialPreview: $Preview,
          initialPreviewConfig: $Config,
          layoutTemplates: {actionDelete: ''}, 
      }).on("filebatchselected", function(event, files) {
          $input.fileinput("upload");//选择后自动上传
      }).on('fileuploaded', function(event, data,previewId,index) {
             if(data.response.code==0)
             {  
                 $picurl.val(data.response.img);
             }
      }).on("filecleared", function(event, files) {
             $picurl.val('');
      }).on('fileuploaderror', function(event,data) {
          // swal("出错了", data.response.error, "error");
      });

}
//组图上传
function fileinputMore(fileid,picurlname,field){
      var widths = arguments[3] ? arguments[3] : 'auto';//设置默认的图片宽度
      var heights = arguments[4] ? arguments[4] : '160px';//设置默认的图片高度
      //组图上传
      var $input = $("#"+fileid);
      var $picimg = $("input[name='"+picurlname+"']");

      var $Preview =[];
      var $Config =[];
      $picimg.each(function(i,e){
         $Preview.push("<img class='kv-preview-data file-preview-image' style='width:"+widths+";height:"+heights+";' src='__ROOT__"+$(this).val()+"'>");
         $Config.push({caption: $(this).attr('flag'),show: $(this).attr('show'),size:0,url:"<input type='hidden' name='"+field+"' value='"+$(this).val()+"'>", key: i});

      });

      var footerTemplate = '<div class="file-thumbnail-footer">\n' +
      '   <div style="margin:5px 0">\n' +
      '       <input type="text" class="hidden" value="{show}" name="show[]"><input class="kv-input kv-new form-control input-sm text-center" value="{caption}" placeholder="填写注释" name="info[]">\n' +
      '   </div>\n' +
      '   <button type="button" class="kv-file-forward text-info header-left" title="前移"><i class="glyphicon glyphicon-chevron-left"></i></button>\n' +
      '   &nbsp;{size}&nbsp;\n' +
      '   <button type="button" class="kv-file-backward text-danger header-right" title="后移"><i class="glyphicon glyphicon-chevron-right"></i></button>\n' +
      '   <button type="button" class="kv-file-heart text-danger header-left" title="显示隐藏"><i class="glyphicon glyphicon-heart{show}"></i></button>\n' +
      '   {actions}\n' +
      '</div>';

        $input.fileinput({
          uploadUrl: "<?php echo url('Console/common/upload'); ?>",
          deleteUrl: "<?php echo url('Console/common/updel'); ?>",
          autoReplace: false,
          overwriteInitial: false,
          layoutTemplates: {footer: footerTemplate, size: '<samp><small>({sizeText})</small></samp>'},
          initialPreview: $Preview,
          initialPreviewConfig: $Config,
      }).on("filebatchselected", function(event, files) {
          $input.fileinput("upload");//选择后自动上传
      }).on('fileuploaded', function(event, data,previewId,index) {
             if(data.response.code==0)
             { 
                 $('#'+previewId).append("<input type='hidden' name='"+field+"' value='"+data.response.img+"'>");
             }
      }).on('fileuploaderror', function(event,data) {
          // swal("出错了", data.response.error, "error");
      });
}
</script>




<script>
fileinputOne('fileone','picurl');
//选择头像效果
function chooseImg(num){
    $('#avatar').val(num);
    $("[flagImg='"+num+"']").siblings().removeClass('choosed').end().addClass("choosed");
}

$(document).ready(function() {
    $("[name='status'][value='<?php echo isset($vo['status']) ? $vo['status'] :  '1'; ?>']").attr("checked", true);
    $("[name='group_id']").find("[value='<?php echo isset($vo['group_id']) ? $vo['group_id'] :  ''; ?>']").attr("selected", true);
    $("[flagImg='<?php echo isset($vo['avatar']) ? $vo['avatar'] :  '1'; ?>']").addClass("choosed");

    $('#defaultForm').bootstrapValidator({
        message: '这个值是无效的',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            <?php if(\think\Request::instance()->action() == 'create'): ?>
            username: {
                message: '用户名必填不能为空',
                validators: {
                    stringLength: {
                        max: 30,
                        message: '用户名最大长度30个字符'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: '用户名只能由字母、数字、点和下划线组成'
                    },
                    remote: {
                        url: "<?php echo url('console/common/validonly',['table'=>'manager']); ?>",
                        message: '用户名已经存在'
                    }
                    
                }
            },
            <?php endif; ?>
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
                        max: 30,
                        message: '昵称最大长度30个字符'
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

    jQuery(".select2").select2({
        width: '100%',
        minimumResultsForSearch: -1
    });


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
                        <?php $__FOR_START_14357__=1;$__FOR_END_14357__=9;for($i=$__FOR_START_14357__;$i < $__FOR_END_14357__;$i+=1){ ?>
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