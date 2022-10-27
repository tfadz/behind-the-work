<?php
/**
* Template part for displaying posts
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Behind_The_Work
*/

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <div class="container">
            <div class="row">
                <div class="col pb2">
                    <?php
                    if ( is_singular() ) :
                        the_title( '<h1 class="entry-title">', '</h1>' );
                        else :
                            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                        endif;
                        
                        if ( 'post' === get_post_type() ) :
                            ?>
                            <div class="entry-meta">
                                <?php
                                pensacola_posted_on();
                                pensacola_posted_by();
                                ?>
                            </div><!-- .entry-meta -->
                        <?php endif; ?>
                    </div>
                </div>
                <div class="row align-center pb2">
                    <div class="col-md-8">
                        <h5 class="contributer"><img src="<?php bloginfo('template_directory'); ?>/images/scribble.svg" alt=""> Contributed by <?php echo get_the_author(); ?></h5>

                    </div>
                    <div class="col-md-4">
                        <ul class="single-icons">
                            <li>SHARE</li>
                            <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_the_permalink(); ?>" target="_blank"><i class="fab fa-facebook"></i>
                            </a></li>
                            <li><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink() ?>&amp;title=<?php the_title() ?>&amp;summary=&amp;source=MccormickFoundation" target="_blank">
                                <i class="fab fa-linkedin-in"></i>
                            </a></li>
                            <li><a href="http://twitter.com/intent/tweet?text=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" target="_blank"><i class="fab fa-twitter"></i>
                            </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header><!-- .entry-header -->
        
        
        <div class="entry-content">
            <?php
        the_content();
        ?>
    </div>
    
</article><!-- #post-<?php the_ID(); ?> -->
