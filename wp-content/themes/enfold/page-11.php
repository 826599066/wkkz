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
    <div class="block_wrap index_block">
        <div class="container" >
            <div class="content">
                <div class="index_fir_block">
                    <div class="left_text_wrap">
                        <?php
                            $index_first_block = get_field('index_first_block');
                        ?>
                        <div><?php echo $index_first_block["left_title"]; ?></div>
                        <div><?php echo $index_first_block["left_sub_title"]; ?></div>
                        <div><?php echo $index_first_block["left_small_title"]; ?></div>
                    </div>
                    <div class="right_image_wrap"></div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>