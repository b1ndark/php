                            <!-- Header -->

<?php
    if (empty($headerImg)){
        $headerImg = 'images/pexels-engin-akyurt-1435904.jpg';
    }
?>

<header class="header-with-background" style="background-image: url('<?php echo $headerImg; ?>'); ">
    <h1>Culinary Cove</h1>
    <p>Your sanctuary for exceptional flavors</p>
    <nav>
        <a href="our-mission.php">Our mission</a>
        <a href="ingredients.php">Ingredients</a>
        <a href="menu.php">Menu</a>
        <a href="mailto:culinary-cove@example.com">Send us an E-Mail</a>
    </nav>
</header>