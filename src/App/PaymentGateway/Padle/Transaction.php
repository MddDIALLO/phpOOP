<?php

declare(strict_types=1);

namespace App\PaymentGateway\Padle;

//use DateTime;
//use App\Notification;

class Transaction
{
  private const STATUS_PAID = "paid";
  public const STATUS_PENDING = "pending";
  public const STATUS_DECLINED = "diclined";

  public function __construct()
  {
    // echo self::STATUS_PAID;
    //var_dump(new \App\CustomerProfile());
    //var_dump(new \DateTime());
    //var_dump(new DateTime());
    //var_dump(new \App\Notification\Email());
    //var_dump(new Notification\Email());
    //var_dump(\explode(' ', 'Hello World'));
  }

  public function getStatus ()
  {
    return self::STATUS_PAID;
  }
}

/*function explode($separator, $str)
{
  return 'foo';
}*/