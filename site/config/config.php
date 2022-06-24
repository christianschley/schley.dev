<?php

return [

    'auth' => [
        'methods' => ['password', 'password-reset']
    ],

    'session' => [
        'durationNormal' => 7200, // default: 2 hours
        'durationLong' => 1209600, // default: 2 weeks
        'timeout' => 1800, // default: half an hour
        'cookieName' => 'af_session',
        'gcInterval' => 100 // default: cleanup every ~100 requests
    ],

];
