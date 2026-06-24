<?php

$urls = [
    '/',
    '/home',
    '/home/index',

    '/products',
    '/products/index',
    '/products/list',
    '/products/show/12',
    '/products/show/999',
    '/products/show/abc',
    '/products/edit/5',
    '/products/delete/8',
    '/products/create',

    '/users',
    '/users/index',
    '/users/show/3',
    '/users/show',
    '/users/edit/42',
    '/users/delete/7',
    '/users/create',

    '/admin',
    '/admin/index',
    '/admin/dashboard',
    '/admin/products',
    '/admin/users',

    '/orders',
    '/orders/list',
    '/orders/show/15',

    '/blog',
    '/blog/show/4',
    '/blog/edit/2',

    '/unknown',
    '/unknown/test',
    '/nothing/here/123',

    '//products//show//12//',
    '/products/show/12/',
    '/products/show/12?sort=asc',
    '/users/edit/42?debug=true',

    '/PRODUCTS/SHOW/12',
    '/Users/Edit/5',

    '/products/show',
    '/products//edit',
    '/products/show/12/extra',
    '/users/edit/42/now',
];

foreach($urls as $i => $current_url){

    $current_url = explode('?', $current_url)[0];
    $current_url = trim($current_url, '/');
     $current_url = strtolower($current_url);

    $segments = explode('/', $current_url);

    $controller = $segments[0] ?? null;
    $action     = $segments[1] ?? null;
    $id         = $segments[2] ?? null;


    $error = !(count($segments) === 3 && is_numeric($id));

    echo "URL : " . $urls[$i] . PHP_EOL;
    echo "Controller : " . $controller . PHP_EOL;
    echo "Action : " . $action . PHP_EOL;
    echo "ID : " . $id . PHP_EOL;

    if($error){
        echo "404" . PHP_EOL;
    }

    echo PHP_EOL;
}