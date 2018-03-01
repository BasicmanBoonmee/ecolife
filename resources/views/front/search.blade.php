
@extends('front.layout')

@section('css')

    <style>
        .box-white{
            padding-top: 20px;
            padding-bottom: 20px;
            background-color: #ffffff;
            border-radius: 5px;
        }
    </style>

@endsection

@section('content')

    <div class="row py-4 bg-blue justify-content-md-center">
        <div class="col-md-10">
            หน้าแรก / ผลการค้นหา
        </div>
    </div>

    <div class="row bg-cream justify-content-md-center py-4">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-12 my-3">
                    <div class="row">
                        <div class="col">
                            ผลิตภัณฑ์
                        </div>
                        <div class="col">
                            ชื่อบริษัท
                        </div>
                        <div class="col">
                            ฉลากสิ่งแวดล้อม
                        </div>
                        <div class="col">
                            หมวดหมู่
                        </div>
                        <div class="col">
                            ฉลากสิ่งแวดล้อม
                        </div>
                        <div class="col">
                            ค้นหา
                        </div>
                    </div>
                </div>

                <div class="col-md-12 box-white my-4">
                    <div class="row">
                        <div class="col">ชื่อสินค้า</div>
                        <div class="col">ชื่อสินค้า</div>
                        <div class="col">ชื่อสินค้า</div>
                        <div class="col">ชื่อสินค้า</div>
                        <div class="col">ชื่อสินค้า</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
@endsection