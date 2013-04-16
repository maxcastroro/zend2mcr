<?php
class News extends CI_Controller {
public function __construct()
{
parent::__construct();
$this->load->model('news_model');
}
public function index()
{
$data['news'] = $this->news_model->get_news();
$data['title'] = 'Archivo de noticias';

//se cargan las vistas o directorios que estan en views
$this->load->view('templates/header', $data);
//la vista index que muestra el array
$this->load->view('news/index', $data);
$this->load->view('templates/footer');
}

public function view($slug)
{
$data['news_item'] = $this->news_model->get_news($slug);
if (empty($data['news_item']))
{
show_404();
}
$data['title'] = $data['news_item']['title'];
$this->load->view('templates/header', $data);
//la vista view que solo muestra un item
$this->load->view('news/view', $data);
$this->load->view('templates/footer');
}


public function create()
{
$this->load->helper('form');
$this->load->library('form_validation');
$data['title'] = 'Crear un ítem de noticias';
$this->form_validation->set_rules('title', 'Título', 'required');
$this->form_validation->set_rules('text', 'Texto', 'required');
if ($this->form_validation->run() === FALSE)
        {
    
    echo "en form validacion si";
        $this->load->view('templates/header', $data);
        $this->load->view('news/create');
        $this->load->view('templates/footer');
        }
        else
        {
        $this->news_model->set_news();
//        sin encabezado ni cabecera.
        $this->load->view('news/success');
        }

}
}