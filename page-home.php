<?php 
/**
Template Name: Home page
Template Post Type: page
*/
?>

<?php get_header() ?>

<!-- Above the fold content -->
<div id="homepage-header" class="container-fluid">
    <div class="row">
        <!-- Begin: heading & tabs -->
        <div class="col-12 col-lg-4  order-md-2 container-fluid mt-3 d-md-none d-lg-block d-xxl-none tabs-container">
            <div class="row">
                <!-- Headings -->
                <div class="col-12">
                    <h2 class="homepage">WAN-IFRA Media Freedom</h2>
                    <h2 class="homepage">African Media Grants</h2>
                    <h1 class="homepage my-2">Environmental Reporting</h1>
                    <a href="" class="btn btn-light header-text">AFRICA</a>
                </div>
                <!-- Tabs -->
                <div class="col-12 p-4 row tab-row">
                    <div class="col-6 tab tab-1 tab-open">
                        <h4>The Projects</h4>
                    </div>
                    <div class="col-6 tab tab-background">
                        <h4>|</h4>
                    </div>
                    <div class="col-6 tab tab-2 tab-closed">
                        <h4>The Context</h4>
                    </div>
                    <!-- 
                        /* ---------------------------------- Tab 1 --------------------------------- */
                    -->
                    <div class="col-12 tab-contents contents-1 py-3">
                        <div class="row col-12 mx-auto">
                            <div class="col-2">
                                <span class="number">05</span>
                            </div>
                            <div class="col-2">
                                <a href="" class="shadow-none btn-home btn-energy">
                                    <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/assets/icons/energy.svg" alt=""></div>
                                </a>
                            </div>
                            <div class="col-2">
                                <a href="" class="shadow-none btn-home btn-land">
                                    <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/assets/icons/land.svg" alt=""></div>
                                </a>
                            </div>
                            <div class="col-2">
                                <a href="" class="shadow-none btn-home btn-water">
                                    <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/assets/icons/water.svg" alt=""></div>
                                </a>
                            </div>
                            <div class="col-2">
                                <a href="" class="shadow-none btn-home btn-conservation">
                                    <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/assets/icons/conservation.svg" alt=""></div>
                                </a>
                            </div>
                            <div class="col-2">
                                <a href="" class="shadow-none btn-home btn-responses">
                                    <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/assets/icons/responses.svg" alt=""></div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 mx-auto">
                            <span id="key-issues-heading">Key Issues</span>
                        </div>
                        <div id="project-stats" class="col-12 mx-auto mt-3">
                            <h6><span class="highlighted-number">9</span> countries</h6>
                            <h6><span class="highlighted-number">27</span> grants awarded</h6>
                            <h6><span class="highlighted-number">162</span> applications received</h6>
                            <h6><span class="highlighted-number">$270,000</span> distributed</h6>
                        </div>
                    </div>
                    <!-- 
                        /* ---------------------------------- Tab 2 --------------------------------- */
                    -->
                    <div class="col-12 tab-contents contents-2 d-none pt-3">
                        <h2 class="text-dark-grey mt-2">Local climate reporting matters</h2>
                        <p class="text-dark-grey mt-2">Five perspectives from our partners addressing the importance of environmental reporting by local media across Africa.</p>
                        <div class="mt-2 row d-flex tab-logos">
                            <div class="col-4 d-flex justify-content-center align-items-center p-2">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/logos/UNEP-logo.png" alt="" class="img-fluid">
                            </div>
                            <div class="col-4 d-flex justify-content-center align-items-center p-2">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/logos/Earth-Journalism-Network-logo.png" alt="" class="img-fluid">
                            </div>
                            <div class="col-4 d-flex justify-content-center align-items-center p-2">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/logos/climate-tracker-logo.png" alt="" class="img-fluid">
                            </div>
                            <div class="col-4 d-flex justify-content-center align-items-center p-2">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/logos/constructive-institute-logo.png" alt="" class="img-fluid">
                            </div>
                            <div class="col-4 d-flex justify-content-center align-items-center p-2">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/logos/UCT-logo.jpeg" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="<?php echo get_permalink(118 ) ?>" class="read-btn btn btn-success mt-3">
                                <h2 class="text-white">READ</h2>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End: heading & tabs -->

        <!-- Begin: map -->
        <div class="col-12 col-lg-8 col-xxl-12 order-md-1 container-fluid py-3 px-0 map-container">
            <div class="row">
                <div class="col-12 text-center my-3 d-md-none">
                    <h2>Interactive Map</h2>
                </div>
            </div>
            <div class="map-container">
                <div id="mobile-map" class="w-75 d-inline-block d-md-none">
                    <?php get_template_part('template-parts/content', 'mobile-map') ?>
                </div>
                <div id="lgScreen-map" class="d-inline-block d-none d-md-inline-block">
                    <?php get_template_part('template-parts/content', 'desktop-map') ?>
                    <div id="top-map-heading" class="d-lg-none d-xxl-block">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 text-xxl-center">
                                    <h2 class="homepage">WAN-IFRA Media Freedom</h2>
                                    <h2 class="homepage">African Media Grants</h2>
                                    <h1 class="homepage my-2">Environmental Reporting</h1>
                                    <a href="" class="btn btn-light header-text">AFRICA</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="lgScreen-height-guide" class="d-none d-md-inline-block">
                    <!-- <p>temp</p> -->
                </div>
                <img id="map-tooltip" src="<?php echo get_template_directory_uri() ?>/assets/images/map-guide.svg" alt="">
            
                <div id="map-results" class="pt-2 pt-xxl-0 d-inline-block px-md-5">
                    <div class="close-map-results text-center d-md-none"><div class="close-btn"><i class="fa-solid fa-x"></i></div></div>
                    <div class="country-name country-result-block"><h2>...</h2></div>
                    <?php echo get_template_part('template-parts/content', 'map-results') ?>
                    <div class="chevron-down text-center"><div class="next-btn"><i class="fa-solid fa-angle-down"></i></div></div>
                </div>
            </div>
        </div>
        <!-- End: map -->

        <!-- Begin: tabs for tablet -->
        <div id="open-tabs" class="col-12 col-xxl-5 container-fluid d-none d-md-block order-md-2 d-lg-none d-xxl-block">
            <div class="row">
                <div class="col-6">
                    <div class="tab-heading bg-indigo text-white">
                        <h2>The Projects</h2>
                    </div>
                    <div class="tab-text bg-white">
                        <div class="row col-11 col-xxl-8">
                            <div class="col-2">
                                <span class="number">05</span>
                            </div>
                            <div class="col-2">
                                <a href="" class="shadow-none btn-home btn-energy">
                                    <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/assets/icons/energy.svg" alt=""></div>
                                </a>
                            </div>
                            <div class="col-2">
                                <a href="" class="shadow-none btn-home btn-land">
                                    <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/assets/icons/land.svg" alt=""></div>
                                </a>
                            </div>
                            <div class="col-2">
                                <a href="" class="shadow-none btn-home btn-water">
                                    <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/assets/icons/water.svg" alt=""></div>
                                </a>
                            </div>
                            <div class="col-2">
                                <a href="" class="shadow-none btn-home btn-conservation">
                                    <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/assets/icons/conservation.svg" alt=""></div>
                                </a>
                            </div>
                            <div class="col-2">
                                <a href="" class="shadow-none btn-home btn-responses">
                                    <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/assets/icons/responses.svg" alt=""></div>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 mx-auto">
                            <span id="key-issues-heading">Key Issues</span>
                        </div>
                        <div id="project-stats" class="col-12 mx-auto mt-3">
                            <h6><span class="highlighted-number">9</span> countries</h6>
                            <h6><span class="highlighted-number">27</span> grants awarded</h6>
                            <h6><span class="highlighted-number">162</span> applications received</h6>
                            <h6><span class="highlighted-number">$270,000</span> distributed</h6>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="<?php echo get_permalink('116') ?>" class="btn btn-light">View all projects <i class="ms-2 fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-6 h-100">
                    <div class="tab-heading bg-indigo text-white">
                        <h2>The Context</h2>
                    </div>
                    <div class="tab-text bg-white">
                        <h2 class="text-dark-grey mt-2">Local climate reporting matters</h2>
                        <p class="text-dark-grey mt-2">Five perspectives from our partners addressing the importance of environmental reporting by local media across Africa.</p>
                        <div class="mt-2 row d-flex">
                            <div class="col-4 d-flex align-items-center p-2">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/logos/UNEP-logo.png" alt="" class="img-fluid">
                            </div>
                            <div class="col-4 d-flex align-items-center p-2">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/logos/Earth-Journalism-Network-logo.png" alt="" class="img-fluid">
                            </div>
                            <div class="col-4 d-flex align-items-center p-2">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/logos/climate-tracker-logo.png" alt="" class="img-fluid">
                            </div>
                            <div class="col-4 d-flex align-items-center p-2">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/logos/constructive-institute-logo.png" alt="" class="img-fluid">
                            </div>
                            <div class="col-4 d-flex align-items-center p-2">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/logos/UCT-logo.jpeg" alt="" class="img-fluid">
                            </div>
                            <div class="col-4 d-flex align-items-end justify-content-end p-2">
                                <a href="<?php the_permalink(118); ?>" class="btn btn-light">Read<i class="ms-2 fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End: tabs for tablet -->
    </div>
</div>

<!-- key issues legend -->
<div class="container-fluid my-5 pb-5 ki-container home-title-container">
    <div class="row">
        <div class="col-12 text-md-center">
            <h2><large>Key issues</large></h2>
            <h2><small>legend</small></h2>
        </div>
        <div id="ki-buttons-container" class="col-12 col-md-8 col-lg-12 col-xxl-10 offset-md-2 offset-lg-0 offset-xxl-1 row">
            <!-- Energy -->
            
            <div class="ki-block col-12 col-lg-2 row offset-lg-1">
                <!-- Begin: icon -->
                <div class="ki-icon-holder col-3 col-md-3 col-lg-12">
                    <div class="ki-icon energy">
                        <a href="<?php echo get_permalink(128) ?>">
                            <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/assets/icons/energy.svg" alt=""></div>
                        </a>
                    </div>
                </div>
                <div class="col-9 col-md-8 col-lg-12 ki-description">
                    <h4>ENERGY</h4>
                    <p class="d-xxl-none">Renewables, biofuel, coal alternatives, clean energy, waste management</p>
                    <ul class="d-none d-xxl-block">
                        <li>Renewables</li>
                        <li>Biofuel</li>
                        <li>Coal Alternatives</li>
                        <li>Clean Energy</li>
                        <li>Waste Management</li>
                    </ul>
                </div>
                <!-- End: icon -->
            </div>
            <div class="ki-block col-12 col-lg-2 row ">
                <!-- Begin: icon -->
                <div class="ki-icon-holder col-3 col-md-3 col-lg-12 offset-md-1 offset-lg-0">
                    <div class="ki-icon land">
                        <a href="<?php echo get_permalink(129) ?>">
                            <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/assets/icons/land.svg" alt=""></div>
                        </a>
                    </div>
                </div>
                <div class="col-9 col-md-8 col-lg-12 ki-description">
                    <h4>LAND DEGRADATION</h4>
                    <p class="d-xxl-none">Biodiversity loss, deforestation, mining</p>
                    <ul class="d-none d-xxl-block">
                        <li>Biodiversity Loss</li>
                        <li>Deforestation</li>
                        <li>Mining</li>
                    </ul>
                </div>
                <!-- End: icon -->
            </div>
            <div class="ki-block col-12 col-lg-2 row ">
                <!-- Begin: icon -->
                <div class="ki-icon-holder col-3 col-md-3 col-lg-12">
                    <div class="ki-icon water">
                        <a href="<?php echo get_permalink(130) ?>">
                            <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/assets/icons/water.svg" alt=""></div>
                        </a>
                    </div>
                </div>
                <div class="col-9 col-md-8 col-lg-12 ki-description">
                    <h4>WATER</h4>
                    <p class="d-xxl-none">Drought, rainfall patterns, water scarcity, floods, disease control</p>
                    <ul class="d-none d-xxl-block">
                        <li>Drought</li>
                        <li>Rainfall Pattens</li>
                        <li>Water Scarcity</li>
                        <li>Floods</li>
                    </ul>
                </div>
                <!-- End: icon -->
            </div>
            <div class="ki-block col-12 col-lg-2 row ">
                <!-- Begin: icon -->
                <div class="ki-icon-holder col-3 col-md-3 col-lg-12 offset-md-1 offset-lg-0">
                    <div class="ki-icon conservation">
                        <a href="<?php echo get_permalink(131) ?>">
                            <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/assets/icons/conservation.svg" alt=""></div>
                        </a>
                    </div>
                </div>
                <div class="col-9 col-md-8 col-lg-12 ki-description">
                    <h4>CONSERVATION</h4>
                    <p class="d-xxl-none">Natural park protection, wetlands, farming</p>
                    <ul class="d-none d-xxl-block">
                        <li>Natural Park Protection</li>
                        <li>Wetlands</li>
                        <li>Farming</li>
                    </ul>
                </div>
                <!-- End: icon -->
            </div>
            <div class="ki-block col-12 col-lg-2 row ">
                <!-- Begin: icon -->
                <div class="ki-icon-holder col-3 col-md-3 col-lg-12">
                    <div class="ki-icon responses">
                        <a href="<?php echo get_permalink(132) ?>">
                            <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/assets/icons/responses.svg" alt=""></div>
                        </a>
                    </div>
                </div>
                <div class="col-9 col-md-8 col-lg-12 ki-description">
                    <h4>RESPONSES</h4>
                    <p class="d-xxl-none">Capacity building, vulnerable communities, technology solutions</p>
                    <ul class="d-none d-xxl-block">
                        <li>Capacity Building</li>
                        <li>Vulnerable Communities</li>
                        <li>Technology Solutions</li>
                    </ul>
                </div>
                <!-- End: icon -->
            </div>
        </div>
    </div>
</div>

<!-- Begin: Context carousel -->
<div class="container-fluid my-5 bg-pale-grey py-5 d-none">
    <div class="row">
        <div class="col-12 home-title-container">
            <h2><large>The Context</large></h2>
        </div>
    </div>
    <?php echo get_template_part('template-parts/content', 'context-slider') ?>
</div>

<div class="container-fluid my-5 bg-pale-grey py-5">
    <div class="row">
        <div class="col-12 home-title-container text-center mb-4">
            <h2><large>The Context</large></h2>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="slider slick-slider-context">
                <?php echo get_template_part('template-parts/content', 'context-slider') ?>
                <?php echo get_template_part('template-parts/content', 'context-slider') ?>
            </div>
        </div>
    </div>
</div>
<!-- End: Context carousel -->

<!-- Begin: with thanks to -->
<div class="container-fluid py-5 my-5">
    <div class="row">
        <div class="col-12 text-center home-title-container">
            <h2><large>With thanks to</large></h2>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
        <div class="slider slick-slider-thanks">
                <?php echo get_template_part('template-parts/content', 'with-thanks-slider') ?>
            </div>
        </div>
    </div>
</div>
<!-- End: with thanks to -->

<!-- Begin: with thanks to -->
<div class="container-fluid py-5 my-5">
    <div class="row">
        <div class="col-12 text-center home-title-container">
            <h2><large>Grant Recipients</large></h2>
        </div>
    </div>
    <div class="row mb-md-5">
        <div class="col-12">
        <div class="slider slick-slider-recipients">
                <?php echo get_template_part('template-parts/content', 'recipients-slider') ?>
            </div>
        </div>
    </div>
</div>
<!-- End: with thanks to -->




<script src="<?php echo get_template_directory_uri() ?>/js/homepage-menu.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/home-folders.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/home-map.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/slider.js"></script>


<?php get_footer() ?>