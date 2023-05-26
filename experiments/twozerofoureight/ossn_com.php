<?php
/**
 *    OpenSource-SocialNetwork
 *
 */
define('__twozerofoureight__', ossn_route()->com . 'twozerofoureight/');

function twozerofoureight_init() {
	ossn_register_page('twozerofoureight', 'twozerofoureight_pages');
	  if (ossn_isLoggedin()) {       
		
		ossn_extend_view('css/ossn.default', 'css/twozerofoureight');
		
		
				ossn_register_sections_menu('newsfeed', array(

						'name' => 'twozerofoureight',

						'text' => ossn_print('com:ossn:twozerofoureight'),

						'url' => ossn_site_url('twozerofoureight/twozerofoureight'),

						'section' => 'games',

				));
				
					
    }
}
function twozerofoureight_pages($pages) {

if(!ossn_isLoggedin()) {

				ossn_error_page();
		}


	{

						$title               = ossn_print('com:ossn:twozerofoureight');
						
						$contents['content'] = ossn_plugin_view('pages/twozerofoureight', array(

						));

						$content             = ossn_set_page_layout('newsfeed', $contents);

						echo ossn_view_page($title, $content);

						

	}
}
ossn_register_callback('ossn', 'init', 'twozerofoureight_init');