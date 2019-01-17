<?php
	if ( !defined('ABSPATH') ){ die(); }
	
	global $avia_config;

	/*
	 * get_header is a basic wordpress function, used to retrieve the header.php file in your theme directory.
	 */
	 get_header();


 	 if( get_post_meta(get_the_ID(), 'header', true) != 'no') echo avia_title();
 	 
      do_action( 'ava_after_main_title' ); 
      $top_image=get_field('top_image');
      $top_title=get_field('top_title');
      $top_sub_title=get_field('top_sub_title');
?>
<div id="index_top_image" class="avia-section main_color avia-section-default avia-no-border-styling avia-bg-style-scroll  avia-builder-el-0  avia-builder-el-no-sibling  av-minimum-height av-minimum-height-custom container_wrap fullsize" style="background-repeat: no-repeat; background-image: url('<?php echo $top_image; ?>'); background-attachment: scroll; background-position: top center;background-size:cover; " data-section-bg-repeat="no-repeat">
	<div class="container" style="height:560px">
			<main role="main" itemprop="mainContentOfPage" class="template-page content  av-content-full alpha units">
				<div class="post-entry post-entry-type-page post-entry-121">
					<div class="entry-content-wrapper clearfix">
						<section class="av_textblock_section" itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
							<div class="avia_textblock " itemprop="text">
								<div class="top_image_wrap">
									<div class="top_image_title"><?php echo $top_title;  ?></div>
									<div class="top_image_subtitle"><?php echo $top_sub_title;  ?></div>
								</div>
							</div>
						</section>

					</div>
				</div>
			</main><!-- close content main element --> <!-- section close by builder template -->		
		</div><!--end builder template-->
	</div>
<div class="page_block_wrap">
	<div class="container">
		<div class="content">
			<div class="pricing_schemes_wrap">
				<div class="pricing_schemes_title">悟空快装价格方案</div>
				<div class="pricing_schemes_content">
				<?php
					$pricing_schemes_repeater=get_field('pricing_schemes_repeater');
					$reminder=get_field('reminder');
					foreach($pricing_schemes_repeater as $index => $pricing_schemes_repeater_item){
				?>
					<div class="pricing_schemes_item" style="background-color:#fff;background-repeat: no-repeat; background-image: url(<?php echo $pricing_schemes_repeater_item['pricing_schemes_background'];  ?>);background-size:contain; background-attachment: scroll; background-position: bottom left; ">
						<div class="content_title"><?php echo $pricing_schemes_repeater_item['pricing_schemes_title'];  ?></div>
						<div class="content_info">
						<?php foreach($pricing_schemes_repeater_item['pricing_schemes_content'] as $content_info_item){ ?>
							<div class="content_info_item">
								<span><?php echo $content_info_item['content_title'];  ?>:</span>  <span><?php echo $content_info_item['content_number'];  ?></span>
							</div>
						<?php } ?>
						</div>
						<div class="buy_link_wrap"><a class="buy_link bg_color_<?php echo $index;  ?>">立刻购买</a></div>
					</div>
					<?php } ?>
				</div>
				<div class="pricing_schemes_reminder">温馨提示：<span class="reminder_info"><?php echo $reminder; ?></span></div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>