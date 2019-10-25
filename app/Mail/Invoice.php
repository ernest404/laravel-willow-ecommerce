<?php

namespace App\Mail;
use App\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Invoice extends Mailable
{
    use Queueable, SerializesModels;

    public $orders;
    public $userorder;
    public $time;
    public $shippingDetails;
    public $userDetails;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $orders,$shippingDetails,$userorder,$userDetails)
    {
        
        $this->orders=$orders;
        $this->userorder=$userorder;
        $this ->shippingDetails=$shippingDetails;
        $this->userDetails=$userDetails;
    
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('willowke254@gmail.com')
        ->markdown('emails.orders.orderinvoice');
       
    }
}
