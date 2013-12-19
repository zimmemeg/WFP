<?php
class Blog {
    
    public function __construct(){
        
        
        
    }
    
    public function getBlogPosts(){
  
        $this->db->select('id, subject, content, summary');
        $this->db->from('posts');
        $this->db->order_by('id', 'desc');
        $result = $this->db->get();
        
        if($result->num_rows() > 0){
            return $result->result_array();
        } else return false;
  
    }// Close get blogPost function
    
    public function getPostDetail($id){
        
        $this->db->select('id, subject, content');
        $this->db->from('posts');
        $this->db->where('id', $id);
        $result = $this->db->get();
        
        if ($result->num_rows() > 0)
        {
            return $result->row_array();    
            
        } else return false;
    
    }
}

?>