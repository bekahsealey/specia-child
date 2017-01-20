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
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <a  href="<?php the_permalink(); ?>" class="post-thumbnail" ><?php the_post_thumbnail('portrait'); ?></a>

    <header class="entry-header">
        <?php $name = get_metadata('post', $post->ID, 'Name' ); ?>
        <?php $name = sanitize_text_field( $name[0] ); ?>
        <?php     
            if ( is_single() ) :
            
            the_title('<h2 class="entry-title">', '</h2>' );

            
            else:
            
            the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
            
            endif; 
        ?> 
        <h3 class="member-name"><?php echo $name; ?></h3>
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
