<?php

declare(strict_types=1);

namespace Sokil\Merchant\ProductFeed\Model\ProductField;

/**
 * @see https://developers.facebook.com/docs/commerce-platform/catalog/fields Facebook field definition
 */
abstract class AbstractScalarField extends AbstractField
{
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function __toString()
    {
        return $this->value;
    }
}