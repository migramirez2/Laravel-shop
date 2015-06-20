<?php

/**
 * This file is part of Amsgames\LaravelShop,
 * Shop functionality for Laravel.
 *
 * @copyright Amsgames, LLC
 * @license MIT
 * @package Amsgames\LaravelShop
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Cart Model
    |--------------------------------------------------------------------------
    |
    | This is the Cart model used by LaravelShop to create correct relations.
    | Update the model if it is in a different namespace.
    |
    */
    'cart' => 'App\Cart',

    /*
    |--------------------------------------------------------------------------
    | Cart Database Table
    |--------------------------------------------------------------------------
    |
    | This is the table used by LaravelShop to save cart data to the database.
    |
    */
    'cart_table' => 'cart',

    /*
    |--------------------------------------------------------------------------
    | Order Model
    |--------------------------------------------------------------------------
    |
    | This is the Order model used by LaravelShop to create correct relations.
    | Update the model if it is in a different namespace.
    |
    */
    'order' => 'App\Order',

    /*
    |--------------------------------------------------------------------------
    | Order Database Table
    |--------------------------------------------------------------------------
    |
    | This is the table used by LaravelShop to save order data to the database.
    |
    */
    'order_table' => 'order',

    /*
    |--------------------------------------------------------------------------
    | Item Model
    |--------------------------------------------------------------------------
    |
    | This is the Item model used by LaravelShop to create correct relations.
    | Update the model if it is in a different namespace.
    |
    */
    'item' => 'App\Item',

    /*
    |--------------------------------------------------------------------------
    | Item Database Table
    |--------------------------------------------------------------------------
    |
    | This is the table used by LaravelShop to save cart data to the database.
    |
    */
    'item_table' => 'item',

    /*
    |--------------------------------------------------------------------------
    | Shop currency code
    |--------------------------------------------------------------------------
    |
    | Currency to use within shop.
    |
    */
    'currency' => 'USD',

    /*
    |--------------------------------------------------------------------------
    | Shop currency symbol
    |--------------------------------------------------------------------------
    |
    | Currency symbol to use within shop.
    |
    */
    'currency_symbol' => '$',

    /*
    |--------------------------------------------------------------------------
    | Format with which to display prices across the store.
    |--------------------------------------------------------------------------
    |
    | :symbol   = Currency symbol. i.e. "$"
    | :price    = Price. i.e. "0.99"
    | :currency = Currency code. i.e. "USD"
    |
    | Example format: ':symbol:price (:currency)'
    | Example result: '$0.99 (USD)'
    |
    */
    'display_price_format' => ':symbol:price',

];
