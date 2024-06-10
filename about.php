<!-- /about.php -->

<?php include 'includes/header.php'; ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<main>

    <h1>About Our store in detail...</h1>
    <img src="image/shop.jpg"
    width="400px" height="300px" >
    <?php

    $team = [

        ["name" => "Navdeep Kaur", "role" => "Owner"],

        ["name" => "Rozanpreet Kaur", "role" => "Designer"],

        ["name" => "Nimrit Kaur", "role" => "Designer"],

    ];

    ?>

    <h2>Our Team</h2>

    <ul>

        <?php foreach ($team as $member): ?>

            <li><?= $member['name'] ?> - <?= $member['role'] ?></li>

        <?php endforeach; ?>

    </ul>
    <p>Welcome to our boutique, a sanctuary where every visit unfolds a tapestry of elegance,
         sophistication, and individuality. Situated amidst the bustling streets of Toronto, 
        our boutique beckons discerning fashion enthusiasts to indulge in an immersive shopping experience like no other. 
        Stepping through our doors, you're greeted by an ambiance that seamlessly blends modern allure with timeless charm. Adorned with plush furnishings, soft lighting, and meticulously curated displays, 
        our boutique offers a haven for style seekers to explore and discover. Our curated collection reflects a fusion of global influences, showcasing a diverse array of designer pieces, artisanal creations,
         and exclusive finds sourced from around the world. From luxurious silks to handcrafted jewelry, each item is thoughtfully selected to embody our commitment to quality, craftsmanship, and innovation. 
         At the heart of our boutique lies a passion for empowering self-expression and celebrating individuality. 
         Whether you're seeking a statement piece for a special occasion or a wardrobe staple for everyday elegance, our knowledgeable team is dedicated to 
         providing personalized styling advice and unparalleled customer service. 
        Join us on a journey of sartorial discovery and immerse yourself in a world where style knows no bounds."</p>

</main>

<?php include 'includes/footer.php'; ?>
