<?php
$my_arr_constructor = array();
$ingredients = ['36oz pasta sauce', '1 onion (diced)', '2 cloves garlic (minced)', 'lasagna noodle * 12', '2cups ricotta cheese', '0.5lbs ground beef'];
$recipe = ['Preheat oven at 369F','Boil pasta in large pot','Mix ground beef with onion & garlic at medium heat until brown','Add pasta sauce to beef mix, stir','Obtain deep steel dish','Add meat sauce to bottom of dish','Layer pasta over sauce', 'Add cheese layer','Repeat meat sauce, pasta, cheese layer protocol 3 times','Bake for 45 minutes'];
$title = "Lasagna"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title><?= $title ?></title>
</head>
<body>  
    <div class="wrapperA">
        <header>
            <h1>Assignment 1: The Recipe</h1>
        </header>
        <aside class="aside2">
            <img src="lasagna.jpg" alt="recipe">
        </aside>
        <article class="article2">
            <div class = "wrapperB">
                <h1><?= $title ?></h1>
                <h2>Ingredients</h2>
                <ul>
                    <?php foreach ($ingredients as $element_I): ?>
                        <li><?= $element_I ?></li>
                    <?php endforeach ?>
                </ul>
                <h2>Steps</h2>
                <ol>
                    <?php foreach ($recipe as $element_R): ?>
                        <li><?= $element_R ?></li>
                    <?php endforeach ?>
                </ol>
            </div>
        </article> 
        <footer>23W Intro to Web Prog using PHP - 01 COMP1006-23W-21319</footer>
    </div>
</body>
</html>




