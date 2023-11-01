<?php

namespace Gwinn\Boxberry\Model\Tracking;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ListStatuses
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model\Tracking
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 */
class ListStatuses
{
    /**
     * Дата присвоения статуса в формате ДД/ММ/ГГ Ч:М:C PM/AM
     *
     * @var string $date
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Date")
     *
     */
    public $date;

    /**
     * Наименование статуса
     *
     * @var string $name
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Name")
     *
     */
    public $name;

    /**
     * Сумма начисленная за оказание услуги, руб
     *
     * @var string $comment
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Comment")
     *
     */
    public $comment;
}
