<?php

namespace silverorange\DevTest\Template;

use silverorange\DevTest\Context;

class NotFound extends Layout
{
    protected function renderPage(Context $context): string
    {
        // @codingStandardsIgnoreStart
        return <<<HTML
                <h1>Sorry</h1>
                <p>{$context->content}</p>
HTML;
        // @codingStandardsIgnoreEnd
    }
}
