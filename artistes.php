<?php
$type = "Artistes";
include 'config.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $type; ?></title>
    <link rel="stylesheet" type="text/css" href="styles.php">
</head>
<body>
<header>
        <a href="index.html"><h1 class="toptext">Top 4</h1></a>
        <nav>
            <ul>
                <li><a href="recettes.php">Recettes</a></li>
                <li><a href="artistes.php">Artistes</a></li>
                <li><a href="voyages.php">Voyages</a></li>
                <li><a href="films.php">Films</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1><?php echo $type; ?></h1>
        <?php
        foreach ($meilleurs['artistes'] as $nom => $details) {
            echo "<h2>$nom</h2>"; ?>
            
            <div class="grid-container">
                <div class="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item"><img src="<?=$details['Images']['image1']?>" alt="Image 1"></div>
                        <div class="carousel-item"><img src="<?=$details['Images']['image2']?>" alt="Image 2"></div>
                        <div class="carousel-item"><img src="<?=$details['Images']['image3']?>" alt="Image 3"></div>
                    </div>
                    <div class="carousel-buttons">
                        <button class="button" onclick="prevSlide(this)">❮</button>
                        <button class="button" onclick="nextSlide(this)">❯</button>
                    </div>
                </div>
        
                <div class="text-content">
                    <h3>Biographie :</h3>
                    <p><?=$details['Biographie']?></p>
                    <h3>Genres :</h3>
                    <p>
                        <?php
                        foreach ($details['Genres'] as $genre => $description ) {
                            echo "$genre : $description <br>";
                        }
                        ?>
                    </p>
                </div>
            </div>

    <?php }?>

    <script>
        let currentIndex = 0;

        function showSlide(button, index) {
            const carouselInner = button.closest('.carousel').querySelector('.carousel-inner');
            const totalSlides = carouselInner.children.length;

            if (index >= totalSlides) {
                currentIndex = 0;
            } else if (index < 0) {
                currentIndex = totalSlides - 1;
            } else {
                currentIndex = index;
            }
            carouselInner.style.transform = `translateX(-${currentIndex * 100}%)`;
        }
        function nextSlide(button) {
            showSlide(button, currentIndex + 1);
        }
        function prevSlide(button) {
            showSlide(button, currentIndex - 1);
        }
    </script>
    </main>
    <footer>
        <div class="bloc">
            <div>
                <h4>Contactez-nous</h4>
                <p>Email : contact@example.com</p>
                <p>Téléphone : +33 1 23 45 67 89</p>
            </div>
            <div>
                <h4>Suivez-nous</h4>
                <a href="#">Facebook</a>
                <a href="#">Twitter</a>
                <a href="#">Instagram</a>
            </div>
        </div>
        <div class="bas">
        <p>&copy; 2025 - Tous droits réservés. </p>
        </div>
    </footer>
</body>
</html>