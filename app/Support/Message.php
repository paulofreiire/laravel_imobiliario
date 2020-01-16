<?php


namespace App\Support;


use Illuminate\Support\Facades\Log;

class Message
{
    public function getType()
    {
        return $this->type;
    }

    public function getText()
    {
        return $this->text;
    }

    public function message(): Message
    {
        return $this;
    }

    public function render(string $type, string $message)
    {
        $message = str_replace('"', "", $message);
        Log::info('testeeeee');
        return "<div class='message {$type}'>$message</div>";
    }
}
