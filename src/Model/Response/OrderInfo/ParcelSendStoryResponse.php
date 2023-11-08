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
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
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
