<?php
        if ($bdd = mysqli_connect("172.16.201.111","sio","slam","enceintes")) {
            $REQUEST = 'SELECT * FROM produits';
            $RESULT = mysqli_query($bdd, $REQUEST);
            while ($donnees = mysqli_fetch_assoc($RESULT)) {
                echo '<div class="cards opacity1">';
                echo '<div class="card">';
                echo '<a href=". $donnees['LP']" src="' . $donnees['Images'] .''; 
                echo '<div class="card-header">';
                echo '<h2>' . $donnees['NomP'] . '</h2>';
                echo '<p>' . $donnees['Description'] . '</p>';
                echo '<p><strong>Prix :</strong> ' . $donnees['Prix'] . '</p>';
                echo '<a href="' . $donnees['LP'] . ''; 
                echo '</div>';
                echo '</div>';
                echo '</div>';
             }
         } else {
                echo 'erreurrrrrrrrr';
            }
        ?>    
        
      
        
            
