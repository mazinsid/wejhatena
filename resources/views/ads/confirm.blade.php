@extends('layouts.app-master')

@push('styles')

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
        <section class="adpost-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        تم رفع الاعلان
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
