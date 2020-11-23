/**
 * Copyright © Fisheye Media Ltd. All rights reserved.
 * See LICENCE.txt for licence details.
 */
/* global lazySizes */
define([
    'jquery',
    'lazysizes',
], function ($) {
    'use strict';

    /**
     * @param {Object} config
     */
    return function (config) {
        var selectors,
            key,
            $preloadElements;

        if (!config
            || !config.preload_selectors
            || $.isEmptyObject(config.preload_selectors)
            || !window.lazySizes
        ) {
            // Do nothing if no selectors or lazySizes not found
            return;
        }

        selectors = config.preload_selectors;

        // For each <item> node in the 'preload_elements' layout argument
        for (key in selectors) {
            if (Object.prototype.hasOwnProperty.call(selectors, key)) {
                $preloadElements = $(selectors[key]);

                // For each element in the collection, unveil it
                $preloadElements.each(function () {
                    lazySizes.loader.unveil(this);
                });
            }
        }
    };
});
