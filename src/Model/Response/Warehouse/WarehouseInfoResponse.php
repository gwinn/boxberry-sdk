<?php

namespace Gwinn\Boxberry\Model\Response\Warehouse;

use Gwinn\Boxberry\Model\Response\ArrayResponse;
use Gwinn\Boxberry\Model\Response\Warehouse\WarehouseInfo\WarehouseInfo;

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
     * @JMS\Type("array<Gwinn\Boxberry\Model\Response\Warehouse\WarehouseInfo\WarehouseInfo>")
     */
    public $result;
}
