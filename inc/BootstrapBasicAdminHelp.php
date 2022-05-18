<?php

if (!class_exists('BootstrapBasicAdminHelp')) {
	class BootstrapBasicAdminHelp
	{


		public function themeHelpMenu()
		{
			add_theme_page(__('Bootstrap Basic help', 'pure-spirit'), __('Bootstrap Basic help', 'pure-spirit'), 'edit_posts', 'theme_help', array($this, 'themeHelpPage'));
		}// themeHelpMenu


		public function themeHelpPage()
		{
			// display page content to view file.
			include get_template_directory() . '/inc/views/BootstrapBasicAdminHelp_v.php';
		}// themeHelpPage


	}// end class -------------------------------------------------------------------------------
}