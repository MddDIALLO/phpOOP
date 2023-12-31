<?php

declare(strict_types=1);

class Transaction
{
  public ?Customer $customer = null;

  public function __construct(
    private float $amount,
    private string $description
  ) {
    //echo $amount;
  }

  public function getCustomer(): ?Customer
  {
    return $this->customer;
  }

  /*private float $amount;
  private string $description;

  public function __construct(
    float $amount,
    string $description
    ) {
    $this->amount = $amount;
    $this->description = $description;
  }

  public function addTax(float $rate): Transaction
  {
    $this->amount += $this->amount * $rate / 100;
    return $this;
  }

  public function applyDiscount(float $rate): Transaction
  {
    $this->amount -= $this->amount * $rate /100;
    return $this;
  }

  public function getAmount(): float
  {
    return $this->amount;
  }

  public function __destruct()
  {
    echo 'Distruct ' . $this->description . '<br />';
  }*/
}