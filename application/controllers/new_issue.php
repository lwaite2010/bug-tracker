<?php
class New_issue extends CI_Controller {
    
    function create_issue() 
    {
        $this->form_validation->set_rules('title', 'title', 'required',
                                         array('required' => 'You must have a %s for your issue.')
                                         );
        
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('new_issue_view');
        }
        else
        {
            $this->load->model("issue_model");
            $this->issue_model->create_issue();
        }
            
    }
}