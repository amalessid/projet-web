<?PHP
include "../entities/promo.php";
include "../core/promoC.php";

  


if ( isset($_POST['id_promo'])  and isset($_POST['image'] ) and isset($_POST['d']) and isset($_POST['f']) and isset($_POST['taux']  )  and  $_POST['id_promo']!=null and  $_POST['f']!=null   and  $_POST['d']!=null  and  $_POST['taux']!=null  )
 {


				$d=$_POST['d'];
				$f=$_POST['f'];
				$id_promo=$_POST['id_promo'];
				$taux=$_POST['taux'];
				$image=$_POST['image'];
				$today=date("Y-m-d");

				
                if(($d>$f or $d<$today)  and ($taux>100 or $taux<10 ))
				{

						           
?>
                    
                                <script>  
                                     	
                                
                                 alert("verifier taux et date");      
                                     

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



	else if ($d<=$f and $d>=$today)

	{  


		                            $promo1=new promo($id_promo,$d,$f,$taux,$image);
									
									$promo1C=new PromoC();
									$promo1C->ajouterPromo($promo1);
									//$nb=$employe1C->calculPeriode($employe1);

									
									
									header('Location: afficherPromo.php');
									//echo $employe1C->calculPeriode($employe1);




    }


				
                 
	}






//*/

?>
	