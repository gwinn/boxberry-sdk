<?php

namespace Gwinn\Boxberry\Model\Request;

use JMS\Serializer\Annotation as JMS;

/**
 * Class CreateIntakeRequest
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model\Request
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 */
class ChangeOrderStorageDateRequest
{
    use ChangeOrder\ChangeOrder;

    /**
     * Новая дата хранения в формате dd.mm.yyyy
     *
     * @var string $storageDate
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("storageDate")
     */
    public $storageDate;
}
