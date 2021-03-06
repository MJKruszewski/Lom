<?php

use Ytake\Lom\Access;
use Ytake\Lom\Meta\Data;
/**
 * @Data
 */
class GetterSetterAnnotation
{
    /**
     * @var string $message
     */
    private $message;
    /**
     * @var string $testing
     */
    private $testing;

    public function __toString()
    {
        return 'GetterSetterAnnotation(' . $this->getMessage() . ', ' . $this->getTesting() . ')';
    }
}