<?php
/**
 *  app/Repositories/Eloquent/ProductRepository.php
 *
 * Date-Time: 30.07.21
 * Time: 10:36
 * @author Vakho Batsikadze <vakhobatsikadze@gmail.com>
 */

namespace App\Repositories\Eloquent;


use App\Models\Page;
use App\Models\Translations\PageTranslation;
use App\Repositories\Eloquent\Base\BaseRepository;
use App\Repositories\PageRepositoryInteface;
use League\Flysystem\Config;


class PageRepository extends BaseRepository implements PageRepositoryInteface
{
    /**
     * @param Page $model
     */
    public function __construct(Page $model)
    {
        parent::__construct($model);
    }

    public function update(int $id, array $data = [])
    {

        $page=$this->findOrFail($id);
        if (count($page->translations)==0){
            $page->translations->create($data);
        }else{
            $page->translations->update($data);
        }
        return true;
    }

}
