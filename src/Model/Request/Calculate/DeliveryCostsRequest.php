<?php

namespace Gwinn\Boxberry\Model\Request\Calculate;

use Gwinn\Boxberry\Model\Request\RequestInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class DeliveryCostsRequest.
 *
 * @category Models
 *

 */
class DeliveryCostsRequest implements RequestInterface
{
    /**
     * вес посылки (грамм).
     *
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\SerializedName("weight")
     */
    public $weight;

    /**
     * Код пункта приема заказа (если не указан, то используется код п/п из настроек ЛК ИМ).
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("targetstart")
     */
    public $targetStart;

    /**
     * Код ПВЗ (для расчета доставки до отделения).
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("target")
     */
    public $target;

    /**
     * Объявленная стоимость посылки (страховая стоимость).
     *
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("ordersum")
     */
    public $orderSum;

    /**
     * Заявленная стоимость доставки (на расчет не влияет).
     *
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("deliverysum")
     */
    public $deliverySum;

    /**
     * сумма к оплате с получателя.
     *
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("paysum")
     */
    public $paySum;

    /**
     * высота коробки (см).
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("height")
     */
    public $height;

    /**
     * ширина коробки (см).
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("width")
     */
    public $width;

    /**
     * глубина коробки (см).
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("depth")
     */
    public $depth;

    /**
     * Почтовый индекс для курьерской доставки (в случае передачи zip - target игнорируется).
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("zip")
     */
    public $zip;

    /**
     * Расчет с учетом наценок, установленных в ЛК ИМ
     * - Настройки средств интеграции
     * - Расчеты
     * - Включить настройки расчета.
     *
     * Возможные значения:
     * 1 - получить расчет с учетом индивидуальных настроек
     * 0 - получить расчет без настроек
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("sucrh")
     */
    public $sucrh;

    /**
     * название CMS. Параметр предназначен для разработчиков CMS, проводящих интеграцию с Boxberry.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("cms")
     */
    public $cms;

    /**
     * url сайта. Параметр предназначен для разработчиков CMS, проводящих интеграцию с Boxberry.
     * Применяется только в JSON.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("url")
     */
    public $url;

    /**
     * версия интеграции/модуля.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("version")
     */
    public $version;
}
