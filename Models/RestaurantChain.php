<?php

namespace Models;

// Company クラスを拡張

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

  // name を取得するメソッドを追加
  public function getName(): string
  {
    return $this->name;
  }

  // restaurantLocations を取得するメソッドを追加
  public function getRestaurantLocations(): array
  {
    return $this->restaurantLocations;
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

  public function toHTML()
  {
    return sprintf(
      "
      <div class='company-card'>
          <h2>%s</h2>
          <p>Founding Year: %d</p>
          <p>Description: %s</p>
          <p>Website: %s</p>
          <p>Phone: %s</p>
          <p>Industry: %s</p>
          <p>CEO: %s</p>
          <p>Is Publicly Traded: %s</p>
          <p>Founder: %s</p>
          <p>Total Employees: %d</p>
          <p>Chain ID: %d</p>
          <p>Restaurant Locations: %s</p>
          <p>Cuisine Type: %s</p>
          <p>Number of Locations: %d</p>
          <p>Parent Company: %s</p>
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
      $this->totalEmployees,
      $this->chainId,
      implode(', ', $this->restaurantLocations),
      $this->cuisineType,
      $this->numberOfLocations,
      $this->parentCompany
    );
  }

  // - Restaurant Locations: {$this->restaurantLocations} の記述を削除した
  public function toMarkdown()
  {
    return "## Company: {$this->name}
             - Founding Year: {$this->foundingYear}
             - Description: {$this->description}
             - Website: {$this->website}
             - Phone: {$this->phone}
             - Industry: {$this->industry}
             - CEO: {$this->ceo}
             - Is Publicly Traded: {$this->isPubliclyTraded}
             - Founder: {$this->founder}
             - Total Employees: {$this->totalEmployees}
             - Chain ID: {$this->chainId}
             - Cuisine Type: {$this->cuisineType}
             - Number of Locations: {$this->numberOfLocations}
             - Parent Company: {$this->parentCompany}";
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
      'totalEmployees' => $this->totalEmployees,
      'chainId' => $this->chainId,
      'restaurantLocations' => $this->restaurantLocations,
      'cuisineType' => $this->cuisineType,
      'numberOfLocations' => $this->numberOfLocations,
      'parentCompany' => $this->parentCompany
    ];
  }
}
