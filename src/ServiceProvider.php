<?php

namespace Sortarad\Peculiarpointer;

use Statamic\Providers\AddonServiceProvider;
use Sortarad\Peculiarpointer\Modifiers\PeculiarPointer;

class ServiceProvider extends AddonServiceProvider
{
    protected $modifiers = [
        PeculiarPointer::class,
    ];
}
