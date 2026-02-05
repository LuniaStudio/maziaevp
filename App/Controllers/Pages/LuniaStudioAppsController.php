<?php

namespace App\Controllers\Pages;

use App\Presenters\DTO\Markup;
use App\Presenters\MarkupPresenter;

class LuniaStudioAppsController
{
    const PATH = MARKUP . 'Pages/lunia-studio.php';

    private Markup $Markup;

    public function __construct(private array $queries = [])
    {}
    
    public function callController(): void
    {
        $this->setMarkupPresenter();

        print_r($this->Markup->getMarkup());
    }

    /** ------------------------------------------------------------------------------------------------------------ **/
    /** Private.
    /** ------------------------------------------------------------------------------------------------------------ **/

    private function setMarkupPresenter(): void
    {
        $MarkupPresenter = new MarkupPresenter(self::PATH);
        
        $this->Markup = $MarkupPresenter->getMarkup();
    }
}
