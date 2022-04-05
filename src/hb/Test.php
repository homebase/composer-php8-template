<?php

declare(strict_types=1);

namespace hb;

/**
 *  Every class MUST have a description
 *
 *  A sample class.
 */
class Test {
    /**
     * Every non trivial method SHOULD have a description (and ideally test)
     * Sample method.
     */
    function hello(string $str): string {
        return 'Hello '.$str;
    }
}
