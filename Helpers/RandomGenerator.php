<?php

namespace Helpers;

use Faker\Factory;
use Persons\Employee;
use Restaurant\RestaurantChain;
use Restaurant\RestaurantLocation;

class RandomGenerator
{

  public static function employee(): Employee
  {
    $faker = Factory::create();

    $employee = new Employee(
      $faker->randomNumber(), // ID
      $faker->firstName(),     // FirstName
      $faker->lastName(),      // LastName
      $faker->email(),         // Email
      $faker->password(),      // Password
      $faker->phoneNumber(),   // PhoneNumber
      $faker->address(),       // Address
      $faker->dateTime(),      // BirthDate
      $faker->dateTimeBetween('now', '+1 year'),      // MembershipExpirationDate
      $faker->randomElement(['manager', 'staff']), // Role
      $faker->jobTitle(),      // JobTitle
      $faker->randomFloat(2, 1000, 5000),          // Salary
      $faker->dateTime()       // StartDate
    );
    return $employee;
  }

  public static function employees(int $num1, int $num2): array
  {
    $faker = Factory::create();

    $employees = [];
    for ($i = 0; $i < $num2; $i++) {
      $employee = [];
      for ($j = 0; $j < $num1; $j++) {
        $employee[] = self::employee();
      }
      $employees[] = $employee;
    }
    return $employees;
  }

  public static function restaurantLocation(array $employees): RestaurantLocation
  {
    $faker = Factory::create();

    $name = $faker->company;
    $address = $faker->streetAddress;
    $city = $faker->city;
    $state = $faker->state;
    $zipCode = $faker->postcode;
    $isOpen = $faker->boolean;
    $hasDriveThru = $faker->boolean;

    $location = new RestaurantLocation($name, $address, $city, $state, $zipCode, $employees, $isOpen, $hasDriveThru);

    return $location;
  }

  public static function restaurantLocations(int $num1, int $num2, array $employees): array
  {
    $faker = Factory::create();
    $restaurantLocations = [];
    for ($i = 0; $i < $num2; $i++) {
      $locations = [];
      for ($j = 0; $j < $num1; $j++) {
        $locations[] = self::restaurantLocation($employees[$j]);
      }
      $restaurantLocations[] = $locations;
    }
    return $restaurantLocations;
  }

  public static function restaurantChain(array $restaurantLocations): RestaurantChain
  {
    $faker = Factory::create();

    $name = $faker->company;
    $foundingYear = $faker->year;
    $description = $faker->text;
    $website = $faker->url;
    $phone = $faker->phoneNumber;
    $industry = $faker->word;
    $ceo = $faker->name;
    $isPubliclyTraded = $faker->boolean;
    $country = $faker->country;
    $founder = $faker->name;
    $totalEmployees = $faker->numberBetween(100, 10000);
    $chainId = $faker->randomNumber();
    $cuisineType = $faker->word;
    $numberOfLocations = $faker->numberBetween(1, 100);
    $parentCompany = $faker->company;

    $chain = new RestaurantChain($name, $foundingYear, $description, $website, $phone, $industry, $ceo, $isPubliclyTraded, $country, $founder, $totalEmployees, $chainId, $restaurantLocations, $cuisineType, $numberOfLocations, $parentCompany);

    return $chain;
  }

  public static function restaurantChains(int $num, array $restaurantLocations): array
  {
    $faker = Factory::create();
    $restaurantChains = [];
    for ($i = 0; $i < $num; $i++) {
      $restaurantChains[] = self::restaurantChain($restaurantLocations[$i]);
    }
    return $restaurantChains;
  }
}
