<?php

namespace Gwinn\Boxberry\Model\Response\CourierShipment;

use JMS\Serializer\Annotation as JMS;

/**
 * Class CreateIntakeRequest
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model\CourierShipment
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 */
class CreateIntake
{
    /**
     * номер созданной заявки на забор
     *
     * @var string $message
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("message")
     *
     */
    public $message;
}
