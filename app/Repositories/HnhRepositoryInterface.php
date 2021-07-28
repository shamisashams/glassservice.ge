<?php
/**
 *  app/Repositories/ProductRepositoryInterface.php
 *
 * Date-Time: 10.06.21
 * Time: 15:11
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Repositories;


use App\Http\Requests\Admin\HnhRequest;
use App\Http\Requests\Admin\ProductRequest;
use App\Models\Hnh;
use App\Models\Product;

/**
 * Interface ProductRepositoryInterface
 * @package App\Repositories
 */
interface HnhRepositoryInterface
{

    /**
     * @param \App\Http\Requests\Admin\HnhRequest $request
     * @param array $with
     */
    public function getData(HnhRequest $request, array $with = []);

    /**
     * @param array $attributes
     *
     * @return \App\Models\Hnh
     */
    public function create(array $attributes): Hnh;

    /**
     * Update model by the given ID
     *
     * @param integer $id
     * @param array $data
     *
     * @return \App\Models\Hnh
     */
    public function update(int $id, array $data = []): Hnh;

    /**
     * @param int $id
     * @param \App\Http\Requests\Admin\HnhRequest $request
     *
     * @return \App\Models\Project
     */
    public function saveFiles(int $id, HnhRequest $request);
}
