<?php

namespace Kavinsky\MRW\Tests\Adapter;

use GuzzleHttp\Psr7\Uri;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Client\Response;
use Kavinsky\MRW\Adapter\LaravelHttpClient;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

it('sends a request and returns a response', function () {
    $pendingRequest = mock(PendingRequest::class);
    $request = mock(RequestInterface::class);
    $response = mock(Response::class);
    $psrResponse = mock(ResponseInterface::class);

    $request->shouldReceive('getHeaders')
        ->once()
        ->andReturn(['Sample-Header' => 'Sample-Value']);
    $request->shouldReceive('getMethod')
        ->once()
        ->andReturn('GET');
    $request->shouldReceive('getUri')
        ->once()
        ->andReturn(new Uri('http://example.com'));

    $body = mock(StreamInterface::class);
    $body->shouldReceive('getContents')
        ->once()
        ->andReturn('');

    $request->shouldReceive('getBody')
        ->once()
        ->andReturn($body);

    $pendingRequest->shouldReceive('withHeaders')
        ->once()
        // ->with([['Sample-Header' => 'Sample-Value']])
        ->andReturnSelf();
    $pendingRequest->shouldReceive('send')
        ->once()
        ->with('GET', 'http://example.com', ['body' => ''])
        ->andReturn($response);

    $response->shouldReceive('toPsrResponse')
        ->once()
        ->andReturn($psrResponse);

    $client = new LaravelHttpClient($pendingRequest);
    $result = $client->sendRequest($request);

    expect($result)->toBe($psrResponse);
});
