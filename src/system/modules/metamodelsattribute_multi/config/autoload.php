<?php

/**
 * Copyright (c) 2014-2015 by Byteworks GmbH
 * All rights reserved
 *
 * http://www.byteworks.ch/
 *
 * Michael Bischof <mb@byteworks.ch>
 *
 */

/**
 * Register the classes
 */
ClassLoader::addClasses(array(
	'MetaModels\Attribute\Multi\Multi' => 'system/modules/metamodelsattribute_multi/MetaModels/Attribute/Multi/Multi.php',
	'MetaModelAttributeMulti'          => 'system/modules/metamodelsattribute_multi/deprecated/MetaModelAttributeMulti.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array(
	'mm_attr_multi' => 'system/modules/metamodelsattribute_multi/templates',
));
