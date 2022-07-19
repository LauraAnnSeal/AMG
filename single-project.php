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
        <span>Project</span>
    </div>
</div>
<div id="page-type-padding"></div>

<!-- 
    /* -------------------------------------------------------------------------- */
    /*                                  Page Tags                                 */
    /* -------------------------------------------------------------------------- */
 -->

<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-lg-6 col-xxl-4 offset-lg-1 offset-xxl-3 pt-lg-3">
            <!-- Page content -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-8 col-lg-12 mx-auto d-flex">
                        <?php get_template_part('template-parts/content', 'location-btn-general', ucfirst(get_field('country'))) ?> 
                        <?php get_template_part('template-parts/content', 'key-issues') ?>
                        <button type="button" class="ms-auto btn btn-light share-btn" data-toggle="modal" data-target="#socialModal" ><i class="fa-solid fa-arrow-up-right-from-square"></i></button>
                    </div>
                </div>

                <div class="row">
                    <!-- Headings -->
                    <div class="col-12 col-md-8 col-lg-12 mx-auto  mt-3">
                        <h1><?php the_field('title') ?></h1>
                        <h3>
                            <?php the_field('media_name') ?>, 
                            <span class="country-name"><?php the_field('country') ?></span>
                        </h3>
                    </div>

                    <!-- Featured Image -->
                    <div class="col-12 col-md-8 col-lg-12 mx-auto my-3">
                        <div class="featured-image">
                        <?php if( get_field('display_image') ): ?>
                            <img class="img-fluid w-100" src="<?php the_field('display_image'); ?>" />
                        <?php endif; ?>
                        </div>
                    </div>
        
                    <!-- About the project -->
                    <?php $about = get_field('about');
                    if ($about ) : ?>
                        <div class="col-12 col-md-8 col-lg-12 mx-auto mt-2">
                            <h2>About this project</h2>
                            <p><?php echo $about ?></p>
                        </div>
                    <?php  endif; ?>
        

                    <!-- Featured content -->
                    <?php $featured = get_field('featured_content');
                    if ($featured ) : ?>  
                        <div class="col-12 col-md-8 col-lg-12 mx-auto my-4">              
                            <!-- check the media type -->
                            <?php if(esc_attr( $featured['featured_content_google_drive_video'] )): ?>
                                <div class="col-12 mt-2">
                                    <h2>Featured Content</h2>
                                    <p id="G-Vid-Link" class="d-none"><?php echo esc_attr( $featured['featured_content_google_drive_video']['url'] ) ?></p>
                                    <div id="G-Vid" class="my-video-box">
                                        <iframe src="" width="100%" height="100%" allow="autoplay"></iframe>
                                    </div>
                                    <p class="mt-2"><i><?php echo esc_attr( $featured['featured_content_name'] ); ?></i></p>
                                </div>
                            <?php elseif(esc_attr( $featured['featured_content_article'] )): ?>
                                <div class="col-12 col-md-8 col-lg-12 mx-auto mt-2">
                                    <h2>Featured Content</h2>
                                    <!-- <p>Read the article attached</p> -->
                                    <a class="btn btn-success" href="<?php echo esc_attr( $featured['featured_content_article']['url'] ); ?>" target="_blank">
                                        <i class="fa-solid fa-file-pdf me-1"></i>
                                        <?php echo esc_attr( $featured['featured_content_name'] ); ?>
                                    </a>
                                </div>
                            <?php elseif(esc_attr( $featured['featured_content_video'] )): ?>
                                <div class="col-12 mt-2">
                                    <h2>Featured Content</h2>
                                    <div class="my-video-box">
                                        <?php echo $featured['featured_content_video'] ?>
                                    </div>
                                    <p class="mt-2"><i><?php echo esc_attr( $featured['featured_content_name'] ); ?></i></p>
                                </div>
                            <?php elseif(esc_attr( $featured['featured_content_link'] )): ?>
                                <div class="col-12 col-md-8 col-lg-12 mx-auto mt-2">
                                    <h2>Featured Content</h2>
                                    <!-- <p>Read the article attached</p> -->
                                    <a class="btn btn-success" href="<?php echo esc_attr( $featured['featured_content_link']['url'] ); ?>" target="_blank">
                                    <i class="fa-solid fa-link"></i>
                                    <?php echo esc_attr( $featured['featured_content_name'] ); ?>
                                    </a>
                                </div>
                            <?php elseif(esc_attr( $featured['featured_content_audio'] )) :?>
                                <?php get_template_part('template-parts/content', 'audio');  ?>
                            <?php endif; ?>
                                
                            <?php if($featured['featured_content_note']) ?>
                                <div class="col-12  col-md-8 col-lg-12 mx-auto mt-1">
                                    <?php echo $featured['featured_content_note']?>
                                </div>
                            <?php  endif; ?>
                        </div>
                    

                    <!-- Motivation for content -->
                    <?php $motivation = get_field('motivation');
                    if ($motivation ) : ?>
                        <div class="col-12 col-md-8 col-lg-12 mx-auto mt-2">
                            <h2>Motivation</h2>
                            <div class="motivational-quote bg-pale-grey p-4">
                                <?php echo $motivation ?>
                            </div>
                        </div>
                    <?php  endif; ?>

                    <!-- Featured links -->
                    <?php if( have_rows('more_from_the_project') ): ?>
                        <div class="col-12  col-md-8 col-lg-12 mx-auto mt-5">
                            <h2 class="mb-3">More from the project</h2>
                            <div class="list-group">
                            <?php if( have_rows('more_from_the_project') ): ?>
                            <?php while( have_rows('more_from_the_project') ): the_row(); 
                                $text = get_sub_field('link_title');
                                $url = get_sub_field('url');
                                $type = get_sub_field('link_type');
                                $icon;
                                if($type == 'watch'){$icon = '<i class="fa-solid fa-video"></i>';}
                                else if($type == 'listen'){ $icon = '<i class="fa-solid fa-microphone"></i>';}
                                else if($type == 'read'){$icon = '<i class="fa-solid fa-book-open-reader"></i>';}
                                else {$icon = '<i class="fa-solid fa-link"></i>';}
                                ?>
                                    <a href="<?php echo $url['url'] ?>" target="_blank" class="list-group-item list-group-item-action">
                                        <div class="row">
                                            <div class="col-10">
                                                <?php echo $text ?>
                                            </div>
                                            <div class="col-2 text-center">
                                                <?php echo $icon ?>
                                            </div>
                                        </div>
                                    </a>
                            <?php endwhile; ?>
                            <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Line break between content and media -->
                    <div class="col-12 col-md-8 col-lg-12 mx-auto my-3">
                        <hr>
                    </div>

                    <!-- The media -->
                    <div class="col-12 col-md-8 col-lg-12 mx-auto">
                            <div class="row">
                                <?php $image = get_field('media_logo');
                                if( !empty( $image ) ): ?>
                                    <div id="media-logo" class="col-8 col-xxl-4 mb-4">
                                        <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    </div>
                                <?php endif; ?>
                                    <div class="col-12"><h2>About the media</h2></div>
                                    <div class="col-12">
                                        <?php the_field('about_the_media') ?>    
                                    </div>
                                    <div class="col-12">
                                    <?php 
                                        $link = get_field('link_to_media_website');
                                        if( $link ): 
                                            $link_url = $link['url'];
                                            $link_title = $link['title'];
                                            ?>
                                            <a class="btn btn-primary" href="<?php echo esc_url( $link_url ); ?>" target="_blank"><?php echo esc_html( $link_title ); ?><span class="button-icon"><i class="fa-solid fa-link"></i></span></a>
                                        <?php endif; ?>
                                    </div>
                            </div>  
                    </div>
                </div>
            </div>
        </div>
        <?php get_template_part('template-parts/content', 'lg-menu') ?>
    </div>
</div>

<!-- related content posts -->
<?php get_template_part('template-parts/content', 'relatedProjects'); ?>

<script>
    const firstLink = document.querySelector('.list-group-item.list-group-item-action')
    firstLink.classList.add('active')
    const gLink = document.querySelector('#G-Vid-Link')
    if(gLink){
        let url = gLink.innerHTML
        let iframeUrl = url.replace('/view', '/preview')
        console.log(iframeUrl)
        const iframe = document.querySelector('#G-Vid iframe')
        iframe.src = iframeUrl

    }
</script>
<?php get_footer() ?>