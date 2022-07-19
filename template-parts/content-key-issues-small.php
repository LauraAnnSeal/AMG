<?php if(get_field('energy')) : ?>
    <a href="<?php echo get_permalink(128) ?>" class="btn btn-sm btn-light btn-issue-general shadow-none btn-energy">
        <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/assets/icons/energy.svg" alt=""></div>
    </a>
<?php endif; ?>
<?php if(get_field('land')) : ?>
    <a href="<?php echo get_permalink(129) ?>" class="btn btn-sm btn-light btn-issue-general shadow-none btn-land">
        <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/assets/icons/land.svg" alt=""></div>
    </a> 
<?php endif; ?>
<?php if(get_field('water')) : ?>
    <a href="<?php echo get_permalink(130) ?>" class="btn btn-sm btn-light btn-issue-general shadow-none btn-water">
        <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/assets/icons/water.svg" alt=""></div>
    </a>
<?php endif; ?>
<?php if(get_field('conservation')) : ?>
    <a href="<?php echo get_permalink(131) ?>" class="btn btn-sm btn-light btn-issue-general shadow-none btn-conservation">
        <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/assets/icons/conservation.svg" alt=""></div>
    </a>
<?php endif; ?>
<?php if(get_field('responses')) : ?>
    <a href="<?php echo get_permalink(132) ?>" class="btn btn-sm btn-light btn-issue-general shadow-none btn-responses">
        <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/assets/icons/responses.svg" alt=""></div>
    </a>
<?php endif; ?>

