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
    <div class="block_wrap index_fir_wrap avia-section main_color avia-section-default avia-no-shadow avia-bg-style-scroll  avia-builder-el-0  avia-builder-el-no-sibling  container_wrap fullsize" style="background-repeat: no-repeat; background-image: url(<?php echo wp_upload_dir()['baseurl'];  ?>/2019/01/s.jpg); background-attachment: scroll; background-position: top center;background-size:cover; ">
        <div class="container">
            <main role="main" itemprop="mainContentOfPage" class="template-page content  av-content-full alpha units">
                <div class="post-entry post-entry-type-page post-entry-2">

                    <div class="index_fir_block flex_column_table av-equal-height-column-flextable">
                        <div class="left_text_wrap  flex_column av_one_half  flex_column_table_cell av-equal-height-column av-align-top av-zero-column-padding first  avia-builder-el-1  el_before_av_one_half  avia-builder-el-first   " style="border-radius:0px; ">
                            <?php
                                $index_first_block = get_field('index_first_block');
                            ?>
                            <div><?php echo $index_first_block["left_title"]; ?></div>
                            <div><?php echo $index_first_block["left_sub_title"]; ?></div>
                            <div class="left_small_title"><?php echo $index_first_block["left_small_title"]; ?></div>
                            <div class="bottom_wrap">
                                <a>了解详情</a>
                                <a href="<?php echo home_url().'/?page_id=30'   ?>">联系我们</a>
                            </div>
                        </div>
                        <div class="right_image_wrap flex_column av_one_half  flex_column_table_cell av-equal-height-column av-align-top av-zero-column-padding   avia-builder-el-3  el_after_av_one_half  avia-builder-el-last  " style="border-radius:0px; ">
                            <section class="av_textblock_section" itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
                                <img src="<?php echo $index_first_block['right_image']; ?>">
                            </section>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <div class="block_wrap job_description">
        <div class="container">
            <div class="content">
                <div class="job_description_wrap">
                    <div class="description_block">
                    <?php
                        $index_second_block = get_field('index_second_block');
                    ?>
                        <div class="description_title_image"><img src="<?php echo $index_second_block["job_description_image"]; ?>"></div>
                        <div class="description_title"><?php echo $index_second_block["job_description_title"]; ?></div>
                        <div class="description_content"><?php echo $index_second_block["job_description_content"]; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block_wrap function_config">
        <div class="container">
            <div class="content">
                <div class="function_config_wrap">
                    <div class="index_block_title_temp">功能结构</div>
                    <div class="function_config_subtitle">公众号/小程序 实现，无需安装APP</div>
                    <div class="function_config_image">
                        <?php 
                            $index_third_block=get_field('index_third_block');
                            foreach($index_third_block['function_config_image_repeat'] as $index => $function_image_item){
                        ?>
                        <div class="function_config_item">
                            <div class="function_top_image">
                                <img src="<?php echo $function_image_item['function_config_image'];  ?>">
                             <?php if(($index+1)!=count($index_third_block['function_config_image_repeat'])){ ?>   
                                <img class='arrow' src="<?php echo $index_third_block['function_config_arrow'];  ?>">
                             <?php } ?>
                            </div>
                            <div class="function_bottom_content">
                                <?php foreach($function_image_item['function_config_title_repeat'] as $function_config_title_item) { ?>
                                <div><?php echo $function_config_title_item['function_config_title']; ?></div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="function_config_content"><?php echo $index_third_block['function_config_content'];  ?></div>
                </div>
            </div>
        </div>
    </div>
    <?php
        $index_fourth_block = get_field('index_fourth_block');
    ?>
    <div class="block_wrap system_flow_wrap avia-section main_color avia-section-default avia-no-shadow avia-bg-style-scroll  avia-builder-el-0  avia-builder-el-no-sibling  container_wrap fullsize" style="background-repeat: no-repeat; background-image: url(<?php echo $index_fourth_block['system_flow_background_image'];  ?>); background-attachment: scroll; background-position: bottom left; ">
        <div class="container">
            <main role="main" itemprop="mainContentOfPage" class="template-page content  av-content-full alpha units">
                <div class="post-entry post-entry-type-page post-entry-2">
                    <div class="index_block_title_temp">系统流程图</div>
                    <div class="function_config_subtitle">公众号/小程序 实现，无需安装APP</div>
                    <div class=" flex_column_table system_flow_wrap_pc  av-equal-height-column-flextable">
                        <div class="left_text_wrap  flex_column av_one_half  flex_column_table_cell av-equal-height-column av-align-middle av-zero-column-padding first  avia-builder-el-1  el_before_av_one_half  avia-builder-el-first   " style="border-radius:0px; ">
                            <img src="<?php 
                                echo $index_fourth_block['system_flow_left']; 
                            ?>">
                        </div>
                        <div class="right_image_wrap flex_column av_one_half  flex_column_table_cell av-equal-height-column av-align-middle av-zero-column-padding   avia-builder-el-3  el_after_av_one_half  avia-builder-el-last  " style="border-radius:0px; ">
                            <section class="av_textblock_section" itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
                            <div class="system_flow_right_wrap">
                                <img src="<?php echo $index_fourth_block['system_flow_right_image'];  ?>">
                                <div class="flow_show_more">
                                    <a href="<?php echo $index_fourth_block['system_flow_url'];  ?>"><?php echo $index_fourth_block['system_flow_link_title'];  ?> ></a>

                                </div>
                            </div>
                            </section>
                        </div>
                    </div>
                    <div class=" flex_column_table system_flow_wrap_phone  av-equal-height-column-flextable">
                    <div class="right_image_wrap flex_column av_one_half  flex_column_table_cell av-equal-height-column av-align-middle av-zero-column-padding   avia-builder-el-3  el_after_av_one_half  avia-builder-el-last  " style="border-radius:0px; ">
                            <section class="av_textblock_section" itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
                            <div class="system_flow_right_wrap">
                                <img src="<?php echo $index_fourth_block['system_flow_right_image'];  ?>">
                                <div class="flow_show_more">
                                    <a href="<?php echo $index_fourth_block['system_flow_url'];  ?>"><?php echo $index_fourth_block['system_flow_link_title'];  ?> ></a>

                                </div>
                            </div>
                            </section>
                        </div>
                        <div class="left_text_wrap  flex_column av_one_half  flex_column_table_cell av-equal-height-column av-align-middle av-zero-column-padding first  avia-builder-el-1  el_before_av_one_half  avia-builder-el-first   " style="border-radius:0px; ">
                            <img src="<?php 
                                echo $index_fourth_block['system_flow_left']; 
                            ?>">
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <div class="block_wrap product_advantage_wrap">
        <div class="container">
            <div class="content">
                <div class="product_advantage">
                    <div class="index_block_title_temp">产品优势</div>
                    <div class="product_advantage_content">
                        <?php
                            $index_fifth_block = get_field('index_fifth_block');
                            $product_advantage_item = $index_fifth_block['product_advantage'];
                            foreach($product_advantage_item as $advantage_item){

                        ?>
                        <div class="product_advantage_item">
                            <div class="top_advantage_icon">
                                <img src="<?php echo  $advantage_item['product_advantage_icon']; ?>">
                            </div>
                            <div class="product_advantage_title">
                                <?php echo  $advantage_item['product_advantage_title']; ?>
                            </div>
                            <div class="product_advantage_content">
                                <?php echo  $advantage_item['product_advantage_describe']; ?>
                            </div>
                        </div>
                            <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block_wrap industry_application">
        <div class="container">
            <div class="content">
                <div class="index_block_title_temp">行业领域应用</div>
                <div class="industry_application_wrap">
                    <?php 
                        $index_sixth_block = get_field('index_sixth_block');
                        foreach($index_sixth_block['industry_application'] as $industry_application_item ){
                    ?>
                        <div class="industry_application_item">
                            <div class="backgroud_image">
                                <img src="<?php echo $industry_application_item['background_image']  ?>">
                            </div>
                        </div>
                    <?php
                        }                    
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php    
        $index_seventh_block = get_field('index_seventh_block');
    ?>
    <div class="block_wrap customer_case" style="background-repeat: no-repeat; background-image: url(<?php echo $index_seventh_block['background_image'];  ?>); background-attachment: scroll; background-position: top center;background-size:cover; ">
        <div class="container">
            <div class="content">
                <div class="index_block_title_temp">客户案例</div>
                <div class="customer_case_content">
                        <img src="<?php echo  $index_seventh_block['customer_case_image']; ?>">
                        <div class="customer_bottom_title"><?php echo $index_seventh_block['customer_case_title']; ?></div>
                        <div class="show_more"><a href="<?php echo $index_seventh_block['show_more_link']; ?>">了解更多 ></a></div>

                </div>

            </div>
        </div>
    </div>
    <?php    
        $index_eighth_block = get_field('index_eighth_block');
    ?>
    <div  class="block_wrap solve_wrap" style="background-color: #fff;background-repeat: no-repeat; background-image: url(<?php echo $index_eighth_block['background_image'];  ?>); background-attachment: scroll; background-position: bottom left; ">
        <div class="container">
                <div class="content">
                <div class="index_block_title_temp">解决痛点</div>
                    <?php 
                        $index_eighth_block = get_field('index_eighth_block');

                    ?>
                    <div class="solve_content">
                        <div class="solve_sub_title"><?php echo $index_eighth_block['solve_subtitle_title'];  ?></div>
                        <div class="contact_us_button"><a href="<?php echo $index_eighth_block['contact_us_link'];  ?>">联系我们</a></div>
                    </div>
                </div>
        </div>
    </div>
<?php get_footer(); ?>