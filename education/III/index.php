<?php
require_once("../../php/myPage.php");
require_once("../../php/menu.php");

$OPIS = "Wojciech Zaniewski - Przygody z Edukacja";
$STYL =<<<EOT
EOT;

// generuejmy stronę i ustawiamy jej parametry
$P =  new myPage("Semestr III");
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
            <h2>Semestr III</h2>
        </div>
    </div>

<?php
    echo generateMenu("M2.3");
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
                <h3>Metody probabilistyczne i Statystyka</h3>
            </div>
            <div class="description">
                <ul>
                    <li>Zmienne losowe</li>
                    <li>Niezależność zdarzeń</li>
                    <li>Przestrzeń probabilistyczna</li>
                </ul>
            </div>
            <div class="description2">
                <ul>
                    <li>Wyznaczyć i stosować funkcje tworzące do badania własności zmiennych losowych</li>
                    <li>Obliczyć wartość oczekiwaną</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="course">
                <h3>Technologia Programowania</h3>
            </div>
            <div class="description">
                <ul>
                    <li>Praca zespołowa</li>
                    <li>Planowanie projektu</li>
                    <li>Wzorce projektowe</li>
                </ul>
            </div>
            <div class="description2">
                <ul>
                    <li>Lepsze wykorzystanie najnowszych technologii</li>
                    <li>Tworzenie diagramów złożonych aplikacji</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="course">
                <h3>Bazy Danych</h3>
            </div>
            <div class="description">
                <ul>
                    <li>Składnia języka MySQL</li>
                    <li>Korzystanie z baz danych</li>
                    <li>Jak smakuje wygrane zycie</li>
                </ul>
            </div>
            <div class="description2">
                <ul>
                    <li>Złożone zapytania</li>
                    <li>Sprawniejsze operowanie bazami danych</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="course">
                <h3>Architektura Komputerów i Systemy Operacyjne</h3>
            </div>
            <div class="description">
                <ul>
                    <li>Jak skutecznie AKiSO</li>
                    <li>6502</li>
                    <li>Jak pisać proste programy w asemblerze</li>
                </ul>
            </div>
            <div class="description2">
                <ul>
                    <li>Jak pisać zaawansowane programy w asemblerze</li>
                    <li>Jak pisać zaawansowane programy w bashu</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php
// generujemy zamknięcie strony
echo $P->End();
