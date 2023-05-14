<?php /*a:2:{s:70:"/www/wwwroot/103.77.173.23/application/index/view/my/index-yellow.html";i:1660581938;s:74:"/www/wwwroot/103.77.173.23/application/index/view/public/floor-yellow.html";i:1660259428;}*/ ?>
<!DOCTYPE html><!-- saved from url=(0035)http://qiang6-www.baomiche.com/#/My --><html data-dpr="1" style="font-size: 37.5px;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1"><title><?php echo lang('我的'); ?></title><link href="/static_new6/css/app.yellow.css" rel="stylesheet"><link rel="stylesheet" href="/static_new/css/public.css"><script charset="utf-8" src="/static_new/js/jquery.min.js"></script><script charset="utf-8" src="/static_new/js/dialog.min.js"></script><script charset="utf-8" src="/static_new/js/common.js"></script><style type="text/css" title="fading circle style">
        .circle-color-8 > div::before {
            background-color: #ccc;
        }
        .login_nav li a{
            display: block;
            width: 100%;
            margin-top: 0.20rem;
        }
        .login_nav[data-v-d5f15326]{
            background: none;
        }
    </style></head><body style="font-size: 12px;"><div id="app"><div data-v-d5f15326="" class="main"><div class="my-index-header"><div data-v-d5f15326="" class="header"><span data-v-d5f15326="" class="title"><?php echo lang('我的'); ?></span><div data-v-d5f15326="" class="img"><a data-v-d5f15326="" href="" class=""><img data-v-d5f15326=""
                             src="/web/img/Y-xx.png"
                             alt=""></a><a data-v-d5f15326="" href="javascript:void(0)" onclick="window.location.href=`/index/ctrl/set`" class=""><img data-v-d5f15326=""
                             src="/web/img/Y-ll.png"
                             alt=""></a></div><div data-v-d5f15326="" class="info"><img data-v-d5f15326="" src="/web/img/USER.png" onerror="this.src='/public/img/head.png'" alt="" class="headerImg"><div data-v-d5f15326="" class="name"><strong data-v-d5f15326=""><?php echo htmlentities($info['username']); ?></strong><em data-v-d5f15326="" style="
            width: 1.64rem;
    background: url(/web/img/Y-vip.png) no-repeat;
    background-size: 75%;
    font-size: 5px;
    transform: scale(0.83333);
    transform-origin: 0 0;
    white-space: nowrap;
    background-position-x: 5px;
    height: 1.3rem;
    color: black;
    margin-left: 0.1rem;
    line-height: 1.3rem;
"><?php echo htmlentities($level_name); ?></em><small data-v-d5f15326=""><?php echo lang('邀请码'); ?>:<?php echo htmlentities($info['invite_code']); ?></small></div></div><div data-v-d5f15326="" class="balance"><p data-v-d5f15326=""><span data-v-d5f15326=""><?php echo lang('余额'); ?>：
                        <small data-v-d5f15326="" style="font-size: .40rem"><?php echo lang('￥'); ?><?php echo htmlentities($info['balance']); ?><span></span></small></p><button data-v-d5f15326="" onclick="window.location.href=`/index/ctrl/deposit`"  class="" ><?php echo lang('提现'); ?></button><button data-v-d5f15326="" onclick="window.location.href=`/index/ctrl/recharge`"  class="" ><?php echo lang('充值'); ?></button></div><div data-v-d5f15326="" class="yh"></div></div></div><ul data-v-d5f15326="" class="login_nav" style="border-bottom: 10px solid #f2f2f2;"><li data-v-d5f15326=""><a data-v-d5f15326="" href="javascript:void(0)" onclick="window.location.href=`/index/ctrl/recharge_admin`"   class=""><img data-v-d5f15326=""
                         src="/web/img/Ychong.png"
                         alt=""><p data-v-d5f15326=""><?php echo lang('充值记录'); ?></p></a></li><li data-v-d5f15326=""><a data-v-d5f15326="" href="javascript:void(0)" onclick="window.location.href=`/index/order/index`" class=""><img data-v-d5f15326=""
                         src="/web/img/chongz.png"
                         alt=""><p data-v-d5f15326=""><?php echo lang('抢单记录'); ?></p></a></li><li data-v-d5f15326=""><a data-v-d5f15326="" href="javascript:void(0)" onclick="window.location.href=`/index/ctrl/deposit_admin`"  class=""><img data-v-d5f15326=""
                         src="/web/img/chongy.png"
                         alt=""><p data-v-d5f15326=""><?php echo lang('提现记录'); ?></p></a></li></ul><ul data-v-d5f15326="" class="login_nav "><li data-v-d5f15327=""><a data-v-d5f15326="" href="javascript:void(0)" onclick="window.location.href=`/index/ctrl/set`" class=""><img data-v-d5f15326=""
                         src="/web/img/user1.png"
                         alt=""><p data-v-d5f15327=""><?php echo lang('个人信息'); ?></p><img data-v-d5f15326=""
                         class="right"
                         src="/web/img/zjt.png"
                         alt=""></a></li><li data-v-d5f15327=""><a data-v-d5f15326="" href="javascript:void(0)" onclick="window.location.href=`/index/my/caiwu`" class=""><img data-v-d5f15326=""
                         src="/web/img/user02.png"
                         alt=""><p data-v-d5f15327=""><?php echo lang('账户明细'); ?></p><img data-v-d5f15326=""
                         class="right"
                         src="/web/img/zjt.png"
                         alt=""></a></li><li data-v-d5f15327=""><a data-v-d5f15326="" href="javascript:void(0)" onclick="window.location.href=`/index/my/invite`" class=""><img data-v-d5f15326=""
                         src="/web/img/user03.png"
                         alt=""><p data-v-d5f15327=""><?php echo lang('邀请好友'); ?></p><img data-v-d5f15326=""
                         class="right"
                         src="/web/img/zjt.png"
                         alt=""></a></li><li data-v-d5f15327=""><a data-v-d5f15326="" href="javascript:void(0)" onclick="window.location.href=`/index/my/msg`" class=""><img data-v-d5f15326=""
                         src="/web/img/user04.png"
                         alt=""><p data-v-d5f15327=""><?php echo lang('信息公告'); ?></p><img data-v-d5f15326=""
                         class="right"
                         src="/web/img/zjt.png"
                         alt=""></a></li><li data-v-d5f15327=""><a data-v-d5f15326="" href="javascript:void(0)" onclick="window.location.href=`/index/ctrl/junior`" class=""><img data-v-d5f15326=""
                         src="/web/img/user05.png"
                         alt=""><p data-v-d5f15327=""><?php echo lang('团队报表'); ?></p><img data-v-d5f15326=""
                         class="right"
                         src="/web/img/zjt.png"
                         alt=""></a></li><li data-v-d5f15327=""><a data-v-d5f15326="" href="javascript:void(0)" onclick="window.location.href=`<?php if(sysconf('app_url')): ?><?php echo sysconf('app_url'); else: ?>/download<?php endif; ?>`" class=""><img data-v-d5f15326="" src="/web/img/user06.png" alt=""><p data-v-d5f15327=""><?php echo lang('APP下载'); ?></p><img data-v-d5f15326=""
                         class="right"
                         src="/web/img/zjt.png"
                         alt=""></a></li></ul><div data-v-d5f15326="" class="LoginOut"><button data-v-d5f15326="" class="tabs_btn1"><?php echo lang('退出登陆'); ?></button></div><link href="/web/css/yellow.css" rel="stylesheet" /><div data-v-59e03106="" data-v-43c1797b="" class="footer"><ul data-v-59e03106=""><li data-v-59e03106="" class="" onclick="window.location.href='<?php echo url('index/home'); ?>'"><img data-v-59e03106="" src="/public/fer1.png" alt="" /><img data-v-59e03106="" src="/public/fer01.png" alt="" /><p data-v-59e03106=""><?php echo lang('首页'); ?></p></li><li data-v-59e03106="" class="" onclick="window.location.href='<?php echo url('order/index'); ?>'"><img data-v-59e03106="" src="/public/fer02.png" alt="" /><img data-v-59e03106="" src="/public/fer2.png" alt="" /><p data-v-59e03106=""><?php echo lang('订单'); ?></p></li><li data-v-59e03106="" class=""  onclick="window.location.href='<?php echo url('rot_order/index'); ?>'"><img data-v-59e03106="" src="/public/fer03.png" alt="" /><img data-v-59e03106="" src="/public/fer3.png" alt="" /><p data-v-59e03106=""><?php echo lang('购买'); ?></p></li><li data-v-59e03106="" class="" onclick="window.location.href='<?php echo url('support/index'); ?>'"><img data-v-59e03106="" src="/public/fer04.png" alt="" /><img data-v-59e03106="" src="/public/fer4.png" alt="" /><p data-v-59e03106=""><?php echo lang('客服'); ?></p></li><li data-v-59e03106="" class="" onclick="window.location.href='<?php echo url('my/index'); ?>'"><img data-v-59e03106="" src="/public/fer05.png" alt="" /><img data-v-59e03106="" src="/public/fer5.png" alt="" /><p data-v-59e03106=""><?php echo lang('我的'); ?></p></li></ul></div><script>    function updateactivetime(){
        var url = "<?php echo url('user/updateactivetime'); ?>";
        var isopenoline = 1;
        $.ajax({
            type : "POST",
            url : url,
            data: isopenoline,
            dataType : "json",
            success : function(result){
                console.log(result);
                if(result.code=="0"){

                    alert(result.msg);
                }
            },
            error:function(){
                //alert();
            }
        });
    }
    updateactivetime();

    setInterval(updateactivetime,1000*30);

    (function(doc,win){
        var docEl = doc.documentElement,  //文档根标签
            resizeEvent =  'orientationchange' in window ? 'orientationchang' :'resize'; //viewport变化事件源
        var rescale = function(){
            //重置方法
            win.clientWidth = docEl.clientWidth;
            if (!win.clientWidth) return;
            // 改变DOM根节点fontSize大小的值;
            // (屏幕宽度/设计图宽度) = 缩放或扩大的比例值;
            docEl.style.fontSize = 70 * (win.clientWidth / 750) + 'px';
        }
        if (!doc.addEventListener) return;
        win.addEventListener(resizeEvent, rescale, false);
        doc.addEventListener('DOMContentLoaded', rescale, false);
    })(document, window);
</script><style></style></div></div><script>
    $(function() {
        $('.footer li').eq(4).addClass("on");

    })

    $('.tabs_btn1').click(function () {
        $(document).dialog({
            type: 'confirm',
            titleText: "<?php echo lang('确认退出吗'); ?>?",
            autoClose: 0,
            onClickConfirmBtn: function () {
                window.location.href="<?php echo url('user/logout'); ?>";
            },
            onClickCancelBtn: function () {

            }
        });
    });
        

</script></body></html>