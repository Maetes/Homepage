<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\SEOMeta;

class ServicesController extends Controller
{
    public function softwareentwicklung()
    {
        return view('services.softwareentwicklung.index');
    }

    public function itBeratung()
    {
        return view('services.it-beratung.index');
    }

    public function itkServices()
    {
        return view('services.itk-services.index');
    }
}
