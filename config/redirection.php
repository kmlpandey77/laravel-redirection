<?php

return [
    /**
     * By defult route is `admin`
     *
     */
    'prefix' => 'admin',

    /**
     * Defining middleware for route
     */

    'middleware' => [
        'web',
        // 'auth' // or admin
    ],

    /**
     *
     */
    'route_link' => 'redirects'
];
