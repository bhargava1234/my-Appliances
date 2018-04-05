@extends('layouts.app')

@section('content')
    <div class="row-fluid">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">

                    <ul class="media-list">
                        <li class="media">
                            <div class="media-left">
                                <img class="media-object" src=""
                                     alt="Profile picture">
                            </div><!--media-left-->

                            <div class="media-body">
                               xxxc 
                            </div><!--media-body-->
                        </li><!--media-->
                    </ul><!--media-list-->

                </div>
                <div class="panel-body">
                    <div class="row-fluid">
                        <div class="col-xs-12">
                            @if(count($appliances) == 0)
                                {{ trans('wishlist.empty') }}
                            @else
                                @foreach($appliances as $appliance)
                                    @include('wishlist.item')
                                @endforeach
                            @endif
                        </div><!--col-md-6-->
                    </div><!--row-->
                   
                </div><!--panel body-->
            </div><!-- panel -->
        </div><!-- col-xs-12 -->
    </div><!-- row -->
@endsection