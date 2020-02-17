<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    // tambahkan parameter nama pada index
    public function index($name='')
    {
        $data['title']='Home';
        // data adalah sebuah array dengan isi arraynya adalah nama dan diisi $name.
        $data['name']=$name;
        $this->load->view('template/header',$data);
        //tambahkan $data pada home/index;
        $this->load->view('home/index',$data);
        $this->load->view('template/footer');
    }

}

/* End of file Controllername.php */
?>