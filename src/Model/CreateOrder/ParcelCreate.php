<?php

namespace Gwinn\Boxberry\Model\CreateOrder;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ParcelCreateRequest
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model\CreateOrder
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 */
class ParcelCreate
{
    /**
     * Трек-номер посылки для отслеживания
     *
     * @var string $track
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("track")
     *
     */
    public $track;

    /**
     * Сообщение о изменении параметров заказа
     *
     * @var string $notification
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("notification")
     *
     */
    public $notification;

    /**
     * Ссылка на печать этикетки (генерируется если не передан штрих-код интернет-магазина)
     *
     * @var string $label
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("label")
     *
     */
    public $label;
}
