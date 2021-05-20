@extends('layouts.app')
@section('content')

<style type="text/css">
	
	.tooltip-icon .btn-icon{
		    margin-right: 4px;
    margin-left: 17px;
    margin-top: 7px;
	}
</style>

   <div class="col-lg-12">
                     <div class="card">
                   
                        <div class="card-block tooltip-icon button-list">
                        	<label>
                        		<button type="button" class="btn btn-primary btn-icon waves-effect waves-light"   >
                                    <i class="icofont icofont-home"></i>
                             </button>Barat
                        	</label>
                           
                               
                           <button type="button" class="btn btn-danger btn-icon waves-effect waves-light" data-toggle="tooltip" data-placement="top" title=".icofont icofont-search-alt-2">
                                    <i class="icofont icofont-search-alt-2"></i>
                                </button>
                           <button type="button" class="btn btn-warning btn-icon waves-effect waves-light" data-toggle="tooltip" data-placement="right" title=".icofont-refresh">
                                    <i class="icofont icofont-refresh"></i>
                                </button>
                           <button type="button" class="btn btn-info btn-icon waves-effect waves-light" data-toggle="tooltip" data-placement="top" title=".icofont-print">
                                    <i class="icofont icofont-print"></i>
                                </button>
                           <button type="button" class="btn btn-success btn-icon waves-effect waves-light" data-toggle="tooltip" data-placement="bottom" title=".icofont-paper-plane">
                                    <i class="icofont icofont-paper-plane"></i>
                                </button>
                        </div>
                     </div>
                     <!-- end of card -->
                  </div>
@endsection
