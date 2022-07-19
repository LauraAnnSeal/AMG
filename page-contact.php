<?php 
/**
Template Name: Contact page
Template Post Type: page
*/
?>

<?php get_header() ?>

    <div class="container-fluid" id="page-type">
        <div class="col-8 col-lg-10 col-xxl-6 mx-auto">
            <span>Contact WAN-IFRA</span>
        </div>
    </div>

    <div id="page-type-padding"></div>

	<div class="container-fluid mt-4">
        <div class="row">
            <div class="col-12 col-lg-6 col-xxl-4 offset-lg-1 offset-xxl-3 pt-lg-3">
                <div class="row mx-auto">
                    <div class="col-12 col-md-8 col-lg-12 mx-auto">
                        <img class="img-fluid w-75" src="<?php echo get_template_directory_uri() ?>/assets/logos/Wan-Ifra-logo.png" alt="WAN-IFRA: World Association of News Publishers">
                    </div>
                    <div class="col-12 col-md-8 col-lg-12 mx-auto mt-4 row">
                        <p>
                            WAN-IFRA is headquartered in Paris, France and Frankfurt, Germany, with satellite offices in Mexico City, Chennai and Singapore. Our core mission since 1948:
                        </p>
                    </div>
                    <div class="row bg-pale-grey rounded-15 py-4 mt-4 mx-auto col-12 col-md-8 col-lg-12 mx-auto text-charcoal">
                        <p>
                            “To be the indispensable partner of newspapers and the entire news publishing industry worldwide, particularly our members, in the defence and promotion of press freedom, quality journalism and editorial integrity, and the development of prosperous businesses and technology.”

                        </p>
                    </div>
                    <div class="col-12 col-md-8 col-lg-12 mx-auto mt-4 row">
                        <div>
                            <a class="btn btn-success" href="https://wan-ifra.org/" target="_blank">
                            <i class="fa-solid fa-link"></i>
                                Wan-Ifra.org
                            </a>
                            <a class="btn btn-success" href="mailto:media.freedom@wan-ifra.org">
                            <i class="fa-solid fa-envelope"></i>
                                Email
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <?php get_template_part('template-parts/content', 'lg-menu') ?>
        </div>
    </div>


<div id="page-type-padding"></div>

<?php get_footer() ?>