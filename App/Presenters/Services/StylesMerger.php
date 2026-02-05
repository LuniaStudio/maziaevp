<?php

namespace App\Presenters\Services;

use App\Presenters\DTO\Markup;
use App\Presenters\DTO\Styles;

class StylesMerger
{
    private string $markup;

    public function __construct(private Markup $Markup, private Styles $Styles)
    {}

    public function getMarkup(): Markup
    {
        $this->mergeStyles();

        return new Markup($this->markup);
    }

    /** ------------------------------------------------------------------------------------------------------------ **/
    /** Private.
    /** ------------------------------------------------------------------------------------------------------------ **/

    private function mergeStyles()
    {
        $target = '<style></style>';
        $replacement = '<style>' . $this->Styles->getStyles() . '</style>';

        $this->markup = str_ireplace($target, $replacement, $this->Markup->getMarkup());
    }
}
