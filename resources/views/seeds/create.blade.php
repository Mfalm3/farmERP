@extends('layouts.app')

@section('content')
 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-offset-2 col-sm-8 col-xs-offset-2 col-xs-8">
    {{ Form::open(['action'=>'SeedRecordController@store','method'=>'POST']) }}
        <fieldset>
            <legend>Enter Planted Seed</legend>
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 clearfix">
                <div class="form-inline col-lg-6 col-md-10 col-sm-12 col-xs-12">
                    <label for="seedName">Seed Name:</label>
                    <input type="text" id="seedName" class="form-control">
                </div>
                <div class="form-inline col-lg-6 col-md-10 col-sm-12 col-xs-12">
                    <label for="seedName">Seed Variety:</label>
                    <input type="text" id="seedName" class="form-control">
                </div>
            </div>
        </fieldset>
    {{ Form::close() }}
 </div>
@endsection