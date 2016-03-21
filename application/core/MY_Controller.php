<?php

class MY_Controller extends CI_Controller {

    protected $user;
    protected $data;

    protected $css;
    protected $js;
    protected $bower;

    protected $title = "Jelly Fish Automate";
    protected $description = "Jelly Fish Automate";
    protected $keywords = "Jelly Fish Automate";
    protected $author = "Danero";

    public $request_method;

    public function __construct($logged = false) {
        parent::__construct();
        $this->request_method = $_SERVER['REQUEST_METHOD'];

        $this->load->helper(array('url'));
        $this->load->library('session');

        $data['title'] = $this->title;
        $data['description'] = $this->description;
        $data['keywords'] = $this->keywords;
        $data['author'] = $this->author;
    }

    public function _render($view)
    {
        $this->data['css'] = $this->css;
        $this->data['js'] = $this->js;
        $this->data['bower'] = $this->bower;

        $data['head'] = $this->load->view('templates/head', $this->data, true);
        $data['nav'] = $this->load->view('templates/nav', $this->data, true);
        $data['footer'] = $this->load->view('templates/footer', $this->data, true);
        $data['content'] = $this->load->view($view, $data, true);

        $this->load->view('templates/skeleton', $data);
    }

} 