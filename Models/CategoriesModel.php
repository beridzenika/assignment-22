<?php

namespace Models;

class CategoriesModel extends Database {
    public function getAll() {
        $stm = $this->connection->query('SELECT * FROM categories');
        $stm->execute();
        return $stm->fetchAll();
    }

    public function getCategories() {
        $stm = $this->connection->query('SELECT * FROM categories WHERE home = 1');
        $stm->execute();
        return $stm->fetchAll();
    }

    public function store($title, $home) {
        $stm = $this->connection->prepare('INSERT INTO categories (title, home) VALUES (:title, :home)');
        $stm->bindParam('title', $title);
        $stm->bindParam('home', $home);
        $stm->execute();
    }

    public function delete($id) {
        $stm = $this->connection->prepare('DELETE FROM categories WHERE id = :id');
        $stm->bindParam('id', $id);
        $stm->execute();
    }

    public function update($id, $title, $home) {
        $stm = $this->connection->prepare('UPDATE categories
                                              SET title = :title,
                                                  home = :home
                                            WHERE id = :id');
        $stm->bindParam('id', $id);
        $stm->bindParam('title', $title);
        $stm->bindParam('home', $home);
        $stm->execute();
    }

    public function getSingle($id) {
        $stm = $this->connection->prepare('SELECT * FROM categories WHERE id = :id');
        $stm->bindParam('id', $id);
        $stm->execute();
        return $stm->fetch();
    }
}