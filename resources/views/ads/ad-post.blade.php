@extends('layouts.app-master')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/custom/ad-post.css') }}">
@endpush

@section('content')
    <!--=====================================
            SINGLE BANNER PART START
        =======================================-->
        <section class="single-banner dashboard-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-content">
                            <h2>ad post</h2>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">ad-post</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    SINGLE BANNER PART END
            =======================================-->


        <!--=====================================
                        ADPOST PART START
            =======================================-->
        {{-- <section class="adpost-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <form id="place-ads-form" action="{{ route('ads.stepOne') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="category" class="form-label">{{ __('lang.category') }}</label>
                                <div class="group-tag">
                                    <select name="category" id="category" class="form-select" data-live-search="true"
                                        required autocomplete="off">
                                        <option value="" disabled selected>{{ __('lang.select_a_category') }}</option>
                                        @foreach ($categories as $category)
                                            @if ($category->subcategories->count() > 0)
                                                <optgroup
                                                    label="@if (App::getLocale() == 'ar' && $category->name_ar) {{ ucwords($category->name_ar) }} @else {{ ucwords($category->name_en) }} @endif">
                                                    @foreach ($category->subcategories as $subcategory)
                                                        <option value="s-{{ $subcategory->id }}"
                                                            data-parent="{{ ucwords($category->name_ar) }}">
                                                            @if (App::getLocale() == 'ar' && $subcategory->name_ar)
                                                                {{ ucwords($category->name_ar . ' > ' . $subcategory->name_ar) }}
                                                            @else
                                                                {{ ucwords($category->name_en . ' > ' . $subcategory->name_en) }}
                                                            @endif
                                                        </option>
                                                    @endforeach
                                                </optgroup>
                                            @else
                                                <option value="{{ $category->id }}">
                                                    @if (App::getLocale() == 'ar' && $category->name_ar)
                                                        {{ ucwords($category->name_ar) }}
                                                    @else
                                                        {{ ucwords($category->name_en) }}
                                                    @endif
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="types" class="form-label">{{ __('lang.type') }}</label>
                                <div class="group-tag">
                                    <select name="types" id="types" class="form-select" data-live-search="true"
                                        required autocomplete="off">
                                        <option value="{{ 0 }}" disabled selected>
                                            {{ __('lang.select_a_type') }}</option>
                                        @foreach ($types as $type)
                                            <option value="{{ $type->id }}">
                                                @if (App::getLocale() == 'ar' && $type->name_ar)
                                                    {{ $type->name_ar }}
                                                @else
                                                    {{ ucwords($type->name_en) }}
                                                @endif
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="countries"
                                    class="form-label posting-location">{{ __('lang.countries') }}</label>
                                <select name="countries" id="country-select" class="form-select" data-live-search="true"
                                    required autocomplete="off">
                                    <option value="{{ 0 }}">{{ __('lang.all') }}</option>
                                    @foreach ($countries as $country)
                                        <option data-id="{{ $country->id }}" value="{{ $country->id }}">
                                            @if (App::getLocale() == 'ar' && $country->name_ar)
                                                {{ $country->name_ar }}
                                            @else
                                                {{ ucwords($country->name_en) }}
                                            @endif
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="location" class="form-label posting-location">{{ __('lang.cities') }}</label>
                                <select name="cities" id="cities" class="form-select" data-live-search="true" required
                                    autocomplete="off">
                                    <option value="all">{{ __('lang.all_cities') }}</option>
                                </select>
                            </div>
                    </div>

                    <div class="group-tag d-none" id="district_container">
                        <label for="types" class="form-label">{{ __('lang.district') }}</label>
                        <select name="types" id="types" class="form-select" data-live-search="true"
                            autocomplete="off">
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">{{ __('lang.title_en') }}</label>
                    <input type="text" class="form-control d-none" name="name_en" id="name_en"
                        placeholder="{{ __('lang.title_plceholder') }}" autocomplete="off">
                    <input type="text" class="form-control mt-15" name="name_en" id="name_en"
                        placeholder="{{ __('lang.title_plceholder') }}" autocomplete="off" required>
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">{{ __('lang.title_ar') }}</label>
                    <input type="text" class="form-control d-none" name="name_ar" id="name_ar"
                        placeholder="{{ __('lang.title_plceholder') }}" autocomplete="off">
                    <input type="text" class="form-control mt-15" name="name_ar" id="name_ar"
                        placeholder="{{ __('lang.title_plceholder') }}" autocomplete="off" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">{{ __('lang.description_en') }}</label>
                    <div class="textarea-cont">
                        <textarea name="description_en" id="description_en" cols="30" rows="5" class="form-control d-none"
                            placeholder="{{ __('lang.description_placeholder') }}" autocomplete="off"></textarea>
                        <textarea name="description_en" id="description_en" cols="30" rows="5" class="form-control mt-15"
                            placeholder="{{ __('lang.description_placeholder') }}" dir="rtl" autocomplete="off" required></textarea>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">{{ __('lang.description_ar') }}</label>
                    <div class="textarea-cont">
                        <textarea name="description_ar" id="description_ar" cols="30" rows="5" class="form-control d-none"
                            placeholder="{{ __('lang.description_placeholder') }}" autocomplete="off"></textarea>
                        <textarea name="description_ar" id="description_ar" cols="30" rows="5" class="form-control mt-15"
                            placeholder="{{ __('lang.description_placeholder') }}" dir="rtl" autocomplete="off" required></textarea>
                    </div>
                </div>

                <div class="mt-3 mb-3 btn-ad-div">
                    <button class="place-ad-next btn-bg-red">{{ __('button.step_tow') }}</button>
                </div>
                </form>
            </div>

            </div>
            </div>
        </section> --}}
        <section class="adpost-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <form class="adpost-form" id="place-ads-form" action="{{ route('ads.stepOne') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="adpost-card">
                                <div class="adpost-title">
                                    <h3>@lang('ads.ads')</h3>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label">{{ __('lang.category') }}</label>
                                            <select name="category" class="form-control custom-select" required>
                                                <option value="" disabled selected>{{ __('lang.select_a_category') }}</option>
                                                @foreach ($categories as $category)
                                                    @if ($category->subcategories->count() > 0)
                                                        <optgroup
                                                            label="@if (App::getLocale() == 'ar' && $category->name_ar) {{ ucwords($category->name_ar) }} @else {{ ucwords($category->name_en) }} @endif">
                                                            @foreach ($category->subcategories as $subcategory)
                                                                <option value="s-{{ $subcategory->id }}"
                                                                    data-parent="{{ ucwords($category->name_ar) }}">
                                                                    @if (App::getLocale() == 'ar' && $subcategory->name_ar)
                                                                        {{ ucwords($category->name_ar . ' > ' . $subcategory->name_ar) }}
                                                                    @else
                                                                        {{ ucwords($category->name_en . ' > ' . $subcategory->name_en) }}
                                                                    @endif
                                                                </option>
                                                            @endforeach
                                                        </optgroup>
                                                    @else
                                                        <option value="{{ $category->id }}">
                                                            @if (App::getLocale() == 'ar' && $category->name_ar)
                                                                {{ ucwords($category->name_ar) }}
                                                            @else
                                                                {{ ucwords($category->name_en) }}
                                                            @endif
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label">{{ __('lang.type') }}</label>
                                            <select name="types" class="form-control custom-select" required>
                                                <option value="{{ 0 }}" disabled selected>
                                                    {{ __('lang.select_a_type') }}
                                                </option>
                                                @foreach ($types as $type)
                                                    <option value="{{ $type->id }}">
                                                        @if (App::getLocale() == 'ar' && $type->name_ar)
                                                            {{ $type->name_ar }}
                                                        @else
                                                            {{ ucwords($type->name_en) }}
                                                        @endif
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">{{ __('lang.countries') }}</label>
                                            <select id="country-select" name="countries"  class="form-control custom-select">
                                                <option value="{{ 0 }}">{{ __('lang.all') }}</option>
                                                @foreach ($countries as $country)
                                                    <option data-id="{{ $country->id }}" value="{{ $country->id }}">
                                                        @if (App::getLocale() == 'ar' && $country->name_ar)
                                                            {{ $country->name_ar }}
                                                        @else
                                                            {{ ucwords($country->name_en) }}
                                                        @endif
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label">{{ __('lang.cities') }}</label>
                                            <select id="cities" name="cities"  class="form-control custom-select">
                                                <option value="{{ 0 }}">{{ __('lang.all') }}</option>
                                                <option value="all">{{ __('lang.all_cities') }}</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="title" class="form-label">{{ __('lang.title_en') }}</label>
                                        <input type="text" class="form-control d-none" name="name_en" id="name_en"
                                            placeholder="{{ __('lang.title_plceholder') }}" autocomplete="off">
                                        <input type="text" class="form-control mt-15" name="name_en" id="name_en"
                                            placeholder="{{ __('lang.title_plceholder') }}" autocomplete="off" required>
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="title" class="form-label">{{ __('lang.title_ar') }}</label>
                                        <input type="text" class="form-control d-none" name="name_ar" id="name_ar"
                                            placeholder="{{ __('lang.title_plceholder') }}" autocomplete="off">
                                        <input type="text" class="form-control mt-15" name="name_ar" id="name_ar"
                                            placeholder="{{ __('lang.title_plceholder') }}" autocomplete="off" required>
                                    </div>
                                    <div class="col-lg-12">
                                        <label for="description" class="form-label">{{ __('lang.description_en') }}</label>
                                        <div class="textarea-cont">
                                            <textarea name="description_en" id="description_en" cols="30" rows="5" class="form-control d-none"
                                                placeholder="{{ __('lang.description_placeholder') }}" autocomplete="off"></textarea>
                                            <textarea name="description_en" id="description_en" cols="30" rows="5" class="form-control mt-15"
                                                placeholder="{{ __('lang.description_placeholder') }}" dir="rtl" autocomplete="off" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 pb-4">
                                        <label for="description" class="form-label">{{ __('lang.description_ar') }}</label>
                                        <div class="textarea-cont">
                                            <textarea name="description_ar" id="description_ar" cols="30" rows="5" class="form-control d-none"
                                                placeholder="{{ __('lang.description_placeholder') }}" autocomplete="off"></textarea>
                                            <textarea name="description_ar" id="description_ar" cols="30" rows="5" class="form-control mt-15"
                                                placeholder="{{ __('lang.description_placeholder') }}" dir="rtl" autocomplete="off" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-inline">
                                            <i class="fas fa-paper-plane"></i>
                                            <span>@lang('button.add')</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                        ADPOST PART END
            =======================================-->
@endsection

@push('scripts')
        <script type="text/javascript">
        /* Load cities into postion <selec> */
        $("#country-select").change(function() {
            $.getJSON("/ads/" + $(this).val() + "/getCities", function(jsonData) {
                select = '<option value="all">{{ __('lang.all_cities') }}</option>';
                $.each(jsonData, function(i, data) {
                    select += '<option value="' + data.id +
                        '">@if (App::getLocale() == 'ar' && '+data.name_ar+')' + data.name_ar +
                        '@else {{ ucwords('+data.name_en+') }} @endif</option>';
                });
                select += '</select>';
                $("#cities").html(select);
            });
        });
    </script>
@endpush
