<?php

function drawPendu($etape)
{

  switch ($etape) {
    case 9:
      $printed = "\n
        \n
        \n
        \n
        \n
        \n";
      break;
    case 8:
      $printed = "\n
        \n
        \n
        \n
        \n
       _______________\n";
      break;

    case 7:
      $printed = "\n
        |\n
        |\n
        |\n
        |\n
       _|_____________\n";
      break;

    case 6:
      $printed = "        ______\n
        |\n
        |\n
        |\n
        |\n
       _|_____________\n";
      break;

    case 5:
      $printed = "        ______\n
        |   |\n
        |\n
        |\n
        |\n
       _|_____________\n";
      break;

    case 4:
      $printed = "        ______\n
        |   |\n
        |   O\n
        |\n
        |\n
       _|_____________\n";
      break;

    case 3:
      $printed = "        ______\n
        |   |\n
        |   O\n
        |   | \n
        |\n
       _|_____________\n";
      break;

    case 2:
      $printed = "        ______\n
        |   |\n
        |   O\n
        |  /| \n
        |\n
       _|_____________\n";
      break;

    case 1:
      $printed = "        ______\n
        |   |\n
        |   O\n
        |  /|\\\n
        |\n
       _|_____________\n";
      break;

    case 0:
      $printed = "        ______\n
        |   |\n
        |   O\n
        |  /|\\\n
        |  /  \n
       _|_____________\n";
      break;

    case -1:
      $printed = "        ______\n
        |   |\n
        |   O\n
        |  /|\\\n
        |  / \\\n
       _|_____________\n";
      break;
  }
  return $printed;
}
