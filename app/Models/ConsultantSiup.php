<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultantSiup extends Model
{
    use HasFactory;

    protected $table            = 'consultants_qualification_siup';
    protected $primaryKey       = 'id';
    protected $deleted_at       = null;
}
