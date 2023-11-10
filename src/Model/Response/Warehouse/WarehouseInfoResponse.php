<?php

namespace Gwinn\Boxberry\Model\Response\Warehouse;

use Gwinn\Boxberry\Model\Response\ArrayResponse;
use Gwinn\Boxberry\Model\Response\Warehouse\WarehouseInfo\WarehouseInfo;

/**
 * Class WarehouseInfoResponse.
 *
 * @category Models
 *

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
