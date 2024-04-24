@extends('components.admin.layouts.adminapp')
@section('headSection')
@endsection

@section('adminnavbar')
    <x-admin.layouts.adminnavbar modulename="PATIENTS DETAILS" />
@endsection

@section('main-content')
    <x-admin.layouts.adminbreadcrumb>
        <li class="breadcrumb-item active" aria-current="page">Patients Details</li>
    </x-admin.layouts.adminbreadcrumb>
    @livewire('admin.patientsdetail.patientinformationlivewire')
@endsection

@section('footerSection')
    @include('helper.sidenavhelper.sidenavactive', [
        'type' => 1,
        'nameone' => '#adminenquiryform_sidenav',
    ])
@endsection
