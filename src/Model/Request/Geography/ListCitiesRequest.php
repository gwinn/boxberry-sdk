<?php

namespace Gwinn\Boxberry\Model\Request\Geography;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ListServices
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model\Request\Tracking
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 */
class ListCitiesRequest
{
    /**
     * Код отслеживания заказа
     *
     * @var string $imId
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("ImId")
     *
     */
    public $imId;
}
