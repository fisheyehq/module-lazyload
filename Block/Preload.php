<?php
/**
 * Copyright © Fisheye Media Ltd. All rights reserved.
 * See LICENCE.txt for licence details.
 */

namespace Fisheye\Lazyload\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\Serialize\SerializerInterface;

class Preload extends Template
{
    /**
     * @var SerializerInterface
     */
    protected $serializer;

    /**
     * @param Template\Context $context
     * @param SerializerInterface $serializer
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        SerializerInterface $serializer,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->serializer = $serializer;
    }

    /**
     * @return string
     */
    public function getJsConfig(): string
    {
        return $this->serializer->serialize([
            'preload_selectors' => $this->getData('preload_elements'),
        ]);
    }
}
