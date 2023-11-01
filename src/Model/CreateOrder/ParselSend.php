<?php

namespace Gwinn\Boxberry\Model\CreateOrder;

use JMS\Serializer\Annotation as JMS;
use Er1z\FakeMock\Annotations;

/**
 * Class ParselSend
 *
 * @category Models
 * @package  Gwinn\Boxberry\Model\CreateOrder
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 * @Annotations\FakeMock()
 */
class ParselSend
{
    /**
     * номер акта (штрих-код)
     *
     * @var string $id
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("id")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $id;

    /**
     * ссылка на печатную форму акта
     *
     * @var string $label
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("label")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $label;

    /**
     * Ссылка на печатную форму акта ТМЦ (если подключена услуга
     * «Пост_Упаковка для ИМ брендированная (короб))»
     *
     * @var string $urlTmc
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("url_tmc")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $urlTmc;

    /**
     * ссылка на печатную форму этикеток
     *
     * @var string $sticker
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("sticker")
     *
     * @Annotations\FakeMockField(faker="words", arguments={1, true})
     */
    public $sticker;
}
