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

class PsxDesignCompilerException extends PsxDesignException
{
    /**
     * WARNING SEVERITY 101-200
     */
    /** Custom variables file does not exist or is not writable in module themes/classic/partials/folder */
    public const FAILED_TO_OVERWRITE_VARIABLES_SCSS = 101;

    /** Thrown then filesystem fails to write file in classic/assets/css directory mostly of directory permission */
    public const FAILED_TO_OVERWRITE = 102;

    /**
     * ERROR SEVERITY 201-300
     */
    /** Thrown then php compiles fails to compile scss files */
    public const FAILED_COMPILING = 201;

    /** Throwed then all proccess of compiling is*/
    public const COMPILE_PROCESS_FAILED = 202;
}
