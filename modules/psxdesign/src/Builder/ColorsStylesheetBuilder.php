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

namespace PrestaShop\Module\PsxDesign\Builder;

use PrestaShop\Module\PsxDesign\DTO\ThemeConfiguration\Color\PsxDesignColorConfiguration;

class ColorsStylesheetBuilder
{
    public function __construct()
    {
    }

    /**
     * @param PsxDesignColorConfiguration[]|null $colors
     *
     * @return string
     */
    public function buildCssSelectorStylesheetString(?array $colors): string
    {
        if (!$colors) {
            return '';
        }

        $stylesheetString = '';

        foreach ($colors as $color) {
            $properties = $color->getProperties();
            // We do not want to create bad stylesheet if no property is provided
            if (!$properties) {
                continue;
            }

            $stylesheetString .= $color->getVariableName() . '{';

            foreach ($properties as $property) {
                $stylesheetString .= $property . ':' . $color->getValue() . ';';
            }
            $stylesheetString .= '}';
        }

        return $stylesheetString;
    }

    /**
     * @param PsxDesignColorConfiguration[]|null $colors
     *
     * @return string
     */
    public function buildCssVariableStylesheetString(?array $colors): string
    {
        if (!$colors) {
            return '';
        }

        $stylesheetString = ':root{';

        foreach ($colors as $color) {
            $stylesheetString .= $color->getVariableName() . ':' . $color->getValue() . ';';
        }

        return $stylesheetString . '}';
    }

    /**
     * @param PsxDesignColorConfiguration[]|null $colors
     *
     * @return string
     */
    public function buildScssVariableStylesheetString(?array $colors): string
    {
        if (!$colors) {
            return '';
        }

        $stylesheetString = '';

        foreach ($colors as $color) {
            $stylesheetString .= $color->getVariableName() . ':' . $color->getValue() . ';';
        }

        return $stylesheetString;
    }
}
