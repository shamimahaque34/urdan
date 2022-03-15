<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static $customer;
    protected static $existCustomer;

    public static function newCustomer ($request)
    {
        self::$existCustomer = Customer::where('phone', $request->phone)->first();
        if (self::$existCustomer)
        {
            self::$customer = self::$existCustomer;
        } else {
            self::$customer             = new Customer();
            self::$customer->name       = $request->name;
            self::$customer->phone      = $request->phone;
            self::$customer->email      = $request->email;
            self::$customer->address    = $request->address;
            self::$customer->save();
        }
        return self::$customer;
    }
}
