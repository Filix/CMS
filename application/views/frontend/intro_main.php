<div id="web">
    <div class="right">
        <h3 class="title"><span>协会概况</span></h3>
        <div class="webcontent">
            <h1 class="title">协会概况</h1>
            <div class="text" style="text-indent: 2em; font-size: 14px; margin-top: 20px;">
                <b>中国淀粉工业协会</b>是由国家民政部审批的一级协会。其归口管理单位为国家经济贸易委员会。涉及到造纸、纺织、食品、生物化工、饲料、铸造、精细化工、医药卫生、涂料、建材、皮革等领域。下属有变性淀粉、淀粉糖、淀粉生产机械、玉米淀粉、薯类淀粉五个专业委员会。
            </div>
            
            <div class="text" style="text-indent: 2em; font-size: 14px; margin-top: 20px;">
                <b>变性淀粉专业委员会</b>隶属于中国淀粉工业协会，是国家二级协会。是由从事变性淀粉科研、生产、应用和管理的单位组成的社会团体。主要从事变性淀粉行业规划和管理、信息交流、技术培训、国际合作、咨询服务。 变性淀粉专业委员会成立于1993年10月，挂靠在江南大学（原无锡轻工大学）。担负着制定国内变性淀粉行业发展规划、协调组织我国变性淀粉工业发展、为政府和企业提供变性淀粉咨询的职责。
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
