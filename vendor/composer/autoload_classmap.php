<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);

return array(
    'ComposerAutoloaderInitcf9fcdedc738306e2da21f7fc347795d' => $vendorDir . '/composer/autoload_real.php',
    'Composer\\Autoload\\ClassLoader' => $vendorDir . '/composer/ClassLoader.php',
    'Composer\\Autoload\\ComposerStaticInitcf9fcdedc738306e2da21f7fc347795d' => $vendorDir . '/composer/autoload_static.php',
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'Connection' => $baseDir . '/core/database/Connection.php',
    'GuzzleHttp\\BodySummarizer' => $vendorDir . '/guzzlehttp/guzzle/src/BodySummarizer.php',
    'GuzzleHttp\\BodySummarizerInterface' => $vendorDir . '/guzzlehttp/guzzle/src/BodySummarizerInterface.php',
    'GuzzleHttp\\Client' => $vendorDir . '/guzzlehttp/guzzle/src/Client.php',
    'GuzzleHttp\\ClientInterface' => $vendorDir . '/guzzlehttp/guzzle/src/ClientInterface.php',
    'GuzzleHttp\\ClientTrait' => $vendorDir . '/guzzlehttp/guzzle/src/ClientTrait.php',
    'GuzzleHttp\\Cookie\\CookieJar' => $vendorDir . '/guzzlehttp/guzzle/src/Cookie/CookieJar.php',
    'GuzzleHttp\\Cookie\\CookieJarInterface' => $vendorDir . '/guzzlehttp/guzzle/src/Cookie/CookieJarInterface.php',
    'GuzzleHttp\\Cookie\\FileCookieJar' => $vendorDir . '/guzzlehttp/guzzle/src/Cookie/FileCookieJar.php',
    'GuzzleHttp\\Cookie\\SessionCookieJar' => $vendorDir . '/guzzlehttp/guzzle/src/Cookie/SessionCookieJar.php',
    'GuzzleHttp\\Cookie\\SetCookie' => $vendorDir . '/guzzlehttp/guzzle/src/Cookie/SetCookie.php',
    'GuzzleHttp\\Exception\\BadResponseException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/BadResponseException.php',
    'GuzzleHttp\\Exception\\ClientException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/ClientException.php',
    'GuzzleHttp\\Exception\\ConnectException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/ConnectException.php',
    'GuzzleHttp\\Exception\\GuzzleException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/GuzzleException.php',
    'GuzzleHttp\\Exception\\InvalidArgumentException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/InvalidArgumentException.php',
    'GuzzleHttp\\Exception\\RequestException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/RequestException.php',
    'GuzzleHttp\\Exception\\ServerException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/ServerException.php',
    'GuzzleHttp\\Exception\\TooManyRedirectsException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/TooManyRedirectsException.php',
    'GuzzleHttp\\Exception\\TransferException' => $vendorDir . '/guzzlehttp/guzzle/src/Exception/TransferException.php',
    'GuzzleHttp\\HandlerStack' => $vendorDir . '/guzzlehttp/guzzle/src/HandlerStack.php',
    'GuzzleHttp\\Handler\\CurlFactory' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/CurlFactory.php',
    'GuzzleHttp\\Handler\\CurlFactoryInterface' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/CurlFactoryInterface.php',
    'GuzzleHttp\\Handler\\CurlHandler' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/CurlHandler.php',
    'GuzzleHttp\\Handler\\CurlMultiHandler' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/CurlMultiHandler.php',
    'GuzzleHttp\\Handler\\EasyHandle' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/EasyHandle.php',
    'GuzzleHttp\\Handler\\HeaderProcessor' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/HeaderProcessor.php',
    'GuzzleHttp\\Handler\\MockHandler' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/MockHandler.php',
    'GuzzleHttp\\Handler\\Proxy' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/Proxy.php',
    'GuzzleHttp\\Handler\\StreamHandler' => $vendorDir . '/guzzlehttp/guzzle/src/Handler/StreamHandler.php',
    'GuzzleHttp\\MessageFormatter' => $vendorDir . '/guzzlehttp/guzzle/src/MessageFormatter.php',
    'GuzzleHttp\\MessageFormatterInterface' => $vendorDir . '/guzzlehttp/guzzle/src/MessageFormatterInterface.php',
    'GuzzleHttp\\Middleware' => $vendorDir . '/guzzlehttp/guzzle/src/Middleware.php',
    'GuzzleHttp\\Pool' => $vendorDir . '/guzzlehttp/guzzle/src/Pool.php',
    'GuzzleHttp\\PrepareBodyMiddleware' => $vendorDir . '/guzzlehttp/guzzle/src/PrepareBodyMiddleware.php',
    'GuzzleHttp\\Promise\\AggregateException' => $vendorDir . '/guzzlehttp/promises/src/AggregateException.php',
    'GuzzleHttp\\Promise\\CancellationException' => $vendorDir . '/guzzlehttp/promises/src/CancellationException.php',
    'GuzzleHttp\\Promise\\Coroutine' => $vendorDir . '/guzzlehttp/promises/src/Coroutine.php',
    'GuzzleHttp\\Promise\\Create' => $vendorDir . '/guzzlehttp/promises/src/Create.php',
    'GuzzleHttp\\Promise\\Each' => $vendorDir . '/guzzlehttp/promises/src/Each.php',
    'GuzzleHttp\\Promise\\EachPromise' => $vendorDir . '/guzzlehttp/promises/src/EachPromise.php',
    'GuzzleHttp\\Promise\\FulfilledPromise' => $vendorDir . '/guzzlehttp/promises/src/FulfilledPromise.php',
    'GuzzleHttp\\Promise\\Is' => $vendorDir . '/guzzlehttp/promises/src/Is.php',
    'GuzzleHttp\\Promise\\Promise' => $vendorDir . '/guzzlehttp/promises/src/Promise.php',
    'GuzzleHttp\\Promise\\PromiseInterface' => $vendorDir . '/guzzlehttp/promises/src/PromiseInterface.php',
    'GuzzleHttp\\Promise\\PromisorInterface' => $vendorDir . '/guzzlehttp/promises/src/PromisorInterface.php',
    'GuzzleHttp\\Promise\\RejectedPromise' => $vendorDir . '/guzzlehttp/promises/src/RejectedPromise.php',
    'GuzzleHttp\\Promise\\RejectionException' => $vendorDir . '/guzzlehttp/promises/src/RejectionException.php',
    'GuzzleHttp\\Promise\\TaskQueue' => $vendorDir . '/guzzlehttp/promises/src/TaskQueue.php',
    'GuzzleHttp\\Promise\\TaskQueueInterface' => $vendorDir . '/guzzlehttp/promises/src/TaskQueueInterface.php',
    'GuzzleHttp\\Promise\\Utils' => $vendorDir . '/guzzlehttp/promises/src/Utils.php',
    'GuzzleHttp\\Psr7\\AppendStream' => $vendorDir . '/guzzlehttp/psr7/src/AppendStream.php',
    'GuzzleHttp\\Psr7\\BufferStream' => $vendorDir . '/guzzlehttp/psr7/src/BufferStream.php',
    'GuzzleHttp\\Psr7\\CachingStream' => $vendorDir . '/guzzlehttp/psr7/src/CachingStream.php',
    'GuzzleHttp\\Psr7\\DroppingStream' => $vendorDir . '/guzzlehttp/psr7/src/DroppingStream.php',
    'GuzzleHttp\\Psr7\\Exception\\MalformedUriException' => $vendorDir . '/guzzlehttp/psr7/src/Exception/MalformedUriException.php',
    'GuzzleHttp\\Psr7\\FnStream' => $vendorDir . '/guzzlehttp/psr7/src/FnStream.php',
    'GuzzleHttp\\Psr7\\Header' => $vendorDir . '/guzzlehttp/psr7/src/Header.php',
    'GuzzleHttp\\Psr7\\HttpFactory' => $vendorDir . '/guzzlehttp/psr7/src/HttpFactory.php',
    'GuzzleHttp\\Psr7\\InflateStream' => $vendorDir . '/guzzlehttp/psr7/src/InflateStream.php',
    'GuzzleHttp\\Psr7\\LazyOpenStream' => $vendorDir . '/guzzlehttp/psr7/src/LazyOpenStream.php',
    'GuzzleHttp\\Psr7\\LimitStream' => $vendorDir . '/guzzlehttp/psr7/src/LimitStream.php',
    'GuzzleHttp\\Psr7\\Message' => $vendorDir . '/guzzlehttp/psr7/src/Message.php',
    'GuzzleHttp\\Psr7\\MessageTrait' => $vendorDir . '/guzzlehttp/psr7/src/MessageTrait.php',
    'GuzzleHttp\\Psr7\\MimeType' => $vendorDir . '/guzzlehttp/psr7/src/MimeType.php',
    'GuzzleHttp\\Psr7\\MultipartStream' => $vendorDir . '/guzzlehttp/psr7/src/MultipartStream.php',
    'GuzzleHttp\\Psr7\\NoSeekStream' => $vendorDir . '/guzzlehttp/psr7/src/NoSeekStream.php',
    'GuzzleHttp\\Psr7\\PumpStream' => $vendorDir . '/guzzlehttp/psr7/src/PumpStream.php',
    'GuzzleHttp\\Psr7\\Query' => $vendorDir . '/guzzlehttp/psr7/src/Query.php',
    'GuzzleHttp\\Psr7\\Request' => $vendorDir . '/guzzlehttp/psr7/src/Request.php',
    'GuzzleHttp\\Psr7\\Response' => $vendorDir . '/guzzlehttp/psr7/src/Response.php',
    'GuzzleHttp\\Psr7\\Rfc7230' => $vendorDir . '/guzzlehttp/psr7/src/Rfc7230.php',
    'GuzzleHttp\\Psr7\\ServerRequest' => $vendorDir . '/guzzlehttp/psr7/src/ServerRequest.php',
    'GuzzleHttp\\Psr7\\Stream' => $vendorDir . '/guzzlehttp/psr7/src/Stream.php',
    'GuzzleHttp\\Psr7\\StreamDecoratorTrait' => $vendorDir . '/guzzlehttp/psr7/src/StreamDecoratorTrait.php',
    'GuzzleHttp\\Psr7\\StreamWrapper' => $vendorDir . '/guzzlehttp/psr7/src/StreamWrapper.php',
    'GuzzleHttp\\Psr7\\UploadedFile' => $vendorDir . '/guzzlehttp/psr7/src/UploadedFile.php',
    'GuzzleHttp\\Psr7\\Uri' => $vendorDir . '/guzzlehttp/psr7/src/Uri.php',
    'GuzzleHttp\\Psr7\\UriComparator' => $vendorDir . '/guzzlehttp/psr7/src/UriComparator.php',
    'GuzzleHttp\\Psr7\\UriNormalizer' => $vendorDir . '/guzzlehttp/psr7/src/UriNormalizer.php',
    'GuzzleHttp\\Psr7\\UriResolver' => $vendorDir . '/guzzlehttp/psr7/src/UriResolver.php',
    'GuzzleHttp\\Psr7\\Utils' => $vendorDir . '/guzzlehttp/psr7/src/Utils.php',
    'GuzzleHttp\\RedirectMiddleware' => $vendorDir . '/guzzlehttp/guzzle/src/RedirectMiddleware.php',
    'GuzzleHttp\\RequestOptions' => $vendorDir . '/guzzlehttp/guzzle/src/RequestOptions.php',
    'GuzzleHttp\\RetryMiddleware' => $vendorDir . '/guzzlehttp/guzzle/src/RetryMiddleware.php',
    'GuzzleHttp\\TransferStats' => $vendorDir . '/guzzlehttp/guzzle/src/TransferStats.php',
    'GuzzleHttp\\Utils' => $vendorDir . '/guzzlehttp/guzzle/src/Utils.php',
    'ParagonIE\\Sodium\\Compat' => $vendorDir . '/paragonie/sodium_compat/namespaced/Compat.php',
    'ParagonIE\\Sodium\\Core\\BLAKE2b' => $vendorDir . '/paragonie/sodium_compat/namespaced/Core/BLAKE2b.php',
    'ParagonIE\\Sodium\\Core\\ChaCha20' => $vendorDir . '/paragonie/sodium_compat/namespaced/Core/ChaCha20.php',
    'ParagonIE\\Sodium\\Core\\ChaCha20\\Ctx' => $vendorDir . '/paragonie/sodium_compat/namespaced/Core/ChaCha20/Ctx.php',
    'ParagonIE\\Sodium\\Core\\ChaCha20\\IetfCtx' => $vendorDir . '/paragonie/sodium_compat/namespaced/Core/ChaCha20/IetfCtx.php',
    'ParagonIE\\Sodium\\Core\\Curve25519' => $vendorDir . '/paragonie/sodium_compat/namespaced/Core/Curve25519.php',
    'ParagonIE\\Sodium\\Core\\Curve25519\\Fe' => $vendorDir . '/paragonie/sodium_compat/namespaced/Core/Curve25519/Fe.php',
    'ParagonIE\\Sodium\\Core\\Curve25519\\Ge\\Cached' => $vendorDir . '/paragonie/sodium_compat/namespaced/Core/Curve25519/Ge/Cached.php',
    'ParagonIE\\Sodium\\Core\\Curve25519\\Ge\\P1p1' => $vendorDir . '/paragonie/sodium_compat/namespaced/Core/Curve25519/Ge/P1p1.php',
    'ParagonIE\\Sodium\\Core\\Curve25519\\Ge\\P2' => $vendorDir . '/paragonie/sodium_compat/namespaced/Core/Curve25519/Ge/P2.php',
    'ParagonIE\\Sodium\\Core\\Curve25519\\Ge\\P3' => $vendorDir . '/paragonie/sodium_compat/namespaced/Core/Curve25519/Ge/P3.php',
    'ParagonIE\\Sodium\\Core\\Curve25519\\Ge\\Precomp' => $vendorDir . '/paragonie/sodium_compat/namespaced/Core/Curve25519/Ge/Precomp.php',
    'ParagonIE\\Sodium\\Core\\Curve25519\\H' => $vendorDir . '/paragonie/sodium_compat/namespaced/Core/Curve25519/H.php',
    'ParagonIE\\Sodium\\Core\\Ed25519' => $vendorDir . '/paragonie/sodium_compat/namespaced/Core/Ed25519.php',
    'ParagonIE\\Sodium\\Core\\HChaCha20' => $vendorDir . '/paragonie/sodium_compat/namespaced/Core/HChaCha20.php',
    'ParagonIE\\Sodium\\Core\\HSalsa20' => $vendorDir . '/paragonie/sodium_compat/namespaced/Core/HSalsa20.php',
    'ParagonIE\\Sodium\\Core\\Poly1305' => $vendorDir . '/paragonie/sodium_compat/namespaced/Core/Poly1305.php',
    'ParagonIE\\Sodium\\Core\\Poly1305\\State' => $vendorDir . '/paragonie/sodium_compat/namespaced/Core/Poly1305/State.php',
    'ParagonIE\\Sodium\\Core\\Salsa20' => $vendorDir . '/paragonie/sodium_compat/namespaced/Core/Salsa20.php',
    'ParagonIE\\Sodium\\Core\\SipHash' => $vendorDir . '/paragonie/sodium_compat/namespaced/Core/SipHash.php',
    'ParagonIE\\Sodium\\Core\\Util' => $vendorDir . '/paragonie/sodium_compat/namespaced/Core/Util.php',
    'ParagonIE\\Sodium\\Core\\X25519' => $vendorDir . '/paragonie/sodium_compat/namespaced/Core/X25519.php',
    'ParagonIE\\Sodium\\Core\\XChaCha20' => $vendorDir . '/paragonie/sodium_compat/namespaced/Core/XChaCha20.php',
    'ParagonIE\\Sodium\\Core\\Xsalsa20' => $vendorDir . '/paragonie/sodium_compat/namespaced/Core/Xsalsa20.php',
    'ParagonIE\\Sodium\\Crypto' => $vendorDir . '/paragonie/sodium_compat/namespaced/Crypto.php',
    'ParagonIE\\Sodium\\File' => $vendorDir . '/paragonie/sodium_compat/namespaced/File.php',
    'ParagonIE_Sodium_Compat' => $vendorDir . '/paragonie/sodium_compat/src/Compat.php',
    'ParagonIE_Sodium_Core32_BLAKE2b' => $vendorDir . '/paragonie/sodium_compat/src/Core32/BLAKE2b.php',
    'ParagonIE_Sodium_Core32_ChaCha20' => $vendorDir . '/paragonie/sodium_compat/src/Core32/ChaCha20.php',
    'ParagonIE_Sodium_Core32_ChaCha20_Ctx' => $vendorDir . '/paragonie/sodium_compat/src/Core32/ChaCha20/Ctx.php',
    'ParagonIE_Sodium_Core32_ChaCha20_IetfCtx' => $vendorDir . '/paragonie/sodium_compat/src/Core32/ChaCha20/IetfCtx.php',
    'ParagonIE_Sodium_Core32_Curve25519' => $vendorDir . '/paragonie/sodium_compat/src/Core32/Curve25519.php',
    'ParagonIE_Sodium_Core32_Curve25519_Fe' => $vendorDir . '/paragonie/sodium_compat/src/Core32/Curve25519/Fe.php',
    'ParagonIE_Sodium_Core32_Curve25519_Ge_Cached' => $vendorDir . '/paragonie/sodium_compat/src/Core32/Curve25519/Ge/Cached.php',
    'ParagonIE_Sodium_Core32_Curve25519_Ge_P1p1' => $vendorDir . '/paragonie/sodium_compat/src/Core32/Curve25519/Ge/P1p1.php',
    'ParagonIE_Sodium_Core32_Curve25519_Ge_P2' => $vendorDir . '/paragonie/sodium_compat/src/Core32/Curve25519/Ge/P2.php',
    'ParagonIE_Sodium_Core32_Curve25519_Ge_P3' => $vendorDir . '/paragonie/sodium_compat/src/Core32/Curve25519/Ge/P3.php',
    'ParagonIE_Sodium_Core32_Curve25519_Ge_Precomp' => $vendorDir . '/paragonie/sodium_compat/src/Core32/Curve25519/Ge/Precomp.php',
    'ParagonIE_Sodium_Core32_Curve25519_H' => $vendorDir . '/paragonie/sodium_compat/src/Core32/Curve25519/H.php',
    'ParagonIE_Sodium_Core32_Ed25519' => $vendorDir . '/paragonie/sodium_compat/src/Core32/Ed25519.php',
    'ParagonIE_Sodium_Core32_HChaCha20' => $vendorDir . '/paragonie/sodium_compat/src/Core32/HChaCha20.php',
    'ParagonIE_Sodium_Core32_HSalsa20' => $vendorDir . '/paragonie/sodium_compat/src/Core32/HSalsa20.php',
    'ParagonIE_Sodium_Core32_Int32' => $vendorDir . '/paragonie/sodium_compat/src/Core32/Int32.php',
    'ParagonIE_Sodium_Core32_Int64' => $vendorDir . '/paragonie/sodium_compat/src/Core32/Int64.php',
    'ParagonIE_Sodium_Core32_Poly1305' => $vendorDir . '/paragonie/sodium_compat/src/Core32/Poly1305.php',
    'ParagonIE_Sodium_Core32_Poly1305_State' => $vendorDir . '/paragonie/sodium_compat/src/Core32/Poly1305/State.php',
    'ParagonIE_Sodium_Core32_Salsa20' => $vendorDir . '/paragonie/sodium_compat/src/Core32/Salsa20.php',
    'ParagonIE_Sodium_Core32_SecretStream_State' => $vendorDir . '/paragonie/sodium_compat/src/Core32/SecretStream/State.php',
    'ParagonIE_Sodium_Core32_SipHash' => $vendorDir . '/paragonie/sodium_compat/src/Core32/SipHash.php',
    'ParagonIE_Sodium_Core32_Util' => $vendorDir . '/paragonie/sodium_compat/src/Core32/Util.php',
    'ParagonIE_Sodium_Core32_X25519' => $vendorDir . '/paragonie/sodium_compat/src/Core32/X25519.php',
    'ParagonIE_Sodium_Core32_XChaCha20' => $vendorDir . '/paragonie/sodium_compat/src/Core32/XChaCha20.php',
    'ParagonIE_Sodium_Core32_XSalsa20' => $vendorDir . '/paragonie/sodium_compat/src/Core32/XSalsa20.php',
    'ParagonIE_Sodium_Core_BLAKE2b' => $vendorDir . '/paragonie/sodium_compat/src/Core/BLAKE2b.php',
    'ParagonIE_Sodium_Core_Base64_Original' => $vendorDir . '/paragonie/sodium_compat/src/Core/Base64/Original.php',
    'ParagonIE_Sodium_Core_Base64_UrlSafe' => $vendorDir . '/paragonie/sodium_compat/src/Core/Base64/UrlSafe.php',
    'ParagonIE_Sodium_Core_ChaCha20' => $vendorDir . '/paragonie/sodium_compat/src/Core/ChaCha20.php',
    'ParagonIE_Sodium_Core_ChaCha20_Ctx' => $vendorDir . '/paragonie/sodium_compat/src/Core/ChaCha20/Ctx.php',
    'ParagonIE_Sodium_Core_ChaCha20_IetfCtx' => $vendorDir . '/paragonie/sodium_compat/src/Core/ChaCha20/IetfCtx.php',
    'ParagonIE_Sodium_Core_Curve25519' => $vendorDir . '/paragonie/sodium_compat/src/Core/Curve25519.php',
    'ParagonIE_Sodium_Core_Curve25519_Fe' => $vendorDir . '/paragonie/sodium_compat/src/Core/Curve25519/Fe.php',
    'ParagonIE_Sodium_Core_Curve25519_Ge_Cached' => $vendorDir . '/paragonie/sodium_compat/src/Core/Curve25519/Ge/Cached.php',
    'ParagonIE_Sodium_Core_Curve25519_Ge_P1p1' => $vendorDir . '/paragonie/sodium_compat/src/Core/Curve25519/Ge/P1p1.php',
    'ParagonIE_Sodium_Core_Curve25519_Ge_P2' => $vendorDir . '/paragonie/sodium_compat/src/Core/Curve25519/Ge/P2.php',
    'ParagonIE_Sodium_Core_Curve25519_Ge_P3' => $vendorDir . '/paragonie/sodium_compat/src/Core/Curve25519/Ge/P3.php',
    'ParagonIE_Sodium_Core_Curve25519_Ge_Precomp' => $vendorDir . '/paragonie/sodium_compat/src/Core/Curve25519/Ge/Precomp.php',
    'ParagonIE_Sodium_Core_Curve25519_H' => $vendorDir . '/paragonie/sodium_compat/src/Core/Curve25519/H.php',
    'ParagonIE_Sodium_Core_Ed25519' => $vendorDir . '/paragonie/sodium_compat/src/Core/Ed25519.php',
    'ParagonIE_Sodium_Core_HChaCha20' => $vendorDir . '/paragonie/sodium_compat/src/Core/HChaCha20.php',
    'ParagonIE_Sodium_Core_HSalsa20' => $vendorDir . '/paragonie/sodium_compat/src/Core/HSalsa20.php',
    'ParagonIE_Sodium_Core_Poly1305' => $vendorDir . '/paragonie/sodium_compat/src/Core/Poly1305.php',
    'ParagonIE_Sodium_Core_Poly1305_State' => $vendorDir . '/paragonie/sodium_compat/src/Core/Poly1305/State.php',
    'ParagonIE_Sodium_Core_Ristretto255' => $vendorDir . '/paragonie/sodium_compat/src/Core/Ristretto255.php',
    'ParagonIE_Sodium_Core_Salsa20' => $vendorDir . '/paragonie/sodium_compat/src/Core/Salsa20.php',
    'ParagonIE_Sodium_Core_SecretStream_State' => $vendorDir . '/paragonie/sodium_compat/src/Core/SecretStream/State.php',
    'ParagonIE_Sodium_Core_SipHash' => $vendorDir . '/paragonie/sodium_compat/src/Core/SipHash.php',
    'ParagonIE_Sodium_Core_Util' => $vendorDir . '/paragonie/sodium_compat/src/Core/Util.php',
    'ParagonIE_Sodium_Core_X25519' => $vendorDir . '/paragonie/sodium_compat/src/Core/X25519.php',
    'ParagonIE_Sodium_Core_XChaCha20' => $vendorDir . '/paragonie/sodium_compat/src/Core/XChaCha20.php',
    'ParagonIE_Sodium_Core_XSalsa20' => $vendorDir . '/paragonie/sodium_compat/src/Core/XSalsa20.php',
    'ParagonIE_Sodium_Crypto' => $vendorDir . '/paragonie/sodium_compat/src/Crypto.php',
    'ParagonIE_Sodium_Crypto32' => $vendorDir . '/paragonie/sodium_compat/src/Crypto32.php',
    'ParagonIE_Sodium_File' => $vendorDir . '/paragonie/sodium_compat/src/File.php',
    'Psr\\Http\\Client\\ClientExceptionInterface' => $vendorDir . '/psr/http-client/src/ClientExceptionInterface.php',
    'Psr\\Http\\Client\\ClientInterface' => $vendorDir . '/psr/http-client/src/ClientInterface.php',
    'Psr\\Http\\Client\\NetworkExceptionInterface' => $vendorDir . '/psr/http-client/src/NetworkExceptionInterface.php',
    'Psr\\Http\\Client\\RequestExceptionInterface' => $vendorDir . '/psr/http-client/src/RequestExceptionInterface.php',
    'Psr\\Http\\Message\\MessageInterface' => $vendorDir . '/psr/http-message/src/MessageInterface.php',
    'Psr\\Http\\Message\\RequestFactoryInterface' => $vendorDir . '/psr/http-factory/src/RequestFactoryInterface.php',
    'Psr\\Http\\Message\\RequestInterface' => $vendorDir . '/psr/http-message/src/RequestInterface.php',
    'Psr\\Http\\Message\\ResponseFactoryInterface' => $vendorDir . '/psr/http-factory/src/ResponseFactoryInterface.php',
    'Psr\\Http\\Message\\ResponseInterface' => $vendorDir . '/psr/http-message/src/ResponseInterface.php',
    'Psr\\Http\\Message\\ServerRequestFactoryInterface' => $vendorDir . '/psr/http-factory/src/ServerRequestFactoryInterface.php',
    'Psr\\Http\\Message\\ServerRequestInterface' => $vendorDir . '/psr/http-message/src/ServerRequestInterface.php',
    'Psr\\Http\\Message\\StreamFactoryInterface' => $vendorDir . '/psr/http-factory/src/StreamFactoryInterface.php',
    'Psr\\Http\\Message\\StreamInterface' => $vendorDir . '/psr/http-message/src/StreamInterface.php',
    'Psr\\Http\\Message\\UploadedFileFactoryInterface' => $vendorDir . '/psr/http-factory/src/UploadedFileFactoryInterface.php',
    'Psr\\Http\\Message\\UploadedFileInterface' => $vendorDir . '/psr/http-message/src/UploadedFileInterface.php',
    'Psr\\Http\\Message\\UriFactoryInterface' => $vendorDir . '/psr/http-factory/src/UriFactoryInterface.php',
    'Psr\\Http\\Message\\UriInterface' => $vendorDir . '/psr/http-message/src/UriInterface.php',
    'Psr\\Log\\AbstractLogger' => $vendorDir . '/psr/log/src/AbstractLogger.php',
    'Psr\\Log\\InvalidArgumentException' => $vendorDir . '/psr/log/src/InvalidArgumentException.php',
    'Psr\\Log\\LogLevel' => $vendorDir . '/psr/log/src/LogLevel.php',
    'Psr\\Log\\LoggerAwareInterface' => $vendorDir . '/psr/log/src/LoggerAwareInterface.php',
    'Psr\\Log\\LoggerAwareTrait' => $vendorDir . '/psr/log/src/LoggerAwareTrait.php',
    'Psr\\Log\\LoggerInterface' => $vendorDir . '/psr/log/src/LoggerInterface.php',
    'Psr\\Log\\LoggerTrait' => $vendorDir . '/psr/log/src/LoggerTrait.php',
    'Psr\\Log\\NullLogger' => $vendorDir . '/psr/log/src/NullLogger.php',
    'Pusher\\ApiErrorException' => $vendorDir . '/pusher/pusher-php-server/src/ApiErrorException.php',
    'Pusher\\Pusher' => $vendorDir . '/pusher/pusher-php-server/src/Pusher.php',
    'Pusher\\PusherCrypto' => $vendorDir . '/pusher/pusher-php-server/src/PusherCrypto.php',
    'Pusher\\PusherException' => $vendorDir . '/pusher/pusher-php-server/src/PusherException.php',
    'Pusher\\PusherInstance' => $vendorDir . '/pusher/pusher-php-server/src/PusherInstance.php',
    'Pusher\\PusherInterface' => $vendorDir . '/pusher/pusher-php-server/src/PusherInterface.php',
    'Pusher\\Webhook' => $vendorDir . '/pusher/pusher-php-server/src/Webhook.php',
    'Router' => $baseDir . '/core/router/Router.php',
    'SodiumException' => $vendorDir . '/paragonie/sodium_compat/src/SodiumException.php',
    'SplFixedArray' => $vendorDir . '/paragonie/sodium_compat/src/PHP52/SplFixedArray.php',
    'core\\App\\App' => $baseDir . '/core/App/App.php',
    'core\\controllers\\AuthController' => $baseDir . '/core/controllers/AuthController.php',
    'core\\controllers\\admin\\PostsController' => $baseDir . '/core/controllers/admin/PostsController.php',
    'core\\controllers\\admin\\RoleController' => $baseDir . '/core/controllers/admin/RoleController.php',
    'core\\controllers\\user\\BlogsController' => $baseDir . '/core/controllers/user/BlogsController.php',
);
