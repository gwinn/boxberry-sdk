<?php

namespace Gwinn\Boxberry\Model\Response\Geography;

use Gwinn\Boxberry\Model\Response\ArrayResponse;
use Gwinn\Boxberry\Model\Response\Geography\ZipCheck\ZipCheck;
use JMS\Serializer\Annotation as JMS;

/**
 * Class ZipCheckResponse.
 *
 * @category Models
 *

 */
class ZipCheckResponse extends ArrayResponse
{
    /**
     * @var ZipCheck[]
     *
     * @JMS\Type("array<Gwinn\Boxberry\Model\Response\Geography\ZipCheck\ZipCheck>")
     */
    public $result;
}
