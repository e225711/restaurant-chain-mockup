<?php

namespace Restaurant;

class RestaurantLocation
{
  private string $name;
  private string $address;
  private string $city;
  private string $state;
  private string $zipCode;
  private $employees;
  private bool $isOpen;
  private bool $hasDriveThru;

  public function __construct(string $name, string $address, string $city, string $state, string $zipCode, $employees, bool $isOpen, bool $hasDriveThru)
  {
    $this->name = $name;
    $this->address = $address;
    $this->city = $city;
    $this->state = $state;
    $this->zipCode = $zipCode;
    $this->employees = $employees;
    $this->isOpen = $isOpen;
    $this->hasDriveThru = $hasDriveThru;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function setName(string $name): void
  {
    $this->name = $name;
  }

  public function getAddress(): string
  {
    return $this->address;
  }

  public function setAddress(string $address): void
  {
    $this->address = $address;
  }

  public function getCity(): string
  {
    return $this->city;
  }

  public function setCity(string $city): void
  {
    $this->city = $city;
  }

  public function getState(): string
  {
    return $this->state;
  }

  public function setState(string $state): void
  {
    $this->state = $state;
  }

  public function getZipCode(): string
  {
    return $this->zipCode;
  }

  public function setZipCode(string $zipCode): void
  {
    $this->zipCode = $zipCode;
  }

  public function getEmployees(): array
  {
    return $this->employees;
  }

  public function setEmployees(array $employees): void
  {
    $this->employees = $employees;
  }

  public function isOpen(): bool
  {
    return $this->isOpen;
  }

  public function setIsOpen(bool $isOpen): void
  {
    $this->isOpen = $isOpen;
  }

  public function hasDriveThru(): bool
  {
    return $this->hasDriveThru;
  }

  public function setHasDriveThru(bool $hasDriveThru): void
  {
    $this->hasDriveThru = $hasDriveThru;
  }

  public function toHTML(): string
  {
    $employeesHTML = '';

    foreach ($this->employees as $employee) {
      $employeesHTML .= $employee->toHTML();
    }

    return sprintf(
      "
      <div class='restaurant-location'>
        <h2>%s</h2>
        <p class='location-info'>%s</p>
        <p class='location-info'>%s, %s %s</p>
        <p class='location-info'>Open: %s</p>
        <p class='location-info'>Drive Thru: %s</p>
        %s
      </div>
      ",
      $this->name,
      $this->address,
      $this->city,
      $this->state,
      $this->zipCode,
      $this->isOpen ? 'Yes' : 'No',
      $this->hasDriveThru ? 'Yes' : 'No',
      $employeesHTML
    );
  }
}
