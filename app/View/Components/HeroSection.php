<?php

namespace App\View\Components;

use Illuminate\View\Component;

class HeroSection extends Component
{
    /**
     * The page hero section component.
     *
     * @var string
     */
    public $image;

    /**
     * The page hero section component.
     *
     * @var string
     */
    public $title;

    /**
     * The page hero section component.
     *
     * @var string
     */
    public $subTitle;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $image, string $title, string $subTitle)
    {
        $this->image = $image;
        $this->title = $title;
        $this->subTitle = $subTitle;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.hero-section');
    }
}
