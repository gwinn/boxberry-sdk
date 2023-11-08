<?php

namespace Gwinn\Boxberry\Model\Response\AccrualOfServices\ListServices;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ListServicesResponse.
 *
 * @category Models
 *
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class ListServices
{
    /**
     * Дата начисления в формате "ГГГГ-ММ-ДДTЧЧ:ММ:СС".
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Date")
     */
    public $date;

    /**
     * Название услуги.
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
     * @JMS\SerializedName("Sum")
     */
    public $sum;

    /**
     * Способ оплаты. Возможные значения: "Касса", "Банк", "Эквайринг".
     *
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("PaymentMethod")
     */
    public $paymentMethod;
}
