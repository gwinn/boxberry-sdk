<?php

namespace RetailCrm\Boxberry\Model\Response\Geography;

use RetailCrm\Boxberry\Model\Response\ArrayResponse;
use RetailCrm\Boxberry\Model\Response\Geography\ZipCheck\ZipCheck;
use JMS\Serializer\Annotation as JMS;

/**
 * Class ZipCheckResponse.
 *
 * @category Models
 *
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class ZipCheckResponse extends ArrayResponse
{
    /**
     * @var ZipCheck[]
     *
     * @JMS\Type("array<RetailCrm\Boxberry\Model\Response\Geography\ZipCheck\ZipCheck>")
     */
    public $result;
}
