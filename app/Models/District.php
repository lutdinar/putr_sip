<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    protected $table        = 'districts';
    protected $primaryKey   = 'id';
    protected $deleted_at;

    public function get_all_where_limit($search, $page)
    {
        if (!empty($search)) {
            $districts    = District::where("name", "like", "%$search%")
                ->whereNull('deleted_at')
                ->limit(20)->offset(($page - 1) * 20)
                ->orderBy('name', 'asc')->get();

            $totalRows      = District::where("name", "like", "%$search%")
                ->whereNull('deleted_at')->count();
        } else {
            $districts    = District::whereNull('deleted_at')
                ->orderBy('name', 'asc')
                ->limit(20)->offset(($page - 1) * 20)
                ->get();
            $totalRows      = District::whereNull('deleted_at')->count();
        }

        return array('districts' => $districts, 'totalRows' => $totalRows);
    }
}
