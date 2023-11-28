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
}
