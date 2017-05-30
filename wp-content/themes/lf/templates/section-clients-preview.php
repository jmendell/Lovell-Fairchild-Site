<?php 

    $feed_sizes = array(
        0 => array(
            'cols'  => 'cols-2-3',
            'image' => 'client-large',
        ),
        1 => array(
            'cols'  => 'cols-1-3',
            'image' => 'client-small',
        ),
        2 => array(
            'cols'  => 'cols-1-3',
            'image' => 'client-small',
        ),
        3 => array(
            'cols'  => 'cols-2-3',
            'image' => 'client-large',
        ),
        4 => array(
            'cols'  => 'cols-2-4',
            'image' => 'client-medium',
        )
    );

    $i    = 0;

$clients = get_terms( 'client_type' ); ?>

 <section class="clients-preview">
    <div class="section-header">
        <div class="content-container">
            <h2 class="section-title"></h2>
            <h2>Communication is a vast power, and PR is the key. </h2>
        </div>
    </div>
    <ul class="client-list">
<?php

foreach($clients as $client) {
    wp_reset_query();
    //print_r($custom_term);
    $args = array('post_type' => 'clients',
        'tax_query' => array(
                //'relation' => 'AND',
            array(
                'taxonomy' => 'client_type',
                'field' => 'slug',
                'terms' => $client->slug,
                //'operator' => 'IN',
            ),
                // ONLY IF WE NEED A RELATIONSHIP BETWEEN TWO OR MORE TAXONOMIES
                /*array(
                    'taxonomy' => 'YOUR_CUSTOM_TAXONOMY',
                    'field' => 'slug',
                    'terms' => $featured_name,
                    //'operator' => 'IN',
                ),
            ),*/
            // THIS IS USED TO NOT INCLUDE CERTAIN TAXONOMY IDS
            array(
                'taxonomy' => 'client_type',
                'field'    => 'term_id',
                'terms' => array(8), // add in any taxonomy ID we don't want
                'operator' => 'NOT IN',
            ),
        ),
        // ONLY WANT THE LATEST POST
        'posts_per_page' => 1, // only grab the latest post
        
     );

     $loop = new WP_Query($args);

    // print_r($loop);
     if($loop->have_posts()) { 
    


        while($loop->have_posts()) : $loop->the_post(); 

         $cols = $feed_sizes[$i]['cols'];
         $image = $feed_sizes[$i]['image'];
// print_r($post->ID);
            //$desktopImage = get_field('promo_desktop_background_image');
        ?> <li class="client-item <?php echo $cols; ?>">
            <a href="<?php echo get_bloginfo('url')?>/client_type/<?php echo $client->slug; ?>">
                <figure class="client-image" style="background-image:url(<?php echo get_the_post_thumbnail_url($post->ID, $image); ?>);"></figure>
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
        <li class="client-item alt cols-2-4"><a href="/clients">
            <div class="info">
                <p>View</p>
                <h3>All Clients</h3>
            </div>
             </a>
        </li>
    </ul>
    </section>
<?php


?>