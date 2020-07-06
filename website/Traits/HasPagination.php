<?php

namespace App\Traits;

use Illuminate\Pagination\Paginator;
use Illuminate\Database\Eloquent\Collection;
use App\Components\Pagination\MetaAwarePaginator;

trait HasPagination
{
    public function paginate($collection, $request, array $meta = []): MetaAwarePaginator
    {
        $perPage = $request->limit ?? 15;

        $page = $request->page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $collection instanceof Collection ? $collection : Collection::make($collection);

        return new MetaAwarePaginator(
            $items->forPage($page, $request->limit),
            $items->count(),
            $perPage,
            $page,
            ['path' => Paginator::resolveCurrentPath()],
            $meta
        );
    }
}
