<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 */

/**
 * @param PsxDesign $module
 *
 * @return bool
 */
function upgrade_module_1_5_0(PsxDesign $module): bool
{
    alterFontsTable_1_5_0();

    return true;
}

function alterFontsTable_1_5_0(): bool
{
    $db = Db::getInstance();
    $checkVariableNameQuery = 'SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = "' . _DB_PREFIX_ . 'psxdesign_fonts" AND COLUMN_NAME = "variable_name"';
    $variableNameIsPresent = $db->getValue($checkVariableNameQuery);

    if ($variableNameIsPresent) {
        return true;
    }

    // change `css_selector` column name
    $query = 'ALTER TABLE `' . _DB_PREFIX_ . 'psxdesign_fonts` CHANGE `css_selector` `variable_name` VARCHAR(255);';
    $nameChanged = $db->execute($query);

    // Add the new column `variable_type` after variable name
    $addColumnQuery = 'ALTER TABLE `' . _DB_PREFIX_ . 'psxdesign_fonts` 
          ADD COLUMN `variable_type` VARCHAR(64) AFTER `variable_name`';
    $columnAdded = $db->execute($addColumnQuery);

    // Update the existing rows with the value 'css_selector'
    $updateQuery = 'UPDATE `' . _DB_PREFIX_ . 'psxdesign_fonts` SET `variable_type` = "css_selector"';
    $defaultValuesAdded = $db->execute($updateQuery);

    return $nameChanged && $columnAdded && $defaultValuesAdded;
}
