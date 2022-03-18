<?php

namespace Models;

class AboutModel extends Database {
    public function getData() {
        $stm = $this->connection->query('SELECT * FROM about');
        $stm->execute();
        return $stm->fetch();
    }

    public function updateData($title, $text) {
        $stm = $this->connection->prepare('UPDATE about
                                              SET title = :title,
                                                  text = :text
                                            WHERE id = 1');
        $stm->bindParam('title', $title);
        $stm->bindParam('text', $text);
        $stm->execute();
    }
}