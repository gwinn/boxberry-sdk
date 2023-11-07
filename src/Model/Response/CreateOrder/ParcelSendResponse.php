<?php

namespace Gwinn\Boxberry\Model\Response\CreateOrder;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ParcelSend
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model\CreateOrder
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 */
class ParcelSend
{
    /**
     * номер акта (штрих-код)
     *
     * @var string $id
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("id")
     *
     */
    public $id;

    /**
     * ссылка на печатную форму акта
     *
     * @var string $label
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("label")
     *
     */
    public $label;

    /**
     * Ссылка на печатную форму акта ТМЦ (если подключена услуга
     * «Пост_Упаковка для ИМ брендированная (короб))»
     *
     * @var string $urlTmc
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("url_tmc")
     *
     */
    public $urlTmc;

    /**
     * ссылка на печатную форму этикеток
     *
     * @var string $sticker
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("sticker")
     *
     */
    public $sticker;
}
