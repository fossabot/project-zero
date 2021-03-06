<div class="postMeta clearfix">
  <div class="postMeta-date metaElement">
    <p><span class="fas fa-calendar postMeta-icon"></span>
      Posted on <a href="<?php the_permalink(); ?>"><?php echo get_the_date('F j, Y', '', ''); ?></a> by <?php the_author_posts_link(); ?></p>
  </div>
  <div class="postMeta-comments metaElement">
    <p>
      <?php if ( comments_open() ){ ?>
      <span class="postComments-enabled">
        <span class="fas fa-comment postMeta-icon"></span>
        <?php
          $number = (int) get_comments_number( get_the_ID() );
          if ( $number > 0 ){
            $css_class = 'commentsLink hasComment';
          } else {
            $css_class = 'commentsLink noComment';
          }
          comments_popup_link( 'Leave a comment', '1 comment', '% comments', '', '');
        ?>
      </span>
      <?php } else { ?>
      <span class="postComments-disabled">
        <span class="fas fa-comment postMeta-icon"></span>
        Comments disabled
      </span>
      <?php } ?>
    </p>
  </div>
</div>