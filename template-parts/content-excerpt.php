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
    
    <a  href="<?php the_permalink(); ?>" class="post-thumbnail" ><?php the_post_thumbnail( 'excerpt' ); ?></a>

    <header class="entry-header">
        <?php     
            if ( is_single() ) :
            
            the_title('<h2 class="entry-title">', '</h2>' );
            
            else:
            
            the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
            
            endif; 
        ?> 
    </header><!-- .entry-header -->

    <div class="entry-content">
       <?php 
			the_excerpt();
		?>
    </div><!-- .entry-content -->

    <?php if( $hide_show_blog_meta == 'on' ): ?>
    <footer class="entry-footer">
        <span class="byline">
            <span class="author vcard">
                <a class="url fn n" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) );?>"><i class="fa fa-user"></i>  <?php the_author(); ?></a>
            </span>
        </span>

        <?php   $cat_list = get_the_category_list();
            if(!empty($cat_list)) { ?>
        <span class="cat-links">
            <a href="<?php the_permalink(); ?>"><i class="fa fa-folder-open"></i><?php the_category(','); ?></a>
        </span>
        <?php } ?>

        <?php if( get_the_tags() ) { ?>
        <span class="tags-links">
            <a href="<?php the_permalink(); ?>"><i class="fa fa-tags"></i> <?php the_tags('', ', ', ''); ?></a>
        </span>
        <?php } ?>

    </footer><!-- .entry-footer -->
    <?php endif; ?>
</article>
