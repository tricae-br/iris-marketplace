<?php

namespace IrisMarketplace\Interfaces\Partner;

use DTOMarketplace\Context;

interface Product
{
    /**
     * Create product
     *
     * @param Context\Venture\Product\Create $context
     * @return IrisMarketplace\DataWrapper\Catalog\Config
     */
    public function create(Context\Venture\Product\Create $context);

    /**
     * Update product information
     *
     * @param Context\Venture\Product\Update $context
     * @return IrisMarketplace\DataWrapper\Catalog\Config
     */
    public function update(Context\Venture\Product\Update $context);

    /**
     * Update price
     *
     * @param Context\Venture\Product\UpdatePrice $context
     */
    public function updatePrice(Context\Venture\Product\UpdatePrice $context);

    /**
     * Update stock
     *
     * @param ContextVenture\Product\UpdateStock $context
     * @throws \IrisMarketplace\Exceptions\UnableToUpdateAbsoluteStock
     */
    public function updateStock(Context\Venture\Product\UpdateStock $context);
}
