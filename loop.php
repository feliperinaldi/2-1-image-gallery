<div class="row ">
	
	<?php 
	$i = 1;
	foreach( $gallery as $id ) {
		
		if( $i == 1 || $i == 5) { ?>
			<div class="col-sm-4">
		<?php }


		if($i == 1 || $i == 2 || $i == 5 || $i == 6) { ?>
			<div class="h-50 pb-4">
				<?php echo wp_get_attachment_image( $id, 'grid-sm', false, array('class' => 'img-fluid') ); ?>
			</div>
		<?php }

		if( $i == 2 || $i == 6 ) { ?>
			</div><!-- col-sm-4 -->
		<?php }

		if( $i == 3 || $i == 4 ) { ?>
			<div class="col-sm-8 pb-4">
				<?php echo wp_get_attachment_image( $id, 'grid-md', false, array('class' => 'img-fluid') ); ?>
			</div>
		<?php } 


		if( $i % 3 == 0 ) { ?>
			</div><!-- row -->
			<div class="row">
		<?php } 

		$i++;

		// reset $i
		if($i == 7) $i = 1;

	} ?>

</div><!-- row -->
