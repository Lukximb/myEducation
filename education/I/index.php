<?php
require_once("../../php/myPage.php");
require_once("../../php/menu.php");

$OPIS = "Wojciech Zaniewski - Przygody z Edukacja";
$STYL =<<<EOT
EOT;

// generuejmy stronę i ustawiamy jej parametry
$P =  new myPage("Semestr I");
$P->SetDescription($OPIS);
$P->AddInnerStyle($STYL);
$P->AddCSS("../../../css/reset.css");
$P->AddCSS("../../styles.css");
$P->AddCSS("../../../css/menu.css");

// Wyświetlamy początek strony
echo $P->Begin();
echo $P->PageHeader();
?>

<div class="middle">
    <div class="header">
        <div class="header-txt">
            <h1>Wojciech Zaniewski</h1>
            <h2>Semestr I</h2>
        </div>
    </div>

<?php
    echo generateMenu("M2.1");
?>

    <div class="table">
        <div class="row">
            <div class="tittle">
                <h3>Kurs</h3>
            </div>
            <div class="tittle">
                <h3>Nauczyłem się</h3>
            </div>
            <div class="tittle">
                <h3>Warto się nauczyć</h3>
            </div>
        </div>
        <div class="row">
            <div class="course">
                <h3>Analiza I</h3>
            </div>
            <div class="description">
                <ul>
                    <li>Całki</li>
                    <li>Pochodne</li>
                    <li>Podciągi podciągów podciagów ciągu</li>
                </ul>
            </div>
            <div class="description2">
                <ul>
                    <li>Całki</li>
                    <li>Skupienie na wykładach</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="course">
                <h3>Algebra z geometrią analityczną</h3>
            </div>
            <div class="description">
                <ul>
                    <li>Liczby zespolone</li>
                    <li>Równania liniowe</li>
                    <li>Że nic nie wiem</li>
                </ul>
            </div>
            <div class="description2">
                <ul>
                    <li>Wyznaczniki</li>
                    <li>Iloczyny skalarne i macierze ortogonalne</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="course">
                <h3>Wstep do programowania</h3>
            </div>
            <div class="description">
                <ul>
                    <li>NIEZMIENNIKI (podobno)</li>
                    <li>C</li>
                    <li>Jak wksaźniki bawią sie mną</li>
                </ul>
            </div>
            <div class="description2">
                <ul>
                    <li>Wskaźniki</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="course">
                <h3>Logika i Struktury formalne</h3>
            </div>
            <div class="description">
                <ul>
                    <li>Zdania logiczne</li>
                    <li>Relacje</li>
                    <li>Klasy abstrakcji</li>
                </ul>
            </div>
            <div class="description2">
                <ul>
                    <li>Relacji część dalsza</li>
                    <li>Dowody nie z piaskownicy</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php
// generujemy zamknięcie strony
echo $P->End();
