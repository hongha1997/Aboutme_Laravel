<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Cat extends Model
{
    protected $table 		= "cat";
    protected $primaryKey 	= "id_cat";
    public $timestamps 		= false;
    public function getList() {
        return $this->paginate(getenv('ADMIN_PAGINATE'));
    }
    public function getListForLeftBar() {
        //return $this->orderBy('id_cat', 'ASC')->get();
        return $this->join('news','news.id_cat','=','cat.id_cat')
        ->select('cat.id_cat','cat.name',DB::raw("count(news.id_cat) as soluong"))
        ->groupBy('cat.id_cat','cat.name')
        ->paginate(getenv('ADMIN_PAGINATE'));
        // return $this->join('news','news.id_cat','=','cat.id_cat')
        // ->select('cat.id_cat','cat.name',count('news.id_cat') )
        // ->groupBy('cat.id_cat','cat.name')
        // ->paginate(getenv('ADMIN_PAGINATE'));
        // return $this

        //     ->select("category.id_cat","category.name as uname", DB::raw("COUNT(news.id_cat) as count"))

        //     ->join("news","news.id_cat","=","category.id_cat")

        //     ->groupBy("category.id_cat","category.name")

        //     ->get();
    }
    public function addItem($item) {
        return $this->insert($item);
    }
    public function delItem($id) {
        return $this->where('id_cat', $id)->delete();
    }
    public function getItem($id) {
        return $this->findOrFail($id);
    }
    public function editItem($id, $item) {
        return $this->where('id_cat', $id)->update($item);
    }
    public function getListForNews() {
        return $this->get();
    }
    public function getCountCat() {
        return $this->count();
    }
}
