<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:76:"E:\project2017\mx6.0\public/../application/console\view\webconfig\index.html";i:1495438814;s:74:"E:\project2017\mx6.0\public/../application/console\view\template\base.html";i:1495164278;s:77:"E:\project2017\mx6.0\public/../application/console\view\template\sidebar.html";i:1495164304;s:76:"E:\project2017\mx6.0\public/../application/console\view\template\topbar.html";i:1499060453;s:76:"E:\project2017\mx6.0\public/../application/console\view\template\footer.html";i:1488519734;}*/ ?>
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
  
<link href="__CONSOLE__/css/bootstrap-editable.css" rel="stylesheet">
<!-- 图片上传 -->
<script src="__PLUGIN__/Fileinput/js/fileinput.js"></script>
<script type="text/javascript">
  //单图上传
function fileinputOne(fileid){
      //单图上传
      var $input = $("#file"+fileid);
        
      $input.fileinput({
          uploadUrl: "<?php echo url('Console/common/upload',['dir'=>'uploads']); ?>",
          autoReplace: true,
          overwriteInitial: true,
          showUploadedThumbs: false,
          maxFileCount: 1, 
      }).on("filebatchselected", function(event, files) {
          $input.fileinput("upload");//选择后自动上传
      }).on('fileuploaded', function(event, data,previewId,index) {
           if(data.response.code==0)
             {  
                 var picurl= data.response.img;
                 $.ajax({
                    type: "post",
                    url: "<?php echo url('Console/common/editPicurl'); ?>",
                    data: { picurl: picurl,field:fileid}, 
                    dataType:'json',
                    success: function(data) {
                      $('#pic'+fileid).attr('src','__ROOT__'+data['src']);
                    },
                    error: function(err){
                        swal("OMG", JSON.stringify(err), "error");
                    }
                });
             }
      }).on('fileuploaderror', function(event,data) {
           swal("出错了", data.response.error, "error");
      });

}
</script>

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
        <div class="col-md-12 mb30">
        
        <!-- Nav tabs -->
        <ul class="nav nav-tabs connectList" id="sortable-list">
          <?php if(is_array($list) || $list instanceof \think\Collection): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
          <li <?php if($i == '1'): ?>class="active"<?php endif; ?> id="<?php echo $vo['id']; ?>"><a href="#sys<?php echo $vo['id']; ?>" data-toggle="tab"><strong><?php echo $vo['title']; ?></strong></a></li>
          <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        
        <!-- Tab panes -->
        <div class="tab-content mb30">
          <?php if(is_array($list) || $list instanceof \think\Collection): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;switch($vo['id']): case "1": ?>
                     <div class="tab-pane" id="sys1">
                      <form action="<?php echo url('Console/Webconfig/create'); ?>" method="post" id="subform">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>所属配置组</label>
                                        <select class="select2" name="vargroup">
                                            <?php if(is_array($type) || $type instanceof \think\Collection): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vot): $mod = ($i % 2 );++$i;?>
                                              <option value="<?php echo $vot['id']; ?>"><?php echo $vot['title']; ?></option>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>变量名称</label>
                                        <input class="form-control" name="varname" placeholder="系统会自动为变量添加 'web_' 前缀" value="" required>

                                    </div>
                                    <div class="form-group">
                                        <label>参数说明</label>
                                        <input class="form-control" type="text" name="varinfo" placeholder="变量的描述信息" value="" required>
                                    </div>
                                    <div class="form-group">
                                        <label>变量值</label>
                                        <input class="form-control" type="text" name="varvalue" placeholder="请填写变量值" value="">
                                    </div>
                                    <div class="form-group">
                                        <label>变量类型</label>
                                        <div class="radio">
                                            <label>
                                            <input type="radio" name="vartype" value="text" checked >文本
                                            </label>
                                            &nbsp;&nbsp;
                                            <label>
                                            <input type="radio" name="vartype" value="select">布尔(Y/N)
                                            </label>
                                            &nbsp;&nbsp;
                                            <label>
                                            <input type="radio" name="vartype" value="textarea">多行文本
                                            </label>
                                            &nbsp;&nbsp;
                                            <label>
                                            <input type="radio" name="vartype" value="image">图片
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">提交</button>
                                        <button type="button" class="btn btn-default" onClick="javascript:history.go(-1);">返回</button>
                                    </div>
                                </div>
                                </form>
                    </div>
              <?php break; default: ?>
           <div class="tab-pane <?php if($i == '1'): ?>active<?php endif; ?> connectList2 sortable-list2" id="sys<?php echo $vo['id']; ?>" style="list-style: none;">
           <?php if(is_array($vo['info']) || $vo['info'] instanceof \think\Collection): $i = 0; $__LIST__ = $vo['info'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?>
                 <div class="row editable-list-item" id="<?php echo $vo1['varname']; ?>">
                    <div class="col-sm-3"><span><?php echo $vo1['varinfo']; ?>(<?php echo $vo1['varname']; ?>)</span></div>
                    <div class="col-sm-9">
                    <?php switch($vo1['vartype']): case "select": switch($vo1['varname']): case "web_water_locate": ?>
                                 <span><a class="selectLocate" data-pk="<?php echo $vo1['varname']; ?>" data-value="<?php echo $vo1['varvalue']; ?>" data-title="<?php echo $vo1['varinfo']; ?>" data-type="select2" data-url="<?php echo url('Console/common/editable'); ?>"><?php switch($vo1['varvalue']): case "1": ?>左上角水印<?php break; case "2": ?>上居中水印<?php break; case "3": ?>右上角水印<?php break; case "4": ?>左居中水印<?php break; case "5": ?>居中水印<?php break; case "6": ?>右居中水印<?php break; case "7": ?>左下角水印<?php break; case "8": ?>下居中水印<?php break; case "9": ?>右下角水印<?php break; endswitch; ?></a></span>
                                 <?php break; case "web_water_type": ?>
                                 <span><a class="selectType" data-pk="<?php echo $vo1['varname']; ?>" data-value="<?php echo $vo1['varvalue']; ?>" data-title="<?php echo $vo1['varinfo']; ?>" data-type="select2" data-url="<?php echo url('Console/common/editable'); ?>"><?php if($vo1['varvalue'] == 'Y'): ?>图片<?php else: ?>文字<?php endif; ?></a></span>
                                 <?php break; default: ?>
                                 <span><a class="selectEdit" data-pk="<?php echo $vo1['varname']; ?>" data-value="<?php echo $vo1['varvalue']; ?>" data-title="<?php echo $vo1['varinfo']; ?>" data-type="select2" data-url="<?php echo url('Console/common/editable'); ?>"><?php if($vo1['varvalue'] == 'Y'): ?>是<?php else: ?>否<?php endif; ?></a></span>
                            <?php endswitch; break; case "image": ?>
                        <div style="display: none;"><input id="file<?php echo $vo1['varname']; ?>" type="file"></div>
                        <script type="text/javascript">fileinputOne('<?php echo $vo1['varname']; ?>');</script>
                        <span><img id="pic<?php echo $vo1['varname']; ?>" src="<?php echo getImgUrl($vo1['varvalue']); ?>" width="auto" height="80px" onclick="$('#file<?php echo $vo1['varname']; ?>').click();"></span>
                        <?php break; default: ?>
                         <span><a class="basicEdit" data-pk="<?php echo $vo1['varname']; ?>" data-type="<?php echo $vo1['vartype']; ?>" data-title="<?php echo $vo1['varinfo']; ?>" data-url="<?php echo url('Console/common/editable'); ?>"><?php echo $vo1['varvalue']; ?></a></span>
                    <?php endswitch; ?>
                    </div>
                </div><!-- row -->
              
            <?php endforeach; endif; else: echo "" ;endif; ?>    
          </div>
          <?php endswitch; endforeach; endif; else: echo "" ;endif; ?>
        </div>
        
        
      </div><!-- col-md-12 -->
      </div><!-- row -->

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


<script src="__CONSOLE__/js/jquery-ui-1.10.4.min.js"></script>
<script src="__CONSOLE__/js/bootstrap-editable.min.js"></script>


<script>
  jQuery(document).ready(function() { 
        // Basic Popup Example
        jQuery('.basicEdit').editable();
        jQuery('.selectEdit').editable({
            source: [
                     {value: "Y", text: " 是 "},
                     {value: "N", text: " 否 "}
                    ]
        });
        jQuery('.selectType').editable({
            source: [
                     {value: "Y", text: "图片"},
                     {value: "N", text: "文字"}
                    ]
        });
        jQuery('.selectLocate').editable({
            source: [
                     {value: "1", text: "左上角水印"},
                     {value: "2", text: "上居中水印"},
                     {value: "3", text: "右上角水印"},
                     {value: "4", text: "左居中水印"},
                     {value: "5", text: "居中水印"},
                     {value: "6", text: "右居中水印"},
                     {value: "7", text: "左下角水印"},
                     {value: "7", text: "下居中水印"},
                     {value: "9", text: "右下角水印"}
                    ]
        });
       
     $("#sortable-list").sortable(
      {
        connectWith:".connectList",
        update: function ()
        {
        var serial = $('#sortable-list').sortable('toArray');
        $.ajax({
            url: "<?php echo url('Console/common/sortable'); ?>",
            type: "post",
            data: {sort:serial},
            dataType: "json",
            success: function(msg) {
               //swal("更新成功", "排序更新成功", "success");               
            },
            error: function(msg){
              swal("出错了", "排序更新出错"+JSON.stringify(msg), "error");
            }
        });

        }

    }
      ).disableSelection();

   $(".sortable-list2").sortable(
      {
        connectWith:".connectList2",
        cancel: "span",
        update: function ()
        {
        var serial = $('.sortable-list2').sortable('toArray');
        $.ajax({
            url: "<?php echo url('Console/common/sortConfig'); ?>",
            type: "post",
            data: {sort:serial},
            dataType: "json",
            success: function(msg) {
              //swal("更新成功", "排序更新成功", "success");               
            },
            error: function(msg){
              swal("排序更新出错", JSON.stringify(msg), "error");
            }
        });

        }

    }
      );  
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
                        <?php $__FOR_START_24310__=1;$__FOR_END_24310__=9;for($i=$__FOR_START_24310__;$i < $__FOR_END_24310__;$i+=1){ ?>
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