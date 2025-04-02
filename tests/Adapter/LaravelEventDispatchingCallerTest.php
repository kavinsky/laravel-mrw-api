<?php

namespace Kavinsky\MRW\Tests\Adapter;

use Illuminate\Support\Facades\Event;
use Kavinsky\MRW\Adapter\LaravelEventDispatchingCaller;
use Phpro\SoapClient\Caller\Caller;
use Phpro\SoapClient\Event\FaultEvent;
use Phpro\SoapClient\Event\RequestEvent;
use Phpro\SoapClient\Event\ResponseEvent;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;

test('that dispatches RequestEvent and ResponseEvents request events', function () {
    $dispatcher = Event::fake();
    $request = mock(RequestInterface::class);

    $caller = mock(Caller::class);
    $caller->shouldReceive('__invoke')
        ->once()
        ->withArgs(['method', $request]);

    $class = new LaravelEventDispatchingCaller($caller, $dispatcher);
    $class('method', $request);

    $dispatcher->assertDispatchedTimes(RequestEvent::class, 1);
    $dispatcher->assertNotDispatched(FaultEvent::class);
    $dispatcher->assertDispatched(ResponseEvent::class, 1);
});

test('that Fault event is dispatched when exception occurs', function () {
    $dispatcher = Event::fake();
    $request = mock(RequestInterface::class);

    $caller = mock(Caller::class);
    $caller->shouldReceive('__invoke')
        ->once()
        ->andThrow(SoapException::class);

    $class = new LaravelEventDispatchingCaller($caller, $dispatcher);
    $class('method', $request);

    $dispatcher->assertDispatched(RequestEvent::class, 1);
    $dispatcher->assertDispatched(FaultEvent::class);
})->throws(SoapException::class);
