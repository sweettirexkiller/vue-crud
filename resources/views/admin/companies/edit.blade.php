@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Company</div>
                    <div class="panel-body table-responsive">
                       {!! Form::model($company, ['method'=>'PUT', 'route'=>['admin.companies.update', $company->id]]) !!}
                        <div class="row">
                            <div class="col-xs-12 form-group">
                                {!! Form::label('name','Name',['class'=>'control-label']) !!}
                                <p class="help-block">

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
