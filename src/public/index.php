<?php

declare(strict_types=1);

use App\PaymentGateway\Padle\Transaction;

require_once __DIR__ . '/../vendor/autoload.php';

$padleTransaction = new Transaction();

// $id = new \Ramsey\Uuid\UuidFactory();

// echo $id->uuid4();

// echo Transaction::STATUS_PAID . '<br />';
echo $padleTransaction->getStatus() . '<br />';
echo Transaction::STATUS_PENDING . '<br />';
echo Transaction::class;

// require_once '../App/PaymentGateway/Padle/Transaction.php';
// require_once '../App/PaymentGateway/Padle/CustomerProfile.php';
// require_once '../App/PaymentGateway/Stripe/Transaction.php';
// require_once '../App/Notification/Email.php';

// spl_autoload_register(
//   function ($class) {
//     $path = __DIR__.'/../' . lcfirst(str_replace('\\', '/', $class)) . '.php';
    
//     require $path;
//   }
// );

// use App\PaymentGateway\Padle\Transaction;

// $padleTransaction = new Transaction();

// var_dump($padleTransaction);

// use App\PaymentGateway\Padle\Transaction;
// use App\PaymentGateway\Padle\CustomerProfile;
// use App\PaymentGateway\Padle\{Transaction, CustomerProfile};
// use App\PaymentGateway\Stripe\Transaction as StripeTransaction;

// $padleTransaction = new Transaction();
// $stripeTransaction = new StripeTransaction();
// $customerProfile = new CustomerProfile;

// var_dump($customerProfile, $padleTransaction, $stripeTransaction);

//var_dump(new PaymentGateway\Padle\Transaction());
//var_dump(new PaymentGateway\Stripe\Transaction());

// Classes And Objects

/*$transaction = new Transaction(5, 'FirtTransaction');
$transaction->customer = new Customer();

echo $transaction->getCustomer()?->getPaymentProfile()?->id ?? 'Hi';
$transaction1 = (new Transaction(100, 'transaction 1'))
  ->addTax(18)
  ->applyDiscount(10);

$transaction2 = (new Transaction(150, 'transaction 2'))
  ->addTax(10)
  ->applyDiscount(15);

var_dump($transaction1->getAmount(), $transaction2->getAmount());*/

/*phpinfo();

echo '<pre>';
print_r($_SERVER);
echo '</pre>';*/