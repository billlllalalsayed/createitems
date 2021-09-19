<?php
class Item extends CI_Controller
{
    public function __construct()
    {
        //call CodeIgniter's default Constructor
        parent::__construct();

        //load database libray manually
        $this->load->database('items');

        //load Model
        $this->load->model('Item_Model');
    }

    public function savedata()
    {
        //load registration view form
        $this->load->view('registration');

        //Check submit button 
        if ($this->input->post('save')) {
            //get form's data and store in local varable
            $n = $this->input->post('name');
            $e = $this->input->post('email');
            $p = $this->input->post('phone');
            $this->Item_Model->saverecords($n, $e, $p);
            echo "Records Saved Successfully";
        }
    }

    public function dispdata()
    {
        $result['data'] = $this->Item_Model->displayrecords();
        $this->load->view('dispdata', $result);
    }
    public function deletedata()
    {
        $id = $this->input->get('id');
        $this->Item_Model->deleterecords($id);
        echo "Delete successful";
        redirect("Item/dispdata");
    }
    public function updatedata()
    {
        $id = $this->input->get('id');
        $result['data'] = $this->Item_Model->displayrecordsById($id);
        $this->load->view('update', $result);

        if ($this->input->post('update')) {
            $n = $this->input->post('name');
            $e = $this->input->post('email');
            $p = $this->input->post('phone');
            $this->Item_Model->updaterecords($n, $e, $p, $id);
            redirect("Item/dispdata");
        }
    }
}
?>
}