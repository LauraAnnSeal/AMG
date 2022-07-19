
<a href="<?php echo get_permalink($args[id]) ?>" 
class="btn btn-light btn-sm <?php if(get_the_ID() == $args[id]){echo 'active';} ?>">
<?php echo $args['name'] ?>
</a>


