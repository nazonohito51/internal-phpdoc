<?php
declare(strict_types=1);

namespace InternalPhpDoc;

/**
 * Class InternalTopLevelClass
 * @package InternalPhpDoc
 * @internal
 */
class InternalTopLevelClass
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
