@extends('layouts.app2')
@section('title','detail')
@push('script_head')
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
@endpush

@section('page_header')
<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Detail Data</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/view">Home</a></li>
                    <li class="breadcrumb-item active">Detail Data</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</div>
@endsection

@section('show')

<div class="col-md-12">
    <!-- Box Comment -->
    <div class="card card-widget">
        <div class="card-header">
            <div class="user-block">
                <img class="img-circle" src="{{asset('adminLte/dist/img/user1-128x128.jpg')}}" alt="User Image">
                <span class="username"><a href="#">{{$get->outhor->name??''}}</a></span>
                <span class="description">Shared publicy - {{$get->created_at ??''}}</span>
            </div>
            <!-- /.user-block -->

            <div class="card-tools">

            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="row">


            <div class="col-md">
                <div style="width: 10%;float: left;margin:30px 0 0 10px">
                    <div class="info-box">
                        @php

                        $valUp = !empty($get->upvote)?count($get->upvote) : '0';
                        $valDown = !empty($get->Downvote)?count($get->Downvote) : '0';
                        @endphp
                        <span class="info-box-icon bg-info" id="prt">{{$valUp - $valDown}}</i></span>

                        <div class="info-box-content" style="margin:0; padding:0;">
                            <span class="info-box-text"> <a href="#" id="prt_up" onclick="prt_up(this);" data-idp="{{$get->id}}" data-user="{{$get->user_id}}" class="btn btn-tool center-block" data-toggle="tooltip"><i class="fas fa-arrow-up fa-large"></i> </a></span><br>
                            <span class="info-box-text"><a href="#" id="prt_down" onclick="prt_down(this);" data-idp="{{$get->id}}" data-user="{{$get->user_id}}" class="btn btn-tool center-block" data-toggle="tooltip"><i class="fas fa-arrow-down fa-large"></i> </a></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>

                <div class="card-body" style="width: 85%;float: left;display: block;">
                    <!-- post text -->
                    <p>{{$get->judul??''}}</p>
                    <!-- Attachment -->
                    <div class="attachment-block clearfix">

                        <div class="attachment">
                            {!!$get->isi??''!!}
                            <!-- /.attachment-text -->
                        </div>
                        <!-- /.attachment-pushed -->
                    </div>
                    <!-- /.attachment-block -->

                    <!-- Social sharing buttons -->
                    <button type="button" class="btn btn-info btn-sm"> #Laravel</button>
                    <button type="button" class="btn btn-info btn-sm"> #PHP 7</button>
                    <!-- <span class="float-right text-muted">45 likes - 2 answer</span> -->
                </div>
            </div>
        </div>

        <span style="margin-left: 25px;">
            <h3> {{count($get->jawaban) ?? 0}} Answer</h3>
        </span>
        <hr>
        <!-- /.card-body -->

        <div id="content_answer" class="card-footer card-comments" style="display: block;">
            @foreach($get->jawaban as $k=>$v)
            @php


            @endphp
            <div class="row">
                <div style="width: 10%;float: left;margin-top:65px">
                    <div class="info-box">
                        <span class="info-box-icon bg-info">0</i></span>

                        <div class="info-box-content" style="margin:0; padding:0;">
                            <span class="info-box-text"> <a href="#" class="btn btn-tool center-block" data-toggle="tooltip"><i class="fas fa-arrow-up fa-large"></i> </a></span><br>
                            <span class="info-box-text"><a href="#" class="btn btn-tool center-block" data-toggle="tooltip"><i class="fas fa-arrow-down fa-large"></i> </a></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
                <div class="card-comment" style="width: 85%;">
                    <!-- User image -->
                    <img class="img-circle img-sm" src="{{asset('adminLte/dist/img/user3-128x128.jpg')}}" alt="User Image">

                    <div class="comment-text">
                        <span class="username">
                            {{$v->user->name??''}}
                            <span class="text-muted float-right">{{$v->created_at??''}}</span>
                        </span><!-- /.username -->
                    </div>
                    <div class="card-body">
                        <!-- post text -->
                        <p>
                            {{$v->judul??''}}
                        </p>

                        <!-- Attachment -->
                        <div class="attachment-block clearfix">

                            <div class="attachment">
                                {!!$v->isi??''!!}
                            </div>
                            <!-- /.attachment-pushed -->
                        </div>
                        <!-- /.attachment-block -->

                        <!-- Social sharing buttons -->
                        <button type="button" class="btn btn-info btn-sm"> Laravel</button>
                        <button type="button" class="btn btn-info btn-sm"> PHP 7</button>
                        <!-- <span class="float-right text-muted">45 likes - 2 answer</span> -->
                    </div>
                    <!-- /.comment-text -->
                </div>
                <!-- /.card-comment -->
            </div>
            <hr>
            @endforeach
        </div>
    </div>
    <!-- /.card-footer -->
    <div class="col-md">
        <!-- general form elements -->
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">Answer :</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{url('pertanyaan/answer')}}" method="POST">
                @csrf

                <div class="card-body">
                    <div class="form-group">
                        <textarea name="isi" class="form-control my-editor" rows="5" placeholder="Enter ...">{{old('isi','')}}</textarea>
                    </div>
                    @error('isi')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <input type="hidden" name="id" value="{{$get->id}}">
                    <button type="submit" class="btn btn-primary">Proses</button>
                    <button type="reset" class="btn btn-default" data-dismiss="modal">Batal</button>
                </div>
            </form>
        </div>
        <!-- /.card -->


    </div>
    <!-- /.card-footer -->
    <!-- /.card -->
</div>

@endsection

@push('script_add')
<script>
    var editor_config = {
        path_absolute: "/",
        selector: "textarea.my-editor",
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        relative_urls: false,
        file_browser_callback: function(field_name, url, type, win) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            var y = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;

            var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
            if (type == 'image') {
                cmsURL = cmsURL + "&type=Images";
            } else {
                cmsURL = cmsURL + "&type=Files";
            }

            tinyMCE.activeEditor.windowManager.open({
                file: cmsURL,
                title: 'Filemanager',
                width: x * 0.8,
                height: y * 0.8,
                resizable: "yes",
                close_previous: "no"
            });
        }
    };

    tinymce.init(editor_config);

    // $(document).ready(function() {
    //     $('#prt_up').click(function() {
    //         alert("up prt")
    //     });
    // })

    function prt_up(btn) {

        // alert('dsfsdfs');
        idp = $(btn).attr('data-idp');
        idu = $(btn).attr('data-user');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            url: '/upvote_pro',
            type: "POST",
            data: {
                idp: idp,
                idu: idu
            },
            success: function(data) {
                console.log(data);
                if (data.result == '1') {

                    $('#prt').html(data.upvote);
                }
            }
        });
    }

    function prt_down(btn) {

        // alert('dsfsdfs');
        idp = $(btn).attr('data-idp');
        idu = $(btn).attr('data-user');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            url: '/downvote_pro',
            type: "POST",
            data: {
                idp: idp,
                idu: idu
            },
            success: function(data) {
                console.log(data);
                if (data.result == '1') {

                    $('#prt').html(data.downvote);
                }
            }
        });
    }
</script>

@include('sweetalert::alert')
@endpush