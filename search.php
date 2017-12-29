<?php theme_include('header'); ?>
<div name="home-container" style="height:100%;">
      <div class="primary">
	    <div id="content" role="main">
		  <h1>Found <?php echo total_search_results() . pluralise(total_search_results(), ' result'); ?> for "<?php echo search_term(); ?>"</h1>
	    <?php if(has_search_results()) : ?>
		  <?php while(search_results()) : ?>
			<article class="post" id="<?php echo search_item_id(); ?>">
				<div class="the-content">
					<div class="title">
						<a class="headline" href="<?php echo search_item_url(); ?>" title="<?php echo search_item_title(); ?>"><?php echo search_item_title(); ?></a>
					</div>
				  </div>
			  </article>
		  <?php endwhile; ?>
	    <?php else: ?>
		  <div class="featured" style="background-image:url(https://farm6.staticflickr.com/5056/5421517469_d0d2997eec_b.jpg);height:550px;">
			<div class="title">
			      <h1>Sorry, nothing matched. Try again?</h1>
			</div>
		  </div>
	    <?php endif; ?>
	    </div>
      </div>
</div>
<?php theme_include('footer'); ?>