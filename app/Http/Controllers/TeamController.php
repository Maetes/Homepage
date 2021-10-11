<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\SEOMeta;

class TeamController extends Controller
{
    //
    public function index(){
        $info = config('data.info_company');
        SEOMeta::setTitleDefault('Das Team von '.$info['name_short']);
        SEOMeta::setDescription('Unser Team bei '.$info['name'].' | Bestehend aus: ⚫Martin Müller ⚫Tim Tomczak ⚫Sven Walbröl');
        // SEOMeta::addKeyword(SEOMeta::getKeywords());
        SEOMeta::addKeyword($info['name']);
        SEOMeta::addKeyword($info['name_short']);
        SEOMeta::addKeyword('team');
        SEOMeta::addKeyword('Sven Walbröl');
        SEOMeta::addKeyword('Tim Tomczak');
        SEOMeta::addKeyword('Martin Müller');

        JsonLd::setTitle('Das '.$info['name_short'].' Team');
        JsonLd::setDescription('Unser Team bei '.$info['name'].' ⚫ Jetzt kontakt aufnehmen: ☎ '.$info['telefon'].' ✉ '.$info['email']);
        JsonLd::setType('Person');
        // dd(request());
        JsonLd::addImage(request()->server('HTTP_HOST').$info['logo']);

        return view('team.index');
    }

    //
    public function martinmueller(){
        $this->setMeta(config('data.info_martin'));
        return view('team.martinmueller.index', ['user_info' => config('data.info_martin')]);
    }

    //
    public function timtomczak(){
        $this->setMeta(config('data.info_tim'));
        return view('team.timtomczak.index', ['user_info' => config('data.info_tim')]);
    }

    //
    public function svenwalbroel(){
        $this->setMeta(config('data.info_sven'));

        return view('team.svenwalbroel.index', ['user_info' => config('data.info_sven')]);
    }

    private function setMeta(Array $info){
        SEOMeta::setTitleDefault($info['name'].' - '.$info['position'].' bei '.config('data.info_company.name_short'));
        SEOMeta::setDescription($info['name'].' ist '.$info['position'].' bei '.config('data.info_company.name').'. ⚫ Jetzt Kontakt aufnehmen: ✉ '.$info['email']);
        // SEOMeta::addKeyword(SEOMeta::getKeywords());
        SEOMeta::addKeyword($info['name']);
        SEOMeta::addKeyword(config('data.info_company.name_short'));
        SEOMeta::addKeyword(config('data.info_company.name'));
        SEOMeta::addKeyword('Webentwicklung, Webentwickler, Website erstellung, IT-Beratung, Unternehmensberatung');

        JsonLd::setTitle($info['name'].' - '.$info['position'].' @ '.config('data.info_company.name_short'));
        JsonLd::setDescription($info['name'].' ist '.$info['position'].' bei '.config('data.info_company.name').'. ⚫ Jetzt Kontakt aufnehmen:  ✉ '.$info['email']);
        JsonLd::setType('Person');
        // dd(request());
        JsonLd::addImage(request()->server('HTTP_HOST').$info['profile_image']);
    }
}
