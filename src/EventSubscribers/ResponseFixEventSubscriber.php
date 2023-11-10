<?php

namespace Gwinn\Boxberry\EventSubscribers;

use Gwinn\Boxberry\Model\Response\OrderInfo\ParcelInfo\ParcelInfo;
use JMS\Serializer\EventDispatcher\EventSubscriberInterface;
use JMS\Serializer\EventDispatcher\PreDeserializeEvent;

class ResponseFixEventSubscriber implements EventSubscriberInterface
{
    /**
     * @return array<int, array<string, int|string>>
     */
    public static function getSubscribedEvents(): array
    {
        return [
            [
                'event' => 'serializer.pre_deserialize',
                'method' => 'onPreDeserialize',
                'class' => ParcelInfo::class,
                'format' => 'json', // optional format
                'priority' => 0, // optional priority
            ],
        ];
    }

    public function onPreDeserialize(PreDeserializeEvent $event): void
    {
        /** @var array<string, mixed> $data */
        $data = $event->getData();
        if (isset($data['pickup_point']) && empty($data['pickup_point'])) {
            $data['pickup_point'] = null;
        }
        if (isset($data['courier_delivery']) && empty($data['courier_delivery'])) {
            $data['courier_delivery'] = null;
        }
        $event->setData($data);
    }
}
