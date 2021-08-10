<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use App\Models\Page;
use App\Models\Product;
use App\Models\Project;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        $productPage = Page::where('key', 'product')->firstOrFail();
        $servicePage = Page::where('key', 'service')->firstOrFail();
        $aboutPage = Page::where('key', 'about')->firstOrFail();
        $projectPage = Page::where('key', 'project')->firstOrFail();


        $products = Product::query()->with(['file', 'translations']);
        $services = Service::where('status',true)->with(['file','translations'])->latest()->take(4)->get();
        $certificates = Certificate::query()->with(['file', 'translations']);
        $projects = Project::query()->with(['file', 'translations']);



        $products = $products->where('status', true);
        return view('client.pages.home.index', [
            "productPage" => $productPage,
            "servicePage" => $servicePage,
            "aboutPage" => $aboutPage,
            "projectPage" => $projectPage,
            "products" => $products->get(),
            "services" => $services,
            "certificates" => $certificates->get(),
            "projects" => $projects->get()
        ]);
    }
}