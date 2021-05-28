@extends('layouts.app')
@section('content')


  






  <div class                                              ="row">
                            <div class                    ="col s12">
                                <div class                ="card">
                                    <div class            ="card-content">
                                        <div class        ="row">
                                                <div class="input-field col s6  " >

  <h4 class                                               ="card-title">Booking</h4>

                        </div>

                        <div class                        ="input-field col s6  " >

                            <a href                       ="{{route('booking.create')}}"  class="btn btn-primary" style="float: right;margin-right: 11px;">
                                {{ __('Add Booking') }}
                            </a>


                        </div>

                    </div>
                                      
                                        <div class        ="row">
                                            <div class    ="col s12">
                                                <table id ="page-length-option" class="display">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Office</th>
                                                            <th>Age</th>
                                                            <th>Start date</th>
                                                            <th>Salary</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Tiger Nixon</td>
                                                            <td>System Architect</td>
                                                            <td>Edinburgh</td>
                                                            <td>61</td>
                                                            <td>2011/04/25</td>
                                                            <td>$320,800</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Garrett Winters</td>
                                                            <td>Accountant</td>
                                                            <td>Tokyo</td>
                                                            <td>63</td>
                                                            <td>2011/07/25</td>
                                                            <td>$170,750</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ashton Cox</td>
                                                            <td>Junior Technical Author</td>
                                                            <td>San Francisco</td>
                                                            <td>66</td>
                                                            <td>2009/01/12</td>
                                                            <td>$86,000</td>
                                                        </tr>
                                              
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Office</th>
                                                            <th>Age</th>
                                                            <th>Start date</th>
                                                            <th>Salary</th>
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
  

<script type                                              ="text/javascript">
 
</script>

@endsection