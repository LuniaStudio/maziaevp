<?php

namespace App\Presenters\Services;

use App\Presenters\DTO\Markup;

class MarkupMerger
{
    private string $markup;

    public function __construct(private string $templatePath, private array $inserts)
    {}

    public function getMarkup(): Markup
    {
        $this->mergeMarkup();

        return new Markup($this->markup);
    }

    /** ------------------------------------------------------------------------------------------------------------ **/
    /** Private.
    /** ------------------------------------------------------------------------------------------------------------ **/

    private function mergeMarkup()
    {
        ob_start(null,0, PHP_OUTPUT_HANDLER_CLEANABLE | PHP_OUTPUT_HANDLER_REMOVABLE);

        extract($this->inserts);

        require $this->templatePath;

        $this->markup = ob_get_clean();
    }
}
