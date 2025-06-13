<?php get_header();?>
<div id="container">
    <div id="imgs_container">
<div class="img_container">
    <img src="<?php echo get_template_directory_uri();?>/images/img.jpg ">
</div>

<div class="img_container">
    <img src="<?php echo get_template_directory_uri();?>/images/img2.jpg ">
</div>

<div class="img_container">
    <img src="<?php echo get_template_directory_uri();?>/images/nature.jpg ">
</div>

<div id="overlay">
    <div id="left_button" class="overlay_button" onclick="onLeftButton()"></div>
    <div id="right_button" class="overlay_button" onclick="onLeftButton()"></div>
</div>
    </div>

    <div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
    </div>
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <section class="hero">
                    Hero
                </section>
                <section class="services">
                    <h2>Services</h2>
                    <div class="container">
                        <div class="services-item">
                            <?php 
                            if(is_active_sidebar('sevices-1')){
                                dynamic_sidebar('sevices-1');
                            }
                            ?>
                        </div>
                          <div class="services-item">
                            <?php 
                            if(is_active_sidebar('sevices-2')){
                                dynamic_sidebar('sevices-2');
                            }
                            ?>
                        </div>
                          <div class="services-item">
                            <?php 
                            if(is_active_sidebar('sevices-3')){
                                dynamic_sidebar('sevices-3');
                            }
                            ?>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
</div>

<?php get_footer();?>