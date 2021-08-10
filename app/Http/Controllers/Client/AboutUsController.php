<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use App\Models\Page;

class AboutUsController extends Controller
{
    public function index()
    {
        $aboutPage = Page::where('key', 'about')->firstOrFail();
        $certificates = Certificate::query()->with(['file', 'translations']);;

        return view('client.pages.about.index', [
            "aboutPage" => $aboutPage,
            "certificates" => $certificates->get()
        ]);
    }
}
