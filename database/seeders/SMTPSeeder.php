<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SMTPSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\SMTP::create([
            'smtp_mailer'           =>  'smtp',
            'smtp_mail_host'        =>  'mail.ht-limitedng.net',
            'smtp_mail_port'        =>  '465',
            'smtp_mail_username'    =>  'info@ht-limitedng.net',
            'smtp_mail_password'    =>  base64_encode('06I$(7@O^%5g&*'),
            'smtp_mail_encryption'  =>  'tls',
        ]);
    }
}
