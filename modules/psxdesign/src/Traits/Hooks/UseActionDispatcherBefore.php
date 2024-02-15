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

namespace PrestaShop\Module\PsxDesign\Traits\Hooks;

use Symfony\Component\Dotenv\Dotenv;

trait UseActionDispatcherBefore
{
    /**
     * @return void
     */
    public function hookActionDispatcherBefore(): void
    {
        $this->loadModuleDotEnv();
    }

    /**
     * Module env values disappears on POST actions and we need to load them again
     * on dispatcher hook we can make sure that env values are accessible all the times.
     *
     * @return void
     */
    private function loadModuleDotEnv(): void
    {
        $dotenv = new Dotenv();
        $dotenv->load($this->getLocalPath() . '.env');
    }
}
