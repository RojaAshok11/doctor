<div class="modal fade" id="showModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="showModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        @if ($showdata)
            <div class="modal-content">
                <div class="modal-header text-white theme_bg_color px-3 py-2">
                    <h5 class="modal-title" id="showModalLabel"> {{ __('SHOW CONTACT US') }} : {{ $showdata->uniqid }}
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body bg-white">
                    <div class="row">
                        @include('helper.formhelper.showlabel', [
                            'name' => 'NAME',
                            'value' => $showdata->fullname,
                            'columnone' => 'col-md-6',
                            'columntwo' => 'col-3',
                            'columnthree' => 'col-9',
                        ])
                        @include('helper.formhelper.showlabel', [
                            'name' => 'EMAIL',
                            'value' => $showdata->email,
                            'columnone' => 'col-md-6',
                            'columntwo' => 'col-3',
                            'columnthree' => 'col-9',
                        ])
                        @include('helper.formhelper.showlabel', [
                            'name' => 'PHONE',
                            'value' => $showdata->phonenumber,
                            'columnone' => 'col-md-6',
                            'columntwo' => 'col-3',
                            'columnthree' => 'col-9',
                        ])
                        @include('helper.formhelper.showlabel', [
                            'name' => 'MESSAGE',
                            'value' => $showdata->message,
                            'columnone' => 'col-md-6',
                            'columntwo' => 'col-3',
                            'columnthree' => 'col-9',
                        ])
                        @include('helper.formhelper.showlabel', [
                            'name' => 'CREATED BY',
                            'value' => $showdata->fullname,
                            'columnone' => 'col-md-6',
                            'columntwo' => 'col-3',
                            'columnthree' => 'col-9',
                        ])
                        @include('helper.formhelper.showlabel', [
                            'name' => 'CREATED AT',
                            'value' => $showdata->created_at->format('d-m-Y h:i A'),
                            'columnone' => 'col-md-6',
                            'columntwo' => 'col-3',
                            'columnthree' => 'col-9',
                        ])
                        @if ($showdata->updated_id)
                            @include('helper.formhelper.showlabel', [
                                'name' => 'UPDATED BY',
                                'value' => $showdata->name,
                                'columnone' => 'col-md-6',
                                'columntwo' => 'col-3',
                                'columnthree' => 'col-9',
                            ])
                            @include('helper.formhelper.showlabel', [
                                'name' => 'UPDATED AT',
                                'value' => $showdata->updated_at->format('d-m-Y h:i A'),
                                'columnone' => 'col-md-6',
                                'columntwo' => 'col-3',
                                'columnthree' => 'col-9',
                            ])
                        @endif
                    </div>
                </div>
                <div class="modal-footer bg-light px-2 py-1">
                    <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">{{ __('Close') }}</button>
                </div>
            </div>
        @endif
    </div>
</div>
