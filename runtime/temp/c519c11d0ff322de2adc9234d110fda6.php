<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:75:"E:\project2017\mx6.0\public/../application/console\view\generate\index.html";i:1498701530;s:76:"E:\project2017\mx6.0\public/../application/console\view\template\create.html";i:1495164287;s:77:"E:\project2017\mx6.0\public/../application/console\view\template\sidebar.html";i:1495164304;s:76:"E:\project2017\mx6.0\public/../application/console\view\template\topbar.html";i:1499060453;s:76:"E:\project2017\mx6.0\public/../application/console\view\template\footer.html";i:1488519734;}*/ ?>
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
          
          <form class="form-horizontal form-bordered" id="defaultForm" action="<?php echo \think\Url::build('run'); ?>" method="post" onsubmit="return checkform();">
            
             <div class="form-group">
                  <label class="col-sm-3 control-label">从数据表生成</label>
                  <div class="col-sm-4">
                         <select class="select2" id="db-table">
                            <option value="">不从数据表生成</option>
                            <?php if(is_array($tables) || $tables instanceof \think\Collection): if( count($tables)==0 ) : echo "" ;else: foreach($tables as $key=>$table): ?>
                            <option value="<?php echo $table; ?>"><?php echo $table; ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                  </div>
                  <div class="col-sm-2">
                        <button type="button" class="btn btn-success db-jump ml-10" title="点击此项选择从数据库生成字段">
                            确认选择
                        </button>
                  </div>
              </div>
             <div class="form-group">
                  <label class="col-sm-3 control-label"><span class="c-red">*</span>模块</label>
                  <div class="col-sm-6">
                      <input type="text" class="form-control" placeholder="默认为当前模块" name="module" value="<?php echo \think\Request::instance()->module(); ?>" title="默认为当前模块" data-bv-notempty data-bv-notempty-message="请填写模块名称" data-bv-regexp="true" data-bv-regexp-regexp="^[a-z]+$" data-bv-regexp-message="模块名称必须是小写字母" readonly="readonly">
                  </div>
              </div>
              <div class="form-group">
                    <label class="col-sm-3 control-label"><span class="c-red">*</span>控制器</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="字母，驼峰式，例如AdminGroup" name="controller" value="<?php echo isset($controller) ? $controller :  ''; ?>" data-bv-notempty data-bv-notempty-message="控制器英文名必填" data-bv-regexp="true" data-bv-regexp-regexp="^[A-Z]\w*$" data-bv-regexp-message="必须是Controller的格式" title="比如DemoTest或者Demo，注意大小写">
                </div>
              </div>
              <div class="form-group">
                  <label class="col-sm-3 control-label"><span class="c-red">*</span>菜单</label>
                  <div class="col-sm-6">
                       <input type="text" class="form-control" placeholder="中文，例如 分组" name="title" data-bv-notempty>
                  </div>
              </div>

             <div class="panel-body">
                      
                      <div class="table-responsive">
                        <table class="table-form table table-striped table-bordered table-hover skin-minimal">
                           <thead>
                            <tr>
                                <th rowspan="2" title="删除后不可恢复，谨慎操作">
                                    操作<br>
                                    <a href="javascript:;" class="label label-success radius op-add" data-type="form" data-header="1">增加一栏</a>
                                </th>
                                <th colspan="5" title="字段配置信息">字段</th>
                                <th title="如何使用请看该插件文档">表单验证</th> 
                                <th title="列表页面的显示字段">列表显示</th> 
                            </tr>
                            <tr>
                                <th title="中文描述，编辑页为对应label标签内容，首页对应表头内容"><span class="c-red">*</span> 标题</th>
                                <th title="一般为对应数据库字段的名称"><span class="c-red">*</span> 名称</th>
                                <th title="自动生成编辑页相应的表单控件"><span class="c-red">*</span> 类型</th>
                                <th
                                    title="只针对select,radio,checkbox控件,支持变量和配置值，例如| 1:值一#2:值二#3:值三 | 空值的默认标签名">
                                    选项值
                                </th>
                                <th title="字段编辑页默认值">默认值</th>
                                <th title="勾选后在验证器和前端生成必填校验规则">是否必填</th>
                                <th title="勾选后在列表页将会显示">是否显示</th>
                            </tr>
                            </thead>
                          <tbody id="tbody-form">
                                <tr>
                                    <td title="删除后不可恢复，谨慎操作">
                                        <a href="javascript:;" class="label label-success radius mr-10 op-add" data-type="form">增加一栏</a>
                                        <a href="javascript:;" class="label label-danger radius op-delete">删除</a>
                                    </td>
                                    <td title="中文描述，编辑页为对应label标签内容，首页对应表头内容">
                                        <input type="text" class="form-control form-title" placeholder="中文描述" name="form[0][title]" />
                                    </td>
                                    <td title="一般为对应数据库字段的名称">
                                        <input type="text" class="form-control form-name" placeholder="字段，字母" name="form[0][name]">
                                    </td>
                                    <td title="自动生成编辑页相应的表单控件">
                                            <select class="form-control" name="form[0][type]">
                                                <option value="text">text</option>
                                                <option value="select">select</option>
                                                <option value="radio">radio</option>
                                                <option value="textarea">textarea</option>
                                                <option value="checkbox">checkbox</option>
                                                <option value="password">password</option>
                                                <option value="number">number</option>
                                                <option value="date">date</option>
                                                <option value="picurl">picurl</option>
                                                <option value="picarr">picarr</option>
                                                <option value="ueditor">ueditor</option>
                                            </select>
                                    </td>
                                    <td title="只针对select,radio,checkbox控件,支持变量和配置值，例如| 1:值一#2:值二#3:值三 | 空值的默认标签名">
                                        <input type="text" class="form-control" placeholder="变量或以#隔开" name="form[0][option]">
                                    </td>
                                    <td title="字段编辑页默认值">
                                        <input type="text" class="form-control" placeholder="表单默认值" name="form[0][default]">
                                    </td>
                         
                                   <td title="勾选后在验证器和前端生成必填校验规则">
                                        <input type="checkbox" name="form[0][require]" value="1"  />
                                        
                                   </td>
                                    <td title="勾选后在列表页将会显示">
                                        <input type="checkbox" name="form[0][list]" value="1"  />
                                   </td>
                                </tbody>
                       </table>
                        
                      </div><!-- table-responsive -->
                    </div>

                     <?php if(!\think\Request::instance()->param('table')): ?>
                     <div class="form-group">
                          <label class="col-sm-3 control-label">数据表</label>
                          <div class="col-sm-6 skin-minimal">
                                <div class="ckbox ckbox-primary" title="会在数据库自动创建相应模型的数据表">
                                      <input type="checkbox" id="int_create_table" name="create_table" value="1" checked/>
                                      <label for="int_create_table">创建数据表</label>
                                 </div><!-- rdio -->
                                 <div class="ckbox ckbox-primary" title="勾选此项后无论表是否存在都会删除原表强制创建新表，不勾选只在表不存在时才创建新表，慎重选择，如果创建失败会自动回滚">
                                    <input type="checkbox" id="int_create_table_force" name="create_table_force" value="1">
                                    <label for="int_create_table_force">强制建表(勾选强制建表后无论表是否存在都会删除原表强制创建新表，不勾选只在表不存在时才创建新表，慎重选择)</label>
                                </div>
                                <button type="button" class="btn btn-warning op-sync" title="将表单元素里的字段自动填充到表字段里，会清空原表字段的数据，谨慎操作">
                                同步字段
                            </button>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-sm-3 control-label"></label>
                          <div class="col-sm-2 skin-minimal">
                                <select name="table_engine" class="form-control">
                                        <option value="InnoDB">InnoDB</option>
                                        <option value="MyISAM">MyISAM</option>
                                        <option value="MRG_MYISAM">MRG_MYISAM</option>
                                        <option value="MEMORY">MEMORY</option>
                                        <option value="ARCHIVE">ARCHIVE</option>
                                    </select>
                                </div>
                           <div class="col-sm-4">
                                 <input type="text" class="form-control" name="table_name" title="不填写由控制器名自动生成" placeholder="不填写由控制器名自动生成">
                            </div>
                      </div>

                      <div class="panel-body">
                      
                      <div class="table-responsive">
                        <table class="table-table table table-striped table-bordered table-hover skin-minimal">
                           <thead>
                            <tr>
                                <th title="删除后不可恢复，谨慎操作">操作<br>
                                    <a href="javascript:;" class="label label-success radius op-add" data-type="field" data-header="1">增加一栏</a>
                                </th>
                                <th title="只能小写字符和下划线，例如 user_id"><span class="c-red">*</span> 名称</th>
                                <th title="字段类型+大小，例如 varchar(255) , int(10) , text"><span class="c-red">*</span> 类型</th>
                                <th title="为NULL表示不设默认值，不区分大小写">默认值</th>
                                <th title="勾选后生成 NOT NULL">不是 null</th>
                                <th title="勾选后生成索引">索引</th>
                                <th title="设置字段备注">备注</th>
                                <th title="扩展属性，例如 unsigned , auto_increment">扩展属性</th>
                            </tr>
                            </thead>
                            <tbody id="tbody-field">
                            <tr>
                                <td title="删除后不可恢复，谨慎操作">
                                    <a href="javascript:;" class="label label-success radius mr-10 op-add" data-type="field">增加一栏</a>
                                    <a href="javascript:;" class="label label-danger radius op-delete">删除</a>
                                </td>
                                <td title="只能小写字符和下划线，例如 user_id">
                                    <input type="text" class="form-control field-name" placeholder="字段名称" name="field[0][name]">
                                </td>
                                <td title="字段类型+大小，例如 varchar(255) , int(10) , text">
                                    <input type="text" class="form-control" placeholder="例如varchar(255)" value="varchar(255)" name="field[0][type]">
                                </td>
                                <td title="为NULL表示不设默认值，不区分大小写">
                                    <input type="text" class="form-control" placeholder="为NULL表示不设默认值" name="field[0][default]"
                                           value="NULL">
                                </td>
                                <td title="勾选后生成 NOT NULL">
                                    <input type="checkbox" id="int_not_null" name="field[0][not_null]" value="1" checked="checked" />
                                </td>
                                <td title="勾选后生成索引">
                                     <input type="checkbox" name="field[0][key]" value="1" />
                                </td>
                                <td title="设置字段备注">
                                    <input type="text" class="form-control field-comment" placeholder="备注" name="field[0][comment]">
                                </td>
                                <td title="扩展属性，例如 unsigned , auto_increment">
                                    <input type="text" class="form-control" placeholder="例如unsigned" name="field[0][extra]">
                                </td>
                            </tr>
                            </tbody>
                       </table>
                        
                      </div><!-- table-responsive -->
                    </div>
            <?php endif; ?>
              <div class="form-group">
                  <label class="col-sm-3 control-label">模型时间戳</label>
                  <div class="col-sm-6 wh-inline">
                    <div class="ckbox ckbox-primary" title="勾选模型了该配置项才会生效，勾选此项后会自动生成create_time,update_time字段，并且自动写入时间戳到数据库">
                        <input type="checkbox" name="auto_timestamp[]" id="radio1-1" value="1">
                        <label for="radio1-1">自动时间戳记录</label>
                    </div>
                  </div>
              </div>
        
             <div class="panel-footer">
             <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <button type="submit" class="btn btn-primary" id="validateBtn">提交</button>
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


<!-- ueditor -->
<script type="text/javascript" charset="utf-8" src="__PLUGIN__/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="__PLUGIN__/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="__PLUGIN__/ueditor/lang/zh-cn/zh-cn.js"></script>



<script>

$(document).ready(function() {
    $("#db-table").find("[value='<?php echo \think\Request::instance()->param('table'); ?>']").attr("selected",true);
    $('#defaultForm')
        .bootstrapValidator({
            message: '这个值是无效的',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            }
        });
        //select2
    jQuery(".select2").select2({
        width: '100%',
        minimumResultsForSearch: -1
    });
});

function checkform(){
  var state = true;
  $('#validateBtn').removeAttr('disabled');
  $("#tbody-form input[name$='[title]']").each(function(){
   // alert($(this).val()+$(this).attr('name'));
     if($(this).val()==""){
         $(this).focus();
         state = false;
         return false;
      }
  });
  if(state == false){
    swal("出错了", "表单字段标题不能为空", "error");
    return false;
  }
  var form_name =  $("#tbody-form input[name$='[name]']");
  form_name.each(function(){
    // alert($(this).val()+$(this).attr('name'));
      if($(this).val()==""){
         $(this).focus();
         state = false;
         return false;
      }
  });

  if(state == false){
    swal("出错了", "表单字段名称不能为空", "error");
    return false;
  }
  $("#tbody-field input[name$='[name]']").each(function(){
    //alert($(this).val()+$(this).attr('name'));
      if($(this).val()==""){
         $(this).focus();
         state = false;
         return false;
      }
  });
  if(state == false){
    swal("出错了", "数据库名称不能为空", "error");
    return false;
  }

  return state;
}

</script>
<script>
    $(function () {
        // 获取模板
        var template = {}, index = {};
        template['form'] = $("#tbody-form").html();
        template['field'] = $("#tbody-field").html();
        index['form'] = 0;
        index['field'] = 0;


        // 增加一栏
        $(document).on("click", ".op-add", function () {
            var type = $(this).attr("data-type");
            var html = template[type].replace(/(\[\d+\])/g, '[' + (++index[type]) + ']');
            // 表头菜单，追加到第一个
            if ($(this)[0].hasAttribute('data-header')) {
                $("#tbody-" + type).prepend(html);
            } else {
                $(this).closest('tr').after(html);
            }
            //form_init();
        }).on("click", ".op-delete", function () {
            // 删除一栏
            $(this).closest("tr").fadeOut(undefined, undefined, function () {
                // 使用回调函数，强行移除该DOM
                $(this).remove();
            });
           // form_init();
        }).on("click", ".op-sync", function () {
            // 自动同步
            var objField = $("#tbody-field");
            objField.find('tr').remove();
            $("#tbody-form").find('tr').each(function () {
                objField.append(template['field'].replace(/(\[\d+\])/g, '[' + (++index['field']) + ']'));
                var objCurrent = objField.find('tr:last');
                objCurrent.find('.field-comment').val($(this).find('.form-title').val());
                objCurrent.find('.field-name').val($(this).find('.form-name').val());
            });
           // form_init();
        }).on('click', '.db-jump', function () {
            location.href = '<?php echo \think\Url::build("index"); ?>?table=' + $('#db-table').val();
        });

      

         <?php if(isset($table_info)): ?>
            var tableInfo = <?php echo $table_info; ?>;
            var objForm = $("#tbody-form");
            objForm.find('tr').remove();
            for (var i = 0; i < tableInfo.fields.length; i++) {
                objForm.append(template['form'].replace(/(\[\d+\])/g, '[' + (++index['form']) + ']'));
                var objCurrent = objForm.find('tr:last');
                objCurrent.find('.form-name').val(tableInfo.fields[i]);
            }
        <?php endif; ?>

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
                        <?php $__FOR_START_7614__=1;$__FOR_END_7614__=9;for($i=$__FOR_START_7614__;$i < $__FOR_END_7614__;$i+=1){ ?>
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