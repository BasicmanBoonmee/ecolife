
@extends('front.layout')

@section('css')

    <style class="cp-pen-styles">
        .carousel .carousel-item {
            height: 20em;
        }
        .carousel .carousel-item > *:first-child {
            background-position: 50%;
            background-repeat: no-repeat;
            background-size: cover;
            height: inherit;
        }
    </style>

@endsection

@section('content')

    <div class="row carousel slide" id="demo-carousel" data-ride="carousel">
        <ol class="carousel-indicators">
            <li class="active" data-target="#demo-carousel" data-slide-to="1"></li>
            <li data-target="#demo-carousel" data-slide-to="2"></li>
            <li data-target="#demo-carousel" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" data-src="https://unsplash.it/800/400?random=1">

            </div>
            <div class="carousel-item" data-src="https://unsplash.it/800/400?random=2">

            </div>
            <div class="carousel-item" data-src="https://unsplash.it/800/400?random=3">

            </div>
        </div>
        <a class="left carousel-control" href="#demo-carousel" role="button" data-slide="prev">
            <span class="icon-prev" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#demo-carousel" role="button" data-slide="next">
            <span class="icon-next" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="row py-3">
        <div class="col text-center">
            Slide Eco Life 24
        </div>
    </div>

    <div class="row bg-gray justify-content-md-center py-4">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-12">ข่าวประชาสัมพันธ์</div>
                <div class="col-md-3">ข่าว 1</div>
                <div class="col-md-3">ข่าว 2</div>
                <div class="col-md-3">ข่าว 3</div>
                <div class="col-md-3">ข่าว 4</div>
            </div>

        </div>
    </div>

    <div class="row justify-content-md-center py-4">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-8">
                    <div class="col-md-12">การจัดซื้อจัดจ้าง</div>
                    <div class="col-md-12">
                        List จัดซื้อจัดจ้าง
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="col-md-12">
                        App Green Card
                    </div>
                    <div class="col-md-12">
                        App จัดซื้อจัดจ้าง
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script>
        $(function() {
            'use strict';

            $('.carousel .carousel-item[data-src]').each(function() {
                var $this = $(this);

                $this.prepend([
                    '<div style="background-image: url(', $this.attr('data-src'), ')"></div>'
                ].join(''));
            });
        });
        //# sourceURL=pen.js
    </script>
    @endsection