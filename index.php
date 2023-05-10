<?php

require_once __DIR__ . './db.php';


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_OOP_2</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <div style="background-color:beige; overflow: auto;">
        <div style="margin-top: 100px; padding: 20px 50px 200px; height: auto">
            <h1 class="text-center text-uppercase">trend product</h1>
            <div class="container d-flex flex-wrap gap-5 pt-5 position-relative" style="height: auto">
                <?php foreach ($products as $product) {
                ?>
                    <div class="card shadow p-1 mb-5 bg-white rounded" style="width: 18rem; height: auto">
                        <img src="<?= $product->getImage() ?>" class="card-img-top" alt="product image" style="object-size: contain; width: 100%">
                        <div class="card-body d-flex flex-column gap-4">
                            <h5 class="card-title fs-2" style="color:brown"><?= $product->getName() ?></h5>
                            <span style="color:forestgreen">€ <?= $product->getPrice() ?></span>
                            <p class="card-text flex-grow-1"><?= $product->getDescription() ?></p>
                            <div class="card-text d-flex align-items-center gap-5 flex-shrink-1">
                                <a href="#" style="color: rgb(13, 202, 240)" class="fs-3"><?= $product->getCategory()->getIcon() ?></a>
                                <a href="#" style="color: rgb(13, 202, 240)">
                                    <?php

                                    switch (get_class($product)) {

                                        case 'Food':
                                            echo $product->getType();
                                            break;

                                        case 'Toy':
                                            echo $product->getType();
                                            break;

                                        case 'Kennel':
                                            echo $product->getType();
                                            break;

                                        case 'Litterbox':
                                            echo $product->getType();
                                            break;

                                        case 'ScratchPost':
                                            echo $product->getType();
                                            break;

                                        default:
                                            echo "";
                                            break;
                                    }

                                    ?>
                                </a>
                                <a href="#" class="fs-3" style="color: rgb(13, 202, 240)">
                                    <?php

                                    switch (get_class($product)) {
                                        case 'Litterbox':
                                            echo $product->getClean($product->setClean());
                                            break;

                                        default:
                                            echo "";
                                            break;
                                    }

                                    ?>
                                </a>
                            </div>
                        </div>
                    </div>

                <?php
                }
                ?>
            </div>

        </div>
    </div>
    <?php include './Views/Partials/footer.php'  ?>


    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>