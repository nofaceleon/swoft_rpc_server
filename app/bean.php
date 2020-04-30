<?php

use Swoft\Http\Server\HttpServer;
use Swoft\Rpc\Server\ServiceServer;

return [
    'logger' => [
        'flushRequest' => false,
        'enable' => false,
        'json' => false,
    ],
    'httpServer' => [
        'class' => HttpServer::class,
        'port' => 18306,
        /* @see HttpServer::$setting */
        'setting' => [
            'worker_num' => 8,
        ]
    ],

    //配置rpc服务
    'rpcServer' => [
        'class' => ServiceServer::class,
        'port' => 18307,
    ],


];
