<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class Language
{
  public function handle(Request $request, Closure $next)
  {
    // check if the first segment mathces a language code
    if (
      !array_key_exists($request->segment(1),
      config('translatable.locales'))
    ) {
      // store segments in array
      $segments = $request->segments();

      // set the default language code as the first segment
      $segments = array_prepend($segments, config('app.fallback_locale'));

      // redirect to the correct url
      return redirect()->to(implode('/', $segments));
    }

    return $next($request);
  }
}