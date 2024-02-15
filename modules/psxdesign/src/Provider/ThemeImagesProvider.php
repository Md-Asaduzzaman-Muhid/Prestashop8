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

declare(strict_types=1);

namespace PrestaShop\Module\PsxDesign\Provider;

use PrestaShop\Module\PsxDesign\DTO\ThemeImagesData;

class ThemeImagesProvider
{
    /**
     * @var string
     */
    private $themesDir;

    public function __construct(string $themesDir)
    {
        $this->themesDir = $themesDir;
    }

    /**
     * Get active theme extra images for tablet and mobile provided by themes creators.
     *
     * @param string $themeName
     *
     * @return ThemeImagesData
     */
    public function getCurrentThemeImages(string $themeName): ThemeImagesData
    {
        $mobileImage = null;
        $tabletImage = null;

        if (file_exists($this->themesDir . $themeName . '/preview-mobile.png')) {
            $mobileImage = 'themes/' . $themeName . '/preview-mobile.png';
        }

        if (file_exists($this->themesDir . $themeName . '/preview-tablet.png')) {
            $tabletImage = 'themes/' . $themeName . '/preview-tablet.png';
        }

        return new ThemeImagesData($mobileImage, $tabletImage);
    }
}
