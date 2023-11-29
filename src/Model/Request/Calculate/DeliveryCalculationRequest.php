<?php

namespace Gwinn\Boxberry\Model\Request\Calculate;

use Gwinn\Boxberry\Model\Request\Calculate\DeliveryCalculationRequest\BoxesSizes;
use Gwinn\Boxberry\Model\Request\RequestInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class CreateIntakeRequest.
 *
 * @category Models
 *

 */
class DeliveryCalculationRequest implements RequestInterface
{
    /**
     * Город отправления.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("SenderCityId")
     */
    public $senderCityId;

    /**
     * Город получения.
     * Обязательный параметр для расчета доставки в страны ЕАЭС
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("RecipientCityId")
     */
    public $recipientCityId;

    /**
     * Тип доставки, возможные значения:.
     *
     * 1 - Доставка до ПВЗ
     *
     * 2 - Курьерская доставка
     *
     * если не заполнено в ответе возвращаются все типы доставки
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("DeliveryType")
     */
    public $deliveryType;

    /**
     * Отделение отправления.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("TargetStart")
     */
    public $targetStart;

    /**
     * Отделение получения.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("TargetStop")
     */
    public $targetStop;

    /**
     * Объявленная стоимость заказа, руб.
     *
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("OrderSum")
     */
    public $orderSum;

    /**
     * Стоимость доставки объявленная получателю ИМ, руб.
     *
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("DeliverySum")
     */
    public $deliverySum;

    /**
     * Сумма, которую необходимо взять с получателя, руб.
     *
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\SerializedName("PaySum")
     */
    public $paySum;

    /**
     * Индекс получателя (только РФ)
     * если передан, то в ответ будет вариант только для КД.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Zip")
     */
    public $zip;

    /**
     * Массив массо-габаритных характеристик для каждого места в заказе.
     *
     * @var BoxesSizes[]
     *
     * @JMS\Type("array<Gwinn\Boxberry\Model\Request\Calculate\DeliveryCalculationRequest\BoxesSizes>")
     * @JMS\SerializedName("BoxSizes")
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
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("UseShopSettings")
     */
    public $useShopSettings;

    /**
     * название CMS. Параметр предназначен для разработчиков CMS, проводящих интеграцию с Boxberry.
     * Применяется только в JSON.
     * для учета данного параметра в статистике также должен быть передан параметр url.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CmsName")
     */
    public $cmsName;

    /**
     * url сайта.
     * Параметр предназначен для разработчиков CMS, проводящих интеграцию с Boxberry.
     * Применяется только в JSON.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Url")
     */
    public $url;

    /**
     * версия интеграции/модуля.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Version")
     */
    public $version;
}
