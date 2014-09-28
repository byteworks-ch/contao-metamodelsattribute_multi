<?php

/**
 * Copyright (c) 2014 by Byteworks GmbH
 * All rights reserved
 *
 * http://www.byteworks.ch/
 *
 * Michael Bischof <mb@byteworks.ch>
 *
 * $Id$
 *
 */

$GLOBALS['METAMODELS']['attributes']['multi']['class'] = 'MetaModels\Attribute\Multi\Multi';
$GLOBALS['METAMODELS']['attributes']['multi']['image'] = 'system/modules/metamodelsattribute_multi/html/multi.png';

// non composerized Contao 2.X autoload support.
$GLOBALS['MM_AUTOLOAD'][] = dirname(__DIR__);
$GLOBALS['MM_AUTOLOAD'][] = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'deprecated';


/**
 * Local settings
 */
if (file_exists(dirname(__FILE__) . '/localconfig.php')) {
	include_once('localconfig.php');
}

