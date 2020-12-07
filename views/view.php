<?php
function AfficheViewPanel($filenom,array $data2=array()){
	if(file_exists("views/".$filenom.".php")){
       extract($data2);
       ob_start();
       include "views/".$filenom.".php";
       $contenu=ob_get_clean();
       include "views/templet_panel.php";
	}else{
        throw new Exception("Erreur: ficher '$filenom'n'exsite pas", 1);
	}
}
function AfficheViewPanel1($filenom,array $data2=array()){
	if(file_exists("views/".$filenom.".php")){
       extract($data2);
       ob_start();
       include "views/".$filenom.".php";
       $contenu=ob_get_clean();
       include "views/Atemplet_panel.php";
	}else{
        throw new Exception("Erreur: ficher '$filenom'n'exsite pas", 1);
	}
}
function Afficheview($filenom){
include "views/".$filenom.".php";
}
function Afficheviewsanstemplet($filenom,array $data2=array()){
  if(file_exists("views/".$filenom.".php")){
       extract($data2);
        include "views/".$filenom.".php";
  }else{
        throw new Exception("Erreur: ficher '$filenom'n'exsite pas", 1);
  }
}
function Affichemsgereur($filenom,$nom,$data){
if(file_exists("views/".$filenom.".php")){
  $nom1=$nom;
  $data1=$data;
        include "views/".$filenom.".php";
  }else{
        throw new Exception("Erreur: ficher '$filenom'n'exsite pas", 1);
  }

}





?>