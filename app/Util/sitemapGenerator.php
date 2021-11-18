<?php

namespace App\Util;

use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Support\Carbon;

class sitemapGenerator
{
    public static function generateSitemap(){
        $sitemap=Sitemap::create();
        $sitemap->add(
            Url::create(route('home'))
                ->setLastModificationDate(Carbon::yesterday())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(1.0)
        );
        $sitemap->add(
            Url::create(route('services.it-beratung'))
                ->setLastModificationDate(Carbon::yesterday())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(0.8)
        );
        $sitemap->add(
            Url::create(route('services.itk-services'))
                ->setLastModificationDate(Carbon::yesterday())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(0.8)
        );
        $sitemap->add(
            Url::create(route('services.softwareentwicklung'))
                ->setLastModificationDate(Carbon::yesterday())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(0.8)
        );
        // $sitemap->add(
        //     Url::create(route('team.sven'))
        //         ->setLastModificationDate(Carbon::yesterday())
        //         ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
        //         ->setPriority(0.6)
        // );
        // $sitemap->add(
        //     Url::create(route('team.martin'))
        //         ->setLastModificationDate(Carbon::yesterday())
        //         ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
        //         ->setPriority(0.6)
        // );
        // $sitemap->add(
        //     Url::create(route('team.tim'))
        //         ->setLastModificationDate(Carbon::yesterday())
        //         ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
        //         ->setPriority(0.6)
        // );
        $sitemap->add(
            Url::create(route('datenschutzerklärung'))
                ->setLastModificationDate(Carbon::yesterday())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(0.8)
        );

        foreach(config('data.servicesItBeratung') as $service){
            $sitemap->add(
                Url::create(route('services.genericService',$service))
                    ->setLastModificationDate(Carbon::yesterday())
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(0.2)
            );
            foreach(config('data.orte') as $ort){
                $sitemap->add(
                    Url::create(route('services.genericService',$service).'/'.$ort)
                        ->setLastModificationDate(Carbon::yesterday())
                        ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                        ->setPriority(0.2)
                );
            }
        }

        foreach(config('data.servicesSoftwareentwicklung') as $service){
            $sitemap->add(
                Url::create(route('services.genericService',$service))
                    ->setLastModificationDate(Carbon::yesterday())
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(0.2)
            );

            foreach(config('data.orte') as $ort){
                $sitemap->add(
                    Url::create(route('services.genericService',[$service,rawurlencode($ort)]))
                        ->setLastModificationDate(Carbon::yesterday())
                        ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                        ->setPriority(0.2)
                );
            }
        }

        foreach(config('data.servicesItk') as $service){
            $sitemap->add(
                Url::create(route('services.genericService',$service))
                    ->setLastModificationDate(Carbon::yesterday())
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                    ->setPriority(0.2)
            );

            foreach(config('data.orte') as $ort){
                $sitemap->add(
                    Url::create(route('services.genericService',[$service,rawurlencode($ort)]))
                        ->setLastModificationDate(Carbon::yesterday())
                        ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                        ->setPriority(0.2)
                );
            }
        }
        $sitemap->writeToFile(public_path('sitemap.xml'));
    }
}



