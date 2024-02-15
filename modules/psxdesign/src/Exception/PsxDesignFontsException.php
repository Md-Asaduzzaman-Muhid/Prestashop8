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

class PsxDesignFontsException extends PsxDesignException
{
    /**
     * INFO SEVERITY 1-100
     */
    /** Thrown then invalid type is provided **/
    public const INVALID_TYPE = 4;

    /** Thrown then invalid weight is provided **/
    public const INVALID_WEIGHT = 5;

    /**
     * ERROR SEVERITY 201-300
     */
    /** SQL error, the font can not be upserted. **/
    public const FAILED_TO_UPSERT_FONT = 201;

    /** Thrown then font does not exist and no font is provided from hook or database **/
    public const NO_FONT_PROVIDED = 202;

    /** Error on stylesheet creation */
    public const FAILED_TO_CREATE_STYLESHEET = 203;

    /** SQL error, the font can not be deleted. **/
    public const FAILED_TO_DELETE_FONT = 204;
}
