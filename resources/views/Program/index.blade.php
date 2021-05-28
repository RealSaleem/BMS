@extends('layouts.app')

@section('title')
    <title>BMS | Program</title>
@endsection

@section('content')



    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <div class="row">
                        <div class="input-field col s6  ">

                            <h4 class="card-title">Programs
                            </h4>

                        </div>

                        <div class="input-field col s6  ">

                            <a href="{{ route('program.create') }}" class="btn btn-primary"
                                style="float: right;margin-right: 11px;">
                                {{ __('Add Program') }}
                            </a>


                        </div>

                    </div>

                    <div class="row">
                        <div class="col s12">
                            <table id="page-length-option" class="display">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Code</th>
                                        <th>Added By</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($program as $pro)
                                        <tr>
                                            <td>{{ $pro->id }}
                                            </td>
                                            <td>{{ $pro->name }}
                                            </td>
                                            <td>{{ $pro->code }}
                                            </td>
                                            <td>{{ $pro->added_by }}
                                            </td>
                                            <td>
                                            </td>

                                        </tr>


                                    @endforeach



                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Code</th>
                                        <th>Added By</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('scripts')


    <script type="text/javascript">

    </script>

@endsection
