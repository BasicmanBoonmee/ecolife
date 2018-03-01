
@extends('front.layout')

@section('css')

@endsection

@section('content')

    <div class="row py-4 bg-blue justify-content-md-center">
        <div class="col-md-10">
            <div class="row">
                <div class="col">
                    ฉลากสิ่งแวดล้อม
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
                    <h3>ฉลากสิ่งแวดล้อม</h3>
                    <hr />
                    <div class="row">
                        <div class="col">
                            ฉลากเขียว
                        </div>
                        <div class="col">
                            ฉลากเขียว
                        </div>
                        <div class="col">
                            ฉลากเขียว
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
@endsection