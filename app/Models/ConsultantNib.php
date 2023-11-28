<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultantNib extends Model
{
    use HasFactory;
    protected $table            = 'consultants_qualification_nib';
    protected $primaryKey       = 'id';
    protected $deleted_at       = null;
}
