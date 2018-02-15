# Fisheye_Lazyload

## Overview
A Magento 2 module that adds support for lazy loading of images.

## Features

* Utilises the [lazysizes](https://github.com/aFarkas/lazysizes) script to add lazy load support for images
* Lazy loading is automatically applied to all\* product images
    * \*Any image created via `Magento\Catalog\Block\Product\Image`
    * This includes:
    	* Product listing (category, search, product list widget)
    	* Product relations (related, upsell, crosssell)
    	* Product comparison
    	* Recently viewed
    	* Cart thumbnails
    	* Wishlist
* Support can be added to any further images by adding the following to `<img>` elements:
	* Add `lazyload` class
	* Change the `src` attribute to `data-src`

## Compatibility

* Magento Community Edition / Enterprise Edition 2.0 / 2.1 / 2.2
* Supports Magento 2 Full Page Cache (including Varnish)

## Installation

```
composer require fisheye/module-lazyload
php bin/magento module:enable Fisheye_Lazyload
php bin/magento setup:upgrade
```

## Contributing
Issues, forks and pull requests welcomed :)