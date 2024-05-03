<?php

namespace Restaurant;

use Company\Company;

class RestaurantChain extends Company
{
  private int $chainId;
  private array $restaurantLocations;
  private string $cuisineType;
  private int $numberOfLocations;
  private string $parentCompany;

  public function __construct(string $name, int $foundingYear, string $description, string $website, string $phone, string $industry, string $ceo, bool $isPubliclyTraded, string $country, string $founder, int $totalEmployees, int $chainId, array $restaurantLocations, string $cuisineType, int $numberOfLocations, string $parentCompany)
  {
    parent::__construct($name, $foundingYear, $description, $website, $phone, $industry, $ceo, $isPubliclyTraded, $country, $founder, $totalEmployees);
    $this->chainId = $chainId;
    $this->restaurantLocations = $restaurantLocations;
    $this->cuisineType = $cuisineType;
    $this->numberOfLocations = $numberOfLocations;
    $this->parentCompany = $parentCompany;
  }

  public function getChainId(): int
  {
    return $this->chainId;
  }

  public function getRestaurantLocations()
  {
    return $this->restaurantLocations;
  }

  public function getCuisineType(): string
  {
    return $this->cuisineType;
  }

  public function getNumberOfLocations(): int
  {
    return $this->numberOfLocations;
  }

  public function getParentCompany(): string
  {
    return $this->parentCompany;
  }

  public function setChainId(int $chainId): void
  {
    $this->chainId = $chainId;
  }

  public function setRestaurantLocations(array $restaurantLocations): void
  {
    $this->restaurantLocations = $restaurantLocations;
  }

  public function setCuisineType(string $cuisineType): void
  {
    $this->cuisineType = $cuisineType;
  }

  public function setNumberOfLocations(int $numberOfLocations): void
  {
    $this->numberOfLocations = $numberOfLocations;
  }

  public function setParentCompany(string $parentCompany): void
  {
    $this->parentCompany = $parentCompany;
  }

  public function toHTML(): string
  {
    $locationsHTML = '';

    foreach ($this->restaurantLocations as $location) {
      $locationsHTML .= $location->toHTML();
    }

    return sprintf(
      "
      <div class='restaurant-chain'>
        <h1>%s</h1>
        <p class='cain-info'>founding year: %d</p>
        <p class='cain-info'>phone number: %s</p>
        %s
      </div>
      ",
      $this->getName(),
      $this->getFoundingYear(),
      $this->getPhone(),
      $locationsHTML
    );
  }
}
