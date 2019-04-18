<?php

declare(strict_types=1);

namespace Brick\VarExporter\Tests\Classes;

class PublicAndPrivateProperties extends PublicPropertiesOnly
{
    private $baz = 'defaultValue';

    protected function setBaz($baz)
    {
        $this->baz = $baz;
    }

    protected function unsetBaz()
    {
        unset($this->baz);
    }
}
