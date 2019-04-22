<?php
declare(strict_types=1);

namespace InternalPhpDoc\Nested;

/**
 * Class ApiNestedLevelClass
 * @package InternalPhpDoc\Nested
 * @api
 */
class ApiNestedLevelClass
{
    public function method()
    {
        return 1;
    }

    /**
     * @api
     * @return int
     */
    public function apiMethod()
    {
        return 2;
    }

    /**
     * @internal
     * @return int
     */
    public function internalMethod()
    {
        return 3;
    }
}
