<?php

namespace Gwinn\Boxberry\Model\Request\Warehouse;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ParcelCreateRequest
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model\Request
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class WarehouseInfoRequest
{
    /**
     * Уникальный код склада
     *
     * @var string $code
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("code")
     *
     */
    public $code;
}
