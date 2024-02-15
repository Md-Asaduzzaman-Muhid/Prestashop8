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

class PsxDesignTextToImageConvertException extends PsxDesignException
{
    /**
     * WARNING SEVERITY 101-200
     */
    /** Given parameters does not meet requirements */
    public const FAILED_TO_CONVERT = 101;

    /** Failed to add text into create image box */
    public const FAILED_ADD_TEXT = 102;

    /**
     * ERROR SEVERITY 201-300
     */
    /** Required library is missing or initialization of it fails */
    public const FAILED_INIT_GD_STREAM = 201;

    /** Server permission problem */
    public const FAILED_CREATE_TMP_DIR = 202;

    /** Fetching font from API failed */
    public const FAILED_FETCH_FONT = 203;
}
