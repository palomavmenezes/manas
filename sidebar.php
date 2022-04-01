<?php

	/**
	 * SIDEBAR
	 */

?>

	<aside class="page-sidebar">
		<?php
			if(is_single()){
				if(is_active_sidebar('sidebar-post')){
					dynamic_sidebar('sidebar-post');
				}else{
					manas_get_default_post_widgets();
				}
			}else{
				if(is_active_sidebar('sidebar-page')){
					dynamic_sidebar('sidebar-page');
				}else{
					manas_get_default_page_widgets();
				}
			}
		?>
	</aside>
