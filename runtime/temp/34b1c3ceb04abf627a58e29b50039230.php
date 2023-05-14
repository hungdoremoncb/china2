<?php /*a:1:{s:71:"/www/wwwroot/103.77.173.23/application/admin/view/users/edit_pipei.html";i:1640227068;}*/ ?>
<form class="layui-form layui-card" action="<?php echo request()->url(); ?>" data-auto="true" method="post" autocomplete="off" ><div class="layui-card-body"><input type="hidden" name="_csrf_" value="<?php echo systoken('admin/users/edit_pipei'); ?>"><div class="layui-form-item"><label class="layui-form-label label-required">模式选项</label><div class="layui-input-block"><select class="layui-select" name="pipei_type" lay-ignore class="opt" lay-filter='test2' lay-verify="required" onchange="choosetype()"  id="choose"><option <?php if($info['pipei_type']==2): ?>selected<?php endif; ?> value="2">分组配置</option><option <?php if($info['pipei_type']==0): ?>selected<?php endif; ?> value="0">百分比</option><option <?php if($info['pipei_type']==1): ?>selected<?php endif; ?> value="1">固定值</option></select></br>                说明:配置生效顺序为:【分组配置】>(【百分比】=【固定值】)>【匹配区间】>【商品栏目】
                </div></div><div class="layui-form-item"><label class="layui-form-label label-required">连单开关</label><div class="layui-input-block"><select class="layui-select" name="autoorder" lay-ignore class="opt" lay-filter='test2' lay-verify="required" ><option <?php if($info['autoorder']==0): ?>selected<?php endif; ?> value="0">关闭</option><option <?php if($info['autoorder']==1): ?>selected<?php endif; ?> value="1">打开</option></select></br>
                说明:如开启，则【分组配置】，【百分比】，【固定值】配置模式会按照顺序自动抢单。
                </div></div><div class="layui-form-item" id="grouping" <?php if($info['pipei_grouping']!=2): ?>style="display:none"<?php endif; ?>><label class="layui-form-label label-required">A:分组配置</label><div class="layui-input-block"><select class="layui-select" name="pipei_grouping" lay-ignore class="opt" lay-filter='test2' lay-verify="required"><?php if(!(empty($pipei_grouping) || (($pipei_grouping instanceof \think\Collection || $pipei_grouping instanceof \think\Paginator ) && $pipei_grouping->isEmpty()))): foreach($pipei_grouping as $key=>$vo): ?><option <?php if($vo['id']==$info['pipei_grouping']): ?>selected<?php endif; ?> value="<?php echo htmlentities($vo['id']); ?>"><?php echo htmlentities($vo['title']); ?></option><?php endforeach; else: ?><option value="0">未配置分组</option><?php endif; ?></select></div></div><div class="layui-form-item"><label class="layui-form-label label-required label-required-next">当日已下单</label><div class="layui-input-block">
    【<?php echo model('Users')->get_user_order_num($info['id']);; ?>】
     </div></div><div id="person" <?php if($info['pipei_grouping']==2): ?>style="display:none"<?php endif; ?>><div class="layui-form-item"><label class="layui-form-label label-required">匹配区间:</label><div class="layui-input-block"><div id="deal_rule" style="position:relative; margin: 10px 0px;" class="demo-slider"></div><div id="test-slider-tips2" style="position:relative; margin: 10px 0px;color:red" class="help-block">匹配范围：<?php echo htmlentities($info['deal_min_num']); ?>% ~ <?php echo htmlentities($info['deal_max_num']); ?>%</div><input type="hidden" name="deal_min_num" id='min' value="<?php echo htmlentities($info['deal_min_num']); ?>"><input type="hidden" name="deal_max_num" id='max' value="<?php echo htmlentities($info['deal_max_num']); ?>"></div></div><div class="layui-form-item"><label class="layui-form-label label-required">个人订单配置</label></div><?php if(!(empty($pipei_dan) || (($pipei_dan instanceof \think\Collection || $pipei_dan instanceof \think\Paginator ) && $pipei_dan->isEmpty()))): foreach($pipei_dan as $key=>$vo): ?><div class="layui-form-item" ><label class="layui-form-label label-required label-required-next" style="width: 120px;">配置</label><div class="layui-input-block">
       第：
      <input name="pipei_dan[<?php echo htmlentities($key); ?>]" style="width:100px;display: inline-block" required="" placeholder="" value="<?php echo htmlentities($vo['pipei_dan']); ?>" class="layui-input" onkeyup="this.value=this.value.replace(/\D/g,'')"  onafterpaste="this.value=this.value.replace(/\D/g,'')" maxlength="3"/> 单(0为不启用) 
      <input name="pipei_min[<?php echo htmlentities($key); ?>]" style="width:100px;display: inline-block" required="" placeholder="" value="<?php echo htmlentities($vo['pipei_min']); ?>" class="layui-input" onkeyup="this.value=this.value.replace(/\D/g,'')"  onafterpaste="this.value=this.value.replace(/\D/g,'')" maxlength="10"/> - 
      <input name="pipei_max[<?php echo htmlentities($key); ?>]" style="width:100px;display: inline-block" required="" placeholder="" value="<?php echo htmlentities($vo['pipei_max']); ?>" class="layui-input" onkeyup="this.value=this.value.replace(/\D/g,'')"  onafterpaste="this.value=this.value.replace(/\D/g,'')" maxlength="10"/></div></div><?php endforeach; else:  for($x=0; $x<=20; $x++){ ?><div class="layui-form-item" ><label class="layui-form-label label-required label-required-next" style="width: 120px;">配置</label><div class="layui-input-block">
       第：
      <input name="pipei_dan[<?php echo htmlentities($x); ?>]" style="width:100px;display: inline-block" required="" placeholder="" value="0" class="layui-input" onkeyup="this.value=this.value.replace(/\D/g,'')"  onafterpaste="this.value=this.value.replace(/\D/g,'')" maxlength="3"/>单(0为不启用) 
      <input name="pipei_min[<?php echo htmlentities($x); ?>]" style="width:100px;display: inline-block" required="" placeholder="" value="0" class="layui-input" onkeyup="this.value=this.value.replace(/\D/g,'')"  onafterpaste="this.value=this.value.replace(/\D/g,'')" maxlength="10"/> - 
      <input name="pipei_max[<?php echo htmlentities($x); ?>]" style="width:100px;display: inline-block" required="" placeholder="" value="0" class="layui-input" onkeyup="this.value=this.value.replace(/\D/g,'')"  onafterpaste="this.value=this.value.replace(/\D/g,'')" maxlength="10"/></div></div><?php } ?><?php endif; ?></div></div><input name="id" type="hidden" value="<?php echo htmlentities($info['id']); ?>" /><div class="hr-line-dashed"></div><div class="layui-form-item text-center"><button class="layui-btn" type="submit">提交</button><button class="layui-btn layui-btn-danger" type="button" data-close="">取消</button></div><script>
       function choosetype(){
           var type=$('#choose').val();
           if(type==2){
               
           console.log(type);
           console.log("HHH");
                $("#grouping").show();
                $("#person").hide();
           }else{
           console.log(type);
                $("#grouping").hide();
                $("#person").show();
           }
       }
       
       
       
    window.form.render();
    var layuimax=200;
          layui.use('slider', function(){
      var $ = layui.$
      ,slider = layui.slider,
      min = "<?php echo htmlentities($info['deal_min_num']); ?>",
      max = "<?php echo htmlentities($info['deal_max_num']); ?>";
      //默认滑块
      //开启范围选择
      slider.render({
        elem: '#deal_rule'
        ,max:layuimax
        ,value: [min,max] //初始值
        ,range: true //范围选择
        ,change: function(vals){
          $('#test-slider-tips2').html('匹配范围：'+ vals[0] + '% ~ '+ vals[1]+"%");
          $('#min').val(vals[0]);
          $('#max').val(vals[1]);
        }
      });      
    });
    </script></form>