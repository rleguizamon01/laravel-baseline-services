<?php

namespace App\Modules\Main\UserModule\Services;

use App\Modules\Main\UserModule\User;

class IndexUserService extends CommonUserService
{
    public function __invoke($request)
    {
        return $this->logErrors(fn() => $this->index($request));
    }

    private function index($request)
    {
        $users = User::query();

        if($request->has('relations') && $request->relations != '*')
            $users->with($request->relations);
        else
            $users->with($this->relations);

        if($request->has('search_column'))
            $users->where($request->search_column, $request->search_value);

        if($request->has('order_by'))
            $users->orderBy($request->order_by, $request->order_direction);

        if($request->has('page'))
            return $users->paginate($request->page_size ?? 15);
        else
            return $users->get();
    }
}
