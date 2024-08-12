<?php

namespace Helpers;

use Faker\Factory;
use Models\User;
use Models\Company;
use Models\Employee;
use Models\RestaurantChain;
use Models\RestaurantLocation;


class RandomGenerator
{
  public static function user(): User
  {
    $faker = Factory::create();

    return new User(
      $faker->randomNumber(),
      $faker->firstName(),
      $faker->lastName(),
      $faker->email,
      $faker->password,
      $faker->phoneNumber,
      $faker->address,
      $faker->dateTimeThisCentury,
      $faker->dateTimeBetween('-10 years', '+20 years'),
      $faker->randomElement(['admin', 'user', 'editor'])
    );
  }

  public static function users(int $min, int $max): array
  {
    $faker = Factory::create();
    $users = [];
    $numOfUsers = $faker->numberBetween($min, $max);

    for ($i = 0; $i < $numOfUsers; $i++) {
      $users[] = self::user();
    }

    return $users;
  }

  public static function company(): Company
  {
    $faker = Factory::create();

    return new Company(
      $faker->company,
      $faker->year,
      $faker->sentence,
      $faker->url,
      $faker->phoneNumber,
      $faker->randomElement(['Technology', 'Finance', 'Healthcare', 'Retail', 'Automotive']),
      $faker->name,
      $faker->boolean,
      $faker->name,
      $faker->numberBetween(10, 10000)
    );
  }

  // 指定した数の company を作成
  public static function companies(int $min, int $max): array
  {
    $faker = Factory::create();
    $companies = [];
    $numOfCompanies = $faker->numberBetween($min, $max);

    for ($i = 0; $i < $numOfCompanies; $i++) {
      $companies[] = self::company();
    }

    return $companies;
  }

  public static function employee(): Employee
  {
    $faker = Factory::create();

    return new Employee(
      $faker->randomNumber(),
      $faker->firstName(),
      $faker->lastName(),
      $faker->email,
      $faker->password,
      $faker->phoneNumber,
      $faker->address,
      $faker->dateTimeThisCentury,
      $faker->dateTimeBetween('-10 years', '+20 years'),
      $faker->randomElement(['admin', 'user', 'editor']),
      $faker->jobTitle,
      $faker->randomFloat(2, 1000, 10000),
      $faker->dateTimeThisCentury,
      $faker->words(3)
    );
  }

  // 指定した数の employee を作成
  public static function employees(int $min, int $max): array
  {
    $faker = Factory::create();
    $employees = [];
    $numOfEmployees = $faker->numberBetween($min, $max);

    for ($i = 0; $i < $numOfEmployees; $i++) {
      $employees[] = self::employee();
    }

    return $employees;
  }

  public static function restaurantLocation(): RestaurantLocation
  {
    $faker = Factory::create();

    return new RestaurantLocation(
      $faker->company,
      $faker->streetAddress,
      $faker->city,
      $faker->state,
      $faker->postcode,
      self::employees(2, $faker->numberBetween(3, 6)),
      $faker->boolean,
      $faker->boolean
    );
  }

// 指定した数の restaurantLocation を作成
  public static function restaurantLocations(int $num): array
  {
    $locations = [];

    for ($i = 0; $i < $num; $i++) {
      $locations[] = self::restaurantLocation();
    }

    return $locations;
  }

  public static function restaurantChain(): RestaurantChain
  {
    $faker = Factory::create();

    return new RestaurantChain(
      $faker->company,
      $faker->year,
      $faker->sentence,
      $faker->url,
      $faker->phoneNumber,
      $faker->randomElement(['Technology', 'Finance', 'Healthcare', 'Retail', 'Automotive']),
      $faker->name,
      $faker->boolean,
      $faker->name,
      $faker->numberBetween(10, 10000),
      $faker->randomNumber(),
      self::restaurantLocations($faker->numberBetween(3, 5)),
      $faker->randomElement(['Italian', 'Mexican', 'American', 'Chinese', 'Japanese']),
      $faker->numberBetween(1, 1000),
      $faker->company
    );
  }

  // 指定した数の restaurantChain を作成
  public static function restaurantChains(int $num): array
  {
    $chains = [];

    for ($i = 0; $i < $num; $i++) {
      $chains[] = self::restaurantChain();
    }

    return $chains;
  }
}
