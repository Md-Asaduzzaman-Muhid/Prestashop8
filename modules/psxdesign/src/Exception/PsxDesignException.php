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

namespace PrestaShop\Module\PsxDesign\Exception;

use Exception;

class PsxDesignException extends Exception
{
    /** An informative message, usually describing server activity. No action is necessary. */
    public const INFO_SEVERITY = 100;

    /** Action must be taken at some stage to prevent a severe error from occurring in the future. */
    public const WARNING_SEVERITY = 200;

    /** A severe error that might cause the loss or corruption of unsaved data. Immediate action must be taken to prevent losing data. */
    public const ERROR_SEVERITY = 300;

    /** A severe error that causes your system to crash, resulting in the loss or corruption of unsaved data. */
    public const FATAL_SEVERITY = 400;
}
