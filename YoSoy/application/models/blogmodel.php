<?php

//Nota: Las funciones usan las funciones de base de datos del Active Record.
//Nota: En aras de la simplicidad, en este ejemplo usamos $_POST directamente. Esto es generalmente una
//mala práctica, y el enfoque más común sería usar la Clase Input $this->input->post('title')

class Blogmodel extends CI_Model {
var $title = '';
var $content = '';
var $date = '';
function __construct()
{
// Llamar al constructor de CI_Model
parent::__construct();
}
function get_last_ten_entries()
{
$query = $this->db->get('entries', 10);
return $query->result();
}
function insert_entry()
{
$this->title = $_POST['title']; // por favor leer la nota de abajo
$this->content = $_POST['content'];
$this->date = time();
$this->db->insert('entries', $this);
}
function update_entry()
{
$this->title = $_POST['title'];
$this->content = $_POST['content'];
$this->date = time();
$this->db->update('entries', $this, array('id' => $_POST['id']));
}
}
?>