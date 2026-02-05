<?php

namespace App\Presenters\Services;

use App\Presenters\DTO\Markup;
use App\Presenters\DTO\Styles;

class StyleResolver
{
    private array $viewports = ['s', 's-', 'm', 'm-', 'l', 'l-', 'x', 'h'];
    private array $pseudos = [
        'h' => 'hover'
    ];
    private array $resolutions = [
        's' => [
            'min' => '300'
        ],
        's-' => [
            'min' => '300',
            'max' => '767'
        ],
        'm' => [
            'min' => '768'
        ],
        'm-' => [
            'min' => '768',
            'max' => '1279'
        ],
        'l' => [
            'min' => '1280'
        ],
        'l-' => [
            'min' => '1280',
            'max' => '1919'
        ],
        'x' => [
            'min' =>'1920'
        ]
    ];
    private array $sourceStyles = [];
    private array $selectorNames = [];
    private array $utilities = [];
    private array $classes = [];
    private string $styles = '';

    public function __construct(private Markup $Markup)
    {}

    public function getStyles(): Styles
    {
        $this->getSourceStyles();

        $this->getSelectorsFromMarkup();

        $this->buildContentForStyles();

        $this->formatStylesAsClasses();

        $this->createMediaQueryViews();

        return new Styles($this->styles);
    }

    /** ------------------------------------------------------------------------------------------------------------ **/
    /** Private.
    /** ------------------------------------------------------------------------------------------------------------ **/

    private function getSourceStyles(): void
    {
        $this->sourceStyles = json_decode(file_get_contents(CSS . 'styles.json'), true);
    }

    private function getSelectorsFromMarkup(): void
    {
        $pattern = '/data-util="(.*?)"/';
        $matches = preg_match_all($pattern, $this->Markup->getMarkup(), $results);
        $this->selectorNames = (explode(' ', implode(' ', $results[1])));
    }

    private function buildContentForStyles(): void
    {
        foreach ($this->selectorNames as $selectorName):

            $viewport = $this->determineViewportFromSelector($selectorName);

            if ($viewport) {

                $strippedSelector = $this->stripViewportFromSelector($selectorName);

                $declarationBlock = $this->sourceStyles[$strippedSelector] ?? null;

                if (isset($declarationBlock)) {

                    $this->utilities[$viewport][$selectorName] = $declarationBlock;
                }
            }

        endforeach;
    }

    private function formatStylesAsClasses()
    {
        foreach ($this->utilities as $viewport => $utility) {

            foreach ($utility as $selectorName => $declarationBlock) {

                $declarations = '';
                $list = '';
                $count = count($declarationBlock);
                $iteration = 0;

                foreach ($declarationBlock as $property => $value) {

                    $iteration ++;

                    $declarations .= $property . ':' . $value;

                    if ($iteration < $count) {

                        $declarations .= ';';
                    }
                }

                if (array_key_exists($viewport, $this->pseudos)) {

                    $list .= $this->buildPseudoClass($viewport, $selectorName, $declarations); '}';

                } else {

                    $list .= $this->buildClass($selectorName, $declarations);
                }

                $this->classes[$viewport][] = $list;
            }
        }
    }

    private function createMediaQueryViews() {

        foreach ($this->classes as $viewport => $mediaQuery) {

            $resolutions = $this->resolutions[$viewport] ?? null;

            $declarations = implode($this->classes[$viewport]);

            $minResolution = isset($resolutions['min']) ? $resolutions['min'] : null;
            $maxResolution = isset($resolutions['max']) ? $resolutions['max'] : null;

            $minStatement = $this->buildMinStatement($minResolution);

            $maxStatement = $this->buildMaxStatement($maxResolution);

            if (isset($minResolution) && isset($maxResolution)) {

                $this->styles .= $this->buildMinMaxMediaQuery($minStatement, $maxStatement, $declarations);

            } elseif (isset($minResolution)) {

                $this->styles .= $this->buildMinMediaQuery($minStatement, $declarations);

            } elseif ($viewport === 'h') {

                $this->styles .= $this->buildHoverMediaQuery($declarations);
            }
        }
    }

    /** ------------------------------------------------------------------------------------------------------------ **/
    /** Utilities.
    /** ------------------------------------------------------------------------------------------------------------ **/

    private function determineViewportFromSelector(string $selectorName): ?string
    {
        $lastCharacter = $this->getLastCharacter($selectorName);

        $secondLastCharacter = $this->getSecondLastCharacter($selectorName);

        if ($lastCharacter === '-') {

            $viewport = $secondLastCharacter . $lastCharacter;

        } else {

            $viewport  = $lastCharacter;
        }

        return in_array($viewport, $this->viewports, true) ? $viewport : null;
    }

    private function stripViewportFromSelector(string $selectorName): string
    {
        $lastCharacter = $this->getLastCharacter($selectorName);

        $count = 0;

        while($lastCharacter !== ')' && $count < 2) {

            $selectorName = substr($selectorName, 0, -1);

            $lastCharacter = $this->getLastCharacter($selectorName);

            $count ++;
        }

        return $selectorName;
    }

    private function getLastCharacter(string $string)
    {
        return substr($string, -1, 1);
    }

    private function getSecondLastCharacter(string $string)
    {
        return substr($string, -2, 1);
    }

    private function buildPseudoClass(string $viewport, string $selectorName, string $declarations): string
    {
        return '[data-util~="' . $selectorName . '"]:' . $this->pseudos[$viewport] . '{' . $declarations . '}';
    }

    private function buildClass(string $selectorName, string $declarations): string
    {
        return '[data-util~="' . $selectorName . '"]' . '{' . $declarations . '}';
    }

    private function buildMinStatement(?string $minResolution): ?string
    {

        return $minResolution ? '(min-width: ' . $minResolution . 'px)' : null;
    }

    private function buildMaxStatement(?string $maxResolution): ?string
    {

        return $maxResolution ? '(max-width: ' . $maxResolution . 'px)' : null;
    }

    private function buildMinMaxMediaQuery(string $minStatement, string $maxStatement, string $declarations): string
    {

        return '@media screen and ' . $minStatement . ' and ' . $maxStatement  . '{' . $declarations . '}';
    }

    private function buildMinMediaQuery(string $minStatement, string $declarations): string
    {

        return '@media screen and ' . $minStatement . '{' . $declarations . '}';
    }

    private function buildHoverMediaQuery(string $declarations): string
    {

        return '@media screen and (hover: hover) {' . $declarations . '}';
    }
}
