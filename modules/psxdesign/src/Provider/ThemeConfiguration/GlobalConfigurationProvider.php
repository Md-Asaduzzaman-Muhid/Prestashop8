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

namespace PrestaShop\Module\PsxDesign\Provider\ThemeConfiguration;

use PrestaShop\Module\PsxDesign\Factory\ThemeConfiguration\GlobalThemeConfigurationFactory;
use Shop;

class GlobalConfigurationProvider
{
    /**
     * @var string
     */
    private $themeName;

    /**
     * @var GlobalThemeConfigurationFactory
     */
    public $globalConfigurations;

    public function __construct(int $shopId)
    {
        $this->themeName = (new Shop($shopId))->theme_name;
        $this->globalConfigurations = new GlobalThemeConfigurationFactory($this->themeName);
    }

    /**
     * @param string $themeName
     *
     * @return void
     */
    public function setThemeConfigurationsByThemeName(string $themeName): void
    {
        $this->globalConfigurations->setThemeConfigurationsByThemeName($themeName);
    }

    /**
     * @return string|null
     */
    public function getCustomizeUrl(): ?string
    {
        return $this->globalConfigurations->getCustomizeUrl();
    }

    /**
     * @return string[]|null
     */
    public function getScssFiles(): ?array
    {
        return $this->globalConfigurations->getScssFiles();
    }

    /**
     * @return string|null
     */
    public function getScssBaseFolder(): ?string
    {
        return $this->globalConfigurations->getScssBaseFolder();
    }

    /**
     * @return bool
     */
    public function scssFeatureAvailability(): bool
    {
        $scssBaseFolder = $this->getScssBaseFolder();
        $scssFiles = $this->getScssFiles();

        return !empty($scssBaseFolder) && !empty($scssFiles);
    }
}
