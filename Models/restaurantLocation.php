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

  public function toString(): string
  {
    return sprintf(
      "Name: %s\nAddress: %s\nCity: %s\nState: %s\nZipcode: %s\nEmployees: %s\nIs Open: %s\nHas Drive Thru: %s\n",
      $this->name,
      $this->address,
      $this->city,
      $this->state,
      $this->zipcode,
      implode(', ', $this->employees),
      $this->isOpen ? 'Yes' : 'No',
      $this->hasDriveThru ? 'Yes' : 'No'
    );
  }

  public function toHTML()
  {
    return sprintf(
      "
      <div class='restaurant-location-card'>
          <h2>%s</h2>
          <p>Address: %s</p>
          <p>City: %s</p>
          <p>State: %s</p>
          <p>Zipcode: %s</p>
          <p>Employees: %s</p>
          <p>Is Open: %s</p>
          <p>Has Drive Thru: %s</p>
      </div>",
      $this->name,
      $this->address,
      $this->city,
      $this->state,
      $this->zipcode,
      implode(', ', $this->employees),
      $this->isOpen ? 'Yes' : 'No',
      $this->hasDriveThru ? 'Yes' : 'No'
    );
  }
}
