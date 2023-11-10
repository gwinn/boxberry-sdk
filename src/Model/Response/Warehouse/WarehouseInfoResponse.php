<?php

namespace RetailCrm\Boxberry\Model\Response\Warehouse;

use RetailCrm\Boxberry\Model\Response\ArrayResponse;
use RetailCrm\Boxberry\Model\Response\Warehouse\WarehouseInfo\WarehouseInfo;

/**
 * Class WarehouseInfoResponse.
 *
 * @category Models
 *
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class WarehouseInfoResponse extends ArrayResponse
{
    /**
     * @var WarehouseInfo[]
     *
     * @JMS\Type("array<RetailCrm\Boxberry\Model\Response\Warehouse\WarehouseInfo\WarehouseInfo>")
     */
    public $result;
}
