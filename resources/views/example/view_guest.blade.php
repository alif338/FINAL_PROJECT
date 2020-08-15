@extends('layouts.app2')

@section('title','view guest')

@section('page_header')
<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Area Public</h1>
                <a href="{{ url('pertanyaan/create') }}" class="btn btn-primary mb-2">TAMBAH DATA</a>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/view">Home</a></li>
                    <li class="breadcrumb-item active">View guest</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</div>
@endsection

@section('show')
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Recent Activity</h3>

            <!-- <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
            </div> -->
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-8 order-1 order-md-1">
                    <!-- <div class="row">
                        <div class="col-12 col-sm-4">
                            <div class="info-box bg-light">
                                <div class="info-box-content">
                                    <span class="info-box-text text-center text-muted">Estimated budget</span>
                                    <span class="info-box-number text-center text-muted mb-0">2300</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="info-box bg-light">
                                <div class="info-box-content">
                                    <span class="info-box-text text-center text-muted">Total amount spent</span>
                                    <span class="info-box-number text-center text-muted mb-0">2000</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
                            <div class="info-box bg-light">
                                <div class="info-box-content">
                                    <span class="info-box-text text-center text-muted">Estimated project duration</span>
                                    <span class="info-box-number text-center text-muted mb-0">20 <span>
                                        </span></span></div>
                            </div>
                        </div>
                    </div> -->

                    <div class="row">
                        <div class="col-12">

                            @forelse($list as $key => $val)
                            <div class="post">
                                <div class="question-summary narrow d-inline-flex">
                                    <div onclick="{{url('pertanyaan/'.$val->id)}}" class="p-3">
                                        <div class="votes">
                                            <div class="mini-counts"><span title="0 votes">0</span></div>
                                            <div>votes</div>
                                        </div>

                                        <div class="status unanswered">
                                            <div class="mini-counts"><span title="0 answers">0</span></div>
                                            <div>answers</div>
                                        </div>

                                    </div>
                                    <div class="summary">

                                        <h4><a href="#" class="question-hyperlink">{{ $val->judul}}</a></h4>
                                        <p>{!! $val->isi !!}</p>
                                        <div class="tags">
                                            @forelse ($val->tags as $val1)
                                            <a href="#" class="badge badge-secondary">{{ $val1->tag_name }}</a>
                                            @empty
                                            <p>no tags</p>
                                            @endforelse
                                        </div>
                                        <div class="started">
                                            Asked : ... by ...
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <h3>No Posts</h3>
                            @endforelse

                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                    <h3 class="text-primary"><i class="fas fa-paint-brush"></i> AdminLTE v3</h3>
                    <p class="text-muted">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</p>
                    <br>
                    <div class="text-muted">
                        <p class="text-sm">Client Company
                            <b class="d-block">Deveint Inc</b>
                        </p>
                        <p class="text-sm">Project Leader
                            <b class="d-block">Tony Chicken</b>
                        </p>
                    </div>

                    <h5 class="mt-5 text-muted">Project files</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Functional-requirements.docx</a>
                        </li>
                        <li>
                            <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i> UAT.pdf</a>
                        </li>
                        <li>
                            <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-envelope"></i> Email-from-flatbal.mln</a>
                        </li>
                        <li>
                            <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-image "></i> Logo.png</a>
                        </li>
                        <li>
                            <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Contract-10_12_2014.docx</a>
                        </li>
                    </ul>
                    <div class="text-center mt-5 mb-3">
                        <a href="#" class="btn btn-sm btn-primary">Add files</a>
                        <a href="#" class="btn btn-sm btn-warning">Report contact</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
@endsection