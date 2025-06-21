<?php
$styles = [
'couleurs' => [
    'header' => '#8a1c7c',
    'body' => '#fff8f0',
    'titre' => '#fc440f',
    'texte' => '#1f271b',
    'footer' => '#fff8f0',
    'fondtexte' => '#ffffff',
    'fondpage' => '#fff8f0',
    'fondheader' => '#8a1c7c',
    'fondfooter' => '#66635b',
],
'polices' => [
    'titres1' => 'Arial, sans-serif',
    'titres2' => 'Georgia, serif',
    'paragraphes' => 'Verdana, sans-serif',
],
    'tailles' => [
        'toptexte'=>'50px',
        'titres1' => '32px',
        'titres2' => '24px',
        'paragraphes' => '14px',
    ]
];
header("Content-type: text/css; charset: UTF-8");
?>


body {
    font-family: <?= $styles['polices']['paragraphes']; ?>;
    line-height: 1.6;
    margin: 0;
    padding: 0;
    background-color: <?= $styles['couleurs']['fondpage']; ?>; 
    color: <?= $styles['couleurs']['texte']; ?>; 
}

header {
    background: <?= $styles['couleurs']['fondheader']; ?> ;
    color: <?= $styles['couleurs']['texte']; ?> ;
    padding: 20px 0;
    text-align: center;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}

header a {
    color: <?= $styles['couleurs']['fondtexte']; ?>;
    text-decoration: none;
}

header nav {
    margin-top: 10px; 
}

header nav ul {
    list-style: none; 
    padding: 0; 
}

header nav ul li {
    display: inline; 
    margin: 0 15px; 
}

header nav ul li a {
    font-weight: bold; 
}

.toptext{
    color: <?= $styles['couleurs']['titre']; ?>;
    font-size: <?= $styles['tailles']['toptexte']; ?>; 
}

h1 {
    margin: 0;
    text-align: center;
    color: <?= $styles['couleurs']['header']; ?>; 
    font-family: <?= $styles['polices']['titres1']; ?>; 
    font-size: <?= $styles['tailles']['titres1']; ?>; 
}

main {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background: <?= $styles['couleurs']['fondtexte']; ?>; 
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

h2 {
    color: <?= $styles['couleurs']['titre']; ?>; 
    border-bottom: 2px solid <?= $styles['couleurs']['titre']; ?>; 
    padding-bottom: 10px;
    font-family: <?= $styles['polices']['titres2']; ?>; 
    font-size: <?= $styles['tailles']['titres2']; ?>; 
}

h3 {
    color: <?= $styles['couleurs']['titre']; ?>; 
    margin-top: 20px;
}

p {
    margin: 10px 0;
    font-family: <?= $styles['polices']['paragraphes']; ?>; 
    font-size: <?= $styles['tailles']['paragraphes']; ?>; 
}

.carousel {
        width: 300px;
        overflow: hidden;
        position: relative;
}

.carousel-inner {
        display: flex;
        transition: transform 0.5s ease;
        width: 100%;
}
.carousel-item {
        min-width: 100%;
        box-sizing: border-box;
}

.carousel img {
        width: 200px;
        height: 150px;
        object-fit: cover;
        display: block;
        margin: 20px;
}
.carousel-buttons {
        position: absolute;
        top: 50%;
        width: 240px;
        display: flex;
        justify-content: space-between;
        transform: translateY(-50%);
}

.button {
        background-color: <?= $styles['couleurs']['fondpage']; ?>;
        border: none;
        cursor: pointer;
        padding: 10px;
        border-radius: 5px;
    }

.button:active{
    transform:scale(1.5);
}

footer {
    background-color: <?= $styles['couleurs']['fondfooter']; ?>; 
    color: <?= $styles['couleurs']['footer']; ?>; 
    padding: 20px; 
    text-align: center; 
    display: flex;
    flex-direction: column;
}

.bas {
    text-align: center;
    margin: 10px 0;
    display: flex;
    flex-direction: row;
    justify-content: center; 
}

footer a {
    color: <?= $styles['couleurs']['footer']; ?>;
    margin-top: 10px;
    text-decoration: none;
    font-family: <?= $styles['polices']['paragraphes']; ?>; 
}