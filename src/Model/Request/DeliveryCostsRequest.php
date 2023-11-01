<?php

namespace Gwinn\Boxberry\Model\Request;

use JMS\Serializer\Annotation as JMS;
use Er1z\FakeMock\Annotations;

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
 * @Annotations\FakeMock()
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
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
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $version;
}
