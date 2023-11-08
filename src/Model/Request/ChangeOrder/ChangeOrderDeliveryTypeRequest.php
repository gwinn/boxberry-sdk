<?php

namespace Gwinn\Boxberry\Model\Request\ChangeOrder;

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
class ChangeOrderDeliveryTypeRequest
{
    use ChangeOrder;

    /**
     * Тип доставки, возможные значения:
     * 1- доставка до ПВЗ
     * 2 - доставка курьером
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("deliveryType")
     */
    public $deliveryType;

    /**
     * Код пункта выдачи Boxberry.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("pointId")
     */
    public $pointId;

    /**
     * Город получателя для КД.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("city")
     */
    public $city;

    /**
     * Адрес получателя для КД.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("addressp")
     */
    public $addressp;

    /**
     * Время доставки «с» в формате ЧЧ:ММ.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("timeFrom")
     */
    public $timeFrom;

    /**
     * Время доставки «по» в формате ЧЧ:ММ.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("timeTo")
     */
    public $timeTo;

    /**
     * Дата доставки (формат YYYY-MM-DD).
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("deliveryDate")
     */
    public $deliveryDate;

    /**
     * Комментарий по доставке.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("comment")
     */
    public $comment;
}
