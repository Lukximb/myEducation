<?php
$MAIN_MENU_TMPL =<<<EOT
<ul id="mainmenu">
  {{M1}}
  <li class="sem">Semestry
      <ul class="sem">
        {{M2.1}}
        {{M2.2}}
        {{M2.3}}
        {{M2.4}}
      </ul>
    </li>
    {{M3}}
</ul>
EOT;

$MAIN_MENU_ITEMS = [
  "M1"   => ["Strona główna","../../../index.php"],
  "M3"   => ["Hobby",        "../../../hobby/Shrimps/index.php"],
  "M2.1" => ["Sem I",  "../../../education/I/index.php"],
  "M2.2" => ["Sem II",    "../../../education/II/index.php"],
  "M2.3" => ["Sem III",    "../../../education/III/index.php"],
  "M2.4" => ["Sem IV",   "../../../education/IV/index.php"]
];

$MAIN_MENU_LI_1 = '<li class="active">{{T}}</li>';
$MAIN_MENU_LI_2 = '<li class="sem"><a href="{{H}}">{{T}}</a></li>';
/**
*
* @param string $active identyfikator elementu menu który nie jest linkiem
* @return string
*/
function generateMenu($active) {
  global $MAIN_MENU_TMPL, $MAIN_MENU_ITEMS, $MAIN_MENU_LI_1, $MAIN_MENU_LI_2;
  $s = $MAIN_MENU_TMPL;
  foreach ($MAIN_MENU_ITEMS as $key => $array) {
    $mkey = "{{" . $key . "}}";
    $item = ($key === $active)? $MAIN_MENU_LI_1 : $MAIN_MENU_LI_2;
    $item = (string)str_replace(["{{T}}","{{H}}"], $array, $item);
    $s    = (string)str_replace($mkey, $item, $s);
  }
  return $s;
}
?>