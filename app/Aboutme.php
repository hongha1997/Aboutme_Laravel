<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aboutme extends Model
{
    protected $table 		= "aboutme";
    protected $primaryKey 	= "id_aboutme";
    public $timestamps 		= false;
    public function getList() {
        return $this->paginate(getenv('ADMIN_PAGINATE'));
    }
    public function addItem($item) {
        return $this->insert($item);
    }
    public function delItem($id) {
        return $this->where('id_aboutme', $id)->delete();
    }
    public function getItem($id) {
        return $this->findOrFail($id);
    }
    public function editItem($id, $item) {
        return $this->where('id_aboutme', $id)->update($item);
    }
    public function editItemAll($item) {
        return $this->where('active','=',1)->update($item);
    }
    public function getCountAboutme() {
        return $this->count();
    }
    public function getItemPublic() {
        return $this->where('active', 1)->first();
    }
}
