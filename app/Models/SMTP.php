<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SMTP extends Model
{
    use SoftDeletes;

    protected $table = 'smtp_settings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['smtp_mailer', 'smtp_mail_host', 'smtp_mail_port', 'smtp_mail_username', 'smtp_mail_password', 'smtp_mail_encryption'];
}
