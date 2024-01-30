<?php 
  $langSelected = '';
  switch ($_SESSION['lang']) {
    case "en":
      $langSelected = "English";
        break;
    case "pt":
      $langSelected = "Português";
        break;
    default:
        $langSelected = "Português";
        break;
}
?>
<div class="btns-language">
  <ul>
    <li class="language-selected"><?php echo $langSelected;?></li>
    <li class="language"><a href="?lang=pt">Português</a> </li>
    <li class="language"><a href="?lang=en">English</a> </li>
  </ul>
</div>