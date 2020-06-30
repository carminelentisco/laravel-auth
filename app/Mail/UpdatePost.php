<?php

namespace App\Mail;

use App\Post;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UpdatePost extends Mailable
{
    use Queueable, SerializesModels;

    protected $post;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('edit-post@test.it')
                    ->subject('New post udated')
                    ->markdown('mail.edit-post')
                    ->with([
                        'title' => $this->post->title,
                        'body' => $this->post->body
                    ]);
    }
}
