@extends('user.layouts.master')
@section('title')
    Home
@endsection
@section('specific_css')
{{--    <link href={{asset('assets/user/vendor/layerslider/css/layerslider.css')}} rel="stylesheet">--}}
    <link href={{asset('assets/user/styles/timeline.css')}} rel="stylesheet">
@endsection
{{--@section('specific_js')--}}
{{--    <!-- GreenSock -->--}}
{{--    <script src={{asset('assets/user/vendor/layerslider/js/greensock.js')}}></script>--}}
{{--    <!-- LayerSlider script files -->--}}
{{--    <script src={{asset('assets/user/vendor/layerslider/js/layerslider.transitions.js')}}></script>--}}
{{--    <script src={{asset('assets/user/vendor/layerslider/js/layerslider.kreaturamedia.jquery.js')}}></script>--}}
{{--    <script src={{asset('assets/user/vendor/layerslider/js/layerslider.load.js')}}></script>--}}
{{--    <!-- Open Street maps -->--}}
{{--    <script src={{asset('assets/user/js/map.js')}}></script>--}}
{{--    <!-- Mailchimp script -->--}}
{{--    <script src={{asset('assets/user/js/mailchimp.js')}}></script>--}}
{{--    <!-- number counter script -->--}}
{{--    <script src={{asset('assets/user/js/counter.js"')}}></script>--}}
{{--    <!-- Contact Form script -->--}}
{{--    <script src={{asset('assets/user/js/contact.js')}}></script>--}}
{{--@endsection--}}
@section('content')
    <div class="timeline">
        <div class="year">
            <div class="inner">
                <span>2016</span>
            </div>
        </div>

        <ul class="days">
            <li class="day">
                <div class="events">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius perferendis vitae, facere accusantium magni, explicabo mollitia quidem odio autem, iste optio? Consequuntur ratione dolorum velit maiores quam odit odio suscipit.</p>
                    <div class="date">18 October (Monday)</div>
                </div>
            </li>

            <li class="day">
                <div class="events">
                    <p>Lorem dolor sit amet, consectetur adipisicing elit. Eius perferendis vitae, facere accusantium magni, explicabo mollitia quidem odio autem, iste optio? Consequuntur ratione dolorum velit maiores quam odit odio suscipit.</p>
                    <div class="date">18 October (Monday)</div>
                </div>
            </li>

            <li class="day">
                <div class="events">
                    <div class="day__img">
                        <img src="http://placehold.it/400x300" alt="" />
                        <p class="caption">
                            Lorem ipsum dolor sit amet.
                        </p>
                    </div>
                    <div class="date">18 October (Monday)</div>
                </div>
            </li>

            <li class="day">
                <div class="events">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius perferendis vitae, facere accusantium magni, explicabo mollitia quidem odio autem, iste optio? Consequuntur ratione dolorum velit maiores quam odit odio suscipit.</p>
                    <div class="date">18 October (Monday)</div>
                </div>
            </li>

            <li class="day">
                <div class="events">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius perferendis vitae, facere accusantium magni, explicabo mollitia quidem odio autem, iste optio? Consequuntur ratione dolorum velit maiores quam odit odio suscipit.</p>
                    <div class="date">18 October (Monday)</div>
                </div>
            </li>

            <li class="day">
                <div class="events">
                    <div class="day__img">
                        <img src="http://placehold.it/400x300" alt="" />
                        <p class="caption">
                            Lorem ipsum dolor sit amet.
                        </p>
                    </div>
                    <div class="date">18 October (Monday)</div>
                </div>
            </li>
        </ul>

        <div class="year year--end">
            <div class="inner">
                <span>2017</span>
            </div>
        </div>
    </div>
@endsection
