<?php
/**
 * pods leistungen template
 */

 get_header(); ?>

 <div class="container">
	<div class="row">
		<?php if ( is_active_sidebar( 'page-sidebar' ) ) { ?>
		<div class="col-sm-8">
			<?php } else { ?>
			<div class="col-sm-8 col-sm-offset-2">
				<?php } ?>
			<section id="leistungen">
                <?php 
                $mypod= pods('leistungen');
                $mypod->find('name ASC');
                ?>
                <?php while ( $mypod->fetch()) : ?>
                    <?php
                    $name= $mypod->field('name');
                    $permalink= $mypod->field('permalink');
                    ?>

                    
                    
			</section><!--/#blog-->
		</div><!--/.col-sm-7-->
		<?php if ( is_active_sidebar( 'page-sidebar' ) ) { ?>
			<div class="col-sm-4">
				<div id="sidebar">
					<?php dynamic_sidebar( 'page-sidebar' ); ?>
				</div>
			</div>
		<?php } ?>
	</div><!--/.row-->
</div><!--/.container-->
