<!doctype html>
<html class="no-js" lang="en">
    
<!-- Mirrored from tvlgiao.github.io/html-general-demo/general/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Jun 2019 07:34:45 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
    <head>
       @include('Frontend.include.header')
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
		<!-- Header Area Start -->

		   @include('Frontend.include.navbar')

		<!-- Header Area End -->

        <!-- All BodyContent  -->

		@yield('bodycontent')

		<!-- Footer Area Start -->
		 @include('Frontend.include.footer')