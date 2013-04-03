<?php
    /*
        Name:		 Calibre PHP webserver
        license:	 GPL v3
        copyright:	 2010, Charles Haley
	                 http://charles.haleys.org
    */

    require_once 'config.php';
    require_once $config['smarty'] . '/Smarty.class.php';

    $smarty = new Smarty;
    /* $smarty->debugging = true;*/

    /*
     * Initialize smarty, giving it the various locations.
     */

$smarty->template_dir = $config['smarty_web_dir'];
$smarty->config_dir = $config['smarty_dir'];
$smarty->cache_dir = $config['web_dir'] . '/smarty/cache';
$smarty->compile_dir = $config['web_dir'] . '/smarty/templates_c';  
 


    
    /*
     * Change the delimiters to avoid conflicts with style declarations.
     */
    $smarty->left_delimiter = '{{';
    $smarty->right_delimiter = '}}';
?>
