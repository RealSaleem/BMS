@extends('layouts.app')
@section('content')

  


<div class="container" style="    width: 96%;">
    <div class="card">
             <div class="row">

                        <div class="input-field col s12  " >

                            <a href="{{route('booking.index')}}"  class="btn btn-info" style="float: right;margin-right: 11px;">
                                {{ __('Back') }}
                            </a>


                        </div>

                    </div>
        <div class="container" style="width: 86%; padding: 38px 16px;" >
            <div class="card-body login-card-body">
                <form method="POST" action="{{ route('banquet.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="input-field col m4 s4 h-100">
                                <input type="text" name="name" value="{{old('name')}}" class="form-control">
                                <label for="From">Banquet Name : </label>

                                @if($errors->has('name'))
                                    <small class="errorTxt">
                                        <div class="error mt-1">{{ $errors->first('name') }}</div>
                                    </small>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="input-field col s8">
                                <input type="text" name="address" value="{{old('address')}}" class="form-control">
                                <label for="From">Banquet Address : </label>

                                @if($errors->has('address'))
                                    <small class="errorTxt">
                                        <div class="error mt-1">{{ $errors->first('address') }}</div>
                                    </small>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="input-field col s6">
                                <input type="number" name="number" value="{{old('number')}}" class="form-control">
                                <label for="From">Contact Number : </label>

                                @if($errors->has('number'))
                                    <small class="errorTxt">
                                        <div class="error mt-1">{{ $errors->first('number') }}</div>
                                    </small>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-field col s6">
                                <input type="number" name="capicity" value="{{old('capicity')}}" class="form-control">
                                <label for="From">Capicity : </label>

                                @if($errors->has('capicity'))
                                    <small class="errorTxt">
                                        <div class="error mt-1">{{ $errors->first('capicity') }}</div>
                                    </small>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="input-field col s12  " >

                            <button type="submit" class="btn btn-primary" style="float: right">
                                {{ __('Register') }}
                            </button>


                        </div>

                    </div>

                </form>

            </div>
        </div>
    </div>

</div>
@endsection
