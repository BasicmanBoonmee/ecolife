
@extends('front.layout')

@section('css')

@endsection

@section('content')

    <div class="row py-4 bg-blue justify-content-md-center">
        <div class="col-md-10">
            <div class="row">
                <div class="col">
                    ECO PRODUCTS DIRECTORY / ส่วนประกอบและชิ้นส่วน
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

                    <div class="tab-box">
                        <ul  class="nav nav-pills">
                            <li class="active">
                                <a  href="#1b" data-toggle="tab">ส่วนประกอบและชิ้นส่วน</a>
                            </li>
                            <li><a href="#2b" data-toggle="tab">ผลิตภัณฑ์</a>
                            </li>
                            <li><a href="#3b" data-toggle="tab">บริการ</a>
                            </li>
                        </ul>

                        <div class="tab-content clearfix">
                            <div class="tab-pane active" id="1b">
                                <h3>Same as example 1 but we have now styled the tab's corner</h3>
                            </div>
                            <div class="tab-pane" id="2b">
                                <h3>We use the class nav-pills instead of nav-tabs which automatically creates a background color for the tab</h3>
                            </div>
                            <div class="tab-pane" id="3b">
                                <h3>We applied clearfix to the tab-content to rid of the gap between the tab and the content</h3>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
@endsection