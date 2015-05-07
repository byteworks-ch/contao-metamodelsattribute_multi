<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Copyright (c) 2014-2015 by Byteworks GmbH
 * All rights reserved
 *
 * http://www.byteworks.ch/
 *
 * Michael Bischof <mb@byteworks.ch>
 *
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
        return 'text NULL';
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

}

