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
        $data1 = [];
        $data1['name'] = $data['name'];
        $data1['email'] =$data['email'];
        $data1['message'] = $data['message'];
        $data1['date'] = date("Y-m-d H:i:s");
       $aa = $this->connect->table($this->table)->insert($data1);;
        return $aa;

    }
     public function editPosts($id, $data){
         $aa = $this->update($this->table, $id, $data);
         return $aa;
     }
     public function deletePosts($id){
         $aa = $this->delete($this->table, $id);
         return $aa;
     }





 }