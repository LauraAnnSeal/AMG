<?php get_header() ?>

<!-- 
    /* -------------------------------------------------------------------------- */
    /*                             Social Media Modal                             */
    /* -------------------------------------------------------------------------- */
 -->
 <?php get_template_part('template-parts/content', 'share-modal') ?>



<!-- 
    /* -------------------------------------------------------------------------- */
    /*                                 Top of page                                */
    /* -------------------------------------------------------------------------- */
 -->

 <div class="container-fluid" id="page-type">
    <div class="col-8 col-lg-10 col-xxl-6 mx-auto">
        <span>Context</span>
    </div>
</div>
<div id="page-type-padding"></div>


<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-lg-6 col-xxl-4 offset-lg-1 offset-xxl-3 pt-lg-3">

            <div class="container-fluid">
                    <div class="col-12 col-md-8 col-lg-12 mx-auto mt-3">
                        <h1><?php the_field('title') ?></h1>
                        <h3><?php the_field('subtitle') ?></h3>
                    </div>
                    <div class="col-12 col-md-8 col-lg-12 mx-auto d-flex">
                        <a href="<?php echo get_field('website_link') ?>" target="_blank" class="btn btn-primary me-1"><?php the_field('company_name') ?></a>

                        <button type="button" class="ms-auto btn btn-light share-btn" data-toggle="modal" data-target="#socialModal" ><i class="fa-solid fa-arrow-up-right-from-square"></i></button>
                    </div>
            </div>
            <!-- 
                /* -------------------------------------------------------------------------- */
                /*                                   Content                                  */
                /* -------------------------------------------------------------------------- */
            -->
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-12 col-md-8 col-lg-12 mx-auto">
                        <a href="#the-author" class="btn btn-light"><?php the_field('name') ?></a>
                    </div>
                    <!-- Featured Image -->
                    <div class="col-12 col-md-8 col-lg-12 mx-auto my-3">
                        <div class="featured-image">
                        <?php if( get_field('image') ): ?>
                            <img class="img-fluid" src="<?php the_field('image'); ?>" />
                        <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-12 col-md-8 col-lg-12 mx-auto">
                        <?php the_field('article') ?>
                    </div>
                </div>
            </div>
            <!-- 
                /* -------------------------------------------------------------------------- */
                /*                               Article Footer                               */
                /* -------------------------------------------------------------------------- */
            -->
            <div id="the-author" class="container-fluid mt-2">
                <div class="row">
                    <div class="col-12 col-md-8 col-lg-12 mx-auto">
                        <hr>
                    </div>
                    <div class="col-12 col-md-8 col-lg-12 mx-auto row d-flex align-items-center">
                        <?php if(get_field('headshot')) : ?>
                            <div class="col-4 me-3">
                                <div class="author-image">
                                    <img  class="img-fluid" src="<?php the_field('headshot') ?>" alt="">
                                </div>
                            </div>
                            <div class="col-7">
                            <span id="author-name"><?php the_field('name') ?></span>
                            <span id="author-title"><?php the_field('title') ?></span>
                                <?php 
                                $link = get_field('linked_in_link');
                                if( $link ): 
                                    $link_url = $link['url'];
                                    ?>
                                    <a class="btn btn-primary mt-2" href="<?php echo esc_url( $link_url ); ?>" target="_blank">
                                    LinkedIn
                                    <span class="button-icon"><i class="fa-brands fa-linkedin"></i></span>
                                </a>
                                <?php endif; ?>
                        </div>
                        <?php else : ?>
                            <div class="col-12">
                            <span id="author-name"><?php the_field('name') ?></span>
                            <span id="author-title"><?php the_field('author_title') ?></span>
                                <?php 
                                $link = get_field('linked_in_link');
                                if( $link ): 
                                    $link_url = $link['url'];
                                    ?>
                                    <a class="btn btn-primary mt-2" href="<?php echo esc_url( $link_url ); ?>" target="_blank">
                                    LinkedIn
                                    <span class="button-icon"><i class="fa-brands fa-linkedin"></i></span>
                                </a>
                                <?php endif; ?>
                        </div>
                        <?php endif; ?>
                        
                    </div>
                </div>
            </div>

            <!-- 
                /* -------------------------------------------------------------------------- */
                /*                             Organisation Footer                            */
                /* -------------------------------------------------------------------------- */
            -->
            <div class="container-fluid mt-2">
                <div class="row">
                    <div class="col-12 col-md-8 col-lg-12 mx-auto">
                        <hr>
                    </div>
                    <div class="col-12"></div>         
                    <div class="col-6 col-md-4 mx-auto">
                        <img src="<?php the_field('logo') ?>" alt="" class="img-fluid">
                    </div>
                    <div class="col-12"></div>
                    <div class="col-12 col-md-8 col-lg-12 mx-auto mt-2">
                        <p><?php the_field('about') ?></p>
                    </div>
                    <div class="col-12 col-md-8 col-lg-12 mx-auto text-center">
                    <?php 
                        $link = get_field('website_link');
                        if( $link ): 
                            $link_url = $link['url'];
                            ?>
                            <a class="btn btn-success" href="<?php echo esc_url( $link_url ); ?>" target="_blank">Website link<span class="button-icon"><i class="fa-solid fa-link"></i></span></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        </div>
        <?php get_template_part('template-parts/content', 'lg-menu') ?>
    </div>
</div>









<!-- other contexts -->
<?php get_template_part('template-parts/content', 'relatedContexts'); ?>


<?php get_footer() ?>