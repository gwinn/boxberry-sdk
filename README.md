# boxberry-sdk
SDK для Боксберри

Возможности SDK:

- ListCities. Список городов доставки
- ListCitiesFull. Список городов доставки (полный)
- ListPoints. Список ПВЗ
- ListPointsShort. Коды всех отделений Boxberry c датой последнего изменения
- PointsDescription. Расширенная информация о ПВЗ
- PointsForParcels. Список пунктов приема посылок
- ListZips. Список почтовых индексов для КД
- ZipCheck. Проверка почтового индекса для КД
- CourierListCities. Список городов КД
- DeliveryCosts. Калькулятор стоимости доставки
- DeliveryCalculation. Новый калькулятор стоимости доставки (РФ/Страны ЕАЭС)
- ParselCreate. Создать/обновить заказ
- ParselSend. Формирование акта приема-передачи посылок.
- CancelOrder. Отзыв или удаление посылки
- ChangeOrderDetails. Изменение данных посылки
- ChangeOrderStorageDate. Изменение срока хранения посылки
- ChangeOrderIssue. Изменение типа выдачи посылки
- ChangeOrderDeliveryType. Измение параметров доставки
- CreateIntake. Заявка на курьерский забор посылок.
- ListStatuses. Статусы посылки
- ListStatusesFull. Расширенный список статусов посылки
- ListServices. Стоимость начисленных услуг
- ParselCheck. Ссылка на печатную форму этикетки.
- ParselStory. Список трекинг-кодов посылок с расширенной информацией
- ParselSendStory. Список созданных актов приема-передачи
- OrdersBalance. Информация по заказам, которые фактически переданы на доставку, но еще не доставлены клиенту.
- ParselList. Список трекинг-кодов посылок, не включенных в акт приема-передачи
- ParcelInfo. Получение информации о заказах
- WarehouseCreate. Добавление склада
- WarehouseDelete. Удаление склада
- WarehouseInfo. Информация о складе
- WarehouseUpdate. Обновление склада

***
### Требования
Требования — минимальны. Нужен PHP 7.3 или выше.

Это значит в качестве HTTP-клиента можно использовать любой - клиент, поддерживающий данную спецификацию.
Если у вашего клиента нет поддержки этой спецификации, можно посмотреть [имеющиеся адаптеры для большинства популярных HTTP-клиентов](http://docs.php-http.org/en/latest/clients.html)

***
### Установка
Установка осуществляется с помощью менеджера пакетов Composer

```bash
composer require gwinn/boxberry-sdk
```

***
### Примеры использования

```php
$yourHttpClient = new HttpClient();
$boxberryClient = new \Boxberry\Client(TEST_API_TOKEN, $client);

try{
    // создание заказа
    $order = $boxberryClient->parcelCreate($parcelCreateRequest);
    
    // отправка
    $res = $boxberryClient->parcelSend($parcelSendRequest);
}catch (ApiException $exception){
    echo $exception->getMessage();
    exit(-1);
}
```


### Тесты
Запуск тестов:
``` bash
$ composer test
```
