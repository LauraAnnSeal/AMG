<?php /* Template Name: Grants & Resources Template */ ?>

<?php get_header() ?>

<div class="container-fluid" id="page-type">
        <div class="col-8 col-lg-10 col-xxl-6 mx-auto">
            <span>Grants & Resources</span>
        </div>
    </div>

    <div id="page-type-padding"></div>

    <div class="container-fluid mt-4">
        <div class="row">
            <!-- For Journalists -->
            <div class="col-12 col-md-8 offset-md-2 col-lg-5 col-xxl-3 offset-lg-1 offset-xxl-3 pt-lg-3 px-lg-5">
                <h2>RESOURCES FOR JOURNALISTS WORKING ON ENVIRONMENTAL REPORTING</h2>
                <p>
                    Find useful resources for journalists and newsrooms as well as a selection of the latest grants and bursaries available for climate coverage. 
                </p>
                <p>
                    We will update this section of our website as and when new opportunities become available, so be sure to check back regularly. 
                </p>
                <div class="row d-flex mx-auto">

                    <?php if( have_rows('resources') ): ?>
                        <?php while( have_rows('resources') ): the_row(); 
                            $title = get_sub_field('title');
                            $link = get_sub_field('link')['url'];
                            $link_title = get_sub_field('link')['title'];
                            ?>
                            <div class="col-6 resource">
                                <h4><?php echo $title ?></h4>
                                <a class="btn btn-primary" href="<?php echo $link ?>"><i class="fa-solid fa-link pe-2"></i><?php echo $link_title ?></a>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>
            <!-- For Opportunities -->
            <div class="col-12 col-md-8 offset-md-2 col-lg-5 offset-lg-0 col-xxl-3 pt-lg-3 mt-5 mt-lg-0 px-lg-5">
                <h2>GRANT / FELLOWSHIP OPPORTUNITIES</h2>
                <p>
                    Please note that each organisation has different application periods and individual requirements. Visit the websites listed to find out which applications are currently open.
                </p>
                <div class="row d-flex mx-auto">

                    <?php if( have_rows('opportunities') ): ?>
                        <?php while( have_rows('opportunities') ): the_row(); 
                            $title = get_sub_field('title');
                            $link = get_sub_field('link')['url'];
                            $link_title = get_sub_field('link')['title'];
                            ?>
                            <div class="col-6 resource">
                                <h4><?php echo $title ?></h4>
                                <a class="btn btn-success" href="<?php echo $link ?>"><i class="fa-solid fa-link pe-2"></i><?php echo $link_title ?></a>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>

    <div id="page-type-padding"></div>



<?php get_footer() ?>