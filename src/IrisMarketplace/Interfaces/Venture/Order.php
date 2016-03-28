<?php

namespace IrisMarketplace\Interfaces\Venture;

use DTOMarketplace\Context;

interface Order
{
    /**
     * Save an new order from partner
     *
     * @param Context\Partner\Order\Create $context
     * @return void
     * @throws \IrisMarketplace\Exceptions\PartnerNotFound
     * @throws \IrisMarketplace\Exceptions\UnableToCreateCustomer
     * @throws \IrisMarketplace\Exceptions\UnableToCreateOrder
     */
    public function create(Context\Partner\Order\Create $context);

    /**
     * Confirm payment from partner
     *
     * @param Context\Partner\Order\ConfirmPayment $context
     * @return void
     * @throws \IrisMarketplace\Exceptions\OrderNotFound
     * @throws \IrisMarketplace\Exceptions\UnableToConfirmPayment
     */
    public function confirmPayment(
        Context\Partner\Order\ConfirmPayment $context
    );

    /**
     * Cancel order received from partner
     *
     * @param Context\Partner\Order\Cancel $context
     * @throws \IrisMarketplace\Exceptions\OrderNotFound
     * @throws \IrisMarketplace\Exceptions\UnableToCancelOrder
     */
    public function cancel(Context\Partner\Order\Cancel $context);
}
