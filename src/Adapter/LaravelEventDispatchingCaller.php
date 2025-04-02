<?php

namespace Kavinsky\MRW\Adapter;

use Illuminate\Contracts\Events\Dispatcher;
use Phpro\SoapClient\Caller\Caller;
use Phpro\SoapClient\Event;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class LaravelEventDispatchingCaller implements Caller
{
    private Caller $caller;

    private Dispatcher $eventDispatcher;

    public function __construct(Caller $caller, Dispatcher $eventDispatcher)
    {
        $this->caller = $caller;
        $this->eventDispatcher = $eventDispatcher;
    }

    public function __invoke(string $method, RequestInterface $request): ResultInterface
    {
        $this->eventDispatcher->dispatch($requestEvent = new Event\RequestEvent($method, $request));
        $request = $requestEvent->getRequest();

        try {
            $result = ($this->caller)($method, $request);
        } catch (SoapException $exception) {
            $this->eventDispatcher->dispatch(new Event\FaultEvent($exception, $requestEvent));
            throw $exception;
        }

        $this->eventDispatcher->dispatch($responseEvent = new Event\ResponseEvent($requestEvent, $result));

        return $responseEvent->getResponse();
    }
}
