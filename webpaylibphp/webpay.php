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

require_once(__DIR__ . '/soap/soap-wsse.php');
require_once(__DIR__ . '/soap/soap-validation.php');
require_once(__DIR__ . '/soap/soapclient.php');

include('settings.php');
include('webpay-normal.php');
include('webpay-nullify.php');

class Webpay {

    var $settings, $webpayNormal, $webpayMallNormal, $webpayNullify, $webpayCapture, $webpayOneClick, $webpayCompleteTransaction;

    function __construct($params) {

        $this->settings = $params;
    }

    public function getNormalTransaction() {
        if ($this->webpayNormal == null) {
            $this->webpayNormal = new WebPayNormal($this->settings);
        }
        return $this->webpayNormal;
    }


    public function getNullifyTransaction() {
        if ($this->webpayNullify == null) {
            $this->webpayNullify = new WebpayNullify($this->settings);
        }
        return $this->webpayNullify;
    }


}

class baseBean {

}

class getTransactionResult {

    var $tokenInput; //string

}

class getTransactionResultResponse {

    var $return; //transactionResultOutput

}
