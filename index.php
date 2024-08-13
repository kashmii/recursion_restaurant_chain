<?php
// コードベースのファイルのオートロード
spl_autoload_extensions(".php");
spl_autoload_register();

// composerの依存関係のオートロード
require_once 'vendor/autoload.php';

use Helpers\RandomGenerator;

$restaurantChains = RandomGenerator::restaurantChains(3);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profiles</title>
  <link rel="stylesheet" href="css\styles.css">
</head>

<body>
  <div class="container">
    <!-- chain をループする -->
    <?php foreach ($restaurantChains as $chain): ?>
      <div class="chain">
        <h1 class="chain-title">Restaurant Chain: <?php echo $chain->getName(); ?></h1>
        <P>Restaurant Chain Information</P>
        <!-- chain の locations をループして表示 -->
        <?php $locations = $chain->getRestaurantLocations() ?>
        <?php foreach ($locations as $location): ?>
          <!-- location (information) -->
          <div class="location-container">
            <div class="location">
              <hr class="employee-hr" />
              <h4>
                <?php echo $location->getName(); ?>
              </h4>
              <div>
                Location: <?php echo $location->toStringLimited(); ?>
              </div>
              <h5>Employees:</h5>
              <!-- Employees をループして表示 -->
              <?php $employees = $location->getEmployees(); ?>
              <div class="employee-container">
                <?php foreach ($employees as $employee): ?>
                  <div>
                    <?php echo $employee->toStringLimited(); ?>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
        <hr class="chain-hr" />
      </div>
    <?php endforeach; ?>
  </div>
</body>

</html>