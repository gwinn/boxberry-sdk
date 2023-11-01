<?php

namespace Gwinn\Boxberry\Model\Request;

use JMS\Serializer\Annotation as JMS;

/**
 * Class DeliveryCostsRequest
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model\Request
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 */
class DeliveryCostsRequest
{
    /**
     * вес посылки (грамм)
     *
     * @var string $weight
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("weight")
     *
     */
    public $weight;

    /**
     * Код пункта приема заказа (если не указан, то используется код п/п из настроек ЛК ИМ)
     *
     * @var string $targetStart
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("targetstart")
     *
     */
    public $targetStart;

    /**
     * Код ПВЗ (для расчета доставки до отделения)
     *
     * @var string $target
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("target")
     *
     */
    public $target;

    /**
     * Объявленная стоимость посылки (страховая стоимость)
     *
     * @var string $orderSum
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("ordersum")
     *
     */
    public $orderSum;

    /**
     * Заявленная стоимость доставки (на расчет не влияет)
     *
     * @var string $deliverySum
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("deliverysum")
     *
     */
    public $deliverySum;

    /**
     * сумма к оплате с получателя
     *
     * @var string $paySum
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("paysum")
     *
     */
    public $paySum;

    /**
     * высота коробки (см)
     *
     * @var string $height
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("height")
     *
     */
    public $height;

    /**
     * ширина коробки (см)
     *
     * @var string $width
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("width")
     *
     */
    public $width;

    /**
     * глубина коробки (см)
     *
     * @var string $depth
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("depth")
     *
     */
    public $depth;

    /**
     * Почтовый индекс для курьерской доставки (в случае передачи zip - target игнорируется).
     *
     * @var string $zip
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("zip")
     *
     */
    public $zip;

    /**
     * Расчет с учетом наценок, установленных в ЛК ИМ
     * - Настройки средств интеграции
     * - Расчеты
     * - Включить настройки расчета
     *
     * Возможные значения:
     * 1 - получить расчет с учетом индивидуальных настроек
     * 0 - получить расчет без настроек
     *
     * @var string $sucrh
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("sucrh")
     *
     */
    public $sucrh;

    /**
     * название CMS. Параметр предназначен для разработчиков CMS, проводящих интеграцию с Boxberry
     *
     * @var string $cms
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("cms")
     *
     */
    public $cms;

    /**
     * url сайта. Параметр предназначен для разработчиков CMS, проводящих интеграцию с Boxberry.
     * Применяется только в JSON.
     *
     * @var string $url
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("url")
     *
     */
    public $url;

    /**
     * версия интеграции/модуля
     *
     * @var string $version
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("version")
     *
     */
    public $version;
}