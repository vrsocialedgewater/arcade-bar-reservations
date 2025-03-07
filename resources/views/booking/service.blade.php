<div>
    <div class="card">
        <div class="card-header pb-0 border-b-info">
            <h3 class="sub-title">Choose Service</h3>
        </div>
        <div class="card-body">
            <div class="form-check radio radio-primary ps-0">
                <ul class="radio-wrapper  justify-content-center experience-section">
                    @foreach($services as $service)
                        <li>
                            <input class="form-check-input" type="radio" name="service_type" value="{{ $service->id }}" wire:model="id" wire:change="changeId({{ $service->id }}, '{{ $service->title }}', {{ $service->price }}, {{ $service->slot }})">
                            <label class="form-check-label"><i class="fa fa-gamepad"></i><br/><span>{{ $service->title }}</span></label>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
