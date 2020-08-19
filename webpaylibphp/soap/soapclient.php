<?php

/**
 * WSSecuritySoapClient
 * @author     Jean Machuca <correojean@gmail.com>
 * @version    0.1.1
 * Copyright (C) 2006 Jean Machuca, <correojean@gmail.com>
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
 *
 * Everyone is permitted to copy and distribute verbatim copies of this
 * license document, but changing it is not allowed.
*/

require_once('xmlseclibs.php');
require_once('soap-wsse.php');

class WSSecuritySoapClient extends SoapClient {

    private $useSSL = false;
    private $privateKey = "";
    private $publicCert = "";

    function __construct($wsdl, $privateKey, $publicCert, $options) {

        $locationparts = parse_url($wsdl);
        $this->useSSL = $locationparts['scheme'] == "https" ? true : false;
        $this->privateKey = $privateKey;
        $this->publicCert = $publicCert;

        return parent::__construct($wsdl, $options);
    }

    function __doRequest($request, $location, $saction, $version, $one_way = 0) {

        if ($this->useSSL) {
            $locationparts = parse_url($location);
            $location = 'https://';
            if (isset($locationparts['host']))
                $location .= $locationparts['host'];
            if (isset($locationparts['port']))
                $location .= ':' . $locationparts['port'];
            if (isset($locationparts['path']))
                $location .= $locationparts['path'];
            if (isset($locationparts['query']))
                $location .= '?' . $locationparts['query'];
        }
        $doc = new DOMDocument('1.0');

        $doc->loadXML($request);
        $objWSSE = new WSSESoap($doc);
        $objKey = new XMLSecurityKey(XMLSecurityKey::RSA_SHA1, array(
            'type' => 'private'
        ));

        /** False para cargar en modo texto, true para archivo */
        $objKey->loadKey($this->privateKey, FALSE);
        $options = array(
            "insertBefore" => TRUE
        );
        $objWSSE->signSoapDoc($objKey, $options);
        $objWSSE->addIssuerSerial($this->publicCert);
        $objKey = new XMLSecurityKey(XMLSecurityKey::AES256_CBC);
        $objKey->generateSessionKey();
        $retVal = parent::__doRequest($objWSSE->saveXML(), $location, $saction, $version);

        $doc = new DOMDocument();
        $doc->loadXML($retVal);

        return $doc->saveXML();
    }

}

?>
