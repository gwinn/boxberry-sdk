<?php

namespace Gwinn\Boxberry\Model\Response\AccrualOfServices\ListServices;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ListServicesResponse.
 *
 * @category Models
 *

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
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("PaymentMethod")
     */
    public $paymentMethod;
}
