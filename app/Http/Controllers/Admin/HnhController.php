<?php
/**
 *  app/Http/Controllers/Admin/ProductController.php
 *
 * Date-Time: 10.06.21
 * Time: 15:05
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\HnhRequest;
use App\Http\Requests\Admin\ProductRequest;
use App\Models\Hnh;
use App\Models\Product;
use App\Repositories\CategoryRepositoryInterface;
use App\Repositories\FeatureRepositoryInterface;
use App\Repositories\HnhRepositoryInterface;
use App\Repositories\ProductRepositoryInterface;
use Illuminate\Http\Request;

/**
 * Class ProductController
 * @package App\Http\Controllers\Admin
 */
class HnhController extends Controller
{

    /**
     * @var \App\Repositories\HnhRepositoryInterface
     */
    private $hnhRepository;

    /**
     * @var \App\Repositories\CategoryRepositoryInterface
     */
    private $categoryRepository;

    /**
     * @var \App\Repositories\FeatureRepositoryInterface
     */
    private $featureRepository;

    public function __construct(
        HnhRepositoryInterface $hnhRepository,
        CategoryRepositoryInterface $categoryRepository,
        FeatureRepositoryInterface $featureRepository
    )
    {
        $this->hnhRepository = $hnhRepository;
        $this->categoryRepository = $categoryRepository;
        $this->featureRepository = $featureRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(HnhRequest $request)
    {
        return view('admin.pages.hnh.index', [
            'hnhs' => $this->hnhRepository->getData($request, []),
            'languages' => $this->activeLanguages()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $hnh = $this->hnhRepository->model;

        $url = locale_route('hnh.store', [], false);
        $method = 'POST';

        return view('admin.pages.hnh.form', [
            'hnh' => $hnh,
            'url' => $url,
            'method' => $method,
            'languages' => $this->activeLanguages(),
            'categories' => $this->categoryRepository->all(['*'], ['features.languages', 'features.answers.languages']),

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(HnhRequest $request)
    {
        $data = [
            'meta_title' => $request['meta_title'],
            'meta_description' => $request['meta_description'],
            'meta_keywords' => $request['meta_keywords'],
            'title' => $request['title'],
            'description' => $request['description'],
            'content' => $request['content'],
            'price' => $request['price'],
            'category_id' => $request['category_id'],
            'feature' => $request['feature'],
            'status' => (bool)$request['status'],
            'languages' => $this->activeLanguages(),
        ];

        $hnh = $this->hnhRepository->create($data);

        // Save Files
        if ($request->hasFile('images')) {
            $hnh = $this->hnhRepository->saveFiles($hnh->id, $request);
        }

        return redirect(locale_route('hnh.show', $hnh->id))->with('success', 'Hnh created.');
    }

    /**
     * Display the specified resource.
     *
     * @param string $locale
     * @param \App\Models\Hnh $hnh
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(string $locale, Hnh $hnh)
    {
        $hnh = Hnh::where('id', $hnh->id)->with(['features', 'features.answers', 'languages', 'category'])->first();

        return view('admin.pages.hnh.show', [
            'hnh' => $hnh,
            'languages' => $this->activeLanguages()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(string $locale, Hnh $hnh)
    {
        $hnh = Hnh::where('id', $hnh->id)
            ->with([
                'features',
                'features.answers',
                'languages',
                'category',
                'category.features',
                'category.features.answers'
            ])->first();

        $url = locale_route('hnh.update', $hnh->id, false);

        $method = 'PUT';

        return view('admin.pages.hnh.form', [
            'hnh' => $hnh,
            'url' => $url,
            'method' => $method,
            'languages' => $this->activeLanguages(),
            'categories' => $this->categoryRepository->all(['*'], ['features.languages', 'features.answers.languages']),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(string $locale, int $id, HnhRequest $request)
    {

        $data = [
            'meta_title' => $request['meta_title'],
            'meta_description' => $request['meta_description'],
            'meta_keywords' => $request['meta_keywords'],
            'title' => $request['title'],
            'description' => $request['description'],
            'content' => $request['content'],
            'price' => $request['price'],
            'category_id' => $request['category_id'],
            'feature' => $request['feature'],
            'status' => (bool)$request['status'],
            'languages' => $this->activeLanguages(),
        ];

        $product = $this->hnhRepository->update($id, $data);

        // Save Files
        if ($request->hasFile('images')) {
            $product = $this->hnhRepository->saveFiles($product->id, $request);
        }

        return redirect(locale_route('hnh.show', $product->id))->with('success', 'Hnh updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function destroy(string $locale, int $id)
    {
        if (!$this->hnhRepository->delete($id)) {
            return redirect(locale_route('hnh.show', $id))->with('danger', 'Hnh not deleted.');
        }
        return redirect(locale_route('hnh.index'))->with('success', 'Hnh Deleted.');
    }
}
