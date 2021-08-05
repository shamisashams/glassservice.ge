<?php

namespace App\Repositories\Eloquent;


use App\Models\Page;
use App\Models\Setting;
use App\Repositories\Eloquent\Base\BaseRepository;
use App\Repositories\PageRepositoryInterface;
use App\Repositories\SettingRepositoryInterface;


class SettingRepository extends BaseRepository implements SettingRepositoryInterface
{
    /**
     * @param Setting $model
     */
    public function __construct(Setting $model)
    {
        parent::__construct($model);
    }


}
