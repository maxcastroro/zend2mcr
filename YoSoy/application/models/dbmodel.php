<?php
class Dbmodel extends CI_Model {
public function __construct()
{
//$this->load->database();
}

public function select1()
{
$query = $this->db->query("select * from news");
return $query->result();
}


public function insert1($data)
{   //inserta varias filas
    foreach ($data as $row) {
       $this->db->insert('news', $row);
    } 

    return ;
}


public function insert11($data)
{
    return $this->db->insert('news', $data);
}


public function update1($data)
{
    return $this->db->update('news', $data, "id = 3");
    
}

public function update11($data)
{
    return $this->db->update('news', $data, "id = 3");
    
}


public function delete1($data)
{
    return $this->db->delete('news', $data);
    
}


public function empty1($data)
{
    return $this->db->empty($data);
//    Fatal error: Call to undefined method CI_DB_mysql_driver::empty() in C:\xampp\htdocs\YoSoy\application\models\dbmodel.php on line 53
    
}
}