<?php

namespace Models;

class Company
{
  private string $name;
  private int $foundingYear;
  private string $description;
  private string $website;
  private string $phone;
  private string $industry;
  private string $ceo;
  private bool $isPubliclyTraded;
  private string $founder;
  private int $totalEmployees;

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
}
