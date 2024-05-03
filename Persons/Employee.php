<?php

namespace Persons;

use DateTime;
use Persons\User;

class Employee extends User
{
  private string $jobTitle;
  private float $salary;
  private DateTime $startDate;
  private array $awards = [];

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
    array $awards = []
  ) {
    parent::__construct($id, $firstName, $lastName, $email, $password, $phoneNumber, $address, $birthDate, $membershipExpirationDate, $role);
    $this->jobTitle = $jobTitle;
    $this->salary = $salary;
    $this->startDate = $startDate;
    $this->awards = $awards;
  }

  public function getJobTitle(): string
  {
    return $this->jobTitle;
  }

  public function setJobTitle(string $jobTitle): void
  {
    $this->jobTitle = $jobTitle;
  }

  public function getSalary(): float
  {
    return $this->salary;
  }

  public function setSalary(float $salary): void
  {
    $this->salary = $salary;
  }

  public function getStartDate(): DateTime
  {
    return $this->startDate;
  }

  public function setStartDate(DateTime $startDate): void
  {
    $this->startDate = $startDate;
  }

  public function getAwards(): array
  {
    return $this->awards;
  }

  public function addAward(string $award): void
  {
    $this->awards[] = $award;
  }

  public function toArray(): array
  {
    $userArray = parent::toArray();
    $employeeArray = [
      'jobTitle' => $this->jobTitle,
      'salary' => $this->salary,
      'startDate' => $this->startDate->format('Y-m-d'),
      'awards' => $this->awards
    ];
    return array_merge($userArray, $employeeArray);
  }

  public function toHTML()
  {
    return sprintf(
      "
      <div class='employee'>
        <p>ID: %d, Job Title: %s, Salary: %f, Start Date: %s</p>
      </div>",
      $this->getId(),
      $this->jobTitle,
      $this->salary,
      $this->startDate->format('Y-m-d')
    );
  }
}
