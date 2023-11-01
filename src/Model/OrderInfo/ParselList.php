<?php

namespace Gwinn\Boxberry\Model\OrderInfo;

use JMS\Serializer\Annotation as JMS;
use Er1z\FakeMock\Annotations;

/**
 * Class ParselList
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model\OrderInfo
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 * @Annotations\FakeMock()
 */
class ParselList
{
    /**
     * список всех трекинг кодов посылок которые есть в кабинете но не были сформированы в акт
     *
     * @var string $imIds
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("ImIds")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $imIds;
}
