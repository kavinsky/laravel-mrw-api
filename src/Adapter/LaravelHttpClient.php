<?php

namespace Kavinsky\MRW\Adapter;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class LaravelHttpClient implements ClientInterface
{
    /**
     * @param  mixed[]  $options
     */
    public static function make(array $options = []): static
    {
        return new static(Http::withOptions($options));
    }

    final public function __construct(protected PendingRequest $httpClient) {}

    /**
     * {@inheritDoc}
     */
    public function sendRequest(RequestInterface $request): ResponseInterface
    {
        return $this->httpClient
            ->withHeaders($request->getHeaders())
            ->send($request->getMethod(), (string) $request->getUri(), [
                'body' => $request->getBody()->getContents(),
            ])->toPsrResponse();
    }
}
