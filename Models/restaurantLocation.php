<?php

namespace Models;

class RestaurantLocation
{
  private string $name;
  private string $address;
  private string $city;
  private string $state;
  private string $zipcode;
  // employee のインスタンスの配列
  private array $employees;
  private bool $isOpen;
  private bool $hasDriveThru;

  public function __construct(
    string $name,
    string $address,
    string $city,
    string $state,
    string $zipcode,
    array $employees,
    bool $isOpen,
    bool $hasDriveThru
  ) {
    $this->name = $name;
    $this->address = $address;
    $this->city = $city;
    $this->state = $state;
    $this->zipcode = $zipcode;
    $this->employees = $employees;
    $this->isOpen = $isOpen;
    $this->hasDriveThru = $hasDriveThru;
  }
}
