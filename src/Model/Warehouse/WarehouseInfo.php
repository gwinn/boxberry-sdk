<?php

namespace Gwinn\Boxberry\Model\Warehouse;

/**
 * Class WarehouseInfo
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model\Warehouse
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 */
class WarehouseInfo
{
    /**
     * Массив складов
     *
     * @var array $warehouses
     *
     * @JMS\Type("array<Gwinn\Boxberry\Model\Warehouse\Warehouses\Warehouses>")
     * @JMS\SerializedName("warehouses")
     *
     */
    public $warehouses;
}