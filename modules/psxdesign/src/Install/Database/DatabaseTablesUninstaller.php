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

namespace PrestaShop\Module\PsxDesign\Install\Database;

use Db;

class DatabaseTablesUninstaller
{
    /**
     * @var string
     */
    private $modulePath;

    public function __construct(string $modulePath)
    {
        $this->modulePath = $modulePath;
    }

    /**
     * @throws \Exception
     */
    public function uninstall(): bool
    {
        return $this->uninstallDb();
    }

    protected function getSqlStatements($fileName): string
    {
        $sqlStatements = file_get_contents($fileName);

        return str_replace(['PREFIX_', 'ENGINE_TYPE'], [_DB_PREFIX_, _MYSQL_ENGINE_], $sqlStatements);
    }

    /**
     * Executes sql in uninstall.sql file which is used for uninstalling
     *
     * @return bool
     *
     * @throws \Exception
     */
    private function uninstallDb(): bool
    {
        $uninstallSqlFileName = $this->modulePath . 'src/Install/Database/sql/uninstall.sql';

        if (!file_exists($uninstallSqlFileName)) {
            return false;
        }

        $database = Db::getInstance();
        $sqlStatements = $this->getSqlStatements($uninstallSqlFileName);

        return (bool) $database->execute($sqlStatements);
    }
}
