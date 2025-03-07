<?php

namespace App\Livewire\Booking;

use Livewire\Attributes\On;
use Livewire\Component;

class Service extends Component
{
    public $location_id, $service_type_id, $services, $id;

    public function mount(){
//        $this->services = \App\Models\Service::whereHas('serviceLocations', function ($q){$q->where('location_id', $this->location_id);})->where('service_type_id', $this->service_type_id)->orderBy('id', 'desc')->get();
        $this->services = \App\Models\Service::where('service_type_id', $this->service_type_id)->orderBy('id', 'desc')->get();
    }

    #[On('set_service_type')]
    public function setServiceType($id)
    {
        $this->services = \App\Models\Service::where('service_type_id', $id)->orderBy('id', 'desc')->get();
    }

    public function changeId($id, $text, $price, $slot){
        $service = $this->services->find($id);
        $this->dispatch('set_service', id: $id, text: $text, price: $price, slot: $slot, image: $service->image, fixed_price: $service->fixed_price, extended_price: $service->extended_price);
    }



    public function render()
    {
        return view('booking.service');
    }
}
