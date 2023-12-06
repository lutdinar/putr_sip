<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Years extends Model
{
    use HasFactory;
    protected $table        = 'years';
    protected $primaryKey   = 'id';

    public function get_all_where_limit($search, $page)
    {
        if (!empty($search)) {
            $years    = Years::where("name", "like", "%$search%")
                ->whereNull('deleted_at')
                ->limit(20)->offset(($page - 1) * 20)
                ->orderBy('name', 'asc')->get();

            $totalRows      = Years::where("name", "like", "%$search%")
                ->whereNull('deleted_at')->count();
        } else {
            $years    = Years::whereNull('deleted_at')
                ->orderBy('name', 'asc')
                ->limit(20)->offset(($page - 1) * 20)
                ->get();
            $totalRows      = Years::whereNull('deleted_at')->count();
        }

        return array('years' => $years, 'totalRows' => $totalRows);
    }
}
