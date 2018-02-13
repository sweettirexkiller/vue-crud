@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">Companies</div>
            <div class="panel-body">
                <router-view name="companiesIndex"></router-view>
                <router-view></router-view>
            </div>
        </div>
    </div>
</div>
@endsection
