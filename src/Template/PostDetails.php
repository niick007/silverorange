<?php

namespace silverorange\DevTest\Template;

use silverorange\DevTest\Context;
use Parsedown;

class PostDetails extends Layout
{
    protected function renderPage(Context $context): string
    {
        $parsedown = new \Parsedown();
        // @codingStandardsIgnoreStart
        return <<<HTML
            <div>
                <h1>{$context->title}</h1>
                <p>Author: {$context->getAuthor()}</p>
                <pre>{$parsedown->text($context->getBody())}</pre>
            </div>
HTML;
        // @codingStandardsIgnoreEnd
    }
}
