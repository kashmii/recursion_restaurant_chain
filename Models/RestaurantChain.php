<!-- Company クラスを拡張 -->
<?php

namespace Models;

class RestaurantChain extends Company
{
  private int $chainId;
  // restaurantLocation のインスタンスの配列
  private array $restaurantLocations;
  private string $cuisineType;
  private int $numberOfLocations;
  private string $parentCompany;

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
    int $totalEmployees,
    int $chainId,
    array $restaurantLocations,
    string $cuisineType,
    int $numberOfLocations,
    string $parentCompany,
  ) {
    parent::__construct(
      $name,
      $foundingYear,
      $description,
      $website,
      $phone,
      $industry,
      $ceo,
      $isPubliclyTraded,
      $founder,
      $totalEmployees
    );
    $this->chainId = $chainId;
    $this->restaurantLocations = $restaurantLocations;
    $this->cuisineType = $cuisineType;
    $this->numberOfLocations = $numberOfLocations;
    $this->parentCompany = $parentCompany;
  }

  public function toString(): string
  {
    return sprintf(
      "Name: %s\nFounding Year: %d\nDescription: %s\nWebsite: %s\nPhone: %s\nIndustry: %s\nCEO: %s\nIs Publicly Traded: %s\nFounder: %s\nTotal Employees: %d\nChain ID: %d\nRestaurant Locations: %s\nCuisine Type: %s\nNumber of Locations: %d\nParent Company: %s\n",
      $this->name,
      $this->foundingYear,
      $this->description,
      $this->website,
      $this->phone,
      $this->industry,
      $this->ceo,
      $this->isPubliclyTraded ? 'Yes' : 'No',
      $this->founder,
      $this->totalEmployees,
      $this->chainId,
      implode(', ', $this->restaurantLocations),
      $this->cuisineType,
      $this->numberOfLocations,
      $this->parentCompany
    );
  }
}
