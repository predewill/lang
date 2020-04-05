<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/icofont.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-select.min.css')}}">

    <title>WexLang</title>
</head>
<body>

@include("header")


@php

    $toStudyCheckboxState = \Illuminate\Support\Facades\Cookie::get('h_known') == 1 || \Illuminate\Support\Facades\Cookie::get('h_unknown') == null ? "checked" : "";
    $unknownCheckboxState = \Illuminate\Support\Facades\Cookie::get('h_unknown') == 1 || \Illuminate\Support\Facades\Cookie::get('h_unknown') == null ? "checked" : "";

@endphp


<!-- Bootstrap row -->
<div class="row" id="body-row">

    <!-- LEFT SIDEBAR START -->
    <div class="sidebar-expanded text_page_sidebar col-2">

        <div class="position-fixed">

            <h4 class="sidebar-heading mt-4 mb-1 text-muted">
                <span>{{__('Words')}}</span>
                <span style="font-size: 16px">({{__('Click to translate')}})</span>
            </h4>

            <hr>

{{--            <p><mark>word</mark> - {{__('known words')}}</p>--}}
{{--            <p><mark class="study">word</mark> - {{__('to study words')}}</p>--}}
{{--            <p><mark class="unknown">word</mark> - {{__('unknown words')}}</p>--}}

            <h4 class="sidebar-heading mt-4 mb-1 text-muted">
                <span>{{__('Options')}}</span>
            </h4>

            <hr>

            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="h_known" {{$toStudyCheckboxState}}>
                <label class="custom-control-label" for="h_known">{{__('Highlight to study words')}}</label>
            </div>

            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="h_unknown" {{$unknownCheckboxState}}>
                <label class="custom-control-label" for="h_unknown">{{__('Highlight unknown words')}}</label>
            </div>

        </div>
    </div>
    <!-- LEFT SIDEBAR END -->

    <!-- MAIN -->
    <div class="col py-3">

        @yield('content')

    </div>
    <!-- Main Col END -->


    <!-- RIGHT SIDEBAR START -->
    <div class="sidebar-expanded text_page_sidebar col-2">

        <div class="position-fixed">

            <div>
                <span style="font-size:30px" id="rs_word">{{__('Word')}}</span>
                <span class="badge badge-warning h4" id="rs_word_state" style="vertical-align: middle">{{__('To study')}}</span>
            </div>

            <hr>

            <div>
                <b>{{__('Translation')}}:</b>
            </div>

            <textarea id="rs_word_translation" cols="30" rows="3">{{__('word translation')}}</textarea>

            <div id="rs_mark_known_wrapper">
                <hr>

                <button type="button" id="rs_save_translation_btn" class="btn btn-info">Save Translation</button>

                <hr>

                <b>Mark this word as:</b>
                <br>
                <span class="text-muted">New words get "To study" state by default</span>
                <br>

                <button type="button" id="rs_mark_as_known_btn" class="btn btn-success btn-sm" data-state="{{\App\Config\WordConfig::KNOWN}}">Known</button>

                <button type="button" id="rs_mark_as_to_study_btn" class="btn btn-warning btn-sm" data-state="{{\App\Config\WordConfig::TO_STUDY}}">To study</button>


            </div>

            <hr>

            <div class="pr-3 pt-3">
                <a href="#" class="btn btn-primary w-100 mb-2" id="gt_btn">Translate in Google</a>
                <a href="#" class="btn btn-primary w-100 mb-2" id="yt_btn">Translate in Yandex</a>
            </div>

        </div>
    </div>
    <!-- RIGHT SIDEBAR END -->

</div>
<!-- body-row END -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ asset('js/jquery-3.4.1.min.js')}}"></script>
<script src="{{ asset('js/popper.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/bootstrap-select.min.js')}}"></script>

<!-- App JavaScript -->
<script src="{{asset('js/reader.js')}}"></script>
<script src="{{asset('js/js.cookie.js')}}"></script>

<div class="alert alert-success fade show" id="alert" style="position: fixed; top: 57px; right: 0; z-index: 9999999 !important; display: none;" >

    <strong>      Saved      </strong>

</div>

</body>
</html>

