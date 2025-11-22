<?php

namespace App\Models;

class Post extends BaseModel
{
  private $table = "posts";
  
  //Create new post
  public function create($title, $author, $content) {

      $title = $this->escape($title);
      $author = $this->escape($author);
      $content = $this->escape($content);
      
      $sql = "INSERT INTO {$this->table} (title, author, content) 
              VALUES ('$title, '$author', '$content') ";

      return $this->query($sql);
  }


  //Get All posts
  public function getAll() {
    $sql = "SELECT * FROM {$this->table} ORDER BY id DESC ";
    return $this->query($sql);
  }

  //Fetch Single post
  public function getById($id) {
    $id = (int)$id;
    $sql = "SELECT * FROM {$this->table} WHERE id = $id LIMIT 1 ";
    return $this->query($sql);
  }

  // Update post
    public function updatePost($id, $title, $content) {
        $id      = (int)$id;
        $title   = $this->escape($title);
        $content = $this->escape($content);

        $sql = "UPDATE $this->table 
                SET title='$title', content='$content'
                WHERE id=$id";

        return $this->query($sql);
    }

    // Delete post
    public function deletePost($id) {
        $id = (int)$id;
        $sql = "DELETE FROM $this->table WHERE id = $id";
        return $this->query($sql);
    }





}