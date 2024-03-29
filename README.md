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
    * Optional: add a dummy `src` with transparent 1px x 1px image to avoid broken image links prior to lazy load (see product image templates as example)
    * Optional: add `loading="lazy"` to enable native browser lazy-loading where possible. Note that this is not true native lazy-loading, as the `lazysizes` script and its `native-loading` plug-in need to be run, so there's still a dependency on JavaScript before affected images will show.
* Preloading
    * Preloading means the media source will be loaded even if not in the viewport such as megamenu icons/images.
    * The `preload_elements` layout argument allows you to specify selectors of which elements can be preloaded. This can be configured per page.
    * Use the `lazypreload` class on element(s) you wish to preload.

## Compatibility

* Magento Community Edition / Enterprise Edition 2.4.x (see older releases for 2.0 - 2.3 support)
* Supports Magento 2 Full Page Cache (including Varnish)

## Installation

```
composer require fisheye/module-lazyload
php bin/magento module:enable Fisheye_Lazyload
php bin/magento setup:upgrade
```

## Contributing
Issues, forks and pull requests welcomed :)
