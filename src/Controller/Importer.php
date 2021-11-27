<?php

namespace silverorange\DevTest\Controller;

use silverorange\DevTest\Context;
use silverorange\DevTest\Model;
use silverorange\DevTest\Template;

// Controller to load data from the json files
class Importer extends Controller
{

    public function getContext(): Context
    {
        $context = new Context();
        $context->title = 'Importer';
        return $context;
    }

    protected function loadJsonData(): void
    {
        $path = './data';
        $files = scandir($path);
        $post = new Model\Post($this->db);
        foreach ($files as $file) {
            if ($file != "." && $file != "..") {
                $data = json_decode(file_get_contents($path . "/" . $file), true);
                $post->save($data);
            }
        }
    }

    public function getTemplate(): Template\Template
    {
        $this->loadJsonData();
        return new Template\Import();
    }
}
