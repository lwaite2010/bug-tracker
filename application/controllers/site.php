<?php

class Site extends CI_Controller {

    function index() {
        $this->load->model('issue_model');
        $data['issues'] = $this->issue_model->get_all_issues();
        $this->load->view('home', $data);
    }

}