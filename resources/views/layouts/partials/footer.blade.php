<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-column footer-about">
                        <h3 class="footer-title">About Hotel</h3>
                        <p class="footer-about-text">{{ Settings::setting('description') }}</p>
                    </div>
                </div>
                <div class="col-md-3 offset-md-1">
                    <div class="footer-column footer-explore clearfix">
                        <h3 class="footer-title">Explore</h3>
                        <ul class="footer-explore-list list-unstyled">
                            <li><a href="{{ route('home_page') }}">Home</a></li>
                            <li><a href="#">Hotels</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="{{ route('contact_page') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-column footer-contact">
                        <h3 class="footer-title">Contact</h3>
                        <p class="footer-contact-text">{{ Settings::setting('address') }}
                        </p>
                        <div class="footer-contact-info">
                            @if (Settings::setting('phone'))
                                <p class="footer-contact-phone"><span class="flaticon-call">
                                        {{ Settings::setting('phone') }}</span></p>
                            @endif

                            @if (Settings::setting('email'))
                                <p class="footer-contact-mail"><a
                                        href="mailto:{{ Settings::setting('email') }}">{{ Settings::setting('email') }}</a>
                                </p>
                            @endif
                        </div>
                        <div class="footer-about-social-list">
                            <a href="{{ Settings::setting('instagram') }}"><i class="ti-instagram"></i></a>
                            <a href="{{ Settings::setting('twitter') }}"><i class="ti-twitter"></i></a>
                            <a href="{{ Settings::setting('youtube') }}"><i class="ti-youtube"></i></a>
                            <a href="{{ Settings::setting('facebook') }}"><i class="ti-facebook"></i></a </div>
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
                        <p class="footer-bottom-copy-right">© Copyright {{ date('Y') }} by <a
                                href="javascript::void(0)">{{ Settings::setting('site_name') }}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
