<div id="web">
    <div class="right">
        <h3 class="title"><span>联系我们</span></h3>
        <div class="webcontent">
            <h1 class="title">联系我们</h1>
            <div class="text" style="text-indent: 2em; font-size: 14px; margin-top: 20px;">
                <div>联系人：洪雁</div>
                <div>电 &nbsp;话：（86）0510-85329237</div>
                <div>邮 &nbsp;编：214122</div>
                <div>Email：hongyan@jiangnan.edu.cn</div>
                <div>地 &nbsp;址：江苏省无锡市蠡湖大道1800#江南大学食品学院</div>
            </div>
        </div>
    </div>

    <div class="left">
        <?php if(!empty($non_menu)): ?>
        <h3 class="title"><span>资讯</span></h3>
        <div class="webnav">
            <ul>
                <?php foreach($non_menu as $v): ?>
                <li class="li_class2"><a title="<?php echo $v['name'] ?>" href="<?php echo site_url('category/'.$v['id'].'.html');?>"><?php echo $v['name'] ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php endif; ?>
        <h3 class="title"><span>联系方式</span></h3>
        <div class="text">
            <div>联系人：洪雁</div>
            <div>电 &nbsp;话：（86）0510-85329237</div>
            <div>邮 &nbsp;编：214122</div>
            <div>Email：hongyan@jiangnan.edu.cn</div>
            <div>地 &nbsp;址：江苏省无锡市蠡湖大道1800#江南大学食品学院</div>
        </div>
    </div>

    <div style="clear:both;"></div>
</div>
