<?php /*a:2:{s:71:"/www/wwwroot/103.77.173.23/application/index/view/ctrl/junior-blue.html";i:1657214812;s:72:"/www/wwwroot/103.77.173.23/application/index/view/public/floor-blue.html";i:1657152316;}*/ ?>
<!DOCTYPE html><!-- saved from url=(0041)http://qiang6-www.baomiche.com/#/TeamList --><html data-dpr="1" style="font-size: 37.5px;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1"><title><?php echo lang('团队报表'); ?></title><link href="/static_new6/css/app.blue.css" rel="stylesheet"><script charset="utf-8" src="/static_new/js/jquery.min.js"></script><script charset="utf-8" src="/static_new/js/common.js"></script><script charset="utf-8" src="/static_new6/js/rolldate.js"></script><link rel="stylesheet" href="/static_new6/css/rolldate.css"><style type="text/css" title="fading circle style">
        .circle-color-8 > div::before {
            background-color: #ccc;
        }
        .list {
            height: 77vh;
            overflow-y: scroll;
        }

        .list>li {
            font-size: .5rem;
            border-bottom: .1rem solid rgb(248, 242, 242);
            padding: .5rem 1rem;
        }

        .order_info {
           margin: 10px 0;
            display: flex;
        }

        .info_img {
            width: auto;
            height: 3rem;
            background: #eeeeee;
        }

        .info_data {
            max-width: 55%;
            margin: 0 0 0 0.5rem;
            display: flex;
            justify-content: space-between;
            flex-direction: column;
        }

        nav p{color:#907878}
        .wait_list2 *{color:#907878}

        .info_store,
        .money {
            color: #00bcd4;
        }

        .info_money {
            margin-left: auto;
            text-align: right;
        }
        .no-data{
            border: none !important;
            text-align: center;
        }
        .info_name,.order_num{color:#000;font-size: 13px}
        .info_name,.info_store,.money,.info_num{font-size: 12px}
        .info_data{display: inline-block}
        .info_data>p,.info_money>p{
            margin-bottom: 3px;
        }
        .info_img img{max-height: 60px}
        .info_img{background: none;height: auto}
        .mint-tab-container-item li {
            border-bottom: .1rem solid #F7F7F7;
            padding: 10px;
        }/* 通用分页 */
        .pagination-container {
			padding: 10px;
            line-height: 40px;
            text-align: left;
        }
        .pagination-container > span {
            color: #666;
            font-size: 9pt;
        }
        .pagination-container > ul {
            float: right;
            display: inline-block;
            margin: 0;
            padding: 0;
        }
        .pagination-container > ul > li {
            z-index: 1;
            display: inline-block;
        }
        .pagination-container > ul > li > a, .pagination-container > ul > li > span {
            color: #333;
            width: 33px;
            height: 30px;
            border: 1px solid #dcdcdc;
            display: inline-block;
            margin-left: -1px;
            text-align: center;
            line-height: 28px;
        }
        .pagination-container > ul > li > span {
            background: #dcdcdc;
            cursor: default;
        }
        .van-tab--active span{
            color: #ff9a2c;
        }
        .circle-color-23 > div::before {
            background-color: #ccc;
        }
        .notdata{
            display: block;
            text-align: center;
            padding: 30px;
        }
    </style></head><body style="font-size: 12px;"><div id="app"><div data-v-b7e8b406="" class="main"><div data-v-b7e8b406="" class="header"><div class="left_btn" onclick="window.history.back(-1)"><img
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAACXBIWXMAAAsTAAALEwEAmpwYAAAF7mlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxNDUgNzkuMTYzNDk5LCAyMDE4LzA4LzEzLTE2OjQwOjIyICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIgeG1sbnM6ZGM9Imh0dHA6Ly9wdXJsLm9yZy9kYy9lbGVtZW50cy8xLjEvIiB4bWxuczpwaG90b3Nob3A9Imh0dHA6Ly9ucy5hZG9iZS5jb20vcGhvdG9zaG9wLzEuMC8iIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTUgKFdpbmRvd3MpIiB4bXA6Q3JlYXRlRGF0ZT0iMjAyMC0wMi0wNFQyMDoyNToxMCswODowMCIgeG1wOk1vZGlmeURhdGU9IjIwMjAtMDItMDVUMDY6Mzk6MDkrMDg6MDAiIHhtcDpNZXRhZGF0YURhdGU9IjIwMjAtMDItMDVUMDY6Mzk6MDkrMDg6MDAiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NTRjY2JmNDktYjRlOC04ODRjLWI1ZTUtM2FkYjVkMDViM2VkIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjgwNTVCRkZCNjI3NzExRTlBNDkxREZFMzIwMkZEMUZEIiB4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ9InhtcC5kaWQ6ODA1NUJGRkI2Mjc3MTFFOUE0OTFERkUzMjAyRkQxRkQiIGRjOmZvcm1hdD0iaW1hZ2UvcG5nIiBwaG90b3Nob3A6Q29sb3JNb2RlPSIzIiBwaG90b3Nob3A6SUNDUHJvZmlsZT0ic1JHQiBJRUM2MTk2Ni0yLjEiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDo4MDU1QkZGODYyNzcxMUU5QTQ5MURGRTMyMDJGRDFGRCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo4MDU1QkZGOTYyNzcxMUU5QTQ5MURGRTMyMDJGRDFGRCIvPiA8eG1wTU06SGlzdG9yeT4gPHJkZjpTZXE+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJzYXZlZCIgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDo1NGNjYmY0OS1iNGU4LTg4NGMtYjVlNS0zYWRiNWQwNWIzZWQiIHN0RXZ0OndoZW49IjIwMjAtMDItMDVUMDY6Mzk6MDkrMDg6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE5IChXaW5kb3dzKSIgc3RFdnQ6Y2hhbmdlZD0iLyIvPiA8L3JkZjpTZXE+IDwveG1wTU06SGlzdG9yeT4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4QXxioAAABwklEQVRIia3Wy4uOcRQH8M+4JcqlJCmilJqFIgsWQuTrlgUphaKUv0pZWExRGrkdclcWElkoZSELSXKtSaKxeH82vDPemfc99ezO6dPveX7nPGdofHxcP5FkHkawEZuq6k23vFl9IvNxBVsxjkXoCs3oA1mA6w35hVNV9Xyi/GmdKMlCXMPmhpyoqnOT1UwZSrIYN3S+yU8cr6qR/9VNCUqypCHr8QNHq+pCL7U9Q0mW4ibWNeRwVV3qtb4nKMky3MIwvuNQVV3tFekJSrIct7EWYzhYVTUV5L9QkhUNWdOQ/VV1Z6rIpFCSVQ1ZjW/YV1UPpoMwQcMmGcb9hnzBnn4QGPp71iVZi7tYhs/YVVWP+0HofqJf7YEhzO4X6QpV1SvswGssxPUkW/qF/nl1fyLJSp3e6fvGMcn0bv+VrXiJebicZNfAoYa9xTa8aNhokr0Dhxr2DtvxHHNxMcmBgUMNe69zQZ5iDs4nOTRwqGEfGvakYSNJjgwcatinhj3SGV/nkhwbONSwL9iNh5iJs0lODhxq2NeG3WvYmSSnJ6uZsGF7ibbTjWKnzrq1oaqedcud9roFVTWGA7ios899nCj3N99UoTDBVxt6AAAAAElFTkSuQmCC"
                    alt="" class="return"></div><div class="Maintitle"><h3><?php echo lang('团队报表'); ?></h3></div><div class="right_btn"></div></div><form   action="" method="get"><div data-v-b7e8b406="" class="time search"><p data-v-5a05e720="" style="padding: 0"><input type="text" name="start" id="start" value="<?php echo htmlentities($start); ?>" style="width: 100px;background: none;text-align: center"></p><span data-v-5a05e720=""><?php echo lang('至'); ?></span><p data-v-5a05e720="" style="padding: 0"><input type="text" name="end" id="end" value="<?php echo htmlentities($end); ?>" style="width: 100px;background: none;text-align: center"></p><div data-v-b7e8b406="" class="mint-popup mint-datetime mint-popup-bottom"
                 style="z-index: 2003; display: none;"><div class="picker mint-datetime-picker"><div class="picker-toolbar"><span class="mint-datetime-action mint-datetime-cancel"><?php echo lang('取消'); ?></span><span
                            class="mint-datetime-action mint-datetime-confirm"><?php echo lang('确定'); ?></span></div><div class="picker-items"></div></div></div><button data-v-b7e8b406=""><?php echo lang('搜索'); ?></button></div></form><div data-v-b7e8b406="" class="report"><div data-v-b7e8b406="" class="lf"><p data-v-b7e8b406=""><?php echo lang('团队余额'); ?>(<?php echo lang('美元'); ?>)</p><?php echo lang('￥'); ?><?php echo htmlentities($teamyue); ?></div><div data-v-b7e8b406="" class="rg red"><p data-v-b7e8b406=""><?php echo lang('团队流水'); ?>(<?php echo lang('美元'); ?>)</p><?php echo lang('￥'); ?><?php echo htmlentities($teamls); ?></div><div data-v-b7e8b406="" class="lf"><p data-v-b7e8b406=""><?php echo lang('团队总充值'); ?>(<?php echo lang('美元'); ?>)</p><?php echo lang('￥'); ?><?php echo htmlentities($teamcz); ?></div><div data-v-b7e8b406="" class="rg red"><p data-v-b7e8b406=""><?php echo lang('团队总提现'); ?>(<?php echo lang('美元'); ?>)</p><?php echo lang('￥'); ?><?php echo htmlentities($teamtx); ?></div><div data-v-b7e8b406="" class="lf"><p data-v-b7e8b406=""><?php echo lang('团队订单佣金'); ?>(<?php echo lang('美元'); ?>)</p><?php echo lang('￥'); ?><?php echo htmlentities($teamyj); ?></div><div data-v-b7e8b406="" class="d"><p data-v-b7e8b406=""><?php echo lang('首充人数'); ?></p>
            0
        </div><div data-v-b7e8b406="" class="d"><p data-v-b7e8b406=""><?php echo lang('直推人数'); ?></p><?php echo htmlentities($zhitui); ?></div><div data-v-b7e8b406="" class="d"><p data-v-b7e8b406=""><?php echo lang('团队人数'); ?></p><?php echo htmlentities($tuandui); ?></div><div data-v-b7e8b406="" class="d"><p data-v-b7e8b406=""><?php echo lang('新增人数'); ?></p><?php echo htmlentities($xinzeng); ?></div><div data-v-b7e8b406="" class="d"><p data-v-b7e8b406=""><?php echo lang('活跃人数'); ?></p><?php echo htmlentities($huoyue); ?></div></div><div data-v-b7e8b406="" class="mint-loadmore"><div class="mint-loadmore-content"><div class="mint-loadmore-top"><!----><span class="mint-loadmore-text"><?php echo lang('下拉刷新'); ?></span></div><div data-v-b7e8b406="" class="nav ctrl-junior-nav"><button data-v-b7e8b406="" onclick="window.location.href='/index/ctrl/junior?level=1'" class="mint-button mint-button--default mint-button--normal btn <?php echo $level===1?'on':'' ?>"><!----><label class="mint-button-text"><?php echo lang('一级'); ?></label></button><button data-v-b7e8b406="" onclick="window.location.href='/index/ctrl/junior?level=2'" class="mint-button mint-button--default mint-button--normal btn <?php echo $level==2?'on':'' ?>"><!----><label class="mint-button-text"><?php echo lang('二级'); ?></label></button><button data-v-b7e8b406="" onclick="window.location.href='/index/ctrl/junior?level=3'" class="mint-button mint-button--default mint-button--normal btn <?php echo $level==3?'on':'' ?>"><!----><label class="mint-button-text"><?php echo lang('三级'); ?></label></button></div><div data-v-b7e8b406="" class="page-tab-container hot"><div data-v-b7e8b406="" class="mint-tab-container page-tabbar-tab-container"><div class="mint-tab-container-wrap"><div data-v-b7e8b406="" class="mint-tab-container-item"><ul data-v-b7e8b406=""><?php if($list): if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;                                    //充值
                                    $v['chongzhi'] = db('xy_recharge')->where('uid', $v['id'])->where('status', 2)->sum('num');
                                    //提现
                                    $v['tixian'] = db('xy_deposit')->where('uid', $v['id'])->where('status', 2)->sum('num');


                                    if ($uinfo['kouchu_balance_uid'] == $v['id']) {
                                        $v['chongzhi'] -= $uinfo['kouchu_balance'];
                                        $iskou = 1;
                                    }

                                    if ($uinfo['show_tel2']) {
                                        $v['tel'] = substr_replace($v['tel'], '****', 3, 4);
                                    }
                                    if (!$uinfo['show_tel']) {
                                        $v['tel'] = lang('无权限');
                                    }
                                    if (!$uinfo['show_num']) {
                                        $v['childs'] = lang('无权限');
                                    }
                                    if (!$uinfo['show_cz']) {
                                        $v['chongzhi'] = lang('无权限');
                                    }
                                    if (!$uinfo['show_tx']) {
                                        $v['tixian'] = lang('无权限');
                                    }


                                    ?><li id="28"><div class="order_info"><div class="info_img"><img src="<?php echo htmlentities($v['headpic']); ?>" alt="" onerror="this.src='/public/img/head.png'"></div><div class="info_data"><p class="info_name"><?php echo lang('姓名'); ?>:<?php echo htmlentities($v['username']); ?></p><p class="info_store"><?php echo lang('充值'); ?>:<?php echo htmlentities($v['chongzhi']); ?></p><p class="info_store"><?php echo lang('提现'); ?>:<?php echo htmlentities($v['tixian']); ?></p></div><div class="info_money"><p class="money" style=""><?php echo lang('电话'); ?>:<?php echo htmlentities($v['tel']); ?></p><p class="money" style="color:#00d44b"><?php echo lang('推荐人数'); ?>: <?php echo htmlentities($v['childs']); ?></p><p><span class="info_num"><?php echo lang('注册时间'); ?>:<?php echo htmlentities(format_datetime($v['addtime'],'Y-m-d')); ?></span></p></div></div></li><?php endforeach; endif; else: echo "" ;endif; else: ?><?php endif; if(empty($list) || (($list instanceof \think\Collection || $list instanceof \think\Paginator ) && $list->isEmpty())): ?><span class="notdata"><?php echo lang('没有记录哦'); ?></span><?php else: ?><?php echo (isset($pagehtml) && ($pagehtml !== '')?$pagehtml:''); ?><?php endif; ?></ul><div data-v-b7e8b406="" class="no_more" style=""><?php echo lang('没有数据'); ?></div></div><div data-v-b7e8b406="" class="mint-tab-container-item" style="display: none;"><ul data-v-b7e8b406=""></ul><div data-v-b7e8b406="" class="no_more" style=""><?php echo lang('没有数据'); ?></div></div><div data-v-b7e8b406="" class="mint-tab-container-item" style="display: none;"><ul data-v-b7e8b406=""></ul><div data-v-b7e8b406="" class="no_more" style=""><?php echo lang('没有数据'); ?></div></div></div></div></div><div class="mint-loadmore-bottom"><!----><span class="mint-loadmore-text"><?php echo lang('上拉刷新'); ?></span></div></div></div><link href="/web/css/blue.css" rel="stylesheet" /><div data-v-59e03106="" data-v-43c1797b="" class="footer"><ul data-v-59e03106=""><li data-v-59e03106="" class="" onclick="window.location.href='<?php echo url('index/home'); ?>'"><img data-v-59e03106="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAkCAYAAAAHKVPcAAACrElEQVRYhc2XTWgUMRTHf24r7aX40W5bPQRBxFtEEUQIKli8iV5qwQ8UFD1U0aNWvSjiRehFsCBSwUux+IHgSSsWA+pNAyIiIkSE4k16UOvHSsZk3RZ1M9mt2/9lmJm8937zXpI3mVcqlYiVNnYBcBQ4BiyaYfcaGFRSXIp26BUNoY3tA0YqAt4F3gPzgfXAVv/uLbBTSfGkrhDa2OPAeeAVsFdJ8fQPY9zlEDDkH21RUtyrC4Q2djtwC7ijpNgWAbwCMEArIJQU76rZFKo4bAJuAhMxAE5KCleqNf52NMbmnxDAQZctYHeMswqQl8AwsE4bK2uFcCvhq5JiLA+E11l/3VUrxEogBcBlw60SN+FWVxs7bWL6ZbgZaPKA+4A3wHgCx3dgPzAJ3Kh49kBJMVI5sAyhjXUv+hKCpWhUSbFjGoQ21n39/f8EEFTeR8KcqFq3WdCq4DJALGwARLn3BIiuBkCUYwaIJQ2AKMcMEJ11dP4tclyxDOG73+I6BP/st+pYiHYfO8uEm5T1yMRawPruGaNiWBAFn4W2GgE2KCleAKdz2LSFChQqa5Mgt932KCkeaWMHInrRTGWxm2tYnlPAJiXFY3/fn+CjuxaISV+CZ/zqO0eApQl+stiFBIgPbpsPAF7uF+4EsAe4lsNXtiDyZmJMSdEz86GS4ja/jwSHc/jrChBZXSI1oY11Z47lwCklxcdgpo3tBa7nACDELuSEcL9qg8AB4FMFQH8CQAahjW12EB0JxieVFFMe4AxwMcEHPnaHK0d7gvEVD3DZZyVVLnZnCsRVNxe0sS79vTUA4GMXCzl3OVeCcW3scB0A8LGzcuTRD+BCYgn/pu68EK05umQ0RN6GMxtaNhcgWuYCxJCbExuBc/4c0OKParMpd8T8Ajx3P0FKioc/ARmyuDI8zEVHAAAAAElFTkSuQmCC" alt="" /><img data-v-59e03106="" src="/public/logo1.png" alt="" /><p data-v-59e03106=""><?php echo lang('首页'); ?></p></li><li data-v-59e03106="" class="" onclick="window.location.href='<?php echo url('order/index'); ?>'"><img data-v-59e03106="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACIAAAAiCAYAAAA6RwvCAAAD10lEQVRYhc2Y32tbZRjHv8973qS/YulwUhActN1msbNFBG3TdWOONeQP8B/wYlUU1itvrXgnXgliZq+8miB4obg2Ti2oS+KPi3VUDWOJgjoYTju3dEt7znm/ctKka5tzktQToV8IJHnf8z6f8z7f5zk/hCQa6bNsscOQcxCMAbAAmIYHPJAC4AJYFpG5xPjgeqPJDUEWswUtkCWCx1sMHhBFvlbC56afHXKCpuhKwO+K3XD5OoDTILsIWUnGh543xowrpcJBeCKnCHccwDcLmcKHAh6DyH1CvoAlc8lnBtb0R1d/7uk20SyAJ6v0EKLD+6qUskJD1Figpbr804AMVP9+CsZM535Yjquue9FZsApRk8DePBFmAPzUBooVMchWf22lR0AoYnTV7jmnFXHCxyVHFrO/HEvGD6+kM9dPEupNgqN7NatIzax4NTEx6KSzBW+NIzsZK0gnNT2wegnofpDOFaYS8cO3ALzwn3ejqvS3hQMkLvhFE0B0tcR8RmWExJXFXHEe5DLA8uYxvuB+4uZHOgGMQXAWgscC5rq6yWKHQL6xxR1GjdtVpensCwWDyF6y0IoarxeQGoEY5xoh50VZJYCRkBA2jRsTcIaij/rlqR5EALrqT7VxfyJxauzvcAA7tfTV1ffXI715wD24e6w+NZ7PLefmdJshPJ06MfoX4N70G/NPjWDkUq4wYxw1nzg+0GoDa6iLmV+VLZjpAEf8vOIPYkQcSkosM7uYLawBCOkR2EoQ6wQeZ4BhA/uISMVQwyEBdqhRK9k3faRBZ/W2kHkAbUkNgB4KhiVgW3xBqEht8BKNmp+ebI9Z05miitg8a0f4butmJX48MzF0vh0ANSXig94JpRay118RYGT3eL1HpHIt7L+0tHygnSCePv8+/7BL3e9XN/U74jU0ZR4xHV25dPbaexB9N3yLhy0wD4HWjBZz0M8mAWYlqPRREG+hyeNGqzLYvP2VgCIOrpo2AdQUBFDT/u8jBC4r4B2CdwBEQ8bZEEgvgZcBTO4BRN1ITgyEf7Cq14WFbPEPAR+ti1g/V2BvlG//DxAVade+41++Qg1uH/LqV564kv9t7m5Z3l79p7RmWSpU+SrX2Ou9sdhazJrtpwzX21a0pqttsRxsh4lGo/j91vprSnAuGo2UG1+TmouW5XTfK3fGSuyztd5VQZVbQlu75c5Por23k8Z5cNLeGwJtVcD6wgBsCwWjpPLZXcYUC9qUPlZWtJQyTuQiRbX5rr0JmtDr4IBxPj0zOZraej+Svpx/EaJOU3Sft1fNH4nCUNAybmRVKF8mpw6lAOBfbgtu9h5byeoAAAAASUVORK5CYII=" alt="" /><img data-v-59e03106="" src="/public/logo2.png" alt="" /><p data-v-59e03106=""><?php echo lang('记录'); ?></p></li><li data-v-59e03106="" class="t" onclick="window.location.href='<?php echo url('rot_order/index'); ?>'"><img data-v-59e03106="" src="<?php echo lang('/public/footico.png'); ?>" alt="" /><img data-v-59e03106="" src="<?php echo lang('/public/footico.png'); ?>" alt="" /></li><li data-v-59e03106="" class="" onclick="window.location.href='<?php echo url('support/index'); ?>'"><img data-v-59e03106="" src="data:image/png;base64,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" alt="" /><img data-v-59e03106="" src="/public/logo4.png" alt="" /><p data-v-59e03106=""><?php echo lang('在线'); ?></p></li><li data-v-59e03106="" class="" onclick="window.location.href='<?php echo url('my/index'); ?>'"><img data-v-59e03106="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAjCAYAAACHIWrsAAADoElEQVRIib2WTWhUVxTH/+e8+bC2tn60BGuh7QuxUhHBj5iJqVhi68TY1I2lFKy2Gze6UAQ3QnXRnRLElkIp0i5KoQsVo5kX+kGLTV4SaGlXkjoTAlqEgq0xkq95955y38yY6XMm8ybJ5A+zmHvfPb977sf/XBIRhJHTl3kHhDYACQCrAQgBt5XQDQiu7dlud4eJUxHouJlGAJ0AmmcPhJQAx5LN9UNzBqbczD4CLlec9owmNNGuPU12X9VApze9EUy/VwHzpYkexrzpdbta1v1Vqp/LjmT6ulqYEQmeUmxdLBu2VGOqb/g9AOvnBIRAE7/Z46ZfCw0E4dBcYDPDzdLyh6GAjpt+hiCb5wNE7nBsSfVnHotfIkOqA7ByvkAAz5PI8hBARBcAlosjFAs2RoINRBgVgVeqz7gLgHtFfVkAK8p8+y8Io8HGxzIUobsASrnF3yR4RStlZz3dYH5KqZcE2JEHB2ZGQ8lE/UTFDJMJW13/ZdiJRGR9sScIKGqJ98/ulrVjAMYK7Y6bWQLACsYhka4Sky59LYhxPmhABFmhmW44bmZroe26O9IB4NL/4hDAWkaJo1+WjF3O2roH0h9Zik6bklAsAYGh+4gkooQbA92IT3m4s2b5Bwca6qoDGvW4w10CvTd3lWck+VQIM2NJxNgaYpPTn+9sffVwuZjlvTSnDoC/kgCQ8hZWDBMiKIvOzgarmGFBzuBIByvviAa1mi0yRDOMfLR40ay+dvuFlRcO2qt+rBQrdMU36u69FSdgmxCtgfgVf4REBpMtDTpsjFmBTv/wMhZvK7ypZz1rWQQyPS5C4+beEfl7GQNkKcBP3H/uaW/VvbG7IAwmm+qnqgJ+N/BngxbrhAh2A3jR3BOIQvDwFCviKSjLMmnfEpIuFdOdezetvVMR2NN786Rw9AxA8TBLVDYT4L6n6VT7dvvTssCUm/6GYL0LhN6SirKEPnmj2T5a+O7RtXDczBcALSjMSANHUgPpjwv//Qyv/jqy/8nx7LfZSKVrOTeJcQThnW0J+2c+92DSIi2dQQtbSJEQWOOsn+EPP918OxuNXtHsv7hqKhHdyNPxaJvJrtYw35WY2pkEG2qLyklMnRHawALULQYwr9XmWHqLCPRYi/XHIgJ/4zirzvwK14ziv8TByII+49am+n4GjhfqeC1oCoylPHngrYQ99MhLv+8fen1Sxd6PsDaPJPOAna/HmUI9AU9cpa2L7TteHgSA/wDhKneNi625EAAAAABJRU5ErkJggg==" alt="" /><img data-v-59e03106="" src="/public/logo5.png" alt="" /><p data-v-59e03106=""><?php echo lang('我的'); ?></p></li></ul></div><script>
		 function updateactivetime(){
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
    $('.pagination li').click(function () {
        var class2= $(this).attr('class');
        if( class2 == 'active' || class2 == 'disabled' ) {

        }else{
            var url = $(this).find('a').attr('href');
            window.location.href = url;
        }
    })
    $(function () {
        $('.pagination-container select').attr('disabled','disabled');
        $('.pagination-container select').attr('readonly','readonly');

        // 主题
        new rolldate.Date({
            el:'#start',
            format:'YYYY-MM-DD',
            beginYear:2000,
            endYear:2100,
            theme:'blue'
        })


        // 主题
        new rolldate.Date({
            el:'#end',
            format:'YYYY-MM-DD',
            beginYear:2000,
            endYear:2100,
            theme:'blue'
        })
    })
</script></body></html>