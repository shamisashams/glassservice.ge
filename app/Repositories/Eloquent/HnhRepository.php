<?php
/**
 *  app/Repositories/Eloquent/ProductRepository.php
 *
 * Date-Time: 10.06.21
 * Time: 15:13
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Repositories\Eloquent;


use App\Models\Hnh;
use App\Models\HnhLanguage;
use App\Models\Product;
use App\Models\ProductLanguage;
use App\Repositories\Eloquent\Base\BaseRepository;
use App\Repositories\HnhRepositoryInterface;
use App\Repositories\ProductRepositoryInterface;
use Illuminate\Support\Facades\DB;

/**
 * Class CityRepository
 * @package App\Repositories\Eloquent
 */
class HnhRepository extends BaseRepository implements HnhRepositoryInterface
{

    /**
     * ProductRepository constructor.
     *
     * @param \App\Models\Hnh $model
     */
    public function __construct(Hnh $model)
    {
        parent::__construct($model);
    }

    /**
     * Create new model
     *
     * @param array $attributes
     *
     * @return \App\Models\Hnh
     */
    public function create(array $attributes = []): Hnh
    {
        try {
            DB::connection()->beginTransaction();

            $data = [
                'category_id' => $attributes['category_id'],
                'status' => $attributes['status'],
                'price' => $attributes['price']
            ];

            $this->model = parent::create($data);

            $productLanguages = [];

            foreach ($attributes['languages'] as $language) {
                $productLanguages [] = [
                    'language_id' => $language['id'],
                    'meta_title' => $attributes['meta_title'][$language['id']],
                    'meta_description' => $attributes['meta_description'][$language['id']],
                    'meta_keywords' => $attributes['meta_keywords'][$language['id']],
                    'title' => $attributes['title'][$language['id']],
                    'description' => $attributes['description'][$language['id']],
                    'content' => $attributes['content'][$language['id']],
                ];
            }

            $this->model->languages()->createMany($productLanguages);

            if ($attributes['feature']) {
                foreach ($attributes['feature'] as $key => $feature) {
                    if (count($feature)) {
                        $this->model->features()->create([
                            'feature_id' => $key,
                            'answers' => array_map('intval', $feature)
                        ]);
                    }
                }
            }

            DB::connection()->commit();

            return $this->model;
        } catch (\PDOException $e) {
            DB::connection()->rollBack();
        }
    }

    /**
     * Create new model
     *
     * @param int $id
     * @param array $data
     *
     * @return \App\Models\Hnh
     */
    public function update(int $id, array $data = []): Hnh
    {
        try {
            DB::connection()->beginTransaction();

            $attributes = [
                'category_id' => $data['category_id'],
                'status' => $data['status'],
                'price' => $data['price']
            ];

            $this->model = parent::update($id, $attributes);


            foreach ($data['languages'] as $language) {
                if (null !== $this->model->language($language['id'])) {
                    $this->model->language($language['id'])->update([
                        'meta_title' => $data['meta_title'][$language['id']],
                        'meta_description' => $data['meta_description'][$language['id']],
                        'meta_keywords' => $data['meta_keywords'][$language['id']],
                        'title' => $data['title'][$language['id']],
                        'description' => $data['description'][$language['id']],
                        'content' => $data['content'][$language['id']],
                    ]);
                } else {
                    HnhLanguage::create([
                        'hnh_id' => $this->model->id,
                        'language_id' => $language['id'],
                        'meta_title' => $data['meta_title'][$language['id']],
                        'meta_description' => $data['meta_description'][$language['id']],
                        'meta_keywords' => $data['meta_keywords'][$language['id']],
                        'title' => $data['title'][$language['id']],
                        'description' => $data['description'][$language['id']],
                        'content' => $data['content'][$language['id']],
                    ]);
                }
            }
            // deletes features
            $this->model->features()->forceDelete();

            if ($data['feature']) {
                foreach ($data['feature'] as $key => $feature) {
                    if (count($feature)) {
                        $this->model->features()->create([
                            'feature_id' => $key,
                            'answers' => array_map('intval', $feature)
                        ]);
                    }
                }
            }

            DB::connection()->commit();

            return $this->model;
        } catch (\PDOException $e) {
            DB::connection()->rollBack();
        }
    }
}
