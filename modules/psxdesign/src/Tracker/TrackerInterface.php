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

namespace PrestaShop\Module\PsxDesign\Tracker;

use Symfony\Component\HttpFoundation\ServerBag;

interface TrackerInterface
{
    /**
     * Track event on segment
     *
     * @param string $event
     * @param array $properties
     * @param ServerBag|null $serverBag
     *
     * @return void
     */
    public function track(string $event, array $properties = [], ServerBag $serverBag = null): void;

    /**
     * @return array<string, mixed>
     */
    public function getProperties(): array;

    /**
     * @param array<string, mixed> $properties
     */
    public function setProperties(array $properties): void;
}
