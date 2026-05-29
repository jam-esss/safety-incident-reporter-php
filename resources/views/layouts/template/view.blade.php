<?php /* Link to layout */ ?>
@extends('layouts.public.layout')

<?php /* Page title and description */ ?>
@section('title', 'Home')
@section('description', 'Homepage')

<?php /* Styling goes here */ ?>
@push('styles')
    <style></style>
@endpush

<?php /* Scripts go here */ ?>
@push('scripts')
    <script></script>
@endpush

<?php /* Body of page */ ?>
@section('content')

    <h1>
        Content
    </h1>

@endsection
