<?php
/**
 * Copyright © Fisheye Media Ltd. All rights reserved.
 * See LICENCE.txt for licence details.
 */
namespace Fisheye\Lazyload\Plugin;

use Fisheye\Lazyload\Scope\Config;
use Magento\Catalog\Block\Product\Image as ImageSubject;

class OverrideProductImageTemplate
{
    /**
     * @var Config
     */
    private $config;

    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    public function beforeSetTemplate(ImageSubject $subject, string $template): array
    {
        if ($this->config->isProductImageLazyloadingEnabled()) {
            // Set template to Fisheye_Lazyload
            $template = str_replace('Magento_Catalog', 'Fisheye_Lazyload', $template);
        }
        return [$template];
    }
}
