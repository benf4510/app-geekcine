@extends('Main.Boilerplate')

@section('htmltag')
  <html id="forgot-pass-page">
@stop

@section('title')
  <title>{{ trans('users.forgot pass title') }}</title>
@stop

@section('bodytag')
  <html class="nav-no-border">
@stop

@section('content')

  <div class="container push-footer-wrapper">
    <div class="col-sm-2"></div>

    <div class="col-sm-8">
         
      @include('Partials.Response')

      {{ Form::open(array('url' => '/forgot-password')) }}

      <div class="form-group">
        <label class="mar-bot" for="email"><i class="fa fa-user"></i></span> {{ trans( 'users.forgot password' ) }} </label>
        {{ Form::text('email', Input::old('email'), array('class' => 'form-control')) }}
        {{ $errors->first('email', "<span class='help-block alert alert-danger'>:message</span>") }}
      </div>
          
      <hr>
      <button type="submit" class="btn btn-warning pull-right">{{ trans('users.confirm') }}</button>

      {{ Form::close() }}

    </div>
    <div class="col-sm-2"></div>
    <div class="push"></div>
  </div>
@stop

@section('ads')
@stop