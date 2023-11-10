<?php

namespace Gwinn\Boxberry\Model\Response\CourierShipment;

use Gwinn\Boxberry\Model\Response\ResponseInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class CreateIntakeRequest.
 *
 * @category Models
 *

 */
class CreateIntakeResponse implements ResponseInterface
{
    /**
     * номер созданной заявки на забор
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("message")
     */
    public $message;
}
