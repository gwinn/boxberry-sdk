<?php

namespace Gwinn\Boxberry\Model\Response\OrderInfo;

use Gwinn\Boxberry\Model\Response\ArrayResponse;
use Gwinn\Boxberry\Model\Response\OrderInfo\ParcelStory\ParcelStory;
use JMS\Serializer\Annotation as JMS;

/**
 * Class ParcelStoryResponse.
 *
 * @category Models
 *

 */
class ParcelStoryResponse extends ArrayResponse
{
    /**
     * @var ParcelStory[]
     *
     * @JMS\Type("array<Gwinn\Boxberry\Model\Response\OrderInfo\ParcelStory\ParcelStory>")
     */
    public $result;
}
