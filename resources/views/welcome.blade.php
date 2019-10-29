<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <title>endorphin-studio/browser-detector Live demo </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto|Open Sans|PT Sans" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7c908ee60b.js" crossorigin="anonymous"></script>
    <link href="/css/detector.css" rel="stylesheet">

</head>
<body>
<section>
    <h3>Operating System</h3>
    <div class="data">
        @if ($Detector->getOS()->getFamily() === 'windows')
            <i class="icon fab fa-windows"></i>
        @elseif ($Detector->getOS()->getFamily() === 'mac')
            <i class="icon fab fa-apple"></i>
        @elseif ($Detector->getOS()->getName() === 'Android')
            <i class="icon fab fa-android"></i>
        @elseif ($Detector->getOS()->getName() === 'Ubuntu')
            <i class="icon fab fa-ubuntu"></i>
        @elseif (in_array(mb_strtolower($Detector->getOS()->getName()), ['playstation os']))
            <i class="icon fab fa-playstation"></i>
        @elseif ($Detector->getOS()->getFamily() === 'unix' )
            <i class="icon fab fa-linux"></i>
        @else
            <i class="icon fa fa-{{ $Detector->getOS()->getType() }}"></i>
        @endif
        <span>{{ $Detector->getOS()->getName() }} {{ $Detector->getOS()->getVersion() }}</span>
    </div>
</section>

<section>
    <h3>Device</h3>
    <div class="data">
        @if (in_array(mb_strtolower($Detector->getDevice()->getName()), ['iphone', 'ipad', 'ipod', 'apple tv']))
            <i class="icon fab fa-apple"></i>
        @elseif ($Detector->getDevice()->getName() === 'mac')
            <i class="icon fab fa-apple"></i>
        @elseif ($Detector->getDevice()->getName() === 'Android')
            <i class="icon fab fa-android"></i>
        @elseif (in_array(mb_strtolower($Detector->getDevice()->getName()), ['playstation 4', 'playstation vita']))
            <i class="icon fab fa-playstation"></i>
        @elseif (in_array(mb_strtolower($Detector->getDevice()->getName()), ['xbox']))
            <i class="icon fab fab-xbox"></i>
        @elseif ($Detector->getDevice()->getType() === 'console' )
            <i class="icon fas fa-gamepad"></i>
        @elseif ($Detector->getDevice()->getType() === 'tv' )
            <i class="icon fas fa-tv"></i>
        @else
            <i class="icon fas fa-{{ $Detector->getDevice()->getType() }}"></i>
        @endif
        <span>{{ $Detector->getDevice()->getName() }}</span>
    </div>
</section>

<section>
    <h3>Browser</h3>
    <div class="data">
        @if (in_array(mb_strtolower($Detector->getBrowser()->getName()), ['firefox', 'ie mobile', 'chrome', 'ie',  'safari', 'opera', 'opera mini', 'opera mobile', 'edge']))
            @if (in_array(mb_strtolower($Detector->getBrowser()->getName()), ['ie',  'ie mobile']))
                <i class="icon fab fab-edge"></i>
            @elseif (in_array(mb_strtolower($Detector->getBrowser()->getName()), ['opera mini',  'opera mobile', 'opera']))
                <i class="icon fab fab-opera"></i>
            @elseif (in_array(mb_strtolower($Detector->getBrowser()->getName()), ['silk',  'playstation browser']))
                <i class="icon fab fa-playstation"></i>
            @else
                <i class="icon fab fa-{{ mb_strtolower($Detector->getBrowser()->getName()) }}"></i>
            @endif
        @else
            <i class="icon fa fa-{{ mb_strtolower($Detector->getBrowser()->getType()) }}"></i>
        @endif
        <span>{{ $Detector->getBrowser()->getName() }} {{ $Detector->getBrowser()->getVersion() }}</span>
    </div>
</section>

@if(method_exists($Detector, 'getCoreVersion'))
    <section>
        <h3>Library</h3>
        <div class="data">
            <span>Version: {{ $Detector->getCoreVersion() }}</span>
        </div>
        <div class="data">
            <span><a href="https://github.com/endorphin-studio/browser-detector" class=""> Github</a> </span>
            <span><a href="https://packagist.org/packages/endorphin-studio/browser-detector"> Packagist</a> </span>
        </div>
    </section>
@endif

<section>
    <h3>User Agent String</h3>
    <div class="data">
        {{ $Detector->getUserAgent() }}
    </div>
</section>


<footer>
    <h4>Library status</h4>
    <div class="status">
        <a href="https://packagist.org/packages/endorphin-studio/browser-detector"><img src="https://poser.pugx.org/endorphin-studio/browser-detector/v/stable" alt="Latest Stable Version" /></a>
        <a href="https://packagist.org/packages/endorphin-studio/browser-detector"><img src="https://poser.pugx.org/endorphin-studio/browser-detector/downloads" alt="Total Downloads" /></a>
        <a href="https://packagist.org/packages/endorphin-studio/browser-detector"><img src="https://poser.pugx.org/endorphin-studio/browser-detector/license" alt="License" /></a>
    </div>
    <div class="services">
        <a href="https://twitter.com/serhii_me" class="icon fab fa-twitter"> </a>
        <a href="http://serhii.work" class="icon fas fa-globe"> </a>
        <a href="https://t.me/serhiime" class="icon fab fa-telegram"> </a>
    </div>
</footer>
</body>
</html>
