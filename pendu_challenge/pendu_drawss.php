<?php

function drawPendu($etape)
{

  switch ($etape) {
    case 9:
      print "\n
        \n
        \n
        \n
        \n
        \n";
      break;
    case 8:
      print "\n
        \n
        \n
        \n
        \n
       _______________\n";
      break;

    case 7:
      print "\n
        |\n
        |\n
        |\n
        |\n
       _|_____________\n";
      break;

    case 6:
      print "        ______\n
        |\n
        |\n
        |\n
        |\n
       _|_____________\n";
      break;

    case 5:
      print "        ______\n
        |   |\n
        |\n
        |\n
        |\n
       _|_____________\n";
      break;

    case 4:
      print "        ______\n
        |   |\n
        |   O\n
        |\n
        |\n
       _|_____________\n";
      break;

    case 3:
      print "        ______\n
        |   |\n
        |   O\n
        |   | \n
        |\n
       _|_____________\n";
      break;

    case 2:
      print "        ______\n
        |   |\n
        |   O\n
        |  /| \n
        |\n
       _|_____________\n";
      break;

    case 1:
      print "        ______\n
        |   |\n
        |   O\n
        |  /|\\\n
        |\n
       _|_____________\n";
      break;

    case 0:
      print "        ______\n
        |   |\n
        |   O\n
        |  /|\\\n
        |  /  \n
       _|_____________\n";
      break;

    case -1:
      print "        ______\n
        |   |\n
        |   O\n
        |  /|\\\n
        |  / \\\n
       _|_____________\n";
      break;
  }
}
