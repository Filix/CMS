<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0033)http://www.metinfo.cn/demo/metv2/ -->
<html xmlns="http://www.w3.org/1999/xhtml"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>中国淀粉工业协会变性淀粉专业委员会</title>
    <meta name="description" content="中国淀粉工业协会变性淀粉专业委员会">
    <meta name="keywords" content="中国淀粉工业协会变性淀粉专业委员会">
    <meta name="author" content="中国淀粉工业协会变性淀粉专业委员会">
    <meta name="copyright" content="Copyright 2008-2013 中国淀粉工业协会变性淀粉专业委员会">
    <link href="" rel="shortcut icon">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/public/css/metinfo.css">
    <script src="<?php echo base_url();?>/public/js/public.js" type="text/javascript" language="javascript"></script>
    <link href="<?php echo base_url();?>/public/css/reset.css" rel="stylesheet" type="text/css">
    <script src="<?php echo base_url();?>/public/js/jquery-1.4.2.metinfo.js" language="javascript"></script>
    <script type="text/javascript">
        $(function(){
            var navdown = $('#nav_10001');
            navdown.addClass('navdown');
            var margueedom = $('#notice marquee');
            var twidth = $('#notice h3.title');
            var cwidth = $('#notice div.content');
            var widthx = $('#notice div.border').width() - twidth.width() - 20;
            cwidth.width(widthx);

        });
        function onnav(my,id){
            var ul = document.getElementById('navul-'+id);
            var width = $(my).width();
            $(my).addClass('navdown');
            $(ul).css('display','block');
            $(ul).width(width);
        }
        function outnav(my,id){
            var ul = document.getElementById('navul-'+id);
            $(my).removeClass('navdown');
            $(ul).css('display','none');
        }
    </script>
    <script>window["_GOOG_TRANS_EXT_VER"] = "1";</script>
</head>
<!--[if IE 6]>
<script src="<?php echo base_url();?>/public/js/DD_belatedPNG_0.0.8a-min.js" type="text/javascript"></script>
<script type="text/javascript">
    DD_belatedPNG.fix('.bg,img');
</script>
<![endif]-->
<body>
<div id="metinfo">
    <!-- header begin -->
    <?php echo $header ?>
    <!-- header end -->
    <!-- notice begin -->
    <?php echo $notice; ?>
    <!-- notice end -->
    <!-- main begin -->
    <?php echo $main ?>
    <!-- main end -->
    <div id="footer">
        <div class="nav">
            <a href="<?php echo site_url('intro.html') ?>" title="学会概况">协会概况</a>
            <span>|</span>
            <a href="<?php echo site_url('category/1.html');?>" title="热点新闻">热点新闻</a>
            <span>|</span>
            <a href="<?php echo site_url('category/6.html');?>" title="网站通知">网站通知</a>
            <span>|</span>
            <a href="<?php echo site_url('category/7.html');?>" title="最新会议">会议信息</a>
            <span>|</span>
            <a href="<?php echo site_url('contactus.html') ?>" title="联系我们">联系我们</a>
        </div>
        <div class="text">
            <ul>
                <li>电话：(86)0510-85329237  Email:hongyan@jiangnan.edu.cn 版权所有 2008-2013 苏ICP备 </li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>
