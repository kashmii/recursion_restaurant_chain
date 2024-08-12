<!-- User クラスを拡張 -->
<?php

namespace Models;

use DateTime;

class Employee extends User
{
  private string $jobTitle;
  private float $salary;
  private DateTime $startDate;
  private array $awards;

  public function __construct(
    int $id,
    string $firstName,
    string $lastName,
    string $email,
    string $password,
    string $phoneNumber,
    string $address,
    DateTime $birthDate,
    DateTime $membershipExpirationDate,
    string $role,
    string $jobTitle,
    float $salary,
    DateTime $startDate,
    array $awards
  ) {
    parent::__construct(
      $id,
      $firstName,
      $lastName,
      $email,
      $password,
      $phoneNumber,
      $address,
      $birthDate,
      $membershipExpirationDate,
      $role,
    );
    $this->jobTitle = $jobTitle;
    $this->salary = $salary;
    $this->startDate = $startDate;
    $this->awards = $awards;
  }

  public function toString(): string
  {
    return sprintf(
      "ID: %d\nFirst Name: %s\nLast Name: %s\nEmail: %s\nPhone Number: %s\nAddress: %s\nBirth Date: %s\nMembership Expiration Date: %s\nRole: %s\nJob Title: %s\nSalary: %.2f\nStart Date: %s\nAwards: %s\n",
      $this->id,
      $this->firstName,
      $this->lastName,
      $this->email,
      $this->phoneNumber,
      $this->address,
      $this->birthDate->format('Y-m-d'),
      $this->membershipExpirationDate->format('Y-m-d'),
      $this->role,
      $this->jobTitle,
      $this->salary,
      $this->startDate->format('Y-m-d'),
      implode(', ', $this->awards)
    );
  }

  public function toHTML()
  {
    return sprintf(
      "
    <div class='employee-card'>
        <div class='avatar'>SAMPLE</div>
        <h2>%s %s</h2>
        <p>%s</p>
        <p>%s</p>
        <p>%s</p>
        <p>Birth Date: %s</p>
        <p>Membership Expiration Date: %s</p>
        <p>Role: %s</p>
        <p>Job Title: %s</p>
        <p>Salary: %.2f</p>
        <p>Start Date: %s</p>
        <p>Awards: %s</p>
    </div>",
      $this->firstName,
      $this->lastName,
      $this->email,
      $this->phoneNumber,
      $this->address,
      $this->birthDate->format('Y-m-d'),
      $this->membershipExpirationDate->format('Y-m-d'),
      $this->role,
      $this->jobTitle,
      $this->salary,
      $this->startDate->format('Y-m-d'),
      implode(', ', $this->awards)
    );
  }
}
