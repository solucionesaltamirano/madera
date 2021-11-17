<div>
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">
                        <i class="fal fa-window"></i>
                        <span class="px-2">{{ $title }}</span>
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            <i class="fal fa-window-close"></i>
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>{{ $body }}</p>
                </div>
                <div class="modal-footer justify-content-between">
                    {{ $footer }}
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
    </div>
</div>