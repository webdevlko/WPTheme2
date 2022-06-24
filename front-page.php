<?php get_header( ); ?>

<div class="container content">
                <?php if (is_active_sidebar( 'showcase' )) : ?>
                  <?php dynamic_sidebar( 'showcase') ;?>
                <?php endif; ?>
              

      <div class="block">
        <?php if(have_posts( )) :?>
            <?php while(have_posts()) : the_post(); ?>
             <article class='page'>
                <!--below code for about us small sub menu in about us page, after making function in functions.php-->
                <?php if(page_is_parent()|| $post -> post_parent > 0 ) :?> 
             
                <nav class='sub-nav'>
                    <ul>
                        <span class="parent-link"><a href="<?php echo get_the_permalink( get_top_parent()) ;?>"><?php echo get_the_title(get_top_parent() );?></a></span>
                        <?php
                        $args = array(
                                'child_of' => get_top_parent(),
                                'title_li' => ''
                        );   
                        ?> 
                        <?php wp_list_pages( $args);?>
                </ul>
                </nav>
                <div class="clr"></div>
                <?php endif; ?>
                <h2> <?php the_title(  );?></h2>
                <?php the_content(); ?>
             </article>
        <?php endwhile; ?>
        <?php else :?>
          <?php echo wp_autop('Sorry, no post were found'); ?>
        <?php endif; ?>
      </div>
      <div class="box">
                            <?php if (is_active_sidebar( 'box1' )) : ?>
                                <?php dynamic_sidebar( 'box1') ;?>
                                <?php endif; ?>
       
                             <?php if (is_active_sidebar( 'box2' )) : ?>
                                <?php dynamic_sidebar( 'box2') ;?>
                                <?php endif; ?>
                
                                <?php if (is_active_sidebar( 'box3' )) : ?>
                                 <?php dynamic_sidebar( 'box3') ;?>
                                 <?php endif; ?>
        </div>

    </div>

    <?php get_footer( ); ?>