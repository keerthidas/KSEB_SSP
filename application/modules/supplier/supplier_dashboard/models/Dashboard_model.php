<?php
class Dashboard_model extends CI_Model
{

  public function getStationLocations()
  {
    $qry="SELECT latitude,longitude FROM station_master WHERE latitude>0 AND is_deleted=0";
    $qrry=$this->db->query($qry);
    return $qrry->result();
  }
  public function getUser_details($uid)
  {
    $qry="SELECT * FROM web_users where uid=$uid";
    $qrry=$this->db->query($qry);
    return $qrry->row();
   }
   public function stationlist()
   {
     $qry="SELECT * FROM station_master WHERE latitude>0 AND is_deleted=0 AND location_verified=1 AND is_deleted=0 AND display_status=1";
     $qrry=$this->db->query($qry);
     return $qrry->result();
   }
   
     public function update($table,$data, $where)
    { 
        $query=$this->db->update($table,$data,$where);
        return $query;
    }
	
	 public function insert($table,$data)
    { 
        $this->db->insert($table,$data);
        return $this->db->insert_id();

    }
	
	 public function getcategroy() {
        $this->db->select('*');
        return $this->db->get('category')->row();
    }
	

	public function getSupplierMaterials()
    {
        
		 $this->db->select('*');
		 $this->db->where('isdeleted',false);
        return $this->db->get("suppliermaterials")->result();
        
    }
	
	 public function getCompanyProfile() {
        $this->db->select('*');
        return $this->db->get('companyprofile')->row();
    }
	
	 public function getemployeesusertype() {
        $this->db->select('*');
        return $this->db->get('Employees_usertypes')->row();
    }
	
	 public function getEmployees() {
        $this->db->select('*');
		$this->db->where('isdeleted',false);
        return $this->db->get('employees')->result();
    }
}
