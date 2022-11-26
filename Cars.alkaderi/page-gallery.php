<?php

/**
 * The page template file.
 * @package SongWriter
 * @since SongWriter 1.0.0
 */

get_header(); ?>


    <!-- ================ Start body ================ -->
<div class="container">
    <div class="main-page">

        <div aria-label="breadcrumb" class="breadcrumb-section">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php bloginfo('url'); ?>">الرئيسية</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
            </ol>
        </div>


    </div>

    <div class="content col-lg-12 col-md-12 col-sm-12 col-12 right">
            
        <?php the_content(); ?>

    </div>

    <!-- =============== Sidebar =============== -->
    <div class="sidebar col-lg-4 col-md-12 col-sm-12 col-xs-12 left d-none">
            <div class="main-sidebar">

                <?php 
                    if (is_active_sidebar('main-sidebar')){
                        dynamic_sidebar('main-sidebar');
                    }
                ?>
            </div>
    </div>

    <div class="clearfix"></div>

</div>

<?php get_footer(); ?>