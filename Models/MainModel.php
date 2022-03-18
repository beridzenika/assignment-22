<?php

namespace Models;

use Models\Database;

class MainModel extends Database {
    public function getData() {
        $stm = $this->connection->query('SELECT * FROM main');
        $stm->execute();
        return $stm->fetch();
    }

    public function updateData($title, $video, $text) {
        $stm = $this->connection->prepare('UPDATE main
                                              SET title = :title,
                                                  video = :video,
                                                  text = :text
                                            WHERE id = 1');
        $stm->bindParam('title', $title);
        $stm->bindParam('video', $video);
        $stm->bindParam('text', $text);

        $stm->execute();
    }
}