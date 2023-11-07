<?php

namespace Gwinn\Boxberry\Model\Request;

use JMS\Serializer\Annotation as JMS;

/**
 * Class CreateIntakeRequest
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model\Request
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 */
class DeliveryCalculationRequest
{
    /**
     * Город отправления
     *
     * @var string $senderCityId
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("SenderCityId")
     *
     */
    public $senderCityId;

    /**
     * Город получения.
     * Обязательный параметр для расчета доставки в страны ЕАЭС
     *
     * @var string $recipientCityId
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("RecipientCityId")
     *
     */
    public $recipientCityId;

    /**
     * Тип доставки, возможные значения:
     *
     * 1 - Доставка до ПВЗ
     *
     * 2 - Курьерская доставка
     *
     * если не заполнено в ответе возвращаются все типы доставки
     *
     * @var string $deliveryType
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("DeliveryType")
     *
     */
    public $deliveryType;

    /**
     * Отделение отправления
     *
     * @var string $targetStart
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("TargetStart")
     *
     */
    public $targetStart;

    /**
     * Отделение получения
     *
     * @var string $targetStop
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("TargetStop")
     *
     */
    public $targetStop;

    /**
     * Объявленная стоимость заказа, руб.
     *
     * @var string $orderSum
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("OrderSum")
     *
     */
    public $orderSum;

    /**
     * Стоимость доставки объявленная получателю ИМ, руб.
     *
     * @var string $deliverySum
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("DeliverySum")
     *
     */
    public $deliverySum;

    /**
     * Контактное лицо
     *
     * @var string $paySum
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("PaySum")
     *
     */
    public $paySum;

    /**
     * Индекс получателя (только РФ)
     * если передан, то в ответ будет вариант только для КД
     *
     * @var string $zip
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Zip")
     *
     */
    public $zip;

    /**
     * Массив массо-габаритных характеристик для каждого места в заказе
     *
     * @var array $boxSizes
     *
     * @JMS\Type("array<Gwinn\Boxberry\Model\Request\DeliveryCalculationRequest\BoxesSizes>")
     * @JMS\SerializedName("BoxSizes")
     *
     */
    public $boxSizes;

    /**
     * Расчет с учетом настроек установленных в ЛК ИМ:
     * "Настройки средств интеграции - Расчеты - Включить настройки расчета".
     *
     * Возможные значения:
     * 1 - получить расчет с учетом индивидуальных настроек
     * 0 - получить расчет без настроек
     *
     * @var string $useShopSettings
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("UseShopSettings")
     *
     */
    public $useShopSettings;

    /**
     * название CMS. Параметр предназначен для разработчиков CMS, проводящих интеграцию с Boxberry.
     * Применяется только в JSON.
     * для учета данного параметра в статистике также должен быть передан параметр url
     *
     * @var string $cmsName
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CmsName")
     *
     */
    public $cmsName;

    /**
     * url сайта.
     * Параметр предназначен для разработчиков CMS, проводящих интеграцию с Boxberry.
     * Применяется только в JSON.
     *
     * @var string $url
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Url")
     *
     */
    public $url;

    /**
     * версия интеграции/модуля
     *
     * @var string $version
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Version")
     *
     */
    public $version;
}
