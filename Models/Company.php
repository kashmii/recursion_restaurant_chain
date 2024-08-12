<?php

namespace Models;

class Company
{
  protected string $name;
  protected int $foundingYear;
  protected string $description;
  protected string $website;
  protected string $phone;
  protected string $industry;
  protected string $ceo;
  protected bool $isPubliclyTraded;
  protected string $founder;
  protected int $totalEmployees;

  public function __construct(
    string $name,
    int $foundingYear,
    string $description,
    string $website,
    string $phone,
    string $industry,
    string $ceo,
    bool $isPubliclyTraded,
    string $founder,
    int $totalEmployees
  ) {
    $this->name = $name;
    $this->foundingYear = $foundingYear;
    $this->description = $description;
    $this->website = $website;
    $this->phone = $phone;
    $this->industry = $industry;
    $this->ceo = $ceo;
    $this->isPubliclyTraded = $isPubliclyTraded;
    $this->founder = $founder;
    $this->totalEmployees = $totalEmployees;
  }

  public function toString(): string
  {
    return sprintf(
      "Name: %s\nFounding Year: %d\nDescription: %s\nWebsite: %s\nPhone: %s\nIndustry: %s\nCEO: %s\nIs Publicly Traded: %s\nFounder: %s\nTotal Employees: %d\n",
      $this->name,
      $this->foundingYear,
      $this->description,
      $this->website,
      $this->phone,
      $this->industry,
      $this->ceo,
      $this->isPubliclyTraded ? 'Yes' : 'No',
      $this->founder,
      $this->totalEmployees
    );
  }
}


