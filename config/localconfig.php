<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

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

// For a detailed list of available options please check:
// http://de.contaowiki.org/MultiColumnWizard

$GLOBALS['TL_CONFIG']['metamodelsattribute_multi']['mm_test']['multi_1'] = array(
	'minCount'     => 2,
	'maxCount'     => 4,
	'columnFields' => array(
		'ts_client_os'     => array(
			'label'     => &$GLOBALS['TL_LANG']['metamodelsattribute_multi']['mm_test']['t1_client_os'],
			'exclude'   => true,
			'inputType' => 'select',
			'options'   => array(
				'option1' => 'Option 1',
				'option2' => 'Option 2',
			),
			'eval'      => array('style' => 'width:250px', 'includeBlankOption' => true, 'chosen' => true)
		),
		'ts_client_mobile' => array(
			'label'     => &$GLOBALS['TL_LANG']['metamodelsattribute_multi']['mm_test']['t1_client_mobile'],
			'exclude'   => true,
			'inputType' => 'checkbox',
			'eval'      => array('style' => 'width:40px')

		),
		'ts_extension'     => array(
			'label'     => &$GLOBALS['TL_LANG']['metamodelsattribute_multi']['mm_test']['t1_extension'],
			'inputType' => 'text',
			'eval'      => array('mandatory' => true, 'style' => 'width:115px')
		),
	),

);

