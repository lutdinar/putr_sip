<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultantPersonil extends Model
{
    use HasFactory;

    protected $table                            = 'consultants_personil';
    protected $primaryKey                       = 'id';
    protected $name                             = 'name';
    protected $photo                             = 'photo';
    protected $dateOfBirth                             = 'date_of_birth';
    protected $idCard                             = 'id_card';
    protected $idCardVerificationAccount                             = 'id_card_verification_account';
    protected $idCardVerificationDate                             = 'id_card_verification_date';
    protected $idCardVerificationRespons                             = 'id_card_verification_respons';
    protected $idCardVerificationMessage                             = 'id_card_verification_message';
    protected $position                             = 'position';
    protected $educationLevel                             = 'education_level';
    protected $educationDocument                             = 'education_document';
    protected $educationVerificationAccount                             = 'education_verification_account';
    protected $educationVerificationDate                             = 'education_verification_date';
    protected $educationVerificationRespons                             = 'education_verification_respons';
    protected $educationVerificationMessage                             = 'education_verification_message';
    protected $consultants                             = 'consultants';
    protected $deletedAt                        = 'deleted_at';
}
