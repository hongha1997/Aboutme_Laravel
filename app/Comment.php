<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table 		= "comment";
    protected $primaryKey 	= "id_comment";
    public $timestamps 		= true;
    public function getList() {
        return $this->join('news','comment.id_news','=','news.id_news')->select('comment.id_comment','comment.name','comment.content','news.name as newsname')->orderBy('id_comment','DESC')->paginate(getenv('ADMIN_PAGINATE'));
    }
    public function delItem($id) {
        return $this->where('id_comment', $id)->delete();
    }
    public function getSumComment($id){
    	return $this->where('id_news', $id)->count();
    }
    public function getComments($id){
        return $this->where('id_news', $id)->orderBy('id_comment','DESC')->get();
    }
    public function getCommentCon($id1, $id2){       
        return $this->where('parent_id',$id1)->where('id_news', $id2)->orderBy('id_comment','DESC')->get();
    }
    public function addItem($item) {
        return $this->insert($item);
    }
    public function getListCommentNews($id) {
        return $this->join('news','comment.id_news','=','news.id_news')->select('comment.id_comment','comment.name','comment.content','news.name as newsname')->where('comment.id_news',$id)->orderBy('id_comment','DESC')->paginate(getenv('ADMIN_PAGINATE'));
    }

}
