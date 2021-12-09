<section class="container-fluid ">
    <div class="card card-primary card-outline min-vh-100">
        <div class="card-header">
            <div class="card-title w-100">
                @if(isset($cardTitle))
                    {{ $cardTitle }}
                @endif
                @if(isset($cardButton))
                    <div class="float-right">
                        {{ $cardButton }}
                    </div>
                @endif
            </div>
        </div>
        <div class="card-body px-1 px-sm-4">
            {{ $slot }}
        </div>
    </div>
</section><!-- /.container-fluid -->