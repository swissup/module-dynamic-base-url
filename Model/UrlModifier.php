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
        $host = parse_url($url, PHP_URL_HOST);
        $url = str_replace($host, $this->request->getServer('HTTP_HOST'), $url);

        if ($this->request->isSecure() && strpos($url, 'http://') === 0) {
            $url = 'https://' . substr($url, 7);
        }

        return $url;
    }
}
