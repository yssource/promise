<?php

namespace React\Promise;

use React\Promise\PromiseAdapter\CallbackPromiseAdapter;

class DeferredTest extends TestCase
{
    use PromiseTest\FullTestTrait;

    public function getPromiseTestAdapter()
    {
        $d = new Deferred();

        return new CallbackPromiseAdapter([
            'promise'  => [$d, 'promise'],
            'resolve'  => [$d, 'resolve'],
            'reject'   => [$d, 'reject'],
            'progress' => [$d, 'progress'],
        ]);
    }
}