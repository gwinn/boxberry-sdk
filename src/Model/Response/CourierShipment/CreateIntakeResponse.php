<?php

namespace Gwinn\Boxberry\Model\Response\CourierShipment;

use Gwinn\Boxberry\Model\Response\ResponseInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class CreateIntakeRequest.
 *
 * @category Models
 *
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
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
