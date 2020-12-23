<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderStatusChange extends Mailable
{
    use Queueable, SerializesModels;
    public $data = [];
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
    public function build()
    {
        $title = "";
        
        $status = $this->data['order_status_num'];

        if ($status == 1) {
            $title = "Order Received - Your Order Has Been Received";
            $this->data['status'] = 'Updated';
        } elseif ($status == 2) {
            $title = "Order Confirmed - Your Order Has Been Confirmed";
            $this->data['status'] = 'Confirmed';
        } elseif ($status == 3) {
            $title = "Order Shipped - Your Order Has Been Shipped";
            $this->data['status'] = 'Shipped';
        } elseif ($status == 4) {
            $title = "Order Delivered - Your Order Has Been Delivered";
            $this->data['status'] = 'Delivered';
        } else {
            $title = "Order Cancelled - Your Order Has Been Cancelled";
            $this->data['status'] = 'Cancelled';
        }
        
        return $this->view('dashboard.email.order_status_change')
            ->subject($title)
            ->with('data', $this->data);
    }
}
