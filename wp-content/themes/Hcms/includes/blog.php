<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'posts_per_page' => 8,
	'caller_get_posts' => 10,
	'post__not_in' =>$do_not_duplicate,
	'paged' => $paged
	);
query_posts($args);?>
		<?php while (have_posts()) : the_post(); ?>
	<div class="art_img_box clearfix">
	<div class="fl innerimg_box">
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="preview" target="_blank"><img src="<?php echo catch_first_image() ?>" alt="<?php the_title(); ?>" width="200" height="154" /></a>
	</div>
    <div class="fr box_content">
					<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" target="_blank"><?php echo cut_str($post->post_title,48); ?></a></h2>  	
						<div class="info">
                    	<span>发布日期：<?php the_time('Y年m月d日') ?></span>|                        
						<span>点击：<small><?php post_views(' ', ' 次'); ?></small></span>|
						<span><?php comments_popup_link('暂无评论', '评论： <small>1</small>', '评论：<small>%</small>'); ?></span>
						<span><?php edit_post_link( __('[编辑]')); ?></span>
						</div>
                          <ul class="clearfix">
                  	 	<li>所属栏目：<?php the_category(', ') ?></li>
                   		<li class="art_tag"><?php the_tags(); ?></li>
                   </ul>   
					<p class="intro">
						<?php if(has_excerpt()) the_excerpt();  
							else  
								 echo dm_strimwidth(strip_tags($post->post_content),0,110,"..."); ?>
					</p>
                   </div>
             </div>
			<?php endwhile; ?>
	<?php if (get_option('swt_slidershow') == 'Display') { ?>
	<?php { echo ''; } ?>
	<?php } elseif (get_option('swt_new_p') == 'Display') { ?>
	<?php { echo ''; } ?>
	<?php } else { include(TEMPLATEPATH . '/includes/pagenavi.php'); } ?>