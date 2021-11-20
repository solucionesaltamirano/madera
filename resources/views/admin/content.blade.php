<section class="container-fluid ">
    <div class="card card-primary card-outline min-vh-100">
        <div class="card-header">
            <div class="card-title w-100">
                <div class="row ">
                    <div class="col strong pt-1">
                        {{ $cardTitle }}
                    </div>
                    @if(isset($cardButton))
                        <div class="col-4">
                            {{ $cardButton }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="card-body px-1 px-sm-4">
            {{ $slot }}
        </div>
    </div>
</section><!-- /.container-fluid -->