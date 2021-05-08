/**
 * Copyright © Fisheye Media Ltd. All rights reserved.
 * See LICENCE.txt for licence details.
 */
var config = {
    map: {
        '*': {
            'lazysizes': 'Fisheye_Lazyload/js/lazysizes.min',
        }
    },
    deps: [
        'lazysizes',
        'Fisheye_Lazyload/js/ls.native-loading.min',
    ],
    shim: {
        'Fisheye_Lazyload/js/lazysizes.min': {
            // Yes, there is a RequireJS-compatible (UMD) version of lazysizes
            // available and this works just fine on its own. However there's a
            // bug in Magento's mixins.js that prevents anything using the UMD
            // pattern from working at all. Instead, we're using the 'global'
            // version of lazysizes and this 'shim' configuration to map it into
            // RequireJS. We need to have RequireJS working properly for
            // lazysizes plugins to work well.
            exports: 'lazySizes',
        },
    },
};
