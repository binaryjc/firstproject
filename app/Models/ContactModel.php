<?php 

namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class ContactModel extends Model{
    protected $table = 'contacts';
 
    protected $allowedFields = ['name', 'email','message','created_at'];
    
    protected $useTimestamps = true;
}


?>