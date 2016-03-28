<?php

namespace IrisMarketplace\Interfaces\Partner;

use DTOMarketplace\Context;

interface Order
{
    /**
     * Confirm order creation
     *
     * @param \IrisMarketplace\Context\Partner\Order\ConfirmOrder $context
     * @return void
     */
    public function confirmOrder(
        Context\Venture\Order\ConfirmOrder $context
    );
}
