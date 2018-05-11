<?php
require_once("../../php/myPage.php");
require_once("../../php/menu.php");

$OPIS = "Wojciech Zaniewski - Przygody z Edukacja";
$STYL =<<<EOT
EOT;

// generuejmy stronę i ustawiamy jej parametry
$P =  new myPage("Semestr II");
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
            <h2>Semestr II</h2>
        </div>
    </div>

<?php
    echo generateMenu("M2.2");
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
                <h3>Warto sie nauczyć</h3>
            </div>
        </div>
        <div class="row">
            <div class="course">
                <h3>Analiza II</h3>
            </div>
            <div class="description">
                <ul>
                    <li>Całki</li>
                    <li>Pochodne cząstkowe</li>
                    <li>Ekstrema</li>
                </ul>
            </div>
            <div class="description2">
                <ul>
                    <li>Przestrzenie metryczne</li>
                    <li>Całki powierzchniowe</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="course">
                <h3>Problemy prawne informatyki</h3>
            </div>
            <div class="description">
                <ul>
                    <li>Pisanie umów</li>
                    <li>Ochrona własnosci intelektualnej</li>
                </ul>
            </div>
            <div class="description2">
                <ul>
                    <li>Ogólne poszerzenie wiedzy</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="course">
                <h3>Algebra Abstrakcyjna i Kodowanie</h3>
            </div>
            <div class="description">
                <ul>
                    <li>Kody korekcyjne</li>
                    <li>Pierścienie ilorazowe</li>
                </ul>
            </div>
            <div class="description2">
                <ul>
                    <li>Teoria grup</li>
                    <li>Ciała</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="course">
                <h3>Matematyka Dyskretna</h3>
            </div>
            <div class="description">
                <ul>
                    <li>Liczby Stirlinga</li>
                    <li>Grafy</li>
                    <li>Symbol Newtona</li>
                </ul>
            </div>
            <div class="description2">
                <ul>
                    <li>Prawdopodobienstwo dyskretne</li>
                    <li>Drzewa spinajace</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="course">
                <h3>Kurs Programowania</h3>
            </div>
            <div class="description">
                <ul>
                    <li>Podstawy jezyka Java</li>
                    <li>Apltety</li>
                    <li>Wątki</li>
                </ul>
            </div>
            <div class="description2">
                <ul>
                    <li>Zaawansowana Java</li>
                    <li>Zaawansowany C++</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="course">
                <h3>Fizyka</h3>
            </div>
            <div class="description">
                <ul>
                    <li>Ile czasu można poświęcić na tak mało istotny kurs</li>
                </ul>
            </div>
            <div class="description2">
                <ul>
                    <li>Jak poświęcać mniej czasu na tak mało istotny kurs</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php
// generujemy zamknięcie strony
echo $P->End();
