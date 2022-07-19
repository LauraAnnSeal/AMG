<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WAN-IFRA_AMG
 */

?>
<div class="fixed-footer container-fluid p-0">
    <div class="row p-0 d-flex justify-content-between">
        <div class="col-6 col-md-4 col-lg-3 col-xxl-2" id="wan-ifra-logo">
            <a href="https://wan-ifra.org/" target="_blank">
                <img src="<?php echo get_template_directory_uri() ?>/assets/logos/wan-ifra-med-freedom-logo.png" alt="WAN-IFRA Media Freedom">  
            </a>
        </div>
        <div class="col-6 col-xxl-10 text-end pe-4" id="media-button">
            <a href="<?php echo get_permalink('78') ?>" class="btn btn-light"><i class="fa-solid fa-bell pe-2"></i>Grant Opportunities</a>
        </div>
    </div>
</div>

<div class="footer container-fluid bg-pale-grey pt-5">
    <div class="row">
        <div class="col-12 col-md-8 col-lg-6 col-xxl-3 mx-auto d-flex justify-content-between">
            <a class="footer-h2 <?php get_template_part('template-parts/content', 'active', 68) ?>"><h2>Home</h2></a>
            <a class="footer-h2 <?php if((get_post_type()  == 'project' && !is_search()) || (get_post_type()  == 'locations' && !is_search()) ){echo 'active';}; get_template_part('template-parts/content', 'active', 116) ?>"><h2>Projects</h2></a>
            <a class="footer-h2 <?php get_template_part('template-parts/content', 'active', 118) ?>"><h2>Context</h2></a>
        </div>

        <div class="col-12"></div>

        <div class="col-12 col-md-8 col-lg-6 mx-auto text-center footer-links-block mt-2">
            <a class="footer-links <?php get_template_part('template-parts/content', 'active', 74) ?>">About</a>
            <span></span>
            <a class="footer-links <?php get_template_part('template-parts/content', 'active', 76) ?>">Contact</a>
            <span></span>
            <a class="footer-links <?php get_template_part('template-parts/content', 'active', 78) ?>">Grants & Resources</a>
        </div>

        <div class="col-12"></div>

        <div class="col-12 col-md-8 col-lg-6 col-xxl-4 mx-auto footer-countries mt-4 text-center">
            <?php get_template_part('template-parts/content', 'location-btn-footer', ['name' => 'Botswana', 'id' => 133]) ?> 
            <?php get_template_part('template-parts/content', 'location-btn-footer', ['name' => 'Kenya', 'id' => 134]) ?> 
            <?php get_template_part('template-parts/content', 'location-btn-footer', ['name' => 'Malawi', 'id' => 135]) ?> 
            <?php get_template_part('template-parts/content', 'location-btn-footer', ['name' => 'Rwanda', 'id' => 136]) ?> 
            <?php get_template_part('template-parts/content', 'location-btn-footer', ['name' => 'South Africa', 'id' => 137]) ?> 
            <?php get_template_part('template-parts/content', 'location-btn-footer', ['name' => 'Tanzania', 'id' => 138]) ?> 
            <?php get_template_part('template-parts/content', 'location-btn-footer', ['name' => 'Uganda', 'id' => 139]) ?> 
            <?php get_template_part('template-parts/content', 'location-btn-footer', ['name' => 'Zambia', 'id' => 140]) ?> 
            <?php get_template_part('template-parts/content', 'location-btn-footer', ['name' => 'Zimbabwe', 'id' => 141]) ?> 
        </div>

        <div class="col-12"></div>

        <div id="funded-footer" class="col-12 col-md-8 col-lg-6 mx-auto mt-5 text-center d-flex justify-content-between align-items-center">
            <div class="funding-line">
            </div>
            <div id="funding-block">
                <h2>Funded By</h2>
            </div>
            <div class="funding-line">
            </div>
        </div>

        <div class="col-12"></div>

        <div id="funding-logo" class="col-8 col-md-4 col-lg-3 col-xxl-2 my-2 mx-auto">
            <img src="<?php echo get_template_directory_uri() ?>/assets/logos/MFA-Denmark-logo.png" class="img-fluid" alt="MFA Denmark">
        </div>
        <div id="footer-outro" class="col-12 bg-dark-grey mt-2 pt-4">
            <div class="row">
                <div class="col-6 ps-xxl-5">
                    <p>©2022 WAN-IFRA</p>
                </div>
                <div class="col-6 text-end pe-xxl-5">
                    <a href="lauraannseal.com" target="_blank">
                        LAS
                        <img src="<?php echo get_template_directory_uri() ?>/assets/logos/LAS-logo.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>



</div><!-- #wrapper -->	
</div><!-- #page -->


<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/menu.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/related-content.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/slick/slick.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/slick/my-slick.js"></script>



<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

</body>
</html>
