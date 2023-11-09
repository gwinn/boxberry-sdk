<?php

namespace Gwinn\Boxberry\Model\Response\CreateOrder;

use Gwinn\Boxberry\Model\Response\ResponseInterface;
use JMS\Serializer\Annotation as JMS;

/**
 * Class ParcelSendResponse.
 *
 * @category Models
 *
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 *
 * @see     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
class ParcelSendResponse implements ResponseInterface
{
    /**
     * номер акта (штрих-код).
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("id")
     */
    public $id;

    /**
     * ссылка на печатную форму акта.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("label")
     */
    public $label;

    /**
     * Ссылка на печатную форму акта ТМЦ (если подключена услуга
     * «Пост_Упаковка для ИМ брендированная (короб))».
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("url_tmc")
     */
    public $urlTmc;

    /**
     * ссылка на печатную форму этикеток.
     *
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("sticker")
     */
    public $sticker;
}
