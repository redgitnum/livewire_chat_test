<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;
use App\Events\SendPost;
use Illuminate\Http\Request;

class ChatView extends Component
{
    public $user;
    public $message;

    protected $listeners = ['echo:posts,SendPost' => '$refresh'];

    public function render()
    {
        $messages = Message::all();
        return view('livewire.chat-view', [
            'messages' => $messages,
        ]);

    }

    public function post()
    {
        event(new SendPost);
        Message::create([
            'message' => $this->message,
            'user' => $this->user
        ]);
        $this->message = '';
    }
}
