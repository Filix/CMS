<style>
</style>
<div id="product-list">
    <ul>
        <?php foreach($articles as $article): ?>
	<?php if(!in_array($article['id'], array(193,194,195))): ?>
        <li>
            <span class="info_img">
                <a href="<?php echo site_url('article/'.$article['id'].'.html') ?>" target="_blank">
                    <img width="200" height="100" title="<?php echo $article['title'] ?>" alt="<?php echo $article['title'] ?>" src="<?php echo base_url();?>uploads/<?php echo $article['img'] ?>" />
                </a>
            </span>
            <span class="info_title"><b>名称：</b> <?php echo $article['title'] ?></span>
            <?php if($article['content']): ?><span class="info_para1"><b style="font: 14px; font-weight:bold;">简介：</b><?php echo $article['content'] ?></span><?php endif; ?>
            <?php if($article['redirect_url']): ?>
            <span class="info_detail"><a target="_blank" href="<?php echo $article['redirect_url']; ?>">查看》</a></span>
            <?php endif; ?>
	    <div style="clear:both;"></div>
        </li>
	<?php endif; ?>
        <?php endforeach; ?>
    </ul>
</div>
