<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CommentSend extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $comment;
    public $article;

    public function __construct($comment, $article)
    {
        //
        $this->article = $article;
        $this->comment = $comment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('abdollahghasemi10@example.com')
            ->subject('کامنت مورد نظر شما')
            ->view('mails.comments')->with([
         'articleTitle'=>$this->article->name,
                'commentbody'=>$this->comment->body,
                'username'=>$this->comment->name,

            ]);
    }
}
