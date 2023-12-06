<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultant extends Model
{
    use HasFactory;

    protected $table = 'consultants';
    protected $primaryKey   = 'id';
    protected $refer           = 'refer';
    protected $name            = 'name';
    protected $email           = 'email';
    protected $phone           = 'phone';
    protected $address         = 'address';
    protected $logo            = 'logo';
    protected $account         = 'account';
    protected $deletedAt    = 'deleted_at';

    public function insert_entry()
    {
        return Consultant::save();
    }

    public function get_all_where_limit($search, $page)
    {
        if (!empty($search)) {
            $consultants    = Consultant::where("name", "like", "%$search%")
                ->whereNull('deleted_at')
                ->limit(20)->offset(($page - 1) * 20)
                ->orderBy('name', 'asc')->get();

            $totalRows      = Consultant::where("name", "like", "%$search%")
                ->whereNull('deleted_at')->count();
        } else {
            $consultants    = Consultant::whereNull('deleted_at')
                ->orderBy('name', 'asc')
                ->limit(20)->offset(($page - 1) * 20)
                ->get();
            $totalRows      = Consultant::whereNull('deleted_at')->count();
        }

        return array('consultants' => $consultants, 'totalRows' => $totalRows);
    }
}
