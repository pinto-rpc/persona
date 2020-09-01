@extends('layouts.app')

@section('content')
<div class="container">
    
        @include('person.partials.person-form')
        <br>
        @include('person.partials.person-list')
</div>
@endsection