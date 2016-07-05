<?php
	/*
	Template Name: Register Template
	*/

	if ( !defined('ABSPATH') ){ die(); }
	/*
	 * get_header is a basic wordpress function, used to retrieve the header.php file in your theme directory.
	 */


	 global $avia_config, $more;
	 get_header();
	 echo avia_title();
	 
	 do_action( 'ava_after_main_title' );
	 ?>



		<div class='container_wrap container_wrap_first main_color <?php avia_layout_class( 'main' ); ?>'>

			<div class='container'>

				<main class='template-archives content <?php avia_layout_class( 'content' ); ?> units' <?php avia_markup_helper(array('context' => 'content'));?>>

					<div class="entry-content-wrapper entry-content clearfix">

				<?php
                    /* Run the loop to output the posts.
                    * If you want to overload this in a child theme then include a file
                    * called loop-page.php and that will be used instead.
                    */

                    /*$avia_config['size'] = avia_layout_class( 'main' , false) == 'fullsize' ? 'entry_without_sidebar' : 'entry_with_sidebar';
                    get_template_part( 'includes/loop', 'page' );*/

					echo 'hello 회원가입 템플릿 테스트';
					echo '<div>';
					echo '<form action="" method="">';
					echo '<table>';
					echo '<tr>';
					echo '<th>ID</th>';
					echo '<td><input type="text" name="user_id"></td>';
					echo '</tr>';
					echo '<tr>';
					echo '<th>Password</th>';
					echo '<td><input type="text" name="password"></td>';
					echo '</tr>';
					echo '</table>';
					echo '</form>';
					echo '</div>';
							
					
					
                    ?>
					</div>
				<!--end content-->
				</main>

				<?php

				//get the sidebar
				$avia_config['currently_viewing'] = 'page';
				get_sidebar();

				?>

			</div><!--end container-->

		</div><!-- close default .container_wrap element -->




<?php get_footer(); ?>