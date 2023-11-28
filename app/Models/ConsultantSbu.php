<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultantSbu extends Model
{
    use HasFactory;

    protected $table                    = 'consultants_qualification_sbu';
    protected $primaryKey               = 'id';
    protected $expireDate               = 'expire_date';
    protected $document                 = 'document';
    protected $verificationAccount      = 'verification_account';
    protected $verificationDate         = 'verification_date';
    protected $verificationRespons      = 'verification_respons';
    protected $verificationMessage      = 'verification_message';
    protected $consultants              = 'consultants';
    protected $deletedAt                = 'deleted_at';

    public function insert_entry()
    {
        return ConsultantSbu::save();
    }
}
