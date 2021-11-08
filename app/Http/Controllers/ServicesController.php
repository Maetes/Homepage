<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Support\Facades\Validator;

class ServicesController extends Controller
{
    private Array $servicesSoftwareentwicklung=[
        "webentwicklung",
        "appentwicklung",
        "website-erstellung"
    ];
    private Array $servicesItBeratung=[
        "it-consulting",
        "consulting",
        "beratung"
    ];
    private Array $servicesItk=[
        "ikt-services",
        "itk-services",
        "itk",
        "ikt",
        "netzwerktechnik",
    ];

    public function softwareentwicklung(Request $request, String $ort=null)
    {
        if($ort){
            $this->validateOrt($ort);
        }
        $this->setMeta($ort,'Softwareentwicklung');

        return view('services.softwareentwicklung.index');
    }

    public function itBeratung(Request $request, String $ort=null)
    {
        if($ort){
            $this->validateOrt($ort);
        }
        $this->setMeta($ort,'IT-Beratung');

        return view('services.it-beratung.index');
    }

    public function itkServices(Request $request, String $ort=null)
    {
        if($ort){
            $this->validateOrt($ort);
        }
        $this->setMeta($ort,'Informations- und Telekommunikationstechnik');

        return view('services.itk-services.index');
    }

    public function genericService(Request $request, String $service, String $ort=null)
    {
        $this->validateService($service);
        // dd(in_array($service,$this->servicesSoftwareentwicklung));
        if(in_array($service,config('data.servicesSoftwareentwicklung'))){
            if($ort){
                $this->validateOrt($ort);
            }
            $this->setMeta($ort,ucfirst($service));
            return view('services.softwareentwicklung.index');
        }
        else if(in_array($service,config('data.servicesItBeratung'))){
            if($ort){
                $this->validateOrt($ort);
            }
            $this->setMeta($ort,ucfirst($service));
            return view('services.it-beratung.index');
        }
        else if(in_array($service,config('data.servicesItk'))){
            if($ort){
                $this->validateOrt($ort);
            }
            $this->setMeta($ort,ucfirst($service));
            return view('services.itk-services.index');
        }
        else{
            return abort(404);
        }
    }

    private function validateOrt(String $ort){
        $orte = config('data.orte');

        if(Validator::make(
            ['ort'=>$ort],
            ['ort' => ['string', Rule::in($orte)]]
        )->fails()){
            return abort(404);
        };

    }
    private function validateService(String $service){
        if(Validator::make(
            ['ort'=>$service],
            ['ort' => ['string', Rule::in(array_merge($this->servicesSoftwareentwicklung,$this->servicesItBeratung,$this->servicesItk))]]
        )->fails()){
            return abort(404);
        };

    }

    private function setMeta(String $ort=null, String $service){
        if ($ort){
            $title = $service.' in '.ucfirst($ort).' und Umgebung | MTW IT-Solutions';
            SEOMeta::setTitleDefault($title);
            JsonLd::setTitle($title);
            OpenGraph::setTitle($title);

            SEOMeta::addKeyword(ucfirst($ort));

            $description = 'Wir sind Ihr kompetenter Partner für ⚫'.$service.'⚫ in '.ucfirst($ort).' und Umgebung. Nehmen Sie gerne Kontakt mit uns auf.';
            SEOMeta::setDescription($description);
            JsonLd::setDescription($description);
            OpenGraph::setDescription($description);
        }
        else{
            $title = $service.' von MTW IT-Solutions';
            // $title = $service.' |'.config('data.info_company.name_short');
            SEOMeta::setTitleDefault($title);
            JsonLd::setTitle($title);
            OpenGraph::setTitle($title);

            $description = 'Wir sind Ihr kompetenter Partner für ⚫'.$service.'⚫ Überzeugen Sie sich von unseren Services nehmen Sie gerne Kontakt mit uns auf.';
            SEOMeta::setDescription($description);
            JsonLd::setDescription($description);
            OpenGraph::setDescription($description);
        }

        SEOMeta::addKeyword(config('data.info_company.name_short'));
        SEOMeta::addKeyword(config('data.info_company.name'));
        SEOMeta::addKeyword($service.', Beratung, Consulting, Digitalisierung');
        JsonLd::setType('Organization');
        JsonLd::addImage(request()->server('HTTP_HOST').config('data.info_company.logo'));
    }
}
