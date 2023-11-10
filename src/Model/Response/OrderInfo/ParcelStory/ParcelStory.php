<?php

namespace RetailCrm\Boxberry\Model\Response\OrderInfo\ParcelStory;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ParcelStoryResponse.
 *
 * @category Models
 *
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class ParcelStory
{
    /**
     * трекинг код посылки.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("track")
     */
    public $track;

    /**
     * ссылка на скачивание pdf файла с этикетками.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("label")
     */
    public $label;

    /**
     * дата создания посылки в формате YYYY.MM.DD HH:MM:SS.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("date")
     */
    public $date;

    /**
     * признак проведения посылки в акт
     *
     * @var bool
     *
     * @JMS\Type("boolean")
     * @JMS\SerializedName("send")
     */
    public $send;

    /**
     * штрих код посылки.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("barcode")
     */
    public $barcode;

    /**
     * номер заказа, присвоенный ИМ.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("imid")
     */
    public $imid;
}
