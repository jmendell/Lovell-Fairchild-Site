<?php 

    $feed_sizes = array(
        0 => array(
            'cols'  => 'cols-2-4',
            'image' => 'client-medium',
        ),
        1 => array(
            'cols'  => 'cols-2-4',
            'image' => 'client-medium',
        ),
        2 => array(
            'cols'  => 'cols-1-4',
            'image' => 'client-small',
        ),
        3 => array(
            'cols'  => 'cols-2-4',
            'image' => 'client-medium',
        ),
        4 => array(
            'cols'  => 'cols-1-4',
            'image' => 'client-small',
        )
    );

    $i    = 0;

$clients = get_terms( array(
    'taxonomy' => 'client_type'
)); 

?>
 <section class="clients-preview">
    <div class="section-header">
        <div class="content-container">
            <h2>Communication is a vast power, and PR is the key.</h2>
        </div>
    </div>
    <ul class="client-list">
<?php

foreach($clients as $client) {

    wp_reset_query();
    
    $args = array('post_type' => 'clients',
        'tax_query' => array(
               // 'relation' => 'AND',
            array(
                'taxonomy' => 'client_type',
                'field' => 'slug',
                'terms' => $client->slug,
                'operator' => 'IN',
            ),
               
        ),
        // ONLY WANT THE LATEST POST
        'posts_per_page' => 1, // only grab the latest post
        'orderby' => 'menu_order',
        'order'=>'ASC',
        
     );

     $loop = new WP_Query($args);

    // print_r($loop);
     if($loop->have_posts()) { 
    
        while($loop->have_posts()) : $loop->the_post();
        
         $cols = $feed_sizes[$i]['cols'];
         $image = $feed_sizes[$i]['image'];
         // get acf for taxonomy image
         $poster = get_field('client_type_image', $client);
        
        ?> <li class="client-item <?php echo $cols; ?>">
            <a href="<?php echo get_bloginfo('url')?>/client_type/<?php echo $client->slug; ?>">
                <figure class="client-image" style="background-image:url('<?=$poster['url']?>');"></figure>
                <div class="info">
                    <h3><?php echo $client->name; ?></h3>
        
                </div>
            </a>
         <?php
         $i++; endwhile;
        wp_reset_postdata(); 
     } else {
        // do nothing since we are in a foreach loop
     }
}

?>
        <li class="client-item alt view-all"><a href="/clients">
            <div class="info">
                <p>View</p>
                <h3>All Clients</h3>
            </div>
             </a>
        </li>
    </ul>
    </section>