<?php

namespace App\Model;

 use Webcourse\Model;

 class Guestbook extends Model
 {
     protected $table = 'posts';

     public function getPosts($pageNum, $count = 5){
         //$connection = (new \Pixie\Connection('mysql', $this->config))->getQueryBuilder();
         $countAllPosts = $this->read($this->table);
         $array1 = [];

         $countPostBeforePageNum = ($pageNum - 1)*$count;//кол-во записей c необходимой страницы

         for($i = $countPostBeforePageNum; $i<$countPostBeforePageNum + $count; $i++){
             $array1[] = $countAllPosts[$i];
         }
         return $array1;
     }
    public function setPosts($data){
        $this->create($this->table, $data);

    }
     public function editPosts($id, $data){
         $this->update($this->table, $id, $data);

     }
     public function deletePosts($id){
        $this->delete($this->table, $id);
     }





 }