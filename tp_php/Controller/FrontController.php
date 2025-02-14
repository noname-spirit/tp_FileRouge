<?php 


class FrontController extends AbstractController{

    public function home() {
        BDD::getInstance(); // appeler la base de donné
        $data = ["titre"=>"paged'accueil"];
        $this->render("front/home",$data);
    }
    
    public function connexion(){



        $erreurs=[];    //  etape 1 gestion erreurs 






        
        
        
        
        
        $data = [                                           //
            "titre" => "accéder au back office du site",    //  etape 1
            // si KO => message d'erreur                    //  partie affichage "render" 
            "erreurs" => $erreurs                           //
        ];                                                  //
        $this->render("front/connexion" , $data) ;          //

    }

    public function inscription(){
        $erreurs=[];
        $data= [ 
            "titre" => "inscrivez vous",
            "erreurs" => $erreurs 
        ];
        $this->render("front/inscription" , $data) ; 
    }
}