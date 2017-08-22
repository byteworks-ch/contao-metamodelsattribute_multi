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

namespace MetaModels\Attribute\Multi;

use MetaModels\Attribute\AbstractAttributeTypeFactory;

/**
 * This is the attribute type factory for the multi attribute.
 */
class AttributeTypeFactory extends AbstractAttributeTypeFactory
{
    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        parent::__construct();
        $this->typeName  = 'multi';
        $this->typeIcon  = 'system/modules/metamodelsattribute_multi/html/multi.png';
        $this->typeClass = 'MetaModels\Attribute\Multi\Multi';
    }
}
