<?php

declare(strict_types=1);

namespace BladeUIKit\Components\Forms\Inputs;

use BladeUIKit\Components\BladeComponent;
use Illuminate\Contracts\View\View;

class Pikaday extends BladeComponent
{
    /** @var string */
    public $name;

    /** @var string */
    public $id;

    /** @var string */
    public $value;

    /** @var string */
    public $format;

    /** @var string */
    public $placeholder;

    protected static $assets = ['alpine', 'moment', 'pikaday'];

    public function __construct(
        string $name,
        string $id = null,
        string $value = '',
        string $format = 'DD/MM/YYYY',
        string $placeholder = null
    ) {
        $this->name = $name;
        $this->id = $id ?? $name;
        $this->value = $value;
        $this->format = $format;
        $this->placeholder = $placeholder ?? $format;
    }

    public function render(): View
    {
        return view('blade-ui-kit::components.forms.inputs.pikaday');
    }
}