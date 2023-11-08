<?php

namespace Gwinn\Boxberry\Model\Request\OrderInfo;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ParcelInfoRequest.
 *
 * @category Models
 *
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class ParcelStoryRequest
{
    /**
     * период с в формате YYYYMMDD.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("from")
     */
    public $from;

    /**
     * период до в формате YYYYMMDD.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("to")
     */
    public $to;
}
