<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WAN-IFRA_AMG
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
			wan_ifra_amg_posted_on();
			wan_ifra_amg_posted_by();
			?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php wan_ifra_amg_post_thumbnail(); ?>

	<div class="entry-summary">
		<?php the_excerpt(); ?>
		
<?php
$issues = get_field('key_issues');
if( $issues ): ?>
<p>Key Issues:</p>
<ul>
    <?php foreach( $issues as $issue ): ?>
        <li><?php echo $issue; ?></li>
    <?php endforeach; ?>
</ul>
<?php endif; ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php wan_ifra_amg_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
