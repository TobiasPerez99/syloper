<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {

        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    // public function build()
    // {

    //     return $this->from('post@larave.com.ar' , 'Enviado desde el formulario de contacto')->subject('Correo desde formulario de contacto')->view('Mail.Mail', ['message' => $this->message]);

    // }

    public function build()

    {
        return $this->from('blog@laravel.com', 'Web Blog')->subject('Formulario de Contacto')->view('Mail.Mail', ['data' => $this->data]);
    }
}
