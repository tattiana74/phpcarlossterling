<?php
while (True){
        echo"MENU"."\n";
        echo"[1] Consultar saldo...  "."\n";
        echo"[2] Consignar dinero... "."\n";
        echo"[3] Retirar dinero..."."\n";
        echo"Elige una opcion:";
        $opcion=  intval (readline());

    
    if ($opcion==1){
       function consultar_saldo(){
        $saldo=200000;
        echo"señor usuario su saldo es de: ".$saldo."\n";
        echo " GRACIAS POR UTILIZAR NUESTRO SERVICIO :)"."\n";

        }
        consultar_saldo();
    }
    elseif ($opcion==2) {
       function consignar_dinero(){
        $cuenta=intval(readline("ingrese el numero de cuenta al cual desea consignar..."))."\n";
        $monto=intval(readline("Cuanto desea consignar"))."\n";
        echo "verifique los datos por favor..."."\n";
        echo"[1] confirmar transaccion"."\n";
        $confirmar= intval(readline());
        if($confirmar==1){
            echo "Señor usuario su transaccion ha sido exitosa..."."\n";
            echo " GRACIAS POR UTILIZAR NUESTRO SERVICIO :)"."\n";
        }
        
       }
       consignar_dinero();
    }
    elseif ($opcion==3) {
       function retirar_dinero(){
        $saldo=(200000);
        $retirar= intval(readline(" cuanto desea retirar: "))."\n";
        $fin=($saldo-$retirar);
        echo "señor usuario ha retirado ".$fin. " de ". $saldo. " que tenia disponible en la cuienta..."."\n";
        echo " GRACIAS POR UTILIZAR NUESTRO SERVICIO :)";

       }
       retirar_dinero();
    }

       
    


}

 


