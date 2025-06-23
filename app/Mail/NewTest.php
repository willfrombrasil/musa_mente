<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use stdClass;

class NewTest extends Mailable
{
    use Queueable, SerializesModels;

    private $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(stdClass $user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject('Resultado Teste Musa da Mente')
            ->to($this->user->email, $this->user->name)
            ->from('contato@musadamente.com.br', 'Musa da Mente')
            ->markdown('mail.newTest', ['user' => $this->user]);

        //dd($this);

        return $this;
    }
}
