<?php

namespace App\View\Components;

use Exception;
use Illuminate\View\Component;

use phpDocumentor\Reflection\Types\Boolean;
use function PHPUnit\Framework\throwException;

class HeroWithCard extends Component
{
    public String $title='';
    public String $text="";
    public String $mediaLink="";
    public String $mediaType="";
    public String $buttonText="";
    public String $vidType="";

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(String $title, String $mediaLink, String $mediaType, String $buttonText, String $vidType=null)
    {
        $this->title = $title;
        $this->mediaLink = $mediaLink;
        $this->buttonText = $buttonText;
        if ($mediaType !== "img" && $mediaType!== "vid") {
            throw new Exception("Invalid media type for media tag in Hero with Card component: '".$mediaType."' given for mediaType. Only 'img' and 'vid' are valid");
        }
        else{
            $this->mediaType = $mediaType;
        }

        if ($vidType!==null){
            $this->vidType=$vidType;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.hero-with-card');
    }
}
