<?php
/**
 * Copyright © Fisheye Media Ltd. All rights reserved.
 * See LICENCE.txt for licence details.
 */
namespace Fisheye\Lazyload\Plugin;

use Magento\Catalog\Block\Product\Image as ImageSubject;

class OverrideProductImageTemplate
{

    /**
     * Plugin for lazyloading images - Set template to Fisheye_Lazyload
     *
     * @param ImageSubject $subject
     * @param $template
     * @return array
     */
    public function beforeSetTemplate(ImageSubject $subject, $template)
    {
        $template = str_replace('Magento_Catalog', 'Fisheye_Lazyload', $template);
        return [$template];
    }
}
