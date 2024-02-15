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

namespace PrestaShop\Module\PsxDesign\Controller\Admin;

use Exception;
use PrestaShop\Module\PsxDesign\Account\Provider\PsAccountDataProvider;
use PrestaShop\Module\PsxDesign\Account\Provider\TokenDecoder;
use PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController;
use Symfony\Component\HttpFoundation\JsonResponse;

class AdminPsxDesignAjaxController extends FrameworkBundleAdminController
{
    /**
     * @var TokenDecoder
     */
    private $decoder;

    /**
     * @var PsAccountDataProvider
     */
    private $accountDataProvider;

    public function __construct(TokenDecoder $decoder, PsAccountDataProvider $accountDataProvider)
    {
        parent::__construct();
        $this->decoder = $decoder;
        $this->accountDataProvider = $accountDataProvider;
    }

    /**
     * @return JsonResponse|null
     */
    public function getUserIdAction(): ?JsonResponse
    {
        $userId = null;

        try {
            $accessToken = $this->accountDataProvider->getOrRefreshAccessToken();
            if ($accessToken) {
                $userId = $this->decoder->decode($accessToken)->getUserId();
            }
        } catch (Exception $e) {
            return new JsonResponse($userId);
        }

        return new JsonResponse($userId);
    }
}
