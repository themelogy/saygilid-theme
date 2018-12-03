@extends('layouts.master')

@section('content')

    <div class="page-head overlay-wrap">
        <div class="overlay"></div>
        <div class="container text-uppercase">
            <h1 class="title">{{ trans_choice('hr::positions.title.positions',1) }}</h1>
            {!! Breadcrumbs::renderIfExists('hr.position.index') !!}
        </div>
    </div>

    <div class="home-profile">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @if($page = Page::findBySlug(Request::segment(2)))
                        @component('page::partials.menu', ['page'=>$page])
                            @if($positions->count()>0)
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ trans('hr::positions.form.reference_no') }}</th>
                                        <th>{{ trans('hr::positions.form.name') }}</th>
                                        <th>{{ trans('hr::positions.form.personal_number') }}</th>
                                        <th>{{ trans('hr::positions.form.position.city') }}</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($positions as $position)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $position->reference_no }}</td>
                                            <td>{{ $position->name }}</td>
                                            <td>{{ $position->personal_number }}</td>
                                            <td>{{ $position->present()->position('city') }}</td>
                                            <td><a class="btn btn-primary btn-sm waves-effect waves-light" href="{{ route('hr.position.view', [$position->slug]) }}">İncele</a>  <a class="btn btn-primary btn-sm waves-effect waves-light" href="{{ route('hr.application.form', ['position_id'=>$position->id]) }}">Başvuru Yap</a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            @else
                                <div class="alert alert-warning">Açık pozisyon bulunamadı.</div>
                                <a class="btn btn-default" href="{{ LaravelLocalization::getLocalizedURL(locale(), route('hr.application.form')) }}">İş başvuru formu için tıklayınız.</a>
                            @endif
                        @endcomponent
                    @endif
                </div>
            </div>
        </div>
    </div>

@stop
