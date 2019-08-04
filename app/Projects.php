<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $table 		= "projects";
    protected $primaryKey 	= "id_project";
    public $timestamps 		= false;
    public function getList() {
        return $this->paginate(getenv('ADMIN_PAGINATE'));
    }
    public function addItem($item) {
        return $this->insert($item);
    }
    public function getOldPicture($id) {
        return $this->where('id_project', $id)->first();
    }
    public function delItem($id) {
        return $this->where('id_project', $id)->delete();
    }
    public function getItem($id) {
    	return $this->findOrFail($id);
    }
    public function editItem($id, $item) {
        return $this->where('id_project', $id)->update($item);
    }
    public function getCountProjects() {
        return $this->count();
    }
    public function getListPublic() {
        return $this->get();
    }
}
