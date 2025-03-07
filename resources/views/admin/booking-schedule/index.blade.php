<div>
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="card">
                <div class="card-body text-center">
                    <h3>Days</h3>
                    <hr/>
                    <div class="btn-group-vertical w-100" role="group" aria-label="Vertical button group">
                        @foreach($items as $item)
                            <button class="btn btn-outline-primary p-t-10 p-b-10 m-t-5 m-b-5 {{ $item->active ? 'active' : '' }}" type="button" wire:click="selectDay({{ $item->id }})">{{ $item->name }}</button>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9 col-sm-6">
            <div class="card">
                <div class="card-body text-center">

                    <h3 class="float-start">{{ @$activeItem->name }} Schedules</h3>
                    <select class="form-select input-air-primary digits" style="display: inline; width: 200px" wire:change="setActiveService($event.target.value)">
                        @foreach($services as $service)
                            <option value="{{ $service->id }}">{{ $service->title }}</option>
                        @endforeach
                    </select>
                    <button class="btn btn-secondary mb-3 float-end" id="single-row-delete-btn" onclick="openModal({{ @$activeItem->id }})"><i class="fa fa-plus"></i> Add Booking Schedules</button>
                    <div class="clearfix"></div>
                    <hr/>
                    @foreach($items as $item)
                        @if($item->active)
                            @foreach($item->bookingSchedules as $schedule)
                                @if($schedule->service_id == $activeService->id)
                                    <div class="btn-group btn-lg m-5" role="group" aria-label="Basic example">
                                        <button class="btn btn-outline-danger" onclick="confirmDelete({{ $schedule->id }})"><i class="icon-trash"></i></button>
                                        <button class="btn btn-outline-primary " type="button" onclick="edit({{ $schedule->toJson() }})">{{ $schedule->start_date }} - {{ $schedule->end_date }}</button>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

    </div>

    <div wire:ignore.self class="modal fade" id="form_modal" tabindex="-1" role="dialog" aria-labelledby="form_modal" aria-hidden="true">
        <livewire:admin.booking-schedule.form activeService="{{ $activeService->title }}" service_id="{{ $activeService->title }}"/>
    </div>
</div>


<script>

    document.addEventListener('livewire:init', function () {
        Livewire.on('booking_schedule-created', () => {
            openToast('success', 'Booking schedule has created!')
            $('#form_modal').modal('hide');
        });

        Livewire.on('booking_schedule-updated', () => {
            openToast('success', 'Booking schedule has updated!')
            $('#form_modal').modal('hide');
        });

        Livewire.on('booking_schedule-update-error', () => {
            openToast('error', 'Booking schedule update error. Please try again!')
            $('#form_modal').modal('hide');
        });

        Livewire.on('booking_schedule-deleted', () => {
            openToast('success', 'Booking schedule has deleted!')
        });
    });


    function edit(item, day_id) {
        Livewire.dispatch('edit-form', { item: item})
        $('#form_modal').modal('show');
    }

    function openModal(day_id){
        Livewire.dispatch('open-create-form', {day_id: day_id})
        $('#form_modal').modal('show');
    }
    function confirmDelete(id) {
        if (confirm('Are you sure you want to delete this item?')) {
        @this.call('delete', id)
        }
    }
</script>


