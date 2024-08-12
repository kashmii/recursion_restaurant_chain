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

  public function toHTML()
  {
    return sprintf(
      "
    <div class='company-card'>
        <h2>%s</h2>
        <p>%s</p>
        <p>%s</p>
        <p>%s</p>
        <p>%s</p>
        <p>Industry: %s</p>
        <p>CEO: %s</p>
        <p>Is Publicly Traded: %s</p>
        <p>Founder: %s</p>
        <p>Total Employees: %d</p>
        </div>",
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

  public function toMarkdown()
  {
    return "## Company: {$this->name}
             - Founding Year: {$this->foundingYear}
             - Description: {$this->description}
             - Website: {$this->website}
             - Phone: {$this->phone}
             - Industry: {$this->industry}
             - CEO: {$this->ceo}
             - Is Publicly Traded: " . ($this->isPubliclyTraded ? 'Yes' : 'No') . "
             - Founder: {$this->founder}
             - Total Employees: {$this->totalEmployees}";
  }

  public function toArray()
  {
    return [
      'name' => $this->name,
      'foundingYear' => $this->foundingYear,
      'description' => $this->description,
      'website' => $this->website,
      'phone' => $this->phone,
      'industry' => $this->industry,
      'ceo' => $this->ceo,
      'isPubliclyTraded' => $this->isPubliclyTraded,
      'founder' => $this->founder,
      'totalEmployees' => $this->totalEmployees
    ];
  }
}
