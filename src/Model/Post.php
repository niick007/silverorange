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

    // This method selects the post data from the database
    public function getPost($id): array
    {
        $sql = "SELECT p.id, p.title, p.body, a.full_name FROM Posts as p, Authors as a WHERE p.id = '$id'";
        return $this->db->query($sql)->fetch();
    }

    // This method selects all posts from the database
    public function getAllPost(): array
    {
        $sql = "SELECT p.id, p.title, p.created_at FROM Posts as p ORDER BY p.created_at DESC";
        return $this->db->query($sql)->fetchAll();
    }
}
