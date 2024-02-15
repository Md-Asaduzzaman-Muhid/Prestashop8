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

namespace PrestaShop\Module\PsxDesign\DTO;

use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Component\HttpFoundation\Request;

class PsxDesignColorPalette
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $active;

    /**
     * @var int
     */
    private $default;

    /**
     * @var string
     */
    private $theme;

    /**
     * @var PsxDesignColorData[]
     */
    private $colors;

    private function __construct(ParameterBag $data)
    {
        $this->id = $data->getInt('id');
        $this->name = $data->get('name');
        $this->active = $data->getInt('active');
        $this->default = $data->getInt('default');
        $this->theme = $data->get('theme');
        $this->setColors($data->get('colors'));
    }

    /**
     * @param Request $request
     *
     * @return PsxDesignColorPalette
     */
    public static function createFromRequest(Request $request): self
    {
        return new self($request->request);
    }

    /**
     * @param ParameterBag $palette
     *
     * @return PsxDesignColorPalette
     */
    public static function createFromBuilder(ParameterBag $palette): PsxDesignColorPalette
    {
        return new self($palette);
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return (bool) $this->active;
    }

    /**
     * @return bool
     */
    public function isDefault(): bool
    {
        return (bool) $this->default;
    }

    /**
     * @return string
     */
    public function getTheme(): string
    {
        return $this->theme;
    }

    /**
     * @return PsxDesignColorData[]
     */
    public function getColors(): array
    {
        return $this->colors;
    }

    /**
     * @param array|null $colorsData
     *
     * @return void
     */
    private function setColors(?array $colorsData): void
    {
        $colors = [];

        if (!$colorsData) {
            $this->colors = $colors;
        }

        foreach ($colorsData as $colorData) {
            $colors[] = PsxDesignColorData::createFromRequest($colorData);
        }

        $this->colors = $colors;
    }
}
