<?php
require_once("../../php/myPage.php");
require_once("../../php/menu.php");

$OPIS = "Wojciech Zaniewski - Przygody z Edukacja";
$STYL =<<<EOT
EOT;

// generuejmy stronę i ustawiamy jej parametry
$P =  new myPage("Hobby: Blue Velvet");
$P->SetDescription($OPIS);
$P->AddInnerStyle($STYL);
$P->AddCSS("../../../css/reset.css");
$P->AddCSS("../styles.css");
$P->AddCSS("../../../css/menu.css");

// Wyświetlamy początek strony
echo $P->Begin();
echo $P->PageHeader();
?>

<div class="middle">
    <div class="header">
        <div class="header-txt">
            <h1>Wojciech Zaniewski</h1>
            <h2>Hobby: Blue Velvet</h2>
        </div>
    </div>

<?php
    echo generateMenu("M3");
?>

    <div class="columns">
        <div class="image">
            <img class="img" alt="Shrimp 1" src="../../resources/k5-1.jpg">
            <img class="img" alt="Shrimp 2" src="../../resources/k4.jpg">
            <img class="img" alt="Shrimp 3" src="../../resources/k2.jpg">
            <img class="img" alt="Shrimp 4" src="../../resources/k1.jpg">
        </div>
        <div class="description">
            <div class="art">
                <div class="article">
                    Moja własna hodowla krewetek karłowatych z gatunku Neocaridina Davidi,
                    wariant kolorystyczny Blue Velvet.
                    W akwarium o pojemności 30l posiadam obecnie około 50 sztuk.
                </div>
                <div class="article">
                    Krewetki te żyją około 4-5 miesięcy i dorastają do 2.5cm długości (samice) oraz 2cm (samce).
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// generujemy zamknięcie strony
echo $P->End();
?>