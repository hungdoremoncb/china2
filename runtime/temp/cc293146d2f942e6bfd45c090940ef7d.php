<?php /*a:1:{s:71:"/www/wwwroot/103.77.173.23/application/index/view/my/invite-yellow.html";i:1660261072;}*/ ?>
<!DOCTYPE html><html data-dpr="1" style="font-size: 32px;"><head><meta charset="utf-8" /><meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1" /><meta name="apple-mobile-web-app-capable" content="yes" /><meta content="telephone=yes" name="format-detection" /><meta name="apple-mobile-web-app-status-bar-style" content="white" /><meta name="x5-fullscreen" content="true" /><meta name="apple-touch-fullscreen" content="yes" /><title><?php echo lang('推广海报'); ?></title><link href="/web/css/yellow.css" rel="stylesheet" /><link rel="stylesheet" href="/static_new/css/public.css"><script charset="utf-8" src="/static_new/js/jquery.min.js"></script><script charset="utf-8" src="/static_new/js/dialog.min.js"></script><script charset="utf-8" src="/static_new/js/common.js"></script></head><body style="font-size: 12px;" class="bjs"><div id="app" ><div data-v-268420fc="" class="main"><div data-v-268420fc="" class="header"><div class="left_btn" onclick="window.history.back(-1)"><img src="/web/img/Yjian.png"  alt="" class="return" /></div><div class="Maintitle"><h3><?php echo lang('推广海报'); ?></h3></div><div class="right_btn"></div></div><div data-v-268420fc="" class="box"><h1 data-v-268420fc="" ><?php echo lang('邀好友赚现金'); ?></h1><div data-v-268420fc="" class="top"></div><div class="promote-wrpa"><div data-v-268420fc="" class="user" style="display: block;text-align: center;"><div id="qrcode" class="ewm qr" ></div><script type="text/javascript" src="/statics/js/jquery.qrcode.min.js"></script><script>
jQuery('#qrcode').qrcode({
    render: "canvas", //也可以替换为table
    width: 200,
    height: 200,
    text: "<?php echo htmlentities($url); ?>"
});
</script><div data-v-268420fc="" class="yqm"><span data-v-268420fc="" onclick="copy_txt('<?php echo htmlentities($invite_code); ?>')"><?php echo lang('邀请码'); ?>：<?php echo htmlentities($invite_code); ?></span></div></div><input name="" id="webcopyinput" type="text"
               style="color: #FF0000; font-size: 20px; width: 1px; height: 1px; border: hidden; font-weight: bold; text-align: center;"
               value=""><div data-v-268420fc="" class="copy" style="display: block;" onclick="copy_txt('<?php echo htmlentities($url); ?>')"><?php echo lang('邀请链接:点击复制'); ?></div></div></div></div></div></body><script>
    function copy_txt(xx) {
        //var text = document.createElement('input');
        var text = document.getElementById("webcopyinput");
        text.id = 'webcopyinput';
        text.value = '' + xx + '';
        //text.style.position = 'fixed';
        // text.style.top = '- 10000px';
        // document.body.appendChild(text);
        text.focus();//给input输入框聚焦
        text.setSelectionRange(0, text.value.length);//设置input框选中的范围
        copied = document.execCommand('Copy');//执行复制操作
        text.blur();
        copied = false;
        document.body.scrollTop = 0;
        $(document).dialog({infoText: '<?php echo lang('复制成功'); ?>'});
    }
    $(function () {
        var w = $(window).width(); //375  667  9.333333rem
        var h = $(window).height();
        console.log(w)
        console.log(h)
        // console.log(375/667)
        // console.log(w/h)

        var tt = h/667 * 9.333333;
        //var tt = h/2 - 30;
        console.log("-----------------------")
        console.log($('#user').css('width'));//275
        console.log($('#user').css('height'));//400

        //var h2 = $('#user').css('height')
        //tt - tt*0.07

        //$('#user').css('padding-top',h2)

    })
</script></html>
