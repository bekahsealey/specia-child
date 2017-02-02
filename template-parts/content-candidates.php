<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package specia
 */

?>
<?php
	$hide_show_blog_meta = get_theme_mod('hide_show_blog_meta','on'); 
?>
<?php 
            $year = get_metadata('post', $post->ID, 'year' );
            $year = esc_html( $year[0] );
            $race = get_metadata('post', $post->ID, 'race' );
            $race = esc_html( $race[0] );
            $locale = get_metadata('post', $post->ID, 'locale' );
            $locale = esc_html( $locale[0] );
            $website = get_metadata('post', $post->ID, 'website' );
            $website = esc_url( $website[0] );        ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">
                <?php     
            if ( is_single() ) :
            
            the_title('<h2 class="page-title">', '</h2>' );

            
            else:
            
            the_title( sprintf( '<h2 class="page-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
            
            endif; 
            
        ?> 
    
                <div class="title-border"></div>
    <a  href="<?php the_permalink(); ?>" class="post-thumbnail" ><?php the_post_thumbnail('portrait',  array( 'class' => 'alignleft' ) ); ?></a>
        <h5 class="candidate-race"><?php echo $race; ?></h5>
        <h6 class="candidate-loc"><?php echo $locale . ', ' . $year; ?></h6>
        <p class="candidate-web"><a href="<?php echo $website; ?>"><?php echo $website; ?></a></p>
    </header><!-- .entry-header -->

    <div class="entry-content">
       <?php 
			the_content( 
				sprintf( 
					__( 'Read More', 'specia' ), 
					'<span class="screen-reader-text">  '.get_the_title().'</span>' 
				) 
			);
		?>
    </div><!-- .entry-content -->

</article>
