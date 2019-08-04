<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saying extends Model
{
    protected $table 		= "saying";
    protected $primaryKey 	= "id_saying";
    public $timestamps 		= false;
    public function getList() {
        return $this->paginate(getenv('ADMIN_PAGINATE'));
    }
    public function addItem($item) {
        return $this->insert($item);
    }
    public function delItem($id) {
        return $this->where('id_saying', $id)->delete();
    }
    public function getItem($id) {
        return $this->findOrFail($id);
    }
    public function editItem($id, $item) {
        return $this->where('id_saying', $id)->update($item);
    }
    public function getCountSaying() {
        return $this->count();
    }
}
