<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PageRequest;
use App\Http\Requests\Admin\ProductRequest;
use App\Models\Category;
use App\Models\Page;
use App\Models\Product;
use App\Repositories\PageRepositoryInteface;
use App\Repositories\ProductRepositoryInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Arr;

class PageController extends Controller
{

    /**
     * @var PageRepositoryInteface
     */
    private $pageRepository;


    /**
     * @param ProductRepositoryInterface $pageRepository
     */
    public function __construct(
        PageRepositoryInteface  $pageRepository
    )
    {
        $this->pageRepository = $pageRepository;
    }


    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function index(PageRequest $request)
    {
        return view('admin.pages.page.index', [
            'pages' => $this->pageRepository->getData($request, ['translations'])
        ]);
    }



    /**
     * Display the specified resource.
     *
     * @param string $locale
     * @param Product $product
     *
     * @return Application|Factory|View
     */
    public function show(string $locale, Page $page)
    {
        return view('admin.pages.page.show', [
            'page' => $page,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param string $locale
     * @param Category $category
     *
     * @return Application|Factory|View
     */
    public function edit(string $locale, Page $page)
    {
        $url = locale_route('page.update', $page->id, false);
        $method = 'PUT';

        return view('admin.pages.page.form', [
            'page' => $page,
            'url' => $url,
            'method' => $method,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProductRequest $request
     * @param string $locale
     * @param Page $page
     * @return Application|RedirectResponse|Redirector
     * @throws ReflectionException
     */
    public function update(PageRequest $request, string $locale, Page $page)
    {
        $saveData = Arr::except($request->except('_token'), []);
        $this->pageRepository->update($page->id,$saveData);


        return redirect(locale_route('page.show', $page->id))->with('success', __('admin.update_successfully'));
    }

}
