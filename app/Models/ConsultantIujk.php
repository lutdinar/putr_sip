<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultantIujk extends Model
{
    use HasFactory;

    protected $table        = 'consultants_qualification_iujk';
    protected $primaryKey   = 'id';
    protected $deletedAt    = 'deleted_at';
}
