<?PHP
include "../entities/event.php";
include "../core/eventC.php";

  


if ( isset($_POST['id'])  and isset($_POST['image'] ) and isset($_POST['d']) and isset($_POST['f']) and isset($_POST['cap']  )and isset($_POST['des']  ) 
	and isset($_POST['titre']  )  and  isset($_POST['des']  ) !=null)
 {


				$d=$_POST['d'];
				$f=$_POST['f'];
				$id=$_POST['id'];
				$cap=$_POST['cap'];
				$image=$_POST['image'];
				$titre=$_POST['titre'];
				$des=$_POST['des'];
				$today=date("Y-m-d");

				
                if(($d>$f or $d<$today)  and ($cap>100 or $cap<10 ))
				{

						           
?>
                    
                                <script>  
                                     	
                                
                                 alert("verifier capacité et date");      
                                     

                                </script>
                                <?php

				}

				/*else  if ($taux>100 or $taux<10 )

				{

						           
?>
                    
                                <script>  
                                     	
                                
                                 alert("verifier taux");      
                                                      

                                </script>
                                <?php
                              
				}*/


				else if($d>$f or $d<$today )
				{  ?>
									
					<script>	
	
                     alert("verifier dates");  

                    </script>

					<?php			
				
									
				}




else 

		{ 
			                       $event1=new event($id,$titre,$d,$f,$cap,$des,$image);
									
									$event1C=new EventC();
									$event1C->ajouterEvent($event1);




									
						header('Location: afficherEvent.php');
									
				
                 
	}



}




//*/

?>
	