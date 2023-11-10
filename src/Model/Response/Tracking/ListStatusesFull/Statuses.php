<?php

namespace Gwinn\Boxberry\Model\Response\Tracking\ListStatusesFull;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ListStatusesResponse.
 *
 * @category Models
 *

 */
class Statuses
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

    /**
     * Сумма начисленная за оказание услуги, руб.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Comment")
     */
    public $comment;
}
