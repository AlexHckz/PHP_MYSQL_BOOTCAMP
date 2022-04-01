<?php 

    //on fait choisir un mot dans le dictionnaire à l'ordinateur 

    $liste_mots = ["Blanc", "Podium", "Attirer", "Cablage", "Capitaine", "Nuage", "Ovni", "Humide", "Femmes",
    "Tremble", "Canal", "Menottes", "Artificiel", "Madone", "Bazooka", "Pression", "Multiplication", "Prix", "Plastique",
    "Religieuse", "Cible", "Soulevement", "Mediatrice", "Philosophe", "Bande", "Canada", "Ballon", "Volee", "Muet",
    "Parking", "Minuit", "Hiberner", "Loin", "Rabat", "Monarchie", "Spermatozoide", "Poisson", "Camarade", "Moche",
    "Vache", "Rapide", "Entrepot", "Feuille", "Campus", "Pornographie", "Bucheron", "IDE", "Orbite", "Planetes", "Salle",
    "Taxi", "Bronze", "Hydrogene", "Nouveaute", "Route", "Recipient", "Fossette", "Demander", "Terrain", "Aviateur",
    "Boussole", "Plomb", "Catapulte", "Recueillir", "Stimulateur", "Cardiaque", "Chant", "Brun", "Gribouiller", "Locomotive", "Chenil"
    ];

    $table_size = sizeof($liste_mots);
    echo $table_size."\n";

    $random_number = rand(0, $table_size); 

    //on stocke le mot dans une variable 
    $random_word = $liste_mots[$random_number];
    
    //on decoupe le mot en lettres dans un tableau
    $word_table = str_split($random_word);
    print_r($word_table);
    
    //on cree un tableau avec des _
    $word_size = strlen($random_word);
    echo "nombre de lettres dans le mot >> $word_size\n";
    
    $empty_table = [];
    for ($i=0; $i < $word_size; $i++) { 
        array_push($empty_table, "_");
    }
    print_r($empty_table);
    
    $essai_perdant = 0;
    
    do {
        
        //on definit le nombre d'essai max
        $essai_restant = 9 - $essai_perdant;
        echo "le nombre d'essai restant est de >> $essai_restant\n";
        $lettre_trouve = false;
        
        //on demande a l'utilisateur de choisir une lettre 
        $user_entry = readline("Choisir une lettre >>");
        $user_choice = strtolower($user_entry);
        
        //on compare la lettre avec le tableau de mot 
        
        for ($i=0; $i < sizeof($word_table); $i++) { 
            if ($user_choice == strtolower($word_table[$i])) {
                echo "on a trouvé une lettre";
                $empty_table[$i] = $user_choice;
                $lettre_trouve = true;
            }
        }
        
        print_r($empty_table);
        
        if (!$lettre_trouve) {
            echo "P-E-R-D-U !!!\n";
            $essai_perdant++;
        }
        

    } while ($essai_restant > 0);
