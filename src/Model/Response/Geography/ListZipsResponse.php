<?php

namespace Gwinn\Boxberry\Model\Response\Geography;

use Gwinn\Boxberry\Model\Response\ArrayResponse;
use Gwinn\Boxberry\Model\Response\Geography\ListZips\ListZips;
use JMS\Serializer\Annotation as JMS;

/**
 * Class ListZipsResponse.
 *
 * @category Models
 *

 */
class ListZipsResponse extends ArrayResponse
{
    /**
     * @var ListZips[]
     *
     * @JMS\Type("array<Gwinn\Boxberry\Model\Response\Geography\ListZips\ListZips>")
     */
    public $result;
}
