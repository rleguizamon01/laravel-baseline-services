<?php

namespace App\Modules\Auth\AuthModule\Services;

use App\Modules\Auth\AuthModule\Auth;

class UserAuthService extends CommonAuthService
{
    public function __invoke($request)
    {
        return $this->logErrors(fn() => $this->user($request));
    }

    private function user($request)
    {
        $auths = Auth::query();

        if($request->has('relations') && $request->relations != '*')
            $auths->with($request->relations);
        else
            $auths->with($this->relations);

        if($request->has('search_column'))
            $auths->where($request->search_column, $request->search_value);

        if($request->has('order_by'))
            $auths->orderBy($request->order_by, $request->order_direction);

        if($request->has('page'))
            return $auths->paginate($request->page_size ?? 15);
        else
            return $auths->get();
    }
}
