<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Repositories\CategoryRepositoryInterface;
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
     * @var ProductRepositoryInterface
     */
    private $pageRepository;

    /**
     * @param ProductRepositoryInterface $pageRepository
     */
    public function __construct(
        ProductRepositoryInterface  $pageRepository
    )
    {
        $this->pageRepository = $pageRepository;
    }


    public function index(Request $request)
    {
        return view('admin.pages.product.index', [
            'products' => $this->pageRepository->getData($request, ['translations'])
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $product = $this->productRepository->model;

        $url = locale_route('product.store', [], false);
        $method = 'POST';

        return view('admin.pages.product.form', [
            'product' => $product,
            'url' => $url,
            'method' => $method,
            'categories' => $this->categoryRepository->all(['*'], ['translations'])
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ProductRequest $request
     *
     * @return Application|RedirectResponse|Redirector
     * @throws ReflectionException
     */
    public function store(ProductRequest $request)
    {
        $saveData = Arr::except($request->except('_token'), []);
        $saveData['status'] = isset($saveData['status']) && (bool)$saveData['status'];

        $product = $this->productRepository->create($saveData);

        // Save Files
        if ($request->hasFile('images')) {
            $product = $this->productRepository->saveFiles($product->id, $request);
        }

        return redirect(locale_route('product.show', $product->id))->with('success', __('admin.create_successfully'));

    }

    /**
     * Display the specified resource.
     *
     * @param string $locale
     * @param Product $product
     *
     * @return Application|Factory|View
     */
    public function show(string $locale, Product $product)
    {
        return view('admin.pages.product.show', [
            'product' => $product,
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
    public function edit(string $locale, Product $product)
    {
        $url = locale_route('product.update', $product->id, false);
        $method = 'PUT';

        return view('admin.pages.product.form', [
            'product' => $product,
            'url' => $url,
            'method' => $method,
            'categories' => $this->categoryRepository->all(['*'], ['translations'])
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProductRequest $request
     * @param string $locale
     * @param Product $product
     * @return Application|RedirectResponse|Redirector
     * @throws ReflectionException
     */
    public function update(ProductRequest $request, string $locale, Product $product)
    {
        $saveData = Arr::except($request->except('_token'), []);
        $saveData['status'] = isset($saveData['status']) && (bool)$saveData['status'];

        $this->productRepository->update($product->id,$saveData);

        // Save Files
        if ($request->hasFile('images')) {
            $this->productRepository->saveFiles($product->id, $request);
        }


        return redirect(locale_route('product.show', $product->id))->with('success', __('admin.update_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param string $locale
     * @param Product $product
     * @return Application|RedirectResponse|Redirector
     */
    public function destroy(string $locale, Product $product)
    {
        if (!$this->productRepository->delete($product->id)) {
            return redirect(locale_route('product.show', $product->id))->with('danger', __('admin.not_delete_message'));
        }
        return redirect(locale_route('product.index'))->with('success', __('admin.delete_message'));
    }
}
