<?php

namespace Gwinn\Boxberry\Model\Response\AccrualOfServices;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ListServices
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model\AccrualOfServices
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 */
class ListServices
{
    /**
     * Дата начисления в формате "ГГГГ-ММ-ДДTЧЧ:ММ:СС"
     *
     * @var string $date
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Date")
     *
     */
    public $date;

    /**
     * Название услуги
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
     * @var string $sum
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Sum")
     *
     */
    public $sum;

    /**
     * Способ оплаты. Возможные значения: "Касса", "Банк", "Эквайринг"
     *
     * @var integer $paymentMethod
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("PaymentMethod")
     *
     */
    public $paymentMethod;
}
