<?php

namespace IrisMarketplace\Interfaces\Partner;

use DTOMarketplace\Context;

interface PostPayment
{
    /**
     * @param Context\Venture\PostPayment\Ship $context
     * @return array
     */
    public function ship(Context\Venture\PostPayment\Ship $context);

    /**
     * @param Context\Venture\PostPayment\Deliver $context
     * @return array
     */
    public function deliver(Context\Venture\PostPayment\Deliver $context);

    /**
     * @param Context\Venture\PostPayment\FailDelivery $context
     * @return array
     */
    public function failDelivery(
        Context\Venture\PostPayment\FailDelivery $context
    );

    /**
     * Cancel from venture
     *
     * @param Context\Venture\PostPayment\Cancel $context
     * @return array
     */
    public function cancel(Context\Venture\PostPayment\Cancel $context);
}
