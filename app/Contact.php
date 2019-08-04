<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table 		= "contact";
    protected $primaryKey 	= "id_contact";
    public $timestamps 		= false;
    public function getList() {
        return $this->paginate(2);
    }
    public function delItem($id) {
        return $this->where('id_contact', $id)->delete();
    }
    public function editItem($id, $item) {
        return $this->where('id_contact', $id)->update($item);
    }
    public function getCountContact() {
        return $this->count();
    }
    public function addItem($item) {
        return $this->insert($item);
    }
}
