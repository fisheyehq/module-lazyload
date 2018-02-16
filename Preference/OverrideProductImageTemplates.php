<?php
/**
 * Copyright © Fisheye Media Ltd. All rights reserved.
 * See LICENCE.txt for licence details.
 */
namespace Fisheye\Lazyload\Preference;

use Fisheye\Lazyload\Scope\Config;
use Magento\Catalog\Block\Product\Image;
use Magento\Framework\View\Element\Template\Context;

class OverrideProductImageTemplates extends Image
{
    /**
     * @var Config
     */
    private $config;

    /**
     * Replace hardcoded Magento_Catalog product image templates
     *
     * @param Context $context
     * @param Config $config
     * @param array $data
     */
    public function __construct(
        Context $context,
        Config $config,
        array $data = []
    ) {
        $this->config = $config;

        if (isset($data['template']) && $config->isProductImageLazyloadingEnabled()) {

            $template = str_replace('Magento_Catalog', 'Fisheye_Lazyload', $data['template']);
            $this->setTemplate($template);
            unset($data['template']);
        }
        parent::__construct($context, $data);
    }
}
