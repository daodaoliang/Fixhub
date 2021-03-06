<div class="modal fade" id="key">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title"><i class="ion ion-ios-browsers-outline"></i> <span>{{ trans('keys.create') }}</span></h4>
            </div>
            <form role="form">
                <input type="hidden" id="key_id" name="id" />
                <div class="modal-body">

                    <div class="callout callout-danger">
                        <i class="icon ion ion-alert"></i> {{ trans('keys.warning') }}
                    </div>

                    <div class="form-group">
                        <label for="key_name">{{ trans('keys.name') }}</label>
                        <div class="input-group">
                            <div class="input-group-addon"><i class="ion ion-pricetag"></i></div>
                            <input type="text" class="form-control" name="name" id="key_name" placeholder="{{ trans('keys.name') }}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label>{{ trans('keys.private_ssh_key') }}</label>
                        <i class="ion ion-help" data-toggle="tooltip" data-placement="right" title="{{ trans('keys.ssh_key_info') }}"></i>
                        <textarea name="private_key" rows="10" id="key_private_key" class="form-control" placeholder="{{ trans('keys.ssh_key_example') }}"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary pull-left btn-save">{{ trans('app.save') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>

@include('projects.dialogs.key')