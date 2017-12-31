<?php
/**
 * op-skeleton-3:/app/layout/black/css/action.php
 *
 * @creation  2017-06-29
 * @version   1.0
 * @package   op-skeleton
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
//	...
$extension = 'css';

//	...
$files = [];
$files[] = 'body';
$files[] = 'header';
$files[] = 'footer';
$files[] = 'mark';
$files[] = 'dump';

//	...
Webpack::Run(__DIR__, $files, $extension);
