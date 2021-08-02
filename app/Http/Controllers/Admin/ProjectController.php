<?php
/**
 *  app/Http/Controllers/Admin/ProductController.php
 *
 * Date-Time: 30.07.21
 * Time: 10:37
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Http\Requests\Admin\ProductRequest;
use App\Http\Requests\Admin\ProjectRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Project;
use App\Models\Translations\CategoryTranslation;
use App\Repositories\CategoryRepositoryInterface;
use App\Repositories\ProjectRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ProjectController extends Controller
{
    /**
     * @var \App\Repositories\ProjectRepositoryInterface
     */
    private $projectRepository;

    /**
     * @var \App\Repositories\CategoryRepositoryInterface
     */
    private $categoryRepository;

    /**
     * @param \App\Repositories\ProjectRepositoryInterface $projectRepository
     * @param \App\Repositories\CategoryRepositoryInterface $categoryRepository
     */
    public function __construct(
        ProjectRepositoryInterface  $projectRepository,
        CategoryRepositoryInterface $categoryRepository
    )
    {
        $this->projectRepository = $projectRepository;
        $this->categoryRepository = $categoryRepository;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index(ProjectRequest $request)
    {

        return view('admin.pages.project.index', [
            'projects' => $this->projectRepository->getData($request, ['translations'])
        ]);
        dd(1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $project = $this->projectRepository->model;

        $url = locale_route('project.store', [], false);
        $method = 'POST';

        return view('admin.pages.project.form', [
            'project' => $project,
            'url' => $url,
            'method' => $method,
            'categories' => $this->categoryRepository->all(['*'], ['translations'])
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Admin\ProjectRequest $request
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \ReflectionException
     */
    public function store(ProjectRequest $request)
    {
        $saveData = Arr::except($request->except('_token'), []);
        $saveData['status'] = isset($saveData['status']) && (bool)$saveData['status'];

        $project = $this->projectRepository->create($saveData);

        // Save Files
        if ($request->hasFile('images')) {
            $project = $this->projectRepository->saveFiles($project->id, $request);
        }

        return redirect(locale_route('project.index', $project->id))->with('success', __('admin.create_successfully'));

    }

    /**
     * Display the specified resource.
     *
     * @param string $locale
     * @param \App\Models\Project $project
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(string $locale, Project $project)
    {
        return view('admin.pages.project.show', [
            'project' => $project,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param string $locale
     * @param \App\Models\Category $category
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(string $locale, Project $project)
    {
        $url = locale_route('project.update', $project->id, false);
        $method = 'PUT';

        return view('admin.pages.project.form', [
            'project' => $project,
            'url' => $url,
            'method' => $method,
            'categories' => $this->categoryRepository->all(['*'], ['translations'])
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Admin\CategoryRequest $request
     * @param string $locale
     * @param \App\Models\Category $category
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(ProjectRequest $request, string $locale, Project $project)
    {
        $saveData = Arr::except($request->except('_token'), []);
        $saveData['status'] = isset($saveData['status']) && (bool)$saveData['status'];

        $this->projectRepository->update($project->id,$saveData);

        // Save Files
        if ($request->hasFile('images')) {
            $this->projectRepository->saveFiles($project->id, $request);
        }


        return redirect(locale_route('project.show', $project->id))->with('success', __('admin.update_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param string $locale
     * @param \App\Models\Category $category
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(string $locale, Project $project)
    {
        if (!$this->projectRepository->delete($project->id)) {
            return redirect(locale_route('project.show', $project->id))->with('danger', __('admin.not_delete_message'));
        }
        return redirect(locale_route('project.index'))->with('success', __('admin.delete_message'));
    }
}
