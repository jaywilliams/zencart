<?php
/**
 *
 * @package statistics
 * @copyright Copyright 2003-2012 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id$
 */
/**
 * Designed for v1.5.0
 */
if (!defined('IS_ADMIN_FLAG')) {
 die('Illegal Access');
}
$autoLoadConfig[190][] = array('autoType'=>'class',
                              'loadFile'=>'observers/class.products_viewed_counter.php');
$autoLoadConfig[190][] = array('autoType'=>'classInstantiate',
                              'className'=>'products_viewed_counter',
                              'objectName'=>'products_viewed_counter');
