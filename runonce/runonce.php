<?php

/**
 * Copyright (c) 2014-2016 by Byteworks GmbH
 * http://www.byteworks.ch/
 *
 * Michael Bischof <mb@byteworks.ch>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

$file = TL_ROOT . '/system/config/module-multicolumnwizard.php';
$data = <<<'__EOT__'
<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Copyright (c) 2014-2016 by Byteworks GmbH
 * http://www.byteworks.ch/
 *
 * Michael Bischof <mb@byteworks.ch>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */


/*
 * Use multicolumnwizard in metamodel:
 * $GLOBALS['TL_CONFIG']['dma_elementgenerator']['<METAMODEL_TABLE_NAME>']['<FIELDNAME>']
 *
 */
$GLOBALS['TL_CONFIG']['metamodelsattribute_multi']['mm_test']['multi_1'] = array(
	'minCount'     => 2,
	'maxCount'     => 4,
	'columnFields' => array(
		'hotspot_type'     => array(
			'label'     => &$GLOBALS['TL_LANG']['metamodelsattribute_multi']['mm_test']['hotspot_type'],
			'exclude'   => true,
			'inputType' => 'select',
			'options'   => array(
				'option1' => 'Option 1',
				'option2' => 'Option 2',
			),
			'eval'      => array('style' => 'width:250px', 'includeBlankOption' => true, 'chosen' => true)
		),
		'hotspot_active' => array(
			'label'     => &$GLOBALS['TL_LANG']['metamodelsattribute_multi']['mm_test']['hotspot_active'],
			'exclude'   => true,
			'inputType' => 'checkbox',
			'eval'      => array('style' => 'width:40px')

		),
		'hotspot_description'     => array(
			'label'     => &$GLOBALS['TL_LANG']['metamodelsattribute_multi']['mm_test']['hotspot_description'],
			'inputType' => 'text',
			'eval'      => array('mandatory' => true, 'style' => 'width:115px')
		),
	),

);


/*
 * Use Multicolumnwizard in elementgenerator:
 * $GLOBALS['TL_CONFIG']['dma_elementgenerator']['dma_eg_<ID_OF_ELEMENT>']['<FIELDNAME>']
 *
 */
$GLOBALS['TL_CONFIG']['dma_elementgenerator']['dma_eg_28']['hotspots'] = array(
	'minCount'     => 2,
	'maxCount'     => 4,
	'columnFields' => array(
		'hotspot_type'     => array(
			'label'     => &$GLOBALS['TL_LANG']['metamodelsattribute_multi']['mm_test']['hotspot_type'],
			'exclude'   => true,
			'inputType' => 'select',
			'options'   => array(
				'option1' => 'Option 1',
				'option2' => 'Option 2',
			),
			'eval'      => array('style' => 'width:250px', 'includeBlankOption' => true, 'chosen' => true)
		),
		'hotspot_active' => array(
			'label'     => &$GLOBALS['TL_LANG']['metamodelsattribute_multi']['mm_test']['hotspot_active'],
			'exclude'   => true,
			'inputType' => 'checkbox',
			'eval'      => array('style' => 'width:40px')

		),
		'hotspot_description'     => array(
			'label'     => &$GLOBALS['TL_LANG']['metamodelsattribute_multi']['mm_test']['hotspot_description'],
			'inputType' => 'text',
			'eval'      => array('mandatory' => true, 'style' => 'width:115px')
		),
	),

);

/*
 * For a detailed list of available options please check:
 * http://de.contaowiki.org/MultiColumnWizard
 */

__EOT__;

if (!file_exists($file)) {
    file_put_contents($file, $data);
}
