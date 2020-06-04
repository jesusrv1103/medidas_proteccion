<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MedidaDeProteccionRecibida extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public  $medida_proteccion;
    public  $evidencias ;

    public function __construct($medida_proteccion, $evidencias)
    {
        $this->medida_proteccion =$medida_proteccion;
        $this->evidencias=$evidencias;

        

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $email= $this->view('correos.medida_proteccion');
        $email->subject('Solicitud, de medida de proteccion Recibida');

        foreach($this->evidencias as $evidencia){
        
            $url=storage_path()."/app/".$evidencia['imagen'];
            $email->attach($url);
           }
          
        return $email;

        
    }
}
