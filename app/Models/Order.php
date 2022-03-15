<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cart;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected static $order;

    public static function newOrder($customer)
    {
        self::$order = new Order();
        self::$order->customer_id       = $customer->id;
        self::$order->order_total       = Cart::getTotal();
        self::$order->order_status      = 'pending';
        self::$order->save();

        return self::$order;
    }
}
