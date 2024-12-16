@php
    $locale_lang=LaravelLocalization::getCurrentLocale()== 'ar'?'en':'ar';
@endphp
<a class="nav-link text-muted my-2" href="{{ LaravelLocalization::getLocalizedURL($locale_lang) }}" id="langSwitcher">
    <i class="fe fe-globe fe-16"></i>{{strtoupper($locale_lang)}}
</a>
