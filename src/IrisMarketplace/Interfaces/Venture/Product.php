<?php

namespace IrisMarketplace\Interfaces\Venture;

use DTOMarketplace\Context;

interface Product
{
    /**
     * Confirm the product creation
     *
     * @param Context\Partner\Product\ConfirmCreate
     * @return void
     */
    public function confirmCreate(
        Context\Partner\Product\ConfirmCreate $context
    );
}
