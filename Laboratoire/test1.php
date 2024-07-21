<?php
session_start();
require('config.php');
$conn = connect();

// public const LEFT='left';
require 'vendor1/autoload.php';
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\SimpleType\TextAlignment;
use PhpOffice\PhpWord\SimpleType\JcTable;
use PhpOffice\PhpWord\Style\Table;
use PhpOffice\PhpWord\TemplateProcessor;

// if (mysqli_num_rows($result) > 0) {
    $phpWord = new PhpWord();
    
    // Créer une section avec des en-têtes/pieds de page différents pour la première page
    $section = $phpWord->addSection();

    // Ajouter l'en-tête pour la première page
    $table = $section->addTable();
    $table->addRow();

     // Partie gauche en français
     $cell = $table->addCell(7000);
     $cell->addText("REPUBLIQUE DU CAMEROUN", ['bold' => true, 'size' => 8]);
     $cell->addText("Paix - Travail - Patrie", ['italic' => true, 'size' => 7]);
     $cell->addText("MINISTERE DE LA SANTE PUBLIQUE", ['bold' => true, 'size' => 8]);
     $cell->addText("DELEGATION REGIONALE DE L'OUEST", ['italic' => true, 'size' => 8]);
     $cell->addText("DISTRICT DE SANTE DE MBOUDA", ['bold' => true, 'size' => 8]);
     $cell->addText("HÔPITAL DE DISTRICT DE MBOUDA", ['italic' => true, 'size' => 8]);
     $cell->addText("BP : 23 MBOUDA / TEL 233 48 51 06", ['size' => 8]);
     $cell->addText("hdmbouda@yahoo.fr", ['italic' => true,'size' => 7 , 'italic' => true, 'lineHeight'=> 4.5]);
 
     // Logo au centre
     $cell = $table->addCell(4010);
     $cell->addImage('logo.jpg', array('width' => 70, 'height' => 80, 'alignment' => \PhpOffice\PhpWord\SimpleType\Jc::LEFT, 'marginTop' => -50
     ));
 
     // Partie droite en anglais
     $cell = $table->addCell(6000);
     $cell->addText("REPUBLIC OF CAMEROON", ['bold' => true, 'size' => 8  ]);
     $cell->addText("Peace - Work - Fatherland", ['italic' => true, 'size' => 7]);
     $cell->addText("MINISTRY OF PUBLIC HEALTH", ['bold' => true, 'size' => 8         , 'TextAlignment'=>\PhpOffice\PhpWord\SimpleType\Jc::CENTER ]);
     $cell->addText("WESTERN REGIONAL DELEGATION", ['italic' => true, 'size' => 8     , 'TextAlignment'=>\PhpOffice\PhpWord\SimpleType\Jc::CENTER ]);
     $cell->addText("MBOUDA HEALTH DISTRICT SERVICE", ['bold' => true, 'size' => 8    , 'TextAlignment'=>\PhpOffice\PhpWord\SimpleType\Jc::CENTER ]);
     $cell->addText("MBOUDA HEALTH DISTRICT HOSPITAL", ['italic' => true, 'size' => 8 , 'TextAlignment'=>\PhpOffice\PhpWord\SimpleType\Jc::CENTER ]);
     $cell->addText("PO.BOX: 23 MBOUDA / TEL 233 48 51 06", ['size' => 8]);
     $cell->addText("hdmbouda@yahoo.fr", ['italic' => true,'size' => 7 , 'italic' => true,]);
 
    // Ajouter un en-tête vide pour les pages suivantes

    // $section1 = $phpWord->addSection();
    $section->addText("1. IDENTIFICATION DU PATIENT ", ['bold' => true,'size' => 9 ,'lineHeight'=> 1.5]);

    $table1 = $section->addTable();


    // ajout des informations du patient 
    $table1->addRow();
    $table1->addCell(2900 , array('borderTopSize'=>1,'borderRightSize'=>1,'BorderLeftSize'=>1,'borderBottomSize'=>1))->addText("Nom");
    $table1->addCell(2000 , array('borderTopSize'=>1,'borderRightSize'=>1,'borderBottomSize'=>1))->addText("Prénom");
    $table1->addCell(2000 , array('borderTopSize'=>1,'borderRightSize'=>1,'borderBottomSize'=>1))->addText("sexe");
    $table1->addCell(2000 , array('borderTopSize'=>1,'borderRightSize'=>1,'borderBottomSize'=>1))->addText("Age");
    $table1->addCell(3000 , array('borderTopSize'=>1,'borderRightSize'=>1,'borderBottomSize'=>1))->addText("Service");
    $table1->addCell(2000 , array('borderTopSize'=>1,'borderRightSize'=>1 ,'borderBottomSize'=>1) )->addText("Prescriteur");

    if(isset($_SESSION['patient'])){
        $ids = array_keys($_SESSION['patient']);
        $requete  = mysqli_query($conn , "SELECT * FROM patient WHERE id_patient IN (".implode(',', $ids).")");
        foreach ($requete as $key) {
            $table1->addRow();
            $table1->addCell(2900, array('borderTopSize'=>1,'borderRightSize'=>1,'BorderLeftSize'=>1,'borderBottomSize'=>1))->addText($key['nom']);
            $table1->addCell(2000 , array('borderTopSize'=>1,'borderRightSize'=>1 ,'borderBottomSize'=>1))->addText($key['prenom']);
            $table1->addCell(2000 , array('borderTopSize'=>1,'borderRightSize'=>1 ,'borderBottomSize'=>1))->addText($key['sexe']);
            $table1->addCell(100 , array('borderTopSize'=>1,'borderRightSize'=>1 ,'borderBottomSize'=>1))->addText($key['age']);
            $table1->addCell(3000 , array('borderTopSize'=>1,'borderRightSize'=>1 ,'borderBottomSize'=>1))->addText($key['services']);
            $table1->addCell(2000 , array('borderTopSize'=>1,'borderRightSize'=>1 ,'borderBottomSize'=>1))->addText($key['prescripteur'] );

            # code...
        }
    }

    $section->addText("", ['bold' => true,'size' => 8 ,'lineHeight'=> 1]);
   // entete du deuxieme 
    $section->addText("2. PRELEVEMENT ", ['bold' => true,'size' => 9 ,'lineHeight'=> 1.5]);
    $table2 = $section->addTable();

    $table2->addRow();
    $table2->addCell(4900 , array('borderTopSize'=>1,'borderRightSize'=>1,'BorderLeftSize'=>1,'borderBottomSize'=>1))->addText("Date et heure de prélèvement");
   
    $table2->addCell(2000 , array('borderTopSize'=>1,'borderRightSize'=>1,'borderBottomSize'=>1))->addText("Responsable");
    
    $table2->addCell(3000 , array('borderTopSize'=>1,'borderRightSize'=>1,'borderBottomSize'=>1))->addText("Nature");
    $table2->addCell(4000 , array('borderTopSize'=>1,'borderRightSize'=>1 ,'borderBottomSize'=>1) )->addText("Date et heure d'analyses");

    // corps du deuxieme tableau

    $table2->addRow();
    $table2->addCell(4900 , array('borderTopSize'=>1,'borderRightSize'=>1,'BorderLeftSize'=>1,'borderBottomSize'=>1))->addText("");
   
    $table2->addCell(2000 , array('borderTopSize'=>1,'borderRightSize'=>1,'borderBottomSize'=>1))->addText("");
    
    $table2->addCell(3000 , array('borderTopSize'=>1,'borderRightSize'=>1,'borderBottomSize'=>1))->addText("");
    $table2->addCell(4000 , array('borderTopSize'=>1,'borderRightSize'=>1 ,'borderBottomSize'=>1) )->addText("");


    $section->addText("", ['bold' => true,'size' => 8 ,'lineHeight'=> 1]);


        // affichage des examens par cathegorie


        if(isset($_SESSION['panier'])){
            $ids = array_keys($_SESSION['panier']);
        var_dump($ids);
            // echo"bonjour";
            $resu= mysqli_query($conn , "SELECT distinct f.nom_famille ,f.id_famille , f.description  FROM examen c , famille_examen f WHERE  c.id_famille=f.id_famille and c.id_examen IN (".implode(',', $ids).")");
             

            $table3 = $section->addTable();

           
            // parcours des familles
            foreach ($resu as $key) {
                // echo($key['nom_examen']);
            // entete du deuxieme 
            //  $section->addText($key['nom_famille'], ['bold' => true,'size' => 15 ,'lineHeight'=> 1.5]);
                

                    $idf = $key['id_famille'];
                    $resu1= mysqli_query($conn , "SELECT c.nom_examen , c.unite , c.norme , c.resultat , c.conclusion FROM examen c , famille_examen f WHERE  f.id_famille =$idf and c.id_famille=f.id_famille and c.id_examen IN (".implode(',', $ids).")");

                // ajout de l'entete du tableau d'examen
                
                $table3->addRow();
                $section->addText("", ['bold' => true,'size' => 8 ,'lineHeight'=> 1.5]);
              echo $key['nom_famille'];
                $table3->addCell(3000)->addText($key['nom_famille'] , ['bold' => true,'size' => 12,'lineHeight'=> 2]);
                $table3->addCell(3000)->addText($key['description'] , ['bold' => true,'size' => 8,'lineHeight'=> 1.5]);

                    $table3->addRow();
                        $table3->addCell(50 , array('borderTopSize'=>1,'borderRightSize'=>1,'BorderLeftSize'=>1,'borderBottomSize'=>1))->addText("No");
                        $table3->addCell(3000 , array('borderTopSize'=>1,'borderRightSize'=>1,'borderBottomSize'=>1))->addText("EXAMEN");
                        $table3->addCell(2500 , array('borderTopSize'=>1,'borderRightSize'=>1,'borderBottomSize'=>1))->addText("RESULTAT");
                        $table3->addCell(2000 , array('borderTopSize'=>1,'borderRightSize'=>1,'borderBottomSize'=>1))->addText("NORME");
                        $table3->addCell(1050 , array('borderTopSize'=>1,'borderRightSize'=>1,'borderBottomSize'=>1))->addText("UNITE");
                        $table3->addCell(4000 , array('borderTopSize'=>1,'borderRightSize'=>1 ,'borderBottomSize'=>1) )->addText("CONCLUSION");

                    // parcours des examens
                    $cpt = 0; 
                    foreach ($resu1 as $key) {
                        $cpt ++;
                        $table3->addRow();
                        $table3->addCell(400 , array('borderTopSize'=>1,'borderRightSize'=>1,'BorderLeftSize'=>1,'borderBottomSize'=>1))->addText($cpt);
                        $table3->addCell(3000 , array('borderTopSize'=>1,'borderRightSize'=>1,'borderBottomSize'=>1))->addText($key['nom_examen']);
                        $table3->addCell(2500 , array('borderTopSize'=>1,'borderRightSize'=>1,'borderBottomSize'=>1))->addText($key['resultat']);
                        $table3->addCell(2000 , array('borderTopSize'=>1,'borderRightSize'=>1,'borderBottomSize'=>1))->addText($key['norme']);
                        $table3->addCell(1000 , array('borderTopSize'=>1,'borderRightSize'=>1,'borderBottomSize'=>1))->addText($key['unite']);
                        $table3->addCell(4000 , array('borderTopSize'=>1,'borderRightSize'=>1 ,'borderBottomSize'=>1) )->addText($key['conclusion']);


                    }
                    $section->addText("", ['bold' => true,'size' => 8 ,'lineHeight'=> 1.5]);
                



            }

        }


















// $date  = date('YmdHis');
// $file_name = "resultat_$date.docx";
    // Enregistrez le document Word
    $writer = IOFactory::createWriter($phpWord, 'Word2007');
    $writer->save('F:\resultat.docx');
// }
unset($_SESSION['patient']);

unset($_SESSION['panier']);

header('location: resultat.php');

?>
