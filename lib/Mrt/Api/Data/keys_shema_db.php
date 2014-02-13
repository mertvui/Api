<?php

$keys = array(
    'public' => array(
        'shema' => 'public',
    ),
    '123' => array(
        'shema' => 'shema1',
    ),
    '456' => array(
        'shema' => 'shema2',
    ),
);

$shemas = array(
    'public' => array(
        'auth' => false,
        'methods' => array(
            'UserMethodList' => array(
                'CommandParser' => 'UserGetMethods',
                'CommandExecutor' => 'UserGetMethods',
                'CommandAnswer' => 'UserGetMethods',
            ),
        ),
    ),
    'shema1' => array(
        'auth' => 'AuthByPassword',
        'methods' => array(
            'UserMethodList' => array(
                'CommandParser' => 'UserGetMethods',
                'CommandExecutor' => 'UserGetMethods',
                'CommandAnswer' => 'UserGetMethods',
            ),
            'ClientCreate' => array(
                'CommandParser' => 'ClientCreate',
                'CommandExecutor' => 'ClientCreate',
                'CommandAnswer' => 'ClientCreate',
            ),
            'ClientGetBalance' => array(
                'CommandParser' => 'ClientGetBalance',
                'CommandExecutor' => 'ClientGetBalance',
                'CommandAnswer' => 'ClientGetBalance',
            ),
            'ClientIncBalance' => array(
                'CommandParser' => 'ClientChangeBalance',
                'CommandExecutor' => 'ClientIncBalance',
                'CommandAnswer' => 'ClientIncBalance',
            ),
            'ClientDecBalance' => array(
                'CommandParser' => 'ClientChangeBalance',
                'CommandExecutor' => 'ClientDecBalance',
                'CommandAnswer' => 'ClientDecBalance',
            ),
        ),
    ),
    'shema2' => array(
        'auth' => 'AuthByRemoteAddr',
        'methods' => array(
            'UserMethodList' => array(
                'CommandParser' => 'UserGetMethods',
                'CommandExecutor' => 'UserGetMethods',
                'CommandAnswer' => 'UserGetMethods',
            ),
            'ClientGetBalance' => array(
                'CommandParser' => 'ClientGetBalance',
                'CommandExecutor' => 'ClientGetBalance',
                'CommandAnswer' => 'ClientGetBalance',
            ),
            'ClientIncBalance' => array(
                'CommandParser' => 'ClientChangeBalance',
                'CommandExecutor' => 'ClientIncBalance',
                'CommandAnswer' => 'ClientIncBalance',
            ),
            'ClientDecBalance' => array(
                'CommandParser' => 'ClientChangeBalance',
                'CommandExecutor' => 'ClientDecBalance',
                'CommandAnswer' => 'ClientDecBalance',
            ),
        ),
    ),
);
