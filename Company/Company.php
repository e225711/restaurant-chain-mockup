<?php

namespace Company;

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
  private string $country;
  private string $founder;
  private int $totalEmployees;

  public function __construct(string $name, int $foundingYear, string $description, string $website, string $phone, string $industry, string $ceo, bool $isPubliclyTraded, string $country, string $founder, int $totalEmployees)
  {
    $this->name = $name;
    $this->foundingYear = $foundingYear;
    $this->description = $description;
    $this->website = $website;
    $this->phone = $phone;
    $this->industry = $industry;
    $this->ceo = $ceo;
    $this->isPubliclyTraded = $isPubliclyTraded;
    $this->country = $country;
    $this->founder = $founder;
    $this->totalEmployees = $totalEmployees;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function getFoundingYear(): int
  {
    return $this->foundingYear;
  }

  public function getDescription(): string
  {
    return $this->description;
  }

  public function getWebsite(): string
  {
    return $this->website;
  }

  public function getPhone(): string
  {
    return $this->phone;
  }

  public function getIndustry(): string
  {
    return $this->industry;
  }

  public function getCeo(): string
  {
    return $this->ceo;
  }

  public function getIsPubliclyTraded(): bool
  {
    return $this->isPubliclyTraded;
  }

  public function getCountry(): string
  {
    return $this->country;
  }

  public function getFounder(): string
  {
    return $this->founder;
  }

  public function getTotalEmployees(): int
  {
    return $this->totalEmployees;
  }

  public function setName(string $name): void
  {
    $this->name = $name;
  }

  public function setFoundingYear(int $foundingYear): void
  {
    $this->foundingYear = $foundingYear;
  }

  public function setDescription(string $description): void
  {
    $this->description = $description;
  }

  public function setWebsite(string $website): void
  {
    $this->website = $website;
  }

  public function setPhone(string $phone): void
  {
    $this->phone = $phone;
  }

  public function setIndustry(string $industry): void
  {
    $this->industry = $industry;
  }

  public function setCeo(string $ceo): void
  {
    $this->ceo = $ceo;
  }

  public function setIsPubliclyTraded(bool $isPubliclyTraded): void
  {
    $this->isPubliclyTraded = $isPubliclyTraded;
  }

  public function setCountry(string $country): void
  {
    $this->country = $country;
  }

  public function setFounder(string $founder): void
  {
    $this->founder = $founder;
  }

  public function setTotalEmployees(int $totalEmployees): void
  {
    $this->totalEmployees = $totalEmployees;
  }
}
