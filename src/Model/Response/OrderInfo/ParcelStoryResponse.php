<?php

namespace Gwinn\Boxberry\Model\Response\OrderInfo;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ParcelStory
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model\OrderInfo
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 */
class ParcelStory
{
    /**
     * трекинг код посылки
     *
     * @var string $track
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("track")
     *
     */
    public $track;

    /**
     * ссылка на скачивание pdf файла с этикетками
     *
     * @var string $label
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("label")
     *
     */
    public $label;

    /**
     * дата создания посылки в формате YYYY.MM.DD HH:MM:SS
     *
     * @var string $date
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("date")
     *
     */
    public $date;

    /**
     * признак проведения посылки в акт
     *
     * @var boolean $send
     *
     * @JMS\Type("boolean")
     * @JMS\SerializedName("send")
     *
     */
    public $send;

    /**
     * штрих код посылки
     *
     * @var string $barcode
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("barcode")
     *
     */
    public $barcode;

    /**
     * номер заказа, присвоенный ИМ
     *
     * @var string $imid
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("imid")
     *
     */
    public $imid;
}
