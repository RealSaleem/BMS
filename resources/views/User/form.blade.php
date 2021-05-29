@extends('layouts.app')

@section('title')
    <title>BMS | {{ $model['title'] }}</title>

@endsection
@section('content')


    <style type="text/css">
        mainContainer. {
            margin-top: 6%;
        }

    </style>

{{-- @dd($model['user']['name']) --}}

    <div class="container" style="    width: 86%;">
        <div class="card">
            <div class="row">
				<div class="input-field col s6  ">
<label style="font-size: 33px; font-weight: 600; padding: 2px 25px; margin-top: -19px;">{{_('Users')}}</label>


                </div>

                <div class="input-field col s6  ">

                    <a href="{{ route('user.index') }}" class="btn-floating" style="float: right;margin-right: 11px;">
                        <i class="material-icons">arrow_back</i>
                    </a>


                </div>

            </div>
            <div class="container" style="width: 86%; padding: 38px 16px;">
                <div class="card-body login-card-body">
                    <form method="post" action="{{ $model['route'] }}">
                        @csrf
						@if( $model['is_edit']== true )
						<input type="hidden" name="id" value="{{isset($model['user']['id']) ? $model['user']['id'] : null}}">
						@endif

                        <div class="row">
                            <div class="input-field">
                                <input type="text" name="name" value="{{isset($model['user']['name']) ? $model['user']['name'] : null }}" class="form-control">
                                <label for="From">User Name : </label>

                                @if ($errors->has('name'))
                                    <small class="errorTxt">
                                        <div class="error mt-1">{{ $errors->first('name') }}</div>
                                    </small>
                                @endif
                            </div>


                            <div class="input-field">
                                <input type="email" name="email" value="{{ isset($model['user']['email']) ? $model['user']['email'] : null }}" class="form-control">
                                <label for="From">User Email : </label>

                                @if ($errors->has('email'))
                                    <small class="errorTxt">
                                        <div class="error mt-1">{{ $errors->first('email') }}</div>
                                    </small>
                                @endif
                            </div>
@php
$user    =    isset($model['user']['role_id']) ? $model['user']['role_id'] : null;
$active  =    isset($model['user']['role_id']) ? '' : 'disable';    
@endphp


                            <div class="input-field">
                                <select name="role" class="form-control">
                                 @if($active == 'enable') <option value="1" $active>{{$user}}</option> @endif
                                    <option value="1" >admin</option>
                                </select>
                            </div>

                        </div>
                        <div class="input-field">
                            <input type="password" name="password" value="{{ old('password') }}" class="form-control">
                            <label for="From">Password : </label>

                            @if ($errors->has('password'))
                                <small class="errorTxt">
                                    <div class="error mt-1">{{ $errors->first('password') }}</div>
                                </small>
                            @endif
                        </div>
                        <div class="input-field">
                            <input type="password" name="confirm_password" value="{{ old('confirm_password') }}"
                                class="form-control">
                            <label for="From">Confirm Password : </label>

                            @if ($errors->has('confirm_password'))
                                <small class="errorTxt">
                                    <div class="error mt-1">{{ $errors->first('confirm_password') }}</div>
                                </small>
                            @endif
                        </div>















						<div class="file-field input-field">
							<div class="btn">
							  <span>File</span>
							  <input type="file">
							</div>
							<div class="file-path-wrapper">
							  <input class="file-path validate" type="text">
							</div>
						  </div>


                        <div class="row">

                    
                            <div class="input-field col s12  ">



                                <button class="btn cyan waves-effect waves-light right" type="submit" name="action"
                                    style="float: right"> {{ $model['button'] }}
                                    <i class="material-icons right">send</i>


                            </div>

                        </div>

                    </form>

                </div>
            </div>
        </div>

    </div>


@endsection
