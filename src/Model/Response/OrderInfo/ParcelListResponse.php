<?php

namespace Gwinn\Boxberry\Model\Response\OrderInfo;

use Gwinn\Boxberry\Model\Response\ResponseInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class ParcelListResponse.
 *
 * @category Models
 *

 */
class ParcelListResponse implements ResponseInterface
{
    /**
     * список всех трекинг кодов посылок которые есть в кабинете но не были сформированы в акт
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("ImIds")
     */
    public $imIds;
}
