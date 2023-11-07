<?php

namespace Gwinn\Boxberry\Model\Response\OrderInfo;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ParcelSendStory
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 */
class ParcelSendStory
{
    /**
     * список трекинг кодов посылок в акте
     *
     * @var string $track
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("track")
     *
     */
    public $track;

    /**
     * ссылка на скачивание акта, если доступна
     *
     * @var string $label
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("label")
     *
     */
    public $label;

    /**
     * дата создания акта в формате YYYY.MM.DD HH:MM:SS
     *
     * @var string $date
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("date")
     *
     */
    public $date;
}
