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

/** Contiene datos de integración para realizar pruebas de conectividad */
return $certificate = array(

    /** Ambiente */
    "environment" => "INTEGRACION",

    /** Llave Privada */
    "private_key" => "-----BEGIN RSA PRIVATE KEY-----
MIIEpAIBAAKCAQEAwAwxt4edIh3UuK8r5sHfZzA9a2UoFNV8xj4IKT9t7WMPjhOD
oGrA7M97UBtpReJxhvI1C0Ej/NPL/RjIhHSvs1kUjmzzRHY+Pmm0SYjyw5VW6lJ1
8+f+expKDHHWfthBCfy4tt3PHpUe+2bZmcfz2+l8/GR98Sz1dOW8j+oUOQzYhevF
NajvDRB34SPozGD8HB/4m9H2+s2w5cV81LwAGSokeT8M0B4p6FXAUKjwDPHU5pna
Dsl9fty2PRpG9XGexmgFJ82mYWELXZvReyTxUiB459EqOVcV/tmKXFLMlIwY9XMT
7N0FSBblJ0he9XWSMwD/8hsmDNxKFERtKZ8LBQIDAQABAoIBAGXRkUJWmg6Odkt8
Q/BR9VnGD6oytW9mSILqPHVx9ZwYGxUeb3jLYIGs9xnfjo7IoZwEKe9Pl/7hY5NK
YnUnUEfsAKQKS2eOsS1x6W3bN6pOMQiGs5ae9yLZK00xxaD2knTzEhORwc/bC9QK
EXAgvL9pKSS/Oq51QaW6b6B1YEdmBOXPeEPfFXwtAYj4TOZuaJkwDUF75MV+69KZ
vAAAWZMGp173M7cKI041vjM4Zxgu5KrIwW4jK5p5qtjor3GPBRJ7rgs5n6lT6lv4
SZDDwpcZ1M488M0vnhXfPDU2ZTbUwabN3iPfXHL8SaxliHa3YSpb/Zx+5IDq+GSL
/GtRNbkCgYEA/XMnY13SzZGjMnX7ZhYsnnCAuFOOnD3EXFVt7CyCJug4PvHKg+F6
ZzmmPQBTYqMF/CeKyEKPJcRrWd4WSL+RLZj8pQ2R/9MbMfaRy6WzzPTADyrc4U6W
oyKJVREc3jN0tcvhQbmJ0lxKkBMcBU+S7tla3F7EiiKpIXnIopWb0x8CgYEAwfrg
znLb2lg0kjDWGIl4/w6B3X+0UKJlm+5yPyRqDSc3wTV6M/ruIMfgJt7wpC0BOLxd
1EkA9usp7ZXZkR8mskSQOZtNxMz9g9HLC/D1R7V6JFVWBI7bp+H6DI/BfO+v5XT9
T0cD62RydKMg1d3SjDtq/ahRZmlfBD1hvx58IVsCgYEA6BRJDgE85cYlRTCp6roF
U3O7Oo4wuTsKEm6bwDalW1ErJ+AqTAbtGZa9dYBV2q1i7pmayHPCNpgcoObvSuA3
5SQAvHanqTU64s5ghLUP5m57a6gZKCrZXzphvMZ1w7Ykec/eTVvDKyAdmr4U23wZ
FKNtQvt4RvEkJCYrJU2PqYsCgYBzOiXkPNJgR1kjJiNne/IGAIYgH0XrSCx3jhML
cwQUQCGcgbnPutVNX63FKVVlEN7S5wINojgSdOr5GLSewhRofNX3gkuWBfbqIOsu
crohGKovfwmTt5C/jzrLz3EuV+rysKXwO80WPRrIMkbFA/mYF4uclimUXi91A0lX
EDLIVQKBgQCKbkknqKox30+43NjWim/tGPqzMLIAs4Yz0l5J1oVMu5Qs/O7wiYsX
+sfajdH16qkF1OfysnhXLCxdj2C1IhoS0lh+ozeZTX4CA2qzEzFtX/QenROCDNdC
FK/PnO+BHzUQIRUN5T6k6YmLS8s0m4WUQSNoquKDybrzemVqCxsQjg==
-----END RSA PRIVATE KEY-----",

    /** Certificado Publico */
    "public_cert" => "-----BEGIN CERTIFICATE-----
MIIDujCCAqICCQDhiouPIpKQ9TANBgkqhkiG9w0BAQsFADCBnjELMAkGA1UEBhMC
Q0wxETAPBgNVBAgMCFNhbnRpYWdvMRIwEAYDVQQKDAlUcmFuc2JhbmsxETAPBgNV
BAcMCFNhbnRpYWdvMRUwEwYDVQQDDAw1OTcwMjAwMDAzMDAxFzAVBgNVBAsMDkNh
bmFsZXNSZW1vdG9zMSUwIwYJKoZIhvcNAQkBFhZpbnRlZ3JhZG9yZXNAdmFyaW9z
LmNsMB4XDTE2MDIxMTIxMDgzMVoXDTI0MDIwOTIxMDgzMVowgZ4xCzAJBgNVBAYT
AkNMMREwDwYDVQQIDAhTYW50aWFnbzESMBAGA1UECgwJVHJhbnNiYW5rMREwDwYD
VQQHDAhTYW50aWFnbzEVMBMGA1UEAwwMNTk3MDIwMDAwMzAwMRcwFQYDVQQLDA5D
YW5hbGVzUmVtb3RvczElMCMGCSqGSIb3DQEJARYWaW50ZWdyYWRvcmVzQHZhcmlv
cy5jbDCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBAMAMMbeHnSId1Liv
K+bB32cwPWtlKBTVfMY+CCk/be1jD44Tg6BqwOzPe1AbaUXicYbyNQtBI/zTy/0Y
yIR0r7NZFI5s80R2Pj5ptEmI8sOVVupSdfPn/nsaSgxx1n7YQQn8uLbdzx6VHvtm
2ZnH89vpfPxkffEs9XTlvI/qFDkM2IXrxTWo7w0Qd+Ej6Mxg/Bwf+JvR9vrNsOXF
fNS8ABkqJHk/DNAeKehVwFCo8Azx1OaZ2g7JfX7ctj0aRvVxnsZoBSfNpmFhC12b
0Xsk8VIgeOfRKjlXFf7ZilxSzJSMGPVzE+zdBUgW5SdIXvV1kjMA//IbJgzcShRE
bSmfCwUCAwEAATANBgkqhkiG9w0BAQsFAAOCAQEAmbnfvsP1pvKkaa9C2S5ebPka
PZrnv2C25HH0bYu8Vf8u5fjKcPTJ5GxU4POncvS7uKbM5LQh5axWuUJNrmD4qNGd
i/RmXJbu4zMtUsTtcnaADFOjcYlRphCLZ+hLFRbHYgXB+XxBUjFFBpYx1SbULzgY
NSIfumJ3j0KvYlqGzRsVqrDJiTaYCSwdDIZ/YDyz69CSED7Kv2BHff+uhZ6lZ2rw
lGNSsgTGDk/fl2aheEIsagmTmjYakeLnk/zTcEKA78qA1zSndUyQETEpKLXy6LNB
H5YfD9d78UXGjhyNTM3DtcuNsM/Qr3WziTDDqG5JWqpPn6/AcpZtXFNL4Q8XLQ==
-----END CERTIFICATE-----",

/** Certificado Privado */
"webpay_cert" => "-----BEGIN CERTIFICATE-----
MIIDKTCCAhECBFZl7uIwDQYJKoZIhvcNAQEFBQAwWTELMAkGA1UEBhMCQ0wxDjAMBgNVBAgMBUNo
aWxlMREwDwYDVQQHDAhTYW50aWFnbzEMMAoGA1UECgwDa2R1MQwwCgYDVQQLDANrZHUxCzAJBgNV
BAMMAjEwMB4XDTE1MTIwNzIwNDEwNloXDTE4MDkwMjIwNDEwNlowWTELMAkGA1UEBhMCQ0wxDjAM
BgNVBAgMBUNoaWxlMREwDwYDVQQHDAhTYW50aWFnbzEMMAoGA1UECgwDa2R1MQwwCgYDVQQLDANr
ZHUxCzAJBgNVBAMMAjEwMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAizJUWTDC7nfP
3jmZpWXFdG9oKyBrU0Bdl6fKif9a1GrwevThsU5Dq3wiRfYvomStNjFDYFXOs9pRIxqX2AWDybjA
X/+bdDTVbM+xXllA9stJY8s7hxAvwwO7IEuOmYDpmLKP7J+4KkNH7yxsKZyLL9trG3iSjV6Y6SO5
EEhUsdxoJFAow/h7qizJW0kOaWRcljf7kpqJAL3AadIuqV+hlf+Ts/64aMsfSJJA6xdbdp9ddgVF
oqUl1M8vpmd4glxlSrYmEkbYwdI9uF2d6bAeaneBPJFZr6KQqlbbrVyeJZqmMlEPy0qPco1TIxrd
EHlXgIFJLyyMRAyjX9i4l70xjwIDAQABMA0GCSqGSIb3DQEBBQUAA4IBAQBn3tUPS6e2USgMrPKp
sxU4OTfW64+mfD6QrVeBOh81f6aGHa67sMJn8FE/cG6jrUmX/FP1/Cpbpvkm5UUlFKpgaFfHv+Kg
CpEvgcRIv/OeIi6Jbuu3NrPdGPwzYkzlOQnmgio5RGb6GSs+OQ0mUWZ9J1+YtdZc+xTga0x7nsCT
5xNcUXsZKhyjoKhXtxJm3eyB3ysLNyuL/RHy/EyNEWiUhvt1SIePnW+Y4/cjQWYwNqSqMzTSW9TP
2QR2bX/W2H6ktRcLsgBK9mq7lE36p3q6c9DtZJE+xfA4NGCYWM9hd8pbusnoNO7AFxJZOuuvLZI7
JvD7YLhPvCYKry7N6x3l
-----END CERTIFICATE-----",

    /** Codigo Comercio */
    "commerce_code" => "597020000541",

);
