@foreach (session('flash_notification', collect())->toArray() as $message)
    {{-- @if ($message['overlay'])
        @include('flash::modal', [
            'modalClass' => 'flash-modal',
            'title'      => $message['title'],
            'body'       => $message['message']
        ])
    @else
        <div class="alert
                    alert-{{ $message['level'] }}
                    {{ $message['important'] ? 'alert-important' : '' }}"
                    role="alert"
        >
            @if ($message['important'])
                <button type="button"
                        class="close"
                        data-dismiss="alert"
                        aria-hidden="true"
                >&times;</button>
            @endif

            {!! $message['message'] !!}
        </div>
    @endif --}}

    @livewire('partial.toast',[
        'title' => $message['message'] ,
        'icon' => $message['level'] == "danger" ? "error" : $message['level']
    ])
    
@endforeach

{{ session()->forget('flash_notification') }}
