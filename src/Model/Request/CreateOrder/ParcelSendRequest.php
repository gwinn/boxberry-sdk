<?php

namespace Gwinn\Boxberry\Model\Request\CreateOrder;

use Gwinn\Boxberry\Model\Request\RequestInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class ParcelInfoRequest.
 *
 * @category Models
 *

 */
class ParcelSendRequest implements RequestInterface
{
    /**
     * Код отслеживания отправления.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("ImIds")
     */
    public $imIds;

    /**
     * Плановая дата отгрузки (ГГГГ-ММ-ДД).
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("shippingDate")
     */
    public $shippingDate = '';
}
