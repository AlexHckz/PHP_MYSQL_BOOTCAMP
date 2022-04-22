<?php

function drawPendu($etape)
{

  switch ($etape) {
    case 9:
      $printed = "<br>
        <br>
        <br>
        <br>
        <br>
        <br>";
      break;
    case 8:
      $printed = "<br><br>
        <br><br>
        <br><br>
        <br><br>
        <br><br>
       _______________<br><br>";
      break;

    case 7:
      $printed = "<br>
        |<br>
        |<br>
        |<br>
        |<br>
        |_____________<br>";
      break;

    case 6:
      $printed = "        
        ______<br>
        |<br>
        |<br>
        |<br>
        |<br>
        |_____________<br>";
      break;

    case 5:
      $printed = "        
        ______<br>
        |     |<br>
        |<br>
        |<br>
        |<br>
        |_____________<br>";
      break;

    case 4:
      $printed = "        
        ______<br>
        |     <span>|</span><br>
        |     <span>O</span><br>
        |<br>
        |<br>
        |_____________<br>";
      break;

    case 3:
      $printed = "        
        ______<br>
        |     <span>|</span><br>
        |     <span>O</span><br>
        |     <span>|</span><br>
        |  <br>
        |_____________<br>";
      break;

    case 2:
      $printed = "        ______<br>
        |     <span> |</span><br>
        |      <span>O</span><br>
        |     <span>/|</span><br>
        |<br>
        |_____________<br>";
      break;

    case 1:
      $printed = "        ______<br>
        |      <span> |</span><br>
        |       <span>O</span><br>
        |      <span>/|\</span><br>
        |<br>
        |_____________<br>";
      break;

    case 0:
      $printed = "        ______<br>
        |      <span> |</span><br>
        |       <span>O</span><br>
        |      <span>/|\</span><br>
        |      <span>/</span><br>
        |_____________<br>";
      break;

    case -1:
      $printed = "        ______<br>
        |      <span> |</span><br>
        |       <span>O</span><br>
        |      <span>/|\</span><br>
        |      <span>/ \</span><br>
        |_____________<br>";
      break;
  }
  echo $printed;
  return $printed;
}
