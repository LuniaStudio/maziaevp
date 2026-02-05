<?php

namespace App\Presenters;

use App\Presenters\DTO\Markup;
use App\Presenters\DTO\Styles;
use App\Presenters\Services\MarkupMerger;
use App\Presenters\Services\StyleResolver;
use App\Presenters\Services\StylesMerger;
use Vendors\TinyHtmlMinifier\TinyHtmlMinifier;

class MarkupPresenter
{
    private string $markup;
    private Markup $Markup;
    private Styles $Styles;

    public function __construct(private string $templatePath, private array $inserts = [])
    {}

    public function getMarkup(): Markup
    {
        $this->setMarkupMerger();

        $this->setStyleResolver();

        $this->setStylesMerger();

        $this->setMarkeupMinifier();

        return new Markup($this->markup);
    }

    /** ------------------------------------------------------------------------------------------------------------ **/
    /** Private.
    /** ------------------------------------------------------------------------------------------------------------ **/

    private function setMarkupMerger(): void
    {
        $MarkupMerger = new MarkupMerger($this->templatePath, $this->inserts);

        $this->Markup = $MarkupMerger->getMarkup();
    }

    private function setStyleResolver(): void
    {
        $StyleResolver = new StyleResolver($this->Markup);

        $this->Styles = $StyleResolver->getStyles();
    }

    private function setStylesMerger(): void
    {
        $StylesMerger = new StylesMerger($this->Markup, $this->Styles);

        $this->Markup = $StylesMerger->getMarkup();
    }

    private function setMarkeupMinifier(): void
    {
        $TinyHtmlMinifier = new TinyHtmlMinifier([]);
        
        $this->markup = $TinyHtmlMinifier->minify($this->Markup->getMarkup());
    }
}
