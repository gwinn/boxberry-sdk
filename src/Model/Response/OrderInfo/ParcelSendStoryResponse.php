<?php

namespace Gwinn\Boxberry\Model\Response\OrderInfo;

use Gwinn\Boxberry\Model\Response\ArrayResponse;
use Gwinn\Boxberry\Model\Response\OrderInfo\ParcelSendStory\ParcelSendStory;
use JMS\Serializer\Annotation as JMS;

/**
 * Class ParcelSendStoryResponse.
 *
 * @category Models
 *

 */
class ParcelSendStoryResponse extends ArrayResponse
{
    /**
     * @var ParcelSendStory[]
     *
     * @JMS\Type("array<Gwinn\Boxberry\Model\Response\OrderInfo\ParcelSendStory\ParcelSendStory>")
     */
    public $result;
}
