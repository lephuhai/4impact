@extends('layouts.app')

@section('styles')
    <style>
        .attendance_report {
            padding: 5px 0 !important;
        }

        .legend {
            text-align: center;
        }
    </style>
@endsection

@section('content')
    <div class="page-content-inner">

        <div class="portlet light portlet-fit">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-paw"></i>
                    <span class="caption-subject bold uppercase">Attendance</span>
                </div>
            </div>
            <div class="portlet-body">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-reflow">
                            <thead>
                            <th colspan="32" style="text-align: center;">
                                <h4>DEC 2017</h4>
                            </th>
                            <tr>
                                <th>Name</th>
                                @for($i = 1; $i <= 31; $i++)
                                    <th>{{ $i  }}</th>
                                @endfor
                            </tr>
                            </thead>
                            <tbody>

                            @for($k = 0; $k<= 50; $k++)
                                <tr>
                                    <th scope="row">
                                        Hailp
                                    </th>

                                    @for($i = 1; $i <= 31; $i++)
                                        <td class="attendance_report center" data-status="P">
                                            <button class="btn btn-xs">P</button>
                                        </td>
                                    @endfor
                                </tr>
                            @endfor

                            </tbody>
                        </table>
                        <strong>
                            Legend :
                        </strong>
                        <div class="row legend">
                            <div class="col-xs-3">
                                <button class="btn btn-xs btn-success">P</button> present
                            </div>
                            <div class="col-xs-3">
                                <button class="btn btn-xs btn-default">A</button> absense
                            </div>
                            <div class="col-xs-3">
                                <button class="btn btn-xs btn-warning">L</button> late
                            </div>
                            <div class="col-xs-3">
                                <button class="btn btn-xs btn-danger">W</button> weekend/holiday
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection