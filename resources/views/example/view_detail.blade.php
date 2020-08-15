@extends('layouts.app2')

@section('title','detail data')

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
                <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
                <span class="description">Shared publicly - 7:30 PM Today</span>
            </div>
            <!-- /.user-block -->

            <div class="card-tools">

                <!-- <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Mark as read">
                    <i class="far fa-circle"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                </button> -->

            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="row">


            <div class="col-md">
                <div style="width: 10%;float: left;margin:30px 0 0 10px">
                    <div class="info-box">
                        <span class="info-box-icon bg-info">99</i></span>

                        <div class="info-box-content" style="margin:0; padding:0;">
                            <span class="info-box-text"> <a href="#" class="btn btn-tool center-block" data-toggle="tooltip"><i class="fas fa-arrow-up fa-large"></i> </a></span><br>
                            <span class="info-box-text"><a href="#" class="btn btn-tool center-block" data-toggle="tooltip"><i class="fas fa-arrow-down fa-large"></i> </a></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>

                <div class="card-body" style="width: 85%;float: left;display: block;">
                    <!-- post text -->
                    <p>Far far away, behind the word mountains, far from the
                        countries Vokalia and Consonantia, there live the blind
                        texts. Separated they live in Bookmarksgrove right at</p>

                    <p>the coast of the Semantics, a large language ocean.
                        A small river named Duden flows by their place and supplies
                        it with the necessary regelialia. It is a paradisematic
                        country, in which roasted parts of sentences fly into
                        your mouth.</p>

                    <!-- Attachment -->
                    <div class="attachment-block clearfix">
                        <img class="attachment-img" src="{{asset('adminLte/dist/img/photo1.png')}}" alt="Attachment Image">

                        <div class="attachment-pushed">
                            <h4 class="attachment-heading"><a href="http://www.lipsum.com/">Lorem ipsum text generator</a></h4>

                            <div class="attachment-text">
                                Description about the attachment can be placed here.
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a href="#">more</a>
                            </div>
                            <!-- /.attachment-text -->
                        </div>
                        <!-- /.attachment-pushed -->
                    </div>
                    <!-- /.attachment-block -->

                    <!-- Social sharing buttons -->
                    <button type="button" class="btn btn-info btn-sm"> Laravel</button>
                    <button type="button" class="btn btn-info btn-sm"> PHP 7</button>
                    <!-- <span class="float-right text-muted">45 likes - 2 answer</span> -->
                </div>
            </div>
        </div>

        <span style="margin-left: 25px;">
            <h3> 2 Answer</h3>
        </span>
        <hr>
        <!-- /.card-body -->

        <div class="card-footer card-comments" style="display: block;">
            <div class="row">
                <div style="width: 10%;float: left;margin-top:65px">
                    <div class="info-box">
                        <span class="info-box-icon bg-info">99</i></span>

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
                            Maria Gonzales
                            <span class="text-muted float-right">8:03 PM Today</span>
                        </span><!-- /.username -->
                    </div>
                    <div class="card-body">
                        <!-- post text -->
                        <p>Far far away, behind the word mountains, far from the
                            countries Vokalia and Consonantia, there live the blind
                            texts. Separated they live in Bookmarksgrove right at</p>

                        <p>the coast of the Semantics, a large language ocean.
                            A small river named Duden flows by their place and supplies
                            it with the necessary regelialia. It is a paradisematic
                            country, in which roasted parts of sentences fly into
                            your mouth.</p>

                        <!-- Attachment -->
                        <div class="attachment-block clearfix">
                            <img class="attachment-img" src="{{asset('adminLte/dist/img/photo1.png')}}" alt="Attachment Image">

                            <div class="attachment-pushed">
                                <h4 class="attachment-heading"><a href="http://www.lipsum.com/">Lorem ipsum text generator</a></h4>

                                <div class="attachment-text">
                                    Description about the attachment can be placed here.
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a href="#">more</a>
                                </div>
                                <!-- /.attachment-text -->
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
            <div class="card-comment">
                <!-- User image -->
                <img class="img-circle img-sm" src="{{asset('adminLte/dist/img/user5-128x128.jpg')}}" alt="User Image">

                <div class="comment-text">
                    <span class="username">
                        Nora Havisham
                        <span class="text-muted float-right">8:03 PM Today</span>
                    </span><!-- /.username -->
                    The point of using Lorem Ipsum is that it hrs a morer-less
                    normal distribution of letters, as opposed to using
                    'Content here, content here', making it look like readable English.
                </div>
                <!-- /.comment-text -->
            </div>
            <!-- /.card-comment -->
        </div>
    </div>
    <!-- /.card-footer -->
    <!-- <div class="card card-widget" style="display: block;">
        <form action="#" method="post">
            <img class="img-fluid img-circle img-sm" src="{{asset('adminLte/dist/img/user4-128x128.jpg')}}" alt="Alt Text">
            <div class="img-push">
                <input type="text" class="form-control form-control-sm" placeholder="Press enter to post comment">
            </div>
        </form>
    </div> -->
    <div class="col-md">
        <!-- general form elements -->
        <div class="card card-outline card-info">
            <div class="card-header">
                <h3 class="card-title">Answer :</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form">
                <div class="card-body">
                    <div class="form-group">
                        <textarea name="isi" class="form-control my-editor" rows="5" placeholder="Enter ..."></textarea>
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
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
</script>

@endpush