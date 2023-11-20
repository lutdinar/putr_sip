<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultantOwner extends Model
{
    use HasFactory;

    protected $table                            = 'consultants_owner';
    protected $primaryKey                       = 'id';
    protected $name                             = 'name';
    protected $email                            = 'email';
    protected $phone                            = 'phone';
    protected $photo                            = 'photo';
    protected $idCard                           = 'id_card';
    protected $idCardVerificationAccount        = 'id_card_verification_account';
    protected $idCardVerificationDate           = 'id_card_verification_date';
    protected $idCardVerificationRespons        = 'id_card_verification_respons';
    protected $idCardVerificationMessage        = 'id_card_verification_message';
    protected $taxIdNumber                      = 'tax_id_number';
    protected $taxIdDocument                    = 'tax_id_document';
    protected $taxIdVerificationAccount         = 'tax_id_verification_account';
    protected $taxIdVerificationDate            = 'tax_id_verification_date';
    protected $taxIdVerificationRespons         = 'tax_id_verification_respons';
    protected $taxIdVerificationMessage         = 'tax_id_verification_message';
    protected $isDirector                       = 'is_director';
    protected $consultants                      = 'consultants';
    protected $deletedAt                        = 'deleted_at';
}
