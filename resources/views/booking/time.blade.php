<div>
    <div class="card">
        <div class="card-header pb-0 border-b-info">
            <h3 class="sub-title">Choose Session Time</h3>
        </div>
        <div class="card-body">
            <div class="form-check radio radio-primary ps-0">
                <ul class="radio-wrapper justify-content-center session-time-section">
                    @foreach($schedules as $schedule)
                        @php($usedSlots = 0)
                        @foreach($schedule->bookings as $booking)
                            @php($usedSlots += (int)$booking->quantity)
                        @endforeach
                        <li>
                            <input class="form-check-input" type="radio" value="{{ $schedule->id }}" name="schedule" wire:model="id" wire:change="changeId({{ $schedule->id }}, {{ $schedule }})" @if(($slots - $usedSlots) < $quantity) disabled @endif>
                            <label class="form-check-label" >
                                <span class="timer">{{ \Carbon\Carbon::parse($schedule->start_time)->format('h:i') }}</span>
                                <span class="time-format text-muted">{{ \Carbon\Carbon::parse($schedule->start_time)->format('A') }}</span><br/>
                                @if(($slots - $usedSlots) < $quantity)
                                    <span class="session-time-message text-danger">Booked</span>
                                @elseif($usedSlots > 0)
                                    <span class="session-time-message text-danger">{{ $slots-$usedSlots }} players left</span>
                                @endif
                            </label>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
