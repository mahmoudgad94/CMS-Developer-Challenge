<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @since Cms Developer Challenge 1.0
 * @version 1.0
 */

// if all sidebar (1,2,3) is disabled return;
if ( ! is_active_sidebar( 'side-bar-design-selection' ) && ! is_active_sidebar( 'sidebar-2' ) && ! is_active_sidebar( 'sidebar-3' )  ) {
	return;
}
?>

<aside class="sidebar" role="complementary" aria-label="<?php  __( 'Blog Sidebar', 'cms-developer-challenge' ); ?>">
        <?php /*  TODO:: -- REFACTOR -- design-selection to separate functions or file  */ ?>
        <div class="design-selection" id="design-selection">
            <h3 class="select"><?php  __( 'Select a Design:', 'cms-developer-challenge' ); ?></h3>
            <?php
            // TODO:: what about make 5 limit is dynamic
              $recent_posts = wp_get_recent_posts(array( 'numberposts' => '5' ));
            ?>
            <nav role="navigation">
                <ul>
                        <?php 
                            foreach( $recent_posts as $recent ) {
                                $link=esc_url( get_permalink( $recent['ID'] ) );
                                $title=apply_filters( 'the_title', $recent['post_title'], $recent['ID'] );
                                $nameAuthor=get_the_author_meta( 'display_name', $recent['post_author'] );
                                $urlAuthor=get_the_author_meta( 'user_url', $recent['post_author'] );
                                ?>
                                    <li>
                                        <a href="<?php echo $link;?>" class="design-name"><?php echo $title;?></a> <?php  echo __("by","cms-developer-challenge") ?> <a href="<?php echo $urlAuthor; ?>" class="designer-name"><?php echo $nameAuthor; ?></a>
                                    </li>
                                <?php
                            }
                        ?>
                </ul>
            </nav>
        </div>
        <?php /*  TODO:: -- REFACTOR -- design-selection to separate functions or file  */ ?>
        <div class="design-archives" id="design-archives">
            <h3 class="archives"><?php  echo __( 'Archives:', 'cms-developer-challenge' ); ?></h3>
            <?php /*  TODO:: Should be dynamic  */ ?>
            <nav role="navigation">
                <ul>
                    <li class="next">
                        <a href="/214/page1">
                        <?php  echo __( 'Next Designs', 'cms-developer-challenge' ); ?><span class="indicator">&rsaquo;</span>
                        </a>
                    </li>
                    <li class="viewall">
                        <a href="http://www.mezzoblue.com/zengarden/alldesigns/"
                            title="<?php echo  __( ' View every submission to the Zen Garden. ', 'cms-developer-challenge' ); ?>">
                            <?php  echo __( 'View All Designs ', 'cms-developer-challenge' ); ?></a>
                    </li>
                </ul>
            </nav>
        </div>


        <?php /*  TODO:: -- REFACTOR -- design-selection to separate functions or file  */ ?>
    
        <div class="zen-resources" id="zen-resources">
            <h3 class="resources"><?php echo __( 'Resources:', 'cms-developer-challenge' ); ?></h3>
            <?php wp_nav_menu( array('theme_location' => 'sidebar-menu-design-selection','container_class' => 'css-resources' ) ); ?>
        </div>
    
    
</aside><!-- #secondary -->