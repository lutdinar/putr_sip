<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultantPersonilCertificate extends Model
{
    use HasFactory;

    protected $table                            = 'consultants_personil_certificate';
    protected $primaryKey                       = 'id';
    protected $name                             = 'name';
    protected $document                             = 'document';
    protected $type                             = 'type';
    protected $verificationAccount                             = 'verification_account';
    protected $verificationDate                             = 'verification_date';
    protected $verificationRespons                             = 'verification_respons';
    protected $verificationMessage                             = 'verification_message';
    protected $consultantsPersonil                             = 'consultants_personil';
    protected $deletedAt                        = 'deleted_at';
}
