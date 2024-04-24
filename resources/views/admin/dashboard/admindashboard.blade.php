@extends('components.admin.layouts.adminapp')
@section('headSection')
@endsection

@section('adminnavbar')
    <x-admin.layouts.adminnavbar modulename="DASHBOARD" />
@endsection

@section('main-content')
    <x-admin.layouts.adminbreadcrumb>
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
    </x-admin.layouts.adminbreadcrumb>

    @livewire('admin.medical.Doctordetail')
@endsection


@section('footerSection')
    @include('helper.sidenavhelper.sidenavactive', [
        'type' => 1,
        'nameone' => '#admindashboard_sidenav',
    ])
@endsection
