<?php

namespace Gwinn\Boxberry\Model\Response\Company;

use Gwinn\Boxberry\Model\Response\ResponseInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class CompanyApiSettingsResponse
 */
class CompanyApiSettingsResponse implements ResponseInterface
{
    /**
     * Признак перехода на Яндекс.Доставку (NDD)
     *
     * @var bool
     *
     * @JMS\Type("boolean")
     * @JMS\SerializedName("yaDelivery")
     */
    public $yaDelivery;

    /**
     * Признак активированного bbOrder
     *
     * @var bool
     *
     * @JMS\Type("boolean")
     * @JMS\SerializedName("bbOrder")
     */
    public $bbOrder;
}
