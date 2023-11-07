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
class ParcelSendStoryRequest
{
    /**
     * Массив посылок
     *
     * @var array $parcels
     *
     * @JMS\Type("array<Gwinn\Boxberry\Model\Request\OrderInfo\ParcelInfoRequest\Parcel>")
     * @JMS\SerializedName("parcels")
     *
     */
    public $parcels;
}
