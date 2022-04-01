<?php

namespace Models; 

use Models\Database;

class NewsModel extends Database {

    public function getAll() {
        $stm = $this->connection->query('SELECT * FROM news ORDER BY id DESC');
        $stm->execute();
        return $stm->fetchAll();
    }

    public function getCount() {
        $stm = $this->connection->query('SELECT COUNT(*) as cnt FROM `news`');
        $stm->execute();
        return $stm->fetch();
    }

    public function getByPaging($offset, $limit) {
        $stm = $this->connection->query('SELECT * 
                                           FROM news 
                                       ORDER BY id DESC
                                          LIMIT '.$limit.' OFFSET '.$offset);
        $stm->execute();

        return $stm->fetchAll();
    }

    public function getFilteredCnt($categoryId, $keyword,){
        $whereQuery = '';
        if($categoryId) {
            $whereQuery = 'WHERE category_id = '.$categoryId;
        }

        if($keyword) {
            if($whereQuery) {
                $whereQuery .= ' AND (title LIKE "%'.$keyword.'%" OR text LIKE "%'.$keyword.'%") ';
            } else {
                $whereQuery .= ' WHERE title LIKE "%'.$keyword.'%" OR text LIKE "%'.$keyword.'%" ';
            }
        }
        
        $stm = $this->connection->query('SELECT COUNT(*) as cnt
                                           FROM news 
                                          '.$whereQuery);
        $stm->execute();

        return $stm->fetch();
    }

    public function getFiltered($categoryId, $keyword, $offset, $limit){
        $whereQuery = '';
        if($categoryId) {
            $whereQuery = 'WHERE category_id = '.$categoryId;
        }

        if($keyword) {
            if($whereQuery) {
                $whereQuery .= ' AND (title LIKE "%'.$keyword.'%" OR text LIKE "%'.$keyword.'%") ';
            }
        }
        
        $stm = $this->connection->query('SELECT * 
                                           FROM news 
                                          '.$whereQuery.'
                                       ORDER BY id DESC
                                       LIMIT '.$limit.' OFFSET '.$offset);
        $stm->execute();

        return $stm->fetchAll();
    }

    public function getMainNews() {
        $stm = $this->connection->query('SELECT * FROM news ORDER BY id DESC LIMIT 3');
        $stm->execute();
        return $stm->fetchAll();
    }
    
    public function store($title, $video, $short_text, $text, $category_id) {
        $stm = $this->connection->prepare('INSERT INTO news (title, video, short_text, text, category_id)
                                                VALUES (:title, :video, :short_text, :text, :category_id)');
        $stm->bindParam('title', $title);
        $stm->bindParam('video', $video);
        $stm->bindParam('short_text', $short_text);
        $stm->bindParam('text', $text);
        $stm->bindParam('category_id', $category_id);


        $stm->execute();
    }

    public function getById($id) {
        $stm = $this->connection->prepare("SELECT n.*, c.title as category_title
                                             FROM news n
                                       INNER JOIN categories c ON c.id = n.category_id
                                            WHERE n.id = :id");
        $stm->bindParam('id', $id);
        $stm->execute();

        return $stm->fetch();
    }

    
    public function update($id, $title, $text, $short_text, $video, $category_id) {
        $stm = $this->connection->prepare('UPDATE news
                                              SET title = :title,
                                             short_text = :short_text,
                                                   text = :text,
                                            category_id = :category_id
                                            WHERE id = :id');
        $stm->bindParam('id', $id);
        $stm->bindParam('title', $title);
        $stm->bindParam('short_text', $short_text);
        $stm->bindParam('text', $text);
        $stm->bindParam('category_id', $category_id);
        $stm->execute();

        
        if($video) {
            $stm = $this->connection->prepare('UPDATE news 
                                              SET video = :video
                                            WHERE id = :id');
            $stm->bindParam('video', $video);
            $stm->bindParam('id', $id);    
            $stm->execute();
        }
    } 

    
    public function delete($id) {
        $stm = $this->connection->prepare('DELETE FROM news WHERE id = :id');
        $stm->bindParam('id', $id);
        $stm->execute();
    }
}
