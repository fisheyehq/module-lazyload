<?php
/**
 * Copyright © Fisheye Media Ltd. All rights reserved.
 * See LICENCE.txt for licence details.
 */
namespace Fisheye\Lazyload\Scope;

use Magento\Framework\App\Config\ScopeConfigInterface;

class Config
{
    const XML_PATH_CATALOG_PRODUCT_IMAGE_LAZYLOAD_ENABLED = 'catalog/product_image_lazyload/enabled';

    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;

    /**
     * Config constructor.
     *
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(ScopeConfigInterface $scopeConfig)
    {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * @return bool
     */
    public function isProductImageLazyloadingEnabled()
    {
        return $this->scopeConfig->isSetFlag(self::XML_PATH_CATALOG_PRODUCT_IMAGE_LAZYLOAD_ENABLED);
    }
}
