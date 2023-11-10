<?php

namespace Gwinn\Boxberry\Model\Response\OrderInfo\ParcelSendStory;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ParcelSendStoryResponse.
 *
 * @category Models
 *

 */
class ParcelSendStory
{
    /**
     * список трекинг кодов посылок в акте.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("track")
     */
    public $track;

    /**
     * ссылка на скачивание акта, если доступна.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("label")
     */
    public $label;

    /**
     * дата создания акта в формате YYYY.MM.DD HH:MM:SS.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("date")
     */
    public $date;
}
