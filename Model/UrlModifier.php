<?php

namespace Swissup\DynamicBaseUrl\Model;

use Magento\Framework\App\RequestInterface;

class UrlModifier
{
    public function __construct(
        private RequestInterface $request
    ) {
    }

    public function execute($url, $mode)
    {
        $dynamicHost = $this->request->getServer('HTTP_HOST');
        if (!$dynamicHost) {
            return $url;
        }

        $host = parse_url($url, PHP_URL_HOST);
        $url = str_replace($host, $dynamicHost, $url);

        if ($this->request->isSecure() && strpos($url, 'http://') === 0) {
            $url = 'https://' . substr($url, 7);
        }

        return $url;
    }
}
