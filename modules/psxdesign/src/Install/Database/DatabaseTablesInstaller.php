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
use PrestaShop\Module\PsxDesign\Exception\PsxDesignException;

class DatabaseTablesInstaller
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
     * @throws PsxDesignException
     */
    public function install(): bool
    {
        return $this->executeSqlFile('logos_information') &&
            $this->executeSqlFile('fonts') &&
            $this->executeSqlFile('colors_palette') &&
            $this->executeSqlFile('colors');
    }

    /**
     * @param string $fileName
     *
     * @return array
     */
    protected function getSqlStatements(string $fileName): array
    {
        $sqlStatements = file_get_contents($fileName);
        $string = str_replace(['PREFIX_', 'ENGINE_TYPE'], [_DB_PREFIX_, _MYSQL_ENGINE_], $sqlStatements);

        return explode(';', $string);
    }

    /**
     * @return bool
     *
     * @throws \Exception
     */
    public function executeSqlFile(string $fileName): bool
    {
        $installSqlFileName = $this->modulePath . "src/Install/Database/sql/{$fileName}.sql";

        if (!file_exists($installSqlFileName)) {
            return false;
        }

        $database = Db::getInstance();
        $sqlStatements = $this->getSqlStatements($installSqlFileName);

        foreach ($sqlStatements as $sqlStatement) {
            if (!empty(trim($sqlStatement))) {
                $database->execute($sqlStatement);
            }
        }

        return true;
    }
}
