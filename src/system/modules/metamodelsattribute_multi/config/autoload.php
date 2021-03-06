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

/**
 * Register the classes
 */
ClassLoader::addClasses(array(
    'MetaModels\Attribute\Multi\AttributeTypeFactory' => 'system/modules/metamodelsattribute_multi/MetaModels/Attribute/Multi/AttributeTypeFactory.php',
    'MetaModels\Attribute\Multi\Multi'                => 'system/modules/metamodelsattribute_multi/MetaModels/Attribute/Multi/Multi.php',
    'MetaModelAttributeMulti'                         => 'system/modules/metamodelsattribute_multi/deprecated/MetaModelAttributeMulti.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array(
	'mm_attr_multi' => 'system/modules/metamodelsattribute_multi/templates',
));
