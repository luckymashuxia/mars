<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"E:\project2017\mx6.0\public/../application/console\view\goods\show.html";i:1492065827;}*/ ?>
<html>
    <head> 
        <style>
            .yListr {
                width: 690px;
                font-family: "微软雅黑";
                margin: 46px auto 0 auto;
            }

            .yListr ul {
                list-style-type :none;
                margin:0;
                padding:0;
            }

            .yListr ul li {
                height: 36px;
                margin-bottom: 23px;
            }

            .yListr ul li span {
                color: #000000;
                font-size: 14px;
                line-height: 36px;
                display: inline-block;
                width: 42px;
                padding-left: 4px;
            }

            .yListr ul li em {
                cursor: pointer;
                color: #666666;
                font-size: 14px;
                display: inline-block;
                padding: 0 10px;
                font-style: normal;
                border: 1px solid #dcdcdc;
                line-height: 34px;
                height: 34px;
            }

            .yListr ul li em.yListrclickem {
                line-height: 32px;
                border: 2px solid #e9630a;
                height: 32px;
                position: relative;
                padding: 0 9px;
            }

        </style>
    </head>
    <body>

        <div>
            <div>
                <div class="yListr">
                 价格<span id="pricespan"></span><br/>
                 原价<span id="oldpricespan"></span><br/>
                 库存<span id="homenumspan"></span>
                        <ul> 
                        <?php if(is_array($vo['attr']) || $vo['attr'] instanceof \think\Collection): $k = 0; $__LIST__ = $vo['attr'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voa): $mod = ($k % 2 );++$k;?>
                         <li><span><?php echo $voa['title']; ?></span> 
                           <?php if(is_array($voa['attrs']) || $voa['attrs'] instanceof \think\Collection): $i = 0; $__LIST__ = $voa['attrs'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voas): $mod = ($i % 2 );++$i;?>
                                 <em <?php if($key == '0'): ?>class="yListrclickem"<?php endif; ?>><?php echo $voas; ?><i></i>
                                     <input type="radio" style="display: none" name="goods_spec[<?php echo $k; ?>]" value="<?php echo $voas; ?>" <?php if($key == '0'): ?>checked="checked"<?php endif; ?>>
                                 </em>
                             <?php endforeach; endif; else: echo "" ;endif; ?>
                         </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                        
                </div>
               
            </div>
        </div>
       
        <script type="text/javascript" src="__CONSOLE__/js/jquery-1.11.1.min.js"></script> 
        <script type="text/javascript">
            $(function() {
                //切换规格
                $(".yListr ul li em").click(function() {
                    $(this).addClass("yListrclickem").siblings().removeClass("yListrclickem");
                    $(this).siblings().children('input').prop('checked',false);
                    $(this).children('input').prop('checked',true);
                    // 更新商品价格
                    get_goods_price();
                });
                // 更新商品价格
                get_goods_price();
            })
            // 更新商品价格
            function get_goods_price(){
                var goods_spec_arr = new Array();
                $("input[type='radio'][name^='goods_spec']:checked").each(function(){
                    goods_spec_arr.push($(this).val());
                });
                var spec_key = goods_spec_arr.join("_");
                var spec_goods_price = <?php echo isset($vo['goodsattr']) ? $vo['goodsattr'] :  '[]'; ?>;//控制器传过来
                var saleprice = spec_goods_price[spec_key]['price']; // 找到对应规格的价格
                var marketprice = spec_goods_price[spec_key]['oldprice']; // 找到对应规格的价格         
                var homenum = spec_goods_price[spec_key]['homenum']; // 找到对应规格的库

                $("#pricespan").html(saleprice);
                $("#oldpricespan").html(marketprice);
                $("#homenumspan").html(homenum);

            }
        </script>
    </body>
</html>