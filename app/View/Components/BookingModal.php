<?php
namespace App\View\Components;

use Illuminate\View\Component;

class BookingModal extends Component
{
    public $roomId;

    public function __construct($roomId = null)
    {
        $this->roomId = $roomId;
    }

    public function render()
    {
        return view('components.booking-modal');
    }
}
