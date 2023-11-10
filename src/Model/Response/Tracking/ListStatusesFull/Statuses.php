<?php

namespace RetailCrm\Boxberry\Model\Response\Tracking\ListStatusesFull;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ListStatusesResponse.
 *
 * @category Models
 *
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
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
