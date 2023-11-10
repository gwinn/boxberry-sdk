<?php

namespace Gwinn\Boxberry\Model\Request\Geography;

use Gwinn\Boxberry\Model\Request\RequestInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class ListServices.
 *
 * @category Models
 *

 */
class ZipCheckRequest implements RequestInterface
{
    /**
     * Почтовый индекс
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("Zip")
     */
    public $zip;

    /**
     * Код страны.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("CountryCode")
     */
    public $countryCode = '';
}
