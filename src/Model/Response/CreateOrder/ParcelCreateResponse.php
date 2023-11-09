<?php

namespace Gwinn\Boxberry\Model\Response\CreateOrder;

use Gwinn\Boxberry\Model\Response\ResponseInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class ParcelCreateRequest.
 *
 * @category Models
 *
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class ParcelCreateResponse implements ResponseInterface
{
    /**
     * Трек-номер посылки для отслеживания.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("track")
     */
    public $track;

    /**
     * Сообщение о изменении параметров заказа.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("notification")
     */
    public $notification;

    /**
     * Ссылка на печать этикетки (генерируется если не передан штрих-код интернет-магазина).
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("label")
     */
    public $label;
}
