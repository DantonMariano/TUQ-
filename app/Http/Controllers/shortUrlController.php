<?php

namespace App\Http\Controllers;

use App\Models\shortUrlModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class shortUrlController extends Controller
{
    public function insertUrl (Request $request) {

        $url = $request->urltoshort;
        
        $protocol = array("http://","https://");
        
        $url = str_replace($protocol, "", $url);
        
        $new_url = explode('/', $url, 2);
        
        $domain_name = strtolower($new_url[0]);
        
        $uri = $new_url[1];
        
        $url = $domain_name.$uri;
        
        $exists = shortUrlModel::where('original_url', '=', $url)->exists();

        if ($exists) {
            $redirect_url = shortUrlModel::where('original_url', '=', $url)->first()->short_url;
            return view('pages.home', compact('redirect_url'));
        }

        $shortUrlModel = new shortUrlModel();

        $shortUrlModel->original_url = $url;
        $hash = Str::uuid()->toString();
        $shortUrlModel->short_url = substr($hash, 0, 8);

        $shortUrlModel->save();

        $redirect_url = $shortUrlModel->short_url;

        return view('pages.home', compact('redirect_url'));
    }

    public function redirectTo($encoded_url) {
        
        $exists = shortUrlModel::where('short_url', '=', $encoded_url)->exists();

        if ($exists) {
            $redirect_url = shortUrlModel::where('short_url', '=', $encoded_url)->first()->original_url;
            return redirect("https://$redirect_url");
        } else {
            return redirect('/');
        }
    }
}
