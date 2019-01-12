<?php
	if ( !defined('ABSPATH') ){ die(); }
	
	global $avia_config;

	/*
	 * get_header is a basic wordpress function, used to retrieve the header.php file in your theme directory.
	 */
	 get_header();


 	 if( get_post_meta(get_the_ID(), 'header', true) != 'no') echo avia_title();
 	 
      do_action( 'ava_after_main_title' ); 
?>
    <div class="block_wrap index_fir_wrap avia-section main_color avia-section-default avia-no-shadow avia-bg-style-scroll  avia-builder-el-0  avia-builder-el-no-sibling  container_wrap fullsize" style="background-repeat: no-repeat; background-image: url(<?php echo wp_upload_dir()['baseurl'];  ?>/2019/01/s.jpg); background-attachment: scroll; background-position: bottom center; ">
        <div class="container">
            <main role="main" itemprop="mainContentOfPage" class="template-page content  av-content-full alpha units">
                <div class="post-entry post-entry-type-page post-entry-2">
                    <div class="index_fir_block entry-content-wrapper clearfix">
                        <div class="left_text_wrap flex_column av_one_half  flex_column_div av-zero-column-padding first  avia-builder-el-1  el_before_av_one_half  avia-builder-el-first  " style="border-radius:0px; ">
                            <?php
                                $index_first_block = get_field('index_first_block');
                            ?>
                            <div><?php echo $index_first_block["left_title"]; ?></div>
                            <div><?php echo $index_first_block["left_sub_title"]; ?></div>
                            <div><?php echo $index_first_block["left_small_title"]; ?></div>
                            </div>
                        <div class="right_image_wrap flex_column av_one_half  flex_column_div av-zero-column-padding   avia-builder-el-3  el_after_av_one_half  avia-builder-el-last  " style="border-radius:0px; ">
                            <section class="av_textblock_section" itemscope="itemscope" itemtype="https://schema.org/CreativeWork">

                            </section>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
<?php get_footer(); ?>