<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Chains</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <?php
    spl_autoload_extensions(".php");
    spl_autoload_register();

    require_once 'vendor/autoload.php';

    use Helpers\RandomGenerator;

    $RestaurantChainCnt = rand(3, 5);
    $RestaurantLocationCnt = rand(3, 5);
    $EmployeeCnt = rand(3, 5);

    $employees = RandomGenerator::employees($EmployeeCnt, $RestaurantLocationCnt);
    $restaurantLocations = RandomGenerator::restaurantLocations($RestaurantLocationCnt, $RestaurantChainCnt, $employees);
    $restaurantChains = RandomGenerator::restaurantChains($RestaurantChainCnt, $restaurantLocations);

    foreach ($restaurantChains as $restaurantChain) {
        echo $restaurantChain->toHTML();
    }
    ?>
</body>
</html>
