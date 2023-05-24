<?php
/**
 *    OpenSource-SocialNetwork
 *
 * @package   OSSN Speedtest
 * @author    TheDoggyBrad <admin@gosocial.x10.bz>
 * @copyright 2023 TheDoggyBrad
 * @license   OSSN License v4
 * @link      https://www.opensource-socialnetwork.org/licence/v4.0.html
 */
define('__OSSNSpeedtest__', ossn_route()->com . 'speedtest/');

function ossnspeedtest_init() {
	ossn_register_page('speedtest', 'speedtest_pages');
	  if (ossn_isLoggedin()) {       
		
		ossn_extend_view('css/ossn.default', 'css/speedtest');
		
		
				ossn_register_sections_menu('newsfeed', array(

						'name' => 'speedtest',

						'text' => ossn_print('com:ossn:smt'),

						'url' => ossn_site_url('speedtest/spte'),

						'section' => 'links',

				));
				
					
    }
}
function speedtest_pages($pages) {

if(!ossn_isLoggedin()) {

				ossn_error_page();
		}


		switch($pages[0]) {

				case 'speedtest':

						$guid                = $pages;

						$title               = ossn_print('com:ossn:smt');
						
						$contents['content'] = ossn_plugin_view('pages/spte', array(

								'speedtest' => $guid

						));

						$content             = ossn_set_page_layout('newsfeed', $contents);

						echo ossn_view_page($title, $content);

						

	}
}
ossn_register_callback('ossn', 'init', 'ossnspeedtest_init');
