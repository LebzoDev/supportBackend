<?php

namespace App\Service;

class fraisService{
    public function getfrais(int $montant){
        $max_Array=[5000,10000,15000,20000,50000,60000,75000,120000,150000,200000,250000,300000,400000,750000,900000,1000000,1125000,1400000,2000000];
        $frais_Array=[425,850,1270,1695,2500,3000,4000,5000,6000,7000,8000,9000,12000,15000,22000,25000,27000,30000,35000];
        $i = 0;
        
        while ($i<count($max_Array) && $montant>$max_Array[$i])$i++;
         
        if ($i<count($max_Array)) {
            $frais = $frais_Array[$i];
        }else{
          if ($montant) {
                $frais = $montant*0.02;
          }else{
            $frais = 0;
          } 
        }
        return $frais;
    }
}