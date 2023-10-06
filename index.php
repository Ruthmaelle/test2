

<?php // ouverture balise php


/*echo "<h2>Mon petit titre</h2>" ;
print_r ("<h2>Mon petit second titre</h2>") ;
//COMMANTAIRE D'UNE SEULE LIGNE 
/* COMMENTAIRE
DE PLUSIEURS
LIGNE */
/*$Maelle = "Maelle"; // declaration d'une variable 
$nb=3;
$nb2=4;
$som = $nb + $nb2;
$concact = $Maelle. $nb2;
echo $concact;
echo"</br>";
echo"</br>"; 
echo $som;
*/

/*$prenom = 'Maelle';
$nom = 'Dumas';
$age=19;
$paysDeNaissance ='Haiti';
$villeDeNaissance = 'Port-au-Prince';
echo "<ul>
<li>Prenom : " .$prenom.
"<li>Nom : " .$nom. 
"<li>Age : " .$age. 
"<li>Pays de Naissance : " .$paysDeNaissance. 
"<li>Ville de Naissance : " .$villeDeNaissance
;
//fermeture balise php ?> 
*/


// Define team data using associative arrays
$team_1_data = [
    "name" => "Grenadye",
    "score" => 3,
    "url" => "www.whataver.com"
];

$team_2_data = [
    "name" => "Canadien",
    "score" => 2,
    "url" => "www.don/t/matter.com"
];

$team_3_data = [
    "name" => "Mali",
    "score" => 1,
    "url" => "www.Mali.com"
];

// Create an array of teams
$teams = [$team_1_data, $team_2_data, $team_3_data];

// Function to display team data
function showTeam($team) {
    echo "Team: " . $team["name"] . ", Score: " . $team["score"] . " points";
}

// Function to add a new team
function addTeam(&$teams, $name, $score, $url) {
    $newTeam = [
        "name" => $name,
        "score" => $score,
        "url" => $url
    ];
    array_push($teams, $newTeam);
}

// Adding a new team
addTeam($teams, "Togo", 2, "www.Togo.com");

// Display team data
echo "<table border='1'>";
echo "<thead><tr><td>Nom</td><td>Score</td><td>URL</td></tr></thead><tbody>";
foreach ($teams as $teamData) {
    echo "<tr>";
    echo "<td>" . $teamData["name"] . "</td>";
    echo "<td>" . $teamData["score"] . "</td>";
    echo "<td>" . $teamData["url"] . "</td>";
    echo "</tr>";
}
echo "</tbody></table>";

// Display a single team's data
showTeam($teams[0]);
echo "<br>";

//update 
//function updateTeam($teams) {
    foreach ($teams as $teamData) {

        if ($teamData['name'] == 'Canadien') {
            echo "Le score est = ".$teamData['score'];
            $newScore = 0;
            $teamData['score'] = $newScore;
            echo "<br>";
            echo "Le nouveau score est = ".$teamData['score'];
            var_dump($teams);
            var_dump ($teamData); 
            //objectif : modifier le score de Canada en qque chose d'autre 
        }
        
    }
//}


//function delete 
function delTeam (&$teams, $teamName) {
    foreach ($teams as $key => $team) {
        if ($team['name'] == 'Mali') {
            unset($teams[$key]) ;
            var_dump($teams);
            //objectif : supprimer l'equipe Mali au total 
        }
    }
}

?>
