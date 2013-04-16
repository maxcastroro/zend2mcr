<?php
class Gestiondb extends CI_Controller {
    
public function __construct()
    {
    parent::__construct();
    
    }
public function index()
    {
    
//    $this->gestiondb_select();
//    $this->gestiondb_insert();
//    $this->gestiondb_update();
//    $this->gestiondb_delete();
    $this->gestiondb_empty();
    }
public function gestiondb_select()
    {
        $this->load->model("dbmodel");
        $data['results'] = $this->dbmodel->select1();  
        
        $this->load->view("dbviews/dbview",$data);
        
       // print_r($data['results']);
        
    }
public function gestiondb_insert()
    {
        $this->load->model("dbmodel");
        $newrow = array(
            array(
            "title"=>"bocon1",
            "slug"=>"boco1",
            "text"=>"periodico chillon1"
               ), 
            array(
            "title"=>"bocon2",
            "slug"=>"boco2",
            "text"=>"periodico chillon2"
               )
            );
         $this->dbmodel->insert1($newrow) ;    
        
    }
    
public function gestiondb_update()
    {//Actualiza si la clave no esta en el array, especificar univocamente en un tercer parametro.
        $this->load->model("dbmodel");
        $newrow = array(
  
                    "title"=>"bocon333",
                    "slug"=>"boco33",
                    "text"=>"periodico chillon33"
                     
                 );
         $this->dbmodel->update1($newrow) ;  
         echo "it has been updated";
        
    }

    public function gestiondb_delete()
    {//Actualiza si la clave no esta en el array, especificar univocamente en un tercer parametro.
        $this->load->model("dbmodel");
        $newrow = array(
  
                    "id"=>"7",
          
                 );
         $this->dbmodel->delete1($newrow) ;  
         echo "it has been deleted";
        
    }
    
    public function gestiondb_empty()
    {//Actualiza si la clave no esta en el array, especificar univocamente en un tercer parametro.
        $this->load->model("dbmodel");
        $newrow = "news";
         $this->dbmodel->empty1($newrow) ;  
         echo "it has been emptied";
        
    }



}
?>
