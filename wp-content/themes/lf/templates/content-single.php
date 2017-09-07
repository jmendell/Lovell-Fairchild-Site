<script type="text/javascript">
  jQuery(document).ready(function($){
    $('a.tweet').click(function(e){
          //We tell our browser not to follow that link
          e.preventDefault();
          //We get the URL of the link
          var loc = $(this).attr('href');
          //We get the title of the link
          var title = escape($(this).data('title'));
          var summary = $(this).data('text');
          var via = $(this).data('via');
          var hashtags = $(this).data('hashtags');
          //We trigger a new window with the Twitter dialog, in the middle of the page
          window.open('http://twitter.com/share?hashtags=' + hashtags + '&via=' + via + '&url=' + loc + '&text=' + summary + '&', 'twitterwindow', 'height=450, width=550, top='+($(window).height()/2 - 225) +', left='+($(window).width()/2 - 275) +', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0');
      }); 
  });
</script>
<style type="text/css">
  .entry-content {
    line-height: 1.6rem;
  }
  .entry-content li {
    margin-bottom: 1.25rem;
  }
  .fb_iframe_widget {
    margin-top: 70px;
  }
  ._5lm5 _2pi3 _3-8y {
    display: none;
  }
</style>
<?php 
  
  while (have_posts()) : the_post(); 
  $url = get_the_permalink();
  $title = get_the_title();
  $summary = strip_tags(substr( get_the_excerpt(), 0, 65 ));
  
  ?>
  <article <?php post_class('single-post'); ?>>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    <div class="entry-content cf">
      <?php the_content(); ?>
    </div>
    
    <?php //comments_template('/templates/comments.php'); ?>
    <div class="fb-comments" data-href="<?=$url?>" data-numposts="5"></div>
  </article>
  <section class="social-share">
    <ul class="shareLinks">
      <li class="share">
        <a class="facebook" href="#" title="<?=$title?>" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?=$url?>', 'fbshare', 'width=640,height=320')"><i class="fa fa-icon icon-right icon-left fa-facebook"></i></a>
      </li>
      <li class="share">
        <a class="tweet" href="<?php the_permalink(); ?>" data-title="<?=$title?>" target="_blank" data-via="The_Love_Child" data-text="<?=$summary?>" data-hashtags="agencylife"><i class="fa fa-icon icon-right icon-left fa-twitter"></i></a>
      </li>
    </ul>
  </section>

  <footer class="cf">
      <?php //wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>

     <div class="post--navigation">
        <div class="nav--prev">
          <?php previous_post_link(); ?>    
        </div>
        <div class="nav--next">
          <?php next_post_link(); ?>
        </div>
      </div> <!-- end navigation -->
    </footer>
<?php endwhile; ?>
