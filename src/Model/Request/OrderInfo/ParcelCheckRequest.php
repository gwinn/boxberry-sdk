<?php

namespace Gwinn\Boxberry\Model\Request\OrderInfo;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ParcelInfoRequest
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model\Request
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class ParcelCheckRequest
{
    /**
     * Код отслеживания отправления
     *
     * @var string $imIds
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("ImIds")
     *
     */
    public $imIds;

    /**
     * период до в формате YYYYMMDD
     *
     * @var string $shippingDate
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("shippingDate")
     *
     */
    public $shippingDate = '';
}
