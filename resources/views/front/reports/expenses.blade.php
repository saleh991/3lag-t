@extends('front.layouts.front')
@section('title')
    {{ __('admin.Patient report') }}
@endsection
@section('content')
@livewire('reports.expenses-report')


@endsection
