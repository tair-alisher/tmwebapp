<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;

class LanguagesController extends Controller
{
    public function switchLang(Request $request, $lang)
    {
        // store the url on which the user was
        $previous_url = url()->previous();

        // transform it into a correct request instance
        $previous_request = app('request')->create($previous_url);

        // get query parameters if applicable
        $query = $previous_request->query();

        // in case the route name was translated
        $route_name = app('router')
            ->getRoutes()
            ->match($previous_request)
            ->getName();

        // store the segments of the last request as an array
        $segments = $previous_request->segments();

        // check if the first segment matches a language code
        if ( array_key_exists($lang, config('translatable.locales')) ) {
            // if it was indeed a translated route name
            if ($route_name && Lang::has('routes.'.$route_name, $lang)) {
                // translate the route name to get the correct URI in the required language
                // and redirect to that URL
                if (count($query)) {
                    return redirect()
                        ->to($lang . '/' . trans('routes.' . $route_name, [], $lang) . '?' . http_build_query($query));
                }
                
                return redirect()
                    ->to($lang . '/' . trans('routes.' . $route_name, [], $lang));
            }

            // replace the first segment by the new langauge code
            $segments[0] = $lang;

            // redirect to the required URL
            if (count($query)) {
                return redirect()
                    ->to(implode('/', $segments) . '?' . http_build_query($query));
            }

            return redirect()
                ->to(implode('/', $segments));
        }

        return redirect()->back();
    }
}
