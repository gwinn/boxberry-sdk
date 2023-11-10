<?php

namespace Gwinn\Boxberry\Model\Response\Tracking\ListStatuses;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ListStatusesResponse.
 *
 * @category Models
 *

 */
class ListStatuses
{
    /**
     * Дата присвоения статуса в формате ДД/ММ/ГГ Ч:М:C PM/AM.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Date")
     */
    public $date;

    /**
     * Наименование статуса.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Name")
     */
    public $name;
}
