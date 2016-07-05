<?php
if(have_posts()):
	while(have_posts()): the_post();
	?>
	
	<?php
	
	endwhile;
	
	else: 
		echo '<p>NO Content Found </p>';

?>