<?php

namespace silverorange\DevTest\Template;

use silverorange\DevTest\Context;

class Import extends Layout
{
    protected function renderPage(Context $context): string
    {
        // @codingStandardsIgnoreStart
        return <<<HTML
    <p>Data imported successfully</p>
HTML;
        // @codingStandardsIgnoreEnd
    }
}
