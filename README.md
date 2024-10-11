# Widget de Producto de VentiPay para Adobe Commerce (Magento)

Agrega fácilmente el widget de VentiPay a la página de producto de tu tienda. Los clientes son más propensos a usar VentiPay cuando ven la ventaja de pagar en cuotas sin interés desde el inicio de su proceso de compra. Este widget ayuda a aumentar tu Valor Promedio de Pedido (AOV) y mejorar la experiencia de compra de tus clientes.


## Requisitos

* PHP 7+
* Adobe Commerce 2.4.6

## Versionamiento

Usamos [SemVer](https://semver.org) para organizar el versionamiento, así que puedes actualizar de manera segura y regular cualquier versión menor y de patch.

## Changelog

Usamos la [página de releases](https://github.com/ventipay/ventipay-product-widget-adobe-commerce/releases) de GitHub para documentar los cambios.

## Instalación

```
composer require ventipay/adobe-commerce-product-widget
php bin/magento module:enable VentiPay_ProductWidget --clear-static-content
php bin/magento setup:upgrade
php bin/magento cache:clean
php bin/magento cache:flush
php bin/magento setup:di:compile

```

## Licencia

OSL