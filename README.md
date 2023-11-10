# boxberry-sdk
SDK для Боксберри

Методы:

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
PHP 7.3 или выше.
***
### Установка
Установка осуществляется с помощью менеджера пакетов Composer

```bash
composer require gwinn/boxberry-sdk
```

***
### Примеры использования

```php
$yourHttpClient = new \GuzzleHttp\Client();
$boxberryClient = new \Boxberry\Client(TEST_API_TOKEN, $yourHttpClient);

$listCitiesRequest = new \Gwinn\Boxberry\Model\Request\Geography\ListCitiesRequest();
$listCitiesRequest->countryCode = '643';
try{
    // получение городов
    $response = $boxberryClient->listCities($listCitiesRequest);
}catch (ApiException $exception){
    echo $exception->getMessage();
    exit(255);
}
```
```php
$yourHttpClient = new \GuzzleHttp\Client();
$boxberryClient = new \Boxberry\Client(TEST_API_TOKEN, $yourHttpClient);

$parcel = new \Gwinn\Boxberry\Model\Request\OrderInfo\ParcelInfoRequest\Parcel();
$parcel->orderId = '123';
$parcelInfoRequest = new \Gwinn\Boxberry\Model\Request\OrderInfo\ParcelInfoRequest();
$parcelInfoRequest->parcels = [$parcel];
try{
    // получение информации о посылке
    $response = $boxberryClient->parcelInfo($parcelInfoRequest);
}catch (ApiException $exception){
    echo $exception->getMessage();
    exit(255);
}
```

### Тесты
Запуск тестов:
``` bash
$ composer test
```
