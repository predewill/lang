@extends('main_layout')


@section('content')

    <h1 class="uc">Upload dictionary</h1>

    <p>

        Allowed file json - <b>csv</b>

        Allowed format: word => translation

        By default word status is new(0) so words from dictionary will appears in your words only after you translate them first time.
    </p>

    <p><b>P.S.</b> You also can upload explanatory dictionary. Just translate text to the same language (english -> english).</p>

    <hr>

    <form action="{{route('add_text')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="lang_from">Words language</label>
            <div class="col-sm-10">
                <select class="selectpicker" name="lang_from" id="lang_from" data-live-search="true" data-width="100%">

                    @foreach(\App\Config\Lang::all() as $lang)

                        <option
                            value="{{$lang['id']}}"
                            data-subtext="{{$lang['eng_title']}}"
                            data-content="<img src='{{asset('img/flags/'.$lang['code'].'.svg')}}' class='text_flag' alt=''> {{$lang['title']}} <small class='text-muted'>{{$lang['eng_title']}}</small>">
                        </option>

                    @endforeach

                </select>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="lang_to">Translation language</label>
            <div class="col-sm-10">

                <select class="selectpicker" name="lang_to" id="lang_to" data-live-search="true" data-width="100%">

                    @foreach(\App\Config\Lang::all() as $lang)

                        <option
                            value="{{$lang['id']}}"
                            data-subtext="{{$lang['eng_title']}}"
                            data-content="<img src='{{asset('img/flags/'.$lang['code'].'.svg')}}' class='text_flag' alt=''> {{$lang['title']}} <small class='text-muted'>{{$lang['eng_title']}}</small>">
                        </option>

                    @endforeach

                </select>

            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">{{__('File')}}</label>
            <div class="col-sm-10">
                <div class="custom-file">
                    <label class="custom-file-label" for="text_file">{{__('Choose file')}}</label>
                    <input type="file" class="custom-file-input" name="text_file" id="text_file" required>
                </div>
            </div>
        </div>

        <button type="submit" class="btn w-100 btn-primary noradius"><b>{{__('UPLOAD')}}</b></button>

    </form>



@endsection
