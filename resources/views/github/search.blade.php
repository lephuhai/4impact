@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="page-content-inner">
            <div class="note note-info">
                <p> GitHub profile visualize data and analytics.</p>
            </div>

            <div class="row text-center">
                <div class="col-md-offset-4 col-md-4">
                    <form role="form" method="post">
                        {{ csrf_field() }}

                        <div class="form-body">
                            <div class="form-group">
                                <h3 class="font-blue-hoki">Enter GitHub username</h3>
                                <input type="text" class="form-control" title="Username" placeholder="ex. 'haipc'">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection