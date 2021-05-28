@extends('layouts.app')

@section('title')
    <title>BMS | Program</title>

@endsection
@section('content')

    <style type="text/css">
        mainContainer. {
            margin-top: 6%;
        }

    </style>



    <div class="container" style="    width: 86%;">
        <div class="card">
            <div class="row">

                <div class="input-field col s12  ">

                    <a href="{{ route('program.index') }}" class="btn-floating" style="float: right;margin-right: 11px;">
                        <i class="material-icons">arrow_back</i>
                    </a>


                </div>

            </div>
            <div class="container" style="width: 86%; padding: 38px 16px;">
                <div class="card-body login-card-body">
                    <form method="POST" action="{{ route('program.store') }}">
                        @csrf
                        <div class="row">
                            <div class="input-field">
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                                <label for="From">Program Name : </label>

                                @if ($errors->has('name'))
                                    <small class="errorTxt">
                                        <div class="error mt-1">{{ $errors->first('name') }}</div>
                                    </small>
                                @endif
                            </div>


                            <div class="input-field">
                                <input type="text" name="code" value="{{ old('code') }}" class="form-control">
                                <label for="From">Program Code : </label>

                                @if ($errors->has('code'))
                                    <small class="errorTxt">
                                        <div class="error mt-1">{{ $errors->first('code') }}</div>
                                    </small>
                                @endif
                            </div>

                        </div>





                        <div class="row">

                            <div class="input-field col s6  ">

                                <p class="mb-1">
                                    <label>
                                        <input type="checkbox" />
                                        <span>Active</span>
                                    </label>
                                </p>


                            </div>
                            <div class="input-field col s6  ">



                                <button class="btn cyan waves-effect waves-light right" type="submit" name="action" style="float: right"> {{ __('Submit') }}
                                    <i class="material-icons right">send</i>


                            </div>

                        </div>

                    </form>

                </div>
            </div>
        </div>

    </div>
@endsection
