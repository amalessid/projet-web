<?PHP
include "../config.php";

class EventC 
{
      
    function ajouterEvent($eve)
	{
		$sql="insert into date_test (id,titre,deb,fin,cap,des,image) values (:id,:titre,:deb,:fin,:cap,:des,:image)";
		$db = config::getConnexion();
	    try
		{
			$req=$db->prepare($sql);
								
			 $id=$eve->get_id_eve();
			 $titre=$eve->get_titre();
		     $deb=$eve->get_deb_eve();
			 $fin=$eve->get_fin_eve();
			 $cap=$eve->get_cap();
			 $des=$eve->get_des();
			 $image=$eve->get_image();
			
		     $req->bindValue(':id',$id);
		     $req->bindValue(':titre',$titre);
			 $req->bindValue(':deb',$deb);
			 $req->bindValue(':fin',$fin);
			 $req->bindValue(':cap',$cap);
			 $req->bindValue(':des',$des);
			  $req->bindValue(':image',$image);
			
			
	         $req->execute();
			           
		}

	    catch (Exception $e)
	    {
        	echo 'Erreur: '.$e->getMessage();
        }
		
	}

	 /****************************************************************************************************/
	  function recupererEvent($id)

	{
			$sql="SELECT * from date_test where id=$id";
			$db = config::getConnexion();
			try
			{
			
			   $liste=$db->query($sql);
			   return $liste;
			}
	        catch (Exception $e)
	        {
	            die('Erreur: '.$e->getMessage());
	        }
	}
    
    /****************************************************************************************************/

	function afficherEvents($eve)

    {
		    echo "id: ".$eve->calcul($id)."<br>";
		  
			
	}
	

    /****************************************************************************************************/

    function afficherEvent()
	{
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		    $sql="SELECT * From date_test";
		    $db = config::getConnexion();
		    try
		    {
				$liste=$db->query($sql);
		 		return $liste;
		    }
            catch (Exception $e)
            {
                die('Erreur: '.$e->getMessage());
            }	
	}

	/****************************************************************************************/

    function supprimerEvent($id)
    {
			$sql="DELETE FROM date_test where id= :id";
			$db = config::getConnexion();
	        $req=$db->prepare($sql);
			$req->bindValue(':id',$id);
		    try
		    {
	              $req->execute();
	              // header('Location: index.php');
            }
            catch (Exception $e)
            {
                  die('Erreur: '.$e->getMessage());
            }
	}

	/*******************************************************************************************/
	
	function modifierEvent($eve,$id)
	{
		    $sql="UPDATE date_test SET id=:id,titre=:titre,deb=:deb,fin=:fin,cap=:cap,des=:des,image=:image WHERE id=:id";
		    
		
		    $db = config::getConnexion();
		   // $db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
            try
            {		
			        $req=$db->prepare($sql);
					$id=$eve->get_id_eve();
					$titre=$eve->get_titre();
			        $deb=$eve->get_deb_eve();
			        $fin=$eve->get_fin_eve();
			        $cap=$eve->get_cap();
			        $des=$eve->get_des();
			        $image=$eve->get_image();
			        $datas = array(':id'=>$id,':titre'=>$titre,':deb'=>$deb,':fin'=>$fin,':cap'=>$cap ,':des'=>$des,':image'=>$image);
				
				   
					$req->bindValue(':id',$id);
					$req->bindValue(':titre',$titre);
					$req->bindValue(':deb',$deb);
					$req->bindValue(':fin',$fin);
					$req->bindValue(':cap',$cap);
					$req->bindValue(':des',$des);
					$req->bindValue(':image',$image);
					
					
			        $s=$req->execute();
				

						
			           // header('Location: index.php');
            }
            catch (Exception $e)
            {
                    echo " Erreur ! ".$e->getMessage();
			        echo " Les datas : " ;
		 	        print_r($datas);
            }

  }
    /*********************************************************************************/

  

    /************************************************************************************/
        
	
}

?>
