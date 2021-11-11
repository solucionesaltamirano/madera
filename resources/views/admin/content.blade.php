<section class="content">
    <div class="container-fluid ">
        <div class="card card-primary card-outline min-vh-100">
            <div class="card-header">
                <div class="card-title w-100">
                    <div class="row ">
                        <div class="col-6 strong pt-1">
                            {{ $cardTitle }}
                        </div>
                        <div class="col-6">
                            {{ $cardButton }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body ">
                {{ $slot }}
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>