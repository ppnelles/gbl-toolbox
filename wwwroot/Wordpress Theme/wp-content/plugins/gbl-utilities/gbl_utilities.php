<?php
/**
Plugin Name: gbl Utilities
Author: ppnelles
**/


add_action('init','gbl_head_cleaner');
function gbl_head_cleaner() {
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'feed_links', 2);
    remove_action('wp_head', 'feed_links_extra', 3 );
    remove_action('wp_head', 'index_rel_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'start_post_rel_link', 10, 0);
    remove_action('wp_head', 'parent_post_rel_link', 10, 0);
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
    remove_action('wp_head', 'locale_stylesheet' );
    remove_action('wp_head', 'wp_shortlink_wp_head' );
    remove_action('wp_head', 'noindex' );
    remove_action('wp_head', 'wp_print_styles');
    remove_action('wp_head', 'wp_print_head_scripts' );
    remove_action('wp_head', 'recent_comments_style');
    remove_filter('wp_head', 'wp_widget_recent_comments_style', 1  );
    remove_action('wp_head', 'rel_canonical'); 

    global $wp_widget_factory;
    remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));

    // WPML : 
    if ( ! empty ( $GLOBALS['sitepress'] ) ) {
            add_action( 'wp_head', function()
            {
                remove_action(
                    current_filter(),
                    array ( $GLOBALS['sitepress'], 'meta_generator_tag' )
                );
            },
            0
            );
        define('ICL_DONT_LOAD_NAVIGATION_CSS', true);
        define('ICL_DONT_LOAD_LANGUAGE_SELECTOR_CSS', true);
        define('ICL_DONT_LOAD_LANGUAGES_JS', true);
    }

}

add_action('init','weight_watcher');
function weight_watcher() {
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'feed_links', 2);
	remove_action('wp_head', 'feed_links_extra', 3 );
	remove_action('wp_head', 'index_rel_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'feed_links_extra', 3);
	remove_action('wp_head', 'start_post_rel_link', 10, 0);
	remove_action('wp_head', 'parent_post_rel_link', 10, 0);
	remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
	remove_action('wp_head', 'locale_stylesheet' );
	remove_action('wp_head', 'wp_shortlink_wp_head' );
	remove_action('wp_head', 'noindex' );
	remove_action('wp_head', 'wp_print_styles' );
	remove_action('wp_head', 'wp_print_head_scripts' );
	remove_action('wp_head', 'recent_comments_style');
	remove_filter('wp_head', 'wp_widget_recent_comments_style', 1  ); 

	global $wp_widget_factory;
	remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));

	if( !is_admin()){
		wp_deregister_script('jquery');
	}

	// wp_deregister_style( 'contact-form-7' );
	// wp_deregister_script( 'contact-form-7' );

	// WPML : 
	if ( ! empty ( $GLOBALS['sitepress'] ) ) {
		    add_action( 'wp_head', function()
		    {
		        remove_action(
		            current_filter(),
		            array ( $GLOBALS['sitepress'], 'meta_generator_tag' )
		        );
		    },
		    0
		    );
		define('ICL_DONT_LOAD_NAVIGATION_CSS', true);
		define('ICL_DONT_LOAD_LANGUAGE_SELECTOR_CSS', true);
		define('ICL_DONT_LOAD_LANGUAGES_JS', true);
	}

}

function gbl_truncate($string, $length = 80, $etc = '...', $break_words = false, $middle = false) {
    if ($length == 0)
        return '';

    if (strlen($string) > $length) {
        $length -= min($length, strlen($etc));
        if (!$break_words && !$middle) {
            $string = preg_replace('/\s+?(\S+)?$/', '', substr($string, 0, $length+1));
        }

        if(!$middle) {
            return substr($string, 0, $length) . $etc;
        } else {
            return substr($string, 0, $length/2) . $etc . substr($string, -$length/2);
        }
    } else {
        return $string;
    }
}

function gbl_truncate_read_more($string, $length = 80, $etc = '... ', $break_words = false) {
	$old_string = $string;
	
    if ($length == 0)
        return '';

    if (strlen($string) > $length) {
        $length -= min($length, strlen($etc));
        if (!$break_words) {

            $string = preg_replace('/\s+?(\S+)?$/', '', substr($string, 0, $length+1));
            
        }

        
        return substr($string, 0, $length) .'<span class="etc">'. $etc . '</span><span class="text-end"> '. substr($old_string,strlen($string)) . '</span><button class="read-more-excerpt">'.__('Lire la suite') . '</button>' ;
       
    } else {
        return $string;
    }
}

function is_blog () {
global $post;
$posttype = get_post_type($post );
return ( ((is_archive()) || (is_author()) || (is_category()) || (is_home()) || (is_single()) || (is_tag())) && ( $posttype == 'post') ) ? true : false ;
}

/*
* Add custom post in rss
*/

function myfeed_request($qv) {
	if (isset($qv['feed']))
		$qv['post_type'] = get_post_types();
	return $qv;
}
add_filter('request', 'myfeed_request');



function extend_body_class($c) {
	
	if(function_exists('icl_object_id')) {
		$c[] = ICL_LANGUAGE_CODE;
	}

	if(is_singular('post') || is_archive() || is_category() || is_single() ) {
		$c[] = 'blog';
	}

	return $c;
}
add_filter('body_class', 'extend_body_class');