<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table 		= "news";
    protected $primaryKey 	= "id_news";
    public $timestamps 		= true;
    public function getList() {
        return $this->join('cat','news.id_cat','=','cat.id_cat')->select('news.id_news','news.name','news.preview_text','news.picture','news.count_number','news.active','cat.name as catname')->orderBy('id_news','DESC')->paginate(getenv('ADMIN_PAGINATE'));
    }
    public function addItem($item) {
        return $this->insert($item);
    }
    public function getOldPicture($id) {
        return $this->where('id_news', $id)->first();
    }
    public function delItem($id) {
        return $this->where('id_news', $id)->delete();
    }
    public function getItem($id) {
    	return $this->findOrFail($id);
    }
    public function editItem($id, $item) {
        return $this->where('id_news', $id)->update($item);
    }
    public function getItemByCat($id_cat) {
        return $this->where('id_cat',  '=', $id_cat)->get();
    }
    public function getSoluongActive() {
        return $this->where('active', 1)->count();
    }
    public function getCountNews() {
        return $this->count();
    }
    public function searchNews($keyword) {
        return $this->join('cat','news.id_cat','=','cat.id_cat')->select('news.id_news','news.name','news.preview_text','news.picture','news.count_number','news.active','cat.name as catname')->where('news.name', 'like', "%$keyword%")
        ->orderBy('id_news','DESC')
        ->get();
        //return $this->where('name', 'like', "%$search_keyword%")->paginate(getenv('ADMIN_PAGINATE'));
    }
    public function searchNewsPublic($search_keyword1) {
        return $this->where('name', 'like', "%$search_keyword1%")->paginate(getenv('ADMIN_PAGINATE'));
    }
    public function getListPublic() {
        return $this->orderBy('id_news','DESC')->paginate(6);
    }
    public function getListPublicHaha($num) {
        return $this->orderBy('id_news','DESC')->take($num)->get();
    }
    public function getListNew() {
        return $this->orderBy('id_news', 'DESC')->take(4)->get();
    }
    public function getItemCat($id) {
        return $this->where('id_cat',$id)->paginate(5);
    }
    public function getLienQuan($id,$id2) {
        return $this->where('id_cat',$id)->where('id_news','!=',$id2)->orderBy('id_news', 'ASC')->take(3)->get();
    }
    public function haha($id, $item) {
        return $this->where('id_news', $id)->update($item);
    }
}
