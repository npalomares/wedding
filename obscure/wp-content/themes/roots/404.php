<?php get_template_part('templates/page', 'header'); ?>

<div class="alert alert-warning">
  <?php _e("Hello my good people! You've wandered off the beaten path", 'roots'); ?>
</div>
<a href="<?php echo home_url(); ?>" class="btn btn-primary btn-large">Back to Home</a>
<div class="lost-return-list">
	<div class="row">
		  <!-- Nav tabs -->
	  <ul class="nav nav-pills" role="tablist">
	    <li role="presentation" class="active"><a href="<?php bloginfo('home') ;?>/#info" aria-controls="info" role="tab" data-toggle="tab">Information</a></li>
	    <li role="presentation"><a href="<?php bloginfo('home') ;?>/#accommodations" aria-controls="accommodations" role="tab" data-toggle="tab">Accommodations</a></li>
	    <li role="presentation"><a href="<?php bloginfo('home') ;?>/#registry" aria-controls="registry" role="tab" data-toggle="tab">Registry</a></li>
	  </ul>
	</div>
</div>

<?php get_search_form(); ?>
