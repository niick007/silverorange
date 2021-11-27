<?php

namespace silverorange\DevTest\Model;

class Post
{
    private $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    // This method saves Post data into the database
    public function save($data): void
    {
        $sql = "INSERT INTO Posts (id, title, body, created_at, modified_at, author) 
                    VALUES (:id, :title, :body, :created_at, :modified_at, :author)";
        $this->db->prepare($sql)->execute($data);
    }
}
