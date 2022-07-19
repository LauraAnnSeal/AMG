<?php 
/**
Template Name: About page
Template Post Type: page
*/
?>

<?php get_header() ?>

    <div class="container-fluid" id="page-type">
        <div class="col-8 col-lg-10 col-xxl-6 mx-auto">
            <span>About</span>
        </div>
    </div>

    <div id="page-type-padding" class="d-none d-lg-block"></div>

    <div class="container-fluid m-0 p-0 d-lg-none">
        <div class="page-image col-md-8 col-12 col-lg-10 col-xxl-6 mx-auto mx-lg-0">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/Africa-Map.jpg" alt="img-fluid">
        </div>
    </div>

	<div class="container-fluid mt-4">
        <div class="row">
            <div class="col-12 col-lg-6 col-xxl-4 offset-lg-1 offset-xxl-3 pt-lg-3">
                <div class="page-image col-lg-12 mx-auto d-none d-lg-block">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/Africa-Map.jpg" alt="img-fluid">
                </div>
                <div class="row mx-auto">
                    <div class="col-12 col-md-8 col-lg-12 mx-auto mt-4">
                        <p>
                            The impact of climate change touches virtually every element of our society. But misinformation and climate denial undermine how media reach audiences and devalue the good work many are already producing. The effects of the COVID-19 pandemic and the worsening economic situation place immense strains on budgets and newsroom resources.
                        </p>
                        <p>
                            We cannot ignore an issue that will define the legacy we leave future generations, or underestimate the impact of climate change on local communities around the world.
                        </p>
                        <p>
                            From any angle – economic, environmental, health, political, science, social – the story of climate change needs reliable information and a fact-based approach, one that empowers local media to engage with audiences and lead people towards positive action.
                        </p>
                    </div>
                    <div class="row bg-pale-grey rounded-15 py-4 mt-4 mx-auto col-12 col-md-8 col-lg-12">
                        <h2 class="my-4">African Media Grants</h2>
                        <p>
                            We established a grant initiative focused on environmental reporting as part of WAN-IFRA Media Freedom’s <a href="https://wan-ifra.org/initiatives/strengthening-african-media/" target="_blank">Strengthening African Media programme</a>, a three-year partnership with the Ministry of Foreign Affairs of Denmark, to ensure African audiences can access a range of accurate, independent information from quality, professional media.
                        </p>
                        <p>
                            With the aim of prioritising local climate change reporting, we awarded $270,000 to 27 African newsrooms to tackle storytelling that:
                        </p>
                        <ul>
                            <li>Demonstrates clear relevance to local communities</li>
                            <li>Addresses the big issues, highlights the underreported stories, or exposes new angles</li>
                            <li>Showcases innovative solutions that have impact</li>
                        <li>Promotes efforts towards positive change and shows people how they can take action</li>
                        <li>Explores innovative storytelling formats to reach and engage audiences</li>
                        </ul>
                        <div class="w-75 my-4">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/logos/MFA-Denmark-logo.png" alt="" class="img-fluid">
                        </div>

                    </div>
                    <div class="col-12 col-md-8 col-lg-12 mx-auto mt-4 row">
                        <h2>A website showcase</h2>
                        <p>
                            This website showcases some of the work produced through this grant initiative from each of the 27 successful recipients, allowing users to explore the coverage and investigate the issues exposed by our media partners. We encourage you to visit the websites of our media partners to find out more about the coverage produced under this grant initiative, and to show your support for local media.
                        </p>
                        <p>
                            We have also included a section featuring <a href="<?php the_permalink('118') ?>">essays from thought leaders</a> from across the continent on why environmental reporting by local media is such an important partner in the climate change conversation. We thank each of them for their contribution and invite you to visit their websites to find out more about the critical work they are engaged in.
                        </p>
                        <div id="bell-div" class="col-12">
                            <h2><i class="fa-solid fa-bell mx-auto"></i> Grant opportunities</h2>
                            <p>
                                Finally, this website also includes a page of resources that we hope will be useful to journalists and media organisations in their ongoing coverage of climate change. We also highlight additional grant opportunities related to environmental reporting – from WAN-IFRA and other organisations – to continue the vital work being done across the continent. Be sure to check this page for regular updates or look out for the grant opportunities icon.
                            </p>
                            <a href="<?php the_permalink(78) ?>" class="btn btn-primary">Grants & Resources</a>
                        </div>
                    </div>
                    <div class="row bg-pale-grey rounded-15 py-4 mt-4 mx-auto col-12 col-md-8 col-lg-12 mx-auto">
                            <h2 class="my-4">About WAN-IFRA Media Freedom</h2>
                            <p>
                                WAN-IFRA believes that increasing media freedom directly strengthens democracy and human rights. Media freedom is a foundation of societal development, be it economic, cultural, or political. This has been a guiding principle of the organisation for over 70 years.
                            </p>
                            <p>
                                Our Media Freedom department promotes <b>Equality</b>, <b>Safety</b> and <b>Stability</b> across a portfolio of work that is engaged with media in more than 25 countries.
                            </p>
                            <p>
                                Our work is made possible via major partnerships with the leading media support donors as well as generous contributions from our national member associations and individual member companies.
                            </p>
                            <div>
                                <a class="btn btn-success" href="https://wan-ifra.org/" target="_blank">
                                <i class="fa-solid fa-link"></i>
                                    Find out more
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