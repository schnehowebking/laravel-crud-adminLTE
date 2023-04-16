@extends('frontend.layouts.app')


@section('content')
    <!-- page title -->
    <section class="page-title bg-primary position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="text-white font-tertiary">Pricing</h1>
                </div>
            </div>
        </div>
        <!-- background shapes -->

    </section>
    <!-- /page title -->

    <!-- blog -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="columns">
                    <ul class="price">
                        <li class="header">Basic</li>
                        <li class="grey">$ 9.99 / year</li>
                        <li>10GB Storage</li>
                        <li>10 Emails</li>
                        <li>10 Domains</li>
                        <li>1GB Bandwidth</li>
                        <li class="grey"><a href="#" class="button">Sign Up</a></li>
                    </ul>
                </div>

                <div class="columns">
                    <ul class="price">
                        <li class="header" style="background-color:#04AA6D">Pro</li>
                        <li class="grey">$ 24.99 / year</li>
                        <li>25GB Storage</li>
                        <li>25 Emails</li>
                        <li>25 Domains</li>
                        <li>2GB Bandwidth</li>
                        <li class="grey"><a href="#" class="button">Sign Up</a></li>
                    </ul>
                </div>

                <div class="columns">
                    <ul class="price">
                        <li class="header">Premium</li>
                        <li class="grey">$ 49.99 / year</li>
                        <li>50GB Storage</li>
                        <li>50 Emails</li>
                        <li>50 Domains</li>
                        <li>5GB Bandwidth</li>
                        <li class="grey"><a href="#" class="button">Sign Up</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </section>
    <!-- /blog -->


@endsection
