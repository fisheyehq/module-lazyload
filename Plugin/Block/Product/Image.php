<?php
/**
 * Copyright © Fisheye Media Ltd. All rights reserved.
 * See LICENCE.txt for licence details.
 */
namespace Fisheye\Lazyload\Plugin\Block\Product;


class Image
{

    /**
     * Plugin for lazyloading images - Set template to Fisheye_Lazyload
     *
     * @param \Magento\Catalog\Block\Product\Image $subject
     * @param $template
     * @return array
     */
    public function beforeSetTemplate(\Magento\Catalog\Block\Product\Image $subject, $template) {
        $template = str_replace('Magento_Catalog', 'Fisheye_Lazyload', $template);
        return [$template];
    }
}
