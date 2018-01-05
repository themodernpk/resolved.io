<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Page Title -->
    <title>Resolved.io</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <!--styles-->
    {!! css() !!}
    <!--/styles-->

</head>
<body class="index-page sidebar-collapse">

@include("resolvedcore::layouts.partials.nav")
@include("resolvedcore::layouts.partials.header")

@yield('content')


@include("resolvedcore::layouts.partials.footer")

<!--scripts-->
{!! js() !!}
<!--/scripts-->

<script type="text/javascript">
    $(document).ready(function() {
        nowuiKit.initSliders();
    });
</script>

</body>
</html>