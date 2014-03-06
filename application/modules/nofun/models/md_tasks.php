<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Md_tasks extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    public function tasks()
    {
       return 
        
            $this->db->get('task')
                      ->result();
    }
}
