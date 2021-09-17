<?php

namespace App\Http\Controllers;

use App\Models\shortUrlModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class shortUrlController extends Controller
{
    public function insertUrl (Request $request) {

        $url = strtolower($request->urltoshort);
        
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
