<?php get_header(); ?>

<!-- Row for main content area -->
	<div class="small-12 large-12 columns" id="content" role="main">
	
<div id="cMenu">	
	<ul id="filters">
    <li><a href="#" data-filter="*">All</a></li>
	<?php 
		$terms = get_terms("category"); // get all categories, but you can use any taxonomy
		$count = count($terms); //How many are they?
		if ( $count > 0 ){  //If there are more than 0 terms
			foreach ( $terms as $term ) {  //for each term:
				echo "<li><a href='#' data-filter='.".$term->slug."'>" . $term->name . "</a></li>\n";
				//create a list item with the current term slug for sorting, and name for label
			}
		} 
	?> 
	</ul>
</div>



<div class="row">
<div class="large-12 columns">

<?php $the_query = new WP_Query( 'posts_per_page=20' ); ?>
<?php if ( $the_query->have_posts() ) : ?>

<ul id="isotope-list" class="small-block-grid-1 medium-block-grid-2 large-block-grid-4 isotope">
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
	$termsArray = get_the_terms( $post->ID, "category" );  //Get the terms for this particular item
	$termsString = ""; //initialize the string that will contain the terms
		foreach ( $termsArray as $term ) { // for each term 
			$termsString .= $term->slug.' '; //create a string that has all the slugs 
		}
	?> 
	
	<li class="<?php echo $termsString; ?> item">
		
	<?php get_template_part( 'content', get_post_format() ); ?>	
		
		
	</li> <!-- end item -->
    <?php endwhile;  ?>
    </ul> <!-- end isotope-list -->
    <?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>

<?php endif; ?>
	
</div>
</div>	
		
	<?php /* Display navigation to next/previous pages when applicable */ ?>
	<?php if ( function_exists('reverie_pagination') ) { reverie_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'reverie' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'reverie' ) ); ?></div>
		</nav>
	<?php } ?>

	</div>

		
<?php get_footer(); ?>

