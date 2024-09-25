<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-column footer-about">
                        @php
                            $setting=App\Models\Setting::where('id',1)->first();
                        @endphp
                        <h3 class="footer-title">About Hotel</h3>
                        <p class="footer-about-text">{{ $setting->site_description }}</p>
                    </div>
                </div>
                <div class="col-md-3 offset-md-1">
                    <div class="footer-column footer-explore clearfix">
                        <h3 class="footer-title">Explore</h3>
                        <ul class="footer-explore-list list-unstyled">
                            <li><a href="{{ route('home_page') }}">Home</a></li>
                            <li><a href="#">Hotels</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-column footer-contact">
                        <h3 class="footer-title">Contact</h3>
                        <p class="footer-contact-text">{{ $setting->site_address }}
                        </p>
                        <div class="footer-contact-info">
                            @if ($setting->phone)
                            <p class="footer-contact-phone"><span class="flaticon-call"></span>{{ $setting->phone }}</p>
                            @endif
                            @if ($setting->email)
                            <p class="footer-contact-mail"><a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a></p>
                            @endif
                        </div>
                        <div class="footer-about-social-list">
                            @if ($setting->instagram_link)
                            <a href="{{ $setting->instagram_link }}"><i class="ti-instagram"></i></a>
                            @endif
                            @if ($setting->twitter_link)
                            <a href="{{ $setting->twitter_link }}"><i class="ti-twitter"></i></a>
                            @endif
                            @if ($setting->youtube_link)
                        <a href="{{ $setting->youtube_link }}"><i class="ti-youtube"></i></a>
                            @endif
                            @if ($setting->facebook_link)
                            <a href="{{ $setting->facebook_link }}"><i class="ti-facebook"></i></a
                            @endif

                            {{ $setting }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-bottom-inner">
                        <p class="footer-bottom-copy-right">© Copyright {{ date('Y') }} by <a href="javascript::void(0)">{{ $setting->site_name }}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
