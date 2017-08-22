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

use MetaModels\Attribute\BaseSimple;

class Multi extends BaseSimple
{

    /**
     * @return string
     */
    public function getSQLDataType()
    {
        return 'blob NULL';
    }


    /**
     * @return array
     */
    public function getAttributeSettingNames()
    {
        return array_merge(parent::getAttributeSettingNames(), array(
            // ...
        ));
    }


    /**
     * @param array $arrOverrides
     *
     * @return array
     */
    public function getFieldDefinition($arrOverrides = array())
    {
        // Setup field (fallback)
        $arrFieldDef = parent::getFieldDefinition($arrOverrides);

        $arrFieldDef['inputType']        = 'textarea';
        $arrFieldDef['eval']['readonly'] = 'readonly';

        // Get table and column
        $strTable = $this->getMetaModel()->getTableName();
        $strField = $this->getColName();

        // Check for override in local config
        if (isset($GLOBALS['TL_CONFIG']['metamodelsattribute_multi'][$strTable][$strField])) {
            $arrFieldDef['inputType'] = 'multiColumnWizard';
            $arrFieldDef['eval']      = $GLOBALS['TL_CONFIG']['metamodelsattribute_multi'][$strTable][$strField];
        }

        return $arrFieldDef;
    }

    /**
     * Take the raw data from the DB column and unserialize it.
     *
     * @param string $value The input value.
     *
     * @return mixed
     */
    public function unserializeData($value)
    {
        return $value ? unserialize($value) : $value;
    }

    /**
     * Take the unserialized data and serialize it for the native DB column.
     *
     * @param mixed $value The input value.
     *
     * @return string
     */
    public function serializeData($value)
    {
        return serialize($value);
    }
}

