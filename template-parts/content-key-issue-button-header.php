<?php 
$svgName = '';

if($args['name'] == 'Energy'){$svgName = 'energy';}
elseif($args['name'] == 'Conservation'){$svgName = 'conservation';}
elseif($args['name'] == 'Responses'){$svgName = 'responses';}
elseif($args['name'] == 'Land Degradation'){$svgName = 'land';}
elseif($args['name'] == 'Water'){$svgName = 'water';}
?>


<a href="<?php echo get_permalink($args[id]) ?>" class="btn btn-light shadow-none btn-issue btn-<?php echo $svgName; if(get_the_ID() == $args[id]){echo " active";} ?>">
    <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/assets/icons/<?php echo $svgName ?>.svg" alt=""></div>
    <?php echo $args['name'] ?>
</a>