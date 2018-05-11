<?php
require_once(__DIR__."/php/myPage.php");

$OPIS = "Wojciech Zaniewski - Przygody z Edukacja";
$STYL =<<<EOT
EOT;

// generuejmy stronę i ustawiamy jej parametry
$P =  new myPage("Moje przygody z edukacją");
$P->SetDescription($OPIS);
$P->AddInnerStyle($STYL);
$P->AddCSS("reset.css");
$P->AddCSS("styles.css");

// Wyświetlamy początek strony
echo $P->Begin();
echo $P->PageHeader();
?>

<div class="middle">
    <div class="header">
        <div class="header-txt">
            <h1>Wojciech Zaniewski</h1>
            <h2>Moje przygody z edukacją</h2>
        </div>
    </div>
    <div class="columns">
        <div class="image">
            <img class="img" alt="Sky and tree" src="resources/trees.jpg">
        </div>
        <div class="menu">
            <div class="row">
                <div class="after"><a class="after" href="education/I/index.php">Semestr I</a></div>
            </div>
            <div class="row">
                <div class="after"><a class="after" href="education/II/index.php">Semestr II</a></div>
            </div>
            <div class="row">
                <div class="after"><a class="after" href="education/III/index.php">Semestr III</a></div>
            </div>
            <div class="row">
                <div class="actual"><a class="actual" href="education/IV/index.php">Semestr IV</a></div>
            </div>
            <div class="row">
                <div class="actual"><a class="actual" href="hobby/Shrimps/index.php">Hobby: Krewetki</a></div>
            </div>
        </div>
    </div>
</div>

<?php
// generujemy zamknięcie strony
echo $P->End();
?>