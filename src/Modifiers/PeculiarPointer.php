<?php

namespace Sortarad\Peculiarpointer\Modifiers;

use Statamic\Modifiers\Modifier;

class PeculiarPointer extends Modifier
{
    protected static $handle = 'peculiar';

    protected static $aliases = ['cursor', 'pointer'];

    /**
     * Modify a value.
     *
     * @param mixed  $value    The value to be modified
     * @param array  $params   Any parameters used in the modifier
     * @param array  $context  Contextual values
     * @return mixed
     */
    public function index($value, $params, $context)
    {
        $pointer = collect($value)->filter(function($item) {
            return $item->isImage() || $item->isSvg();
        })->map(function ($item) {
            return $item->url();
        })->values()->first();

        if(! $pointer) {
            return null;
        }

        $styles = [
            sprintf('cursor: url(%1$s) 0 0, pointer;', $pointer ),
            sprintf('cursor: -webkit-image-set(url(%1$s) 1x, url(%1$s) 2x) 0 0, pointer', $pointer ),
        ];
        $value = sprintf( 'style="%s"', implode( $styles ) );

        return $value;
    }
}
