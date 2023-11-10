<?php

namespace Gwinn\Boxberry\Model\Response\OrderInfo;

use Gwinn\Boxberry\Model\Response\ArrayResponse;
use Gwinn\Boxberry\Model\Response\OrderInfo\ParcelInfo\ParcelInfo;
use JMS\Serializer\Annotation as JMS;

/**
 * Class ParcelList.
 *
 * @category Models
 *

 */
class ParcelInfoResponse extends ArrayResponse
{
    /**
     * @var ParcelInfo[]
     *
     * @JMS\Type("array<Gwinn\Boxberry\Model\Response\OrderInfo\ParcelInfo\ParcelInfo>")
     */
    public $result;
}
