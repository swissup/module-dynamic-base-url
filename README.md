# DynamicBaseUrl

DynamicBaseUrl - is a Magento2 module that allows browsing Magento store using
different base URLs without modifying `base_url` values in database.

It's useful when you want to work with your Magento installation via
Ngrok, Expose, or other tunnel application and also keep working local URLs:

 -  magento.test — Working local URL
 -  generated-url.ngrok-free.app — Working Ngrok URL

## Installation

```bash
composer require swissup/module-dynamic-base-url
bin/magento module:enable Swissup_DynamicBaseUrl
```
