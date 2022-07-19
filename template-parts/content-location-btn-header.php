
<?php 
    $id;
    if($args == 'Botswana'){
        $id = 133;
    } elseif ($args == 'Kenya'){
        $id = 134;
    } elseif ($args == 'Malawi'){
        $id = 135;
    } elseif ($args == 'Rwanda'){
        $id = 136;
    } elseif ($args == 'South Africa'){
        $id = 137;
    } elseif ($args == 'Tanzania'){
        $id = 138;
    } elseif ($args == 'Uganda'){
        $id = 139;
    } elseif ($args == 'Zambia'){
        $id = 140;
    } elseif ($args == 'Zimbabwe'){
        $id = 141;
    } 
?>


<a href="<?php echo get_permalink($id) ?>" 
class="btn btn-light <?php if(get_the_ID() == $id){echo 'active';} ?>">
<?php echo $args ?>
</a>


