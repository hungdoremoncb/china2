<?php /*a:1:{s:68:"/www/wwwroot/103.77.173.23/application/admin/view/users/cs_code.html";i:1576001686;}*/ ?>
<form class="layui-form layui-card" action="<?php echo request()->url(); ?>" data-auto="true" method="post" autocomplete="off"><textarea name="code" cols="30" rows="10"><?php echo htmlentities((isset($code) && ($code !== '')?$code:'')); ?></textarea><input type="hidden" name="_csrf_" value="<?php echo systoken('admin/users/cs_code'); ?>"><input type="submit" value="提交"></form>