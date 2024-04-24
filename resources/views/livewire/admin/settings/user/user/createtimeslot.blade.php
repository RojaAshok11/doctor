<div>
    <div wire:ignore.self class="modal fade" id="timeedit" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="createoreditModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form wire:submit.prevent="store" enctype="multipart/form-data">
                <div class="modal-header text-white theme_bg_color px-3 py-2">
                    <h5 class="modal-title" id="createoreditModalLabel">
                        {{-- @dd($this->model_id) --}}
                        {{$existingSlot? __('UPDATE') : __('CREATE') }}
                        {{ __('DOCTOR') }}</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body bg-white">
                    <div class="row g-3">

                        @include('helper.formhelper.form', [
                            'type' => 'text',
                            'fieldname' => 'am_time',
                            'labelname' => 'am_time',
                            'labelidname' => 'nameid',
                            'required' => true,
                            'readonly' => false,
                            'col' => 'col-md-4',
                        ])
                        @include('helper.formhelper.form', [
                            'type' => 'text',
                            'fieldname' => 'pm_time',
                            'labelname' => 'pm_time',
                            'labelidname' => 'nameid',
                            'required' => true,
                            'readonly' => false,
                            'col' => 'col-md-4',
                            'error' => $errors->has('specialist'),
                        ])
                        @include('helper.formhelper.form', [
                            'type' => 'text',
                            'fieldname' => 'hours',
                            'labelname' => 'hours',
                            'labelidname' => 'nameid',
                            'required' => true,
                            'readonly' => false,
                            'col' => 'col-md-4',
                        ])

                        @include('helper.formhelper.form', [
                            'type' => 'text',
                            'fieldname' => 'minutes',
                            'labelname' => 'minutes',
                            'labelidname' => 'minutes',
                            'required' => true,
                            'readonly' => false,
                            'col' => 'col-md-4',
                        ])

                    </div>
                </div>
                <div class="modal-footer bg-light px-2 py-1">
                    <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">{{ __('Close') }}</button>
                    <button type="submit"
                        class="btn btn-primary">{{ $existingSlot ? __('Update') : __('Create') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>

</div>
