
@extends('front.layout')

@section('css')

@endsection

@section('content')

    <div class="row py-4 bg-blue justify-content-md-center">
        <div class="col-md-10">
            <div class="row">
                <div class="col">
                    เกี่ยวกับเรา
                </div>
                <div class="col">
                    @include('front.input-search')
                </div>
            </div>
        </div>
    </div>

    <div class="row bg-cream justify-content-md-center py-4">
        <div class="col-md-10">
                <div class="col-md-12 box-white my-4">
                    <h3>เกี่ยวกับเรา</h3>
                    <hr />
                    <div class="row">
                        <div class="col">
                            Detail
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
@endsection