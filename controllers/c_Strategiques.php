 <?php
 


 if(!isset($_REQUEST['action']))
 $action = 'accueil';
else
$action = $_REQUEST['action'];

switch($action)
{
   case 'accueil':
   {
      include("vues/v_home.php");
      break;
   }

   case 'valider':
      {
        

         $test = false;

          if(isset($_POST) && isset($_POST['nom']) && isset($_POST['mail']) && isset($_POST['sujet']) && isset($_POST['message']))
            {
               extract($_POST);
               if(!empty($nom) && !empty($mail) && !empty($sujet) && !empty($message))
               {
                  $message=str_replace("\'","'",$message);
                  $destinataire="hicham.sagouti@outlook.fr";
                  $suject =$sujet;
                  $msg=$message;
                  $entete="From: $nom <$mail> \n";
                  mail($destinataire,$sujet,$msg,$entete);
                  $test = true;
               }
            }

          if($test==true)
          {
           
          }






         include("vues/v_home.php");
          break;
      }





}


