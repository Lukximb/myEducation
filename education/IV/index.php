<?php
require_once("../../php/myPage.php");
require_once("../../php/menu.php");

$OPIS = "Wojciech Zaniewski - Przygody z Edukacja";
$STYL =<<<EOT
EOT;

// generuejmy stronę i ustawiamy jej parametry
$P =  new myPage("Semestr IV");
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
            <h2>Semestr IV</h2>
        </div>
    </div>

<?php
    echo generateMenu("M2.4");
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
                <h3>Algorytmy i Struktury Danych</h3>
            </div>
            <div class="description">
                <ul>
                    <li>Implementacja kolejek</li>
                    <li>Implementacja list</li>
                    <li>implementacja algorytmów sortowania</li>
                </ul>
            </div>
            <div class="description2">
                <ul>
                    <li>Analiza algorytmu</li>
                    <li>Optymalizacje algorytmów</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="course">
                <h3>Technologie Sieciowe</h3>
            </div>
            <div class="description">
                <ul>
                    <li>Pisanie sprawozdań dopadnie każdego</li>
                    <li>Korzystanie z programu ping</li>
                    <li>Śledzenie drogi pakietu</li>
                </ul>
            </div>
            <div class="description2">
                <ul>
                    <li>Stworzyć systemy sieciowe klient serwer złożone z wielu komponentów</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="course">
                <h3>Programowanie w logice</h3>
            </div>
            <div class="description">
                <ul>
                    <li>Rozbudowany program w Javie można napisać szybiej niz działające, tak jak chcemy, 10 linijek w Prologu</li>
                </ul>
            </div>
            <div class="description2">
                <ul>
                    <li>Tworzenie analizatora składni</li>
                    <li>Tworzenie podstaw AI w Prologu</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="course">
                <h3>Wprowadzenie do Teorii grafów</h3>
            </div>
            <div class="description">
                <ul>
                    <li>Grafy</li>
                    <li>Więcej grafów</li>
                </ul>
            </div>
            <div class="description2">
                <ul>
                    <li>Wykorzystanie grafów w praktyce</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="course">
                <h3>Podstawy negocjacji</h3>
            </div>
            <div class="description">
                <ul>
                    <li>Nie nauczę się tu negocjować</li>
                    <li>Można opowiadac przez 45 minut, że 45 minut to za mało czasu na przeprowadzenie zajęć</li>
                </ul>
            </div>
            <div class="description2">
                <ul>
                    <li>Podstawy negocjacji</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="course">
                <h3>Grafika komputerowa</h3>
            </div>
            <div class="description">
                <ul>
                    <li>Niektóre wykłady mogą być niewyobrażalnie nudne</li>
                    <li>Tworzenie prostych grafik przy użyciu języka JavaScript</li>
                </ul>
            </div>
            <div class="description2">
                <ul>
                    <li>Podstawy tworzenia grafiki komputerowej</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="course">
                <h3>Nowoczesne technologie WWW</h3>
            </div>
            <div class="description">
                <ul>
                    <li>Tworzenie prostych stron WWW</li>
                    <li>Dobieranie barw</li>
                </ul>
            </div>
            <div class="description2">
                <ul>
                    <li>Tworzenie zaawansowanych stron WWW</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="course">
                <h3>Przedsiębiorczość</h3>
            </div>
            <div class="description">
                <ul>
                    <li>Różnice między spółkami</li>
                    <li>Ochrona danych w sieci</li>
                </ul>
            </div>
            <div class="description2">
                <ul>
                    <li>Podstawy przedsiębiorczości</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php
// generujemy zamknięcie strony
echo $P->End();