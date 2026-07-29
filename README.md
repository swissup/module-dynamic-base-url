# DynamicBaseUrl

DynamicBaseUrl - is a Magento2 module that allows browsing Magento store using
different base URLs, or your IP address without modifying `base_url`
values in the database.

It's useful when you want to work with your local Magento installation via
Ngrok, Expose, or other tunnel application and also keep working local URLs:

 -  magento.test — Working local URL
 -  192.168.1.x — Working local URL. Useful for mobile devices on the same network
 -  generated-url.ngrok-free.app — Working Ngrok URL

## Installation

```bash
composer require swissup/module-dynamic-base-url
bin/magento module:enable Swissup_DynamicBaseUrl
```
