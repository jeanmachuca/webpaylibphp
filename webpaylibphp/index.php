<?php
/**
 * WebpayLib TBK
 * ________________
 *
 * Author: Jean Machuca <correojean@gmail.com>
 *
 * Libería para Webpay Plus Transbank. Desarrollada en 2010,
 * liberada Open Source el 18 de Agosto de 2020
 *
 * Copyright (C) 2010 Jean Machuca,<correojean@gmail.com>
 *
 * Permission is hereby granted, free of charge,
 * to any person obtaining a copy of this software and associated documentation files (the "Software"),
 * to deal in the Software without restriction, including without limitation the rights to use, copy,
 * modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit
 * persons to whom the Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
 * IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM,
 * DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE,
 * ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * WebPay Plus is a trademark of Transbank
*/

require_once( './webpay.php' );
require_once( './certificates/certificate-normal-choice.php' );

$request_body = file_get_contents('php://input');
$payload = json_decode($request_body);

$settings = new Settings();
$settings->setEnvironment($certificate['environment']);
$settings->setCommerceCode($certificate['commerce_code']);
$settings->setPrivateKey($certificate['private_key']);
$settings->setPublicCert($certificate['public_cert']);
$settings->setWebpayCert($certificate['webpay_cert']);

/** Creacion Objeto Webpay */
$webpay = new Webpay($settings);

//print "<pre>".var_dump($payload)."</pre>";

$result = $webpay->getNormalTransaction()->initTransaction($payload->amount,
                                                            $payload->buyOrder,
                                                            $payload->sessionId,
                                                            $payload->urlReturn,
                                                            $payload->urlFinal);


if (!headers_sent()) {
  header('Content-Type: application/json; charset=utf-8');
}
print json_encode($result);

?>
