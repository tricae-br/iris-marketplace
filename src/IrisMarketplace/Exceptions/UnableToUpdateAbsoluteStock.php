<?php

namespace IrisMarketplace\Exceptions;

use Iris\Exceptions\ResponseInterface;

class UnableToUpdateAbsoluteStock extends \RuntimeException implements ResponseInterface
{
    /**
     * {@inheritdoc}
     */
    public function getResponseCode()
    {
        return 500;
    }
}
