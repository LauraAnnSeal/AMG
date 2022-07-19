<!-- large screen menu -->
<div id="lg-menu" class="d-none d-lg-block row col-4 col-xxl-2 pb-5">
    <!-- Key issues -->
    <div id="key-issues-menu" class="col-12 white-box white-box-on-page">
        <div class="pb-1"><span>Key Issues</span></div>
        
        <?php get_template_part('template-parts/content', 'key-issue-button-header', ['name' => 'Energy', 'id' => 128]) ?> 

        <?php get_template_part('template-parts/content', 'key-issue-button-header', ['name' => 'Land Degradation', 'id' => 129]) ?> 

        <?php get_template_part('template-parts/content', 'key-issue-button-header', ['name' => 'Water', 'id' => 130]) ?> 

        <?php get_template_part('template-parts/content', 'key-issue-button-header', ['name' => 'Conservation', 'id' => 131]) ?> 

        <?php get_template_part('template-parts/content', 'key-issue-button-header', ['name' => 'Responses', 'id' => 132]) ?> 
    </div>

    <!-- Countries -->
    <div class="col-12 white-box white-box-on-page" id="countries-menu">
        <div class="pb-1"><span>Countries</span></div>
        <?php get_template_part('template-parts/content', 'location-btn-header', 'Botswana') ?> 
        <?php get_template_part('template-parts/content', 'location-btn-header', 'Kenya') ?> 
        <?php get_template_part('template-parts/content', 'location-btn-header', 'Malawi') ?> 
        <?php get_template_part('template-parts/content', 'location-btn-header', 'Rwanda') ?> 
        <?php get_template_part('template-parts/content', 'location-btn-header', 'South Africa') ?> 
        <?php get_template_part('template-parts/content', 'location-btn-header', 'Tanzania') ?> 
        <?php get_template_part('template-parts/content', 'location-btn-header', 'Uganda') ?> 
        <?php get_template_part('template-parts/content', 'location-btn-header', 'Zambia') ?> 
        <?php get_template_part('template-parts/content', 'location-btn-header', 'Zimbabwe') ?> 
    </div>
</div>