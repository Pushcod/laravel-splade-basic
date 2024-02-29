@php
    $setting = App\Models\Setting::find(1);
@endphp
<header class="site-header">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12 d-flex flex-wrap">
                <p class="d-flex me-4 mb-0">
                    <i class="bi-house-fill me-2"></i>
                    {{ $setting->name }}
                </p>

                <p class="d-flex d-lg-block d-md-block d-none me-4 mb-0">
                    <i class="bi-clock-fill me-2"></i>
                    <strong class="me-2">{{ $setting->schedule }}
                </p>

                <p class="site-header-icon-wrap text-white d-flex mb-0 ms-auto">
                    <i class="site-header-icon bi-whatsapp me-2"></i>

                    <a href="tel: {{$setting-> phone_number}}" class="text-white">
                        {{$setting->phone_number}}
                    </a>
                </p>
            </div>

        </div>
    </div>
</header>
