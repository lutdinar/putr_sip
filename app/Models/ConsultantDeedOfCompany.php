<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultantDeedOfCompany extends Model
{
    use HasFactory;

    protected $table                    = 'consultants_deed_of_company';
    protected $primaryKey               = 'id';
    protected $type                     = 'type';
    protected $submitted                = 'submitted';
    protected $document                 = 'document';
    protected $verificationAccount      = 'verification_account';
    protected $verificationDate         = 'verification_date';
    protected $verificationRespons      = 'verification_respons';
    protected $verificationMessage      = 'verification_message';
    protected $consultants              = 'consultants';
    protected $deletedAt                = 'deleted_at';

    public function insert_entry()
    {
        return ConsultantDeedOfCompany::save();
    }
}
