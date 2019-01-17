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
                <div class="customer_case_wrap">
                <?php
                    $customer_case_repeat=get_field('customer_case_repeat');
                    foreach($customer_case_repeat as $customer_case_repeat_item){
                ?>
                    <div class="customer_case_item">
                        <div class="customer_case_title"><?php echo $customer_case_repeat_item['customer_case_item_title'];  ?></div>
                        <div class="customer_case_image">
                            <img src="<?php echo  $customer_case_repeat_item['customer_case_item_image'];  ?>">
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>