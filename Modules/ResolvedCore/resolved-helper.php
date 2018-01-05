<?php

//---------------------------------------------------
function resolvedMinify()
{
    return false;
}
//---------------------------------------------------
function assetsVersion()
{
    return 1;
}
//---------------------------------------------------
function assetsUrl()
{
    $asset = asset("public/assets/");
    return $asset;
}
//---------------------------------------------------
//---------------------------------------------------
function commonCss()
{
    $path = "/";
    $list = [


        $path."css/bootstrap.min.css",
        $path."css/font-awesome.min.css",
        $path."css/now-ui-kit.css",
        $path."css/style.css",
        $path."css/resolved.css",
        /*$path."css/alertify.css",

        $path."css/nprogress.css",*/

    ];
    return $list;
}
//---------------------------------------------------
function commonJs()
{
    $path = "/";
    $list = [

        $path."js/core/jquery.3.2.1.min.js",
        $path."js/core/popper.min.js",
        $path."js/core/bootstrap.min.js",
        $path."js/plugins/bootstrap-switch.js",
        $path."js/plugins/nouislider.min.js",
        $path."js/plugins/bootstrap-datepicker.js",
        $path."js/now-ui-kit.js",

        /*$path."js/alertify.js",
        $path."js/nprogress.js",*/
    ];
    return $list;
}
//---------------------------------------------------
function suffixVersion($path)
{
    return assetsUrl().$path."?v=".assetsVersion();
}
//---------------------------------------------------
function css($css_array=null)
{
    $html = "";

    if(resolvedMinify())
    {
        $html .= '<link href="'.suffixVersion('/minified/style.css').'" rel="stylesheet" type="text/css">'."\n";
    } else
    {
        $vendor_css = commonCss();
        foreach ($vendor_css as $css)
        {
            $html .= '<link href="'.suffixVersion($css).'" rel="stylesheet" type="text/css">'."\n";
        }
    }

    if($css_array){
        foreach ($css_array as $item)
        {
            $html .= '<link href="'.suffixVersion($item).'" rel="stylesheet" type="text/css">'."\n";
        }
    }


    return $html;
}
//---------------------------------------------------
function js($js_array=null)
{
    $html = "";

    if(resolvedMinify())
    {
        $html .= '<script src="'.suffixVersion('/minified/script.js').'"></script>'."\n";
    } else
    {
        $vendor = commonJs();
        foreach ($vendor as $item)
        {
            $html .= '<script src="'.suffixVersion($item).'"></script>'."\n";
        }
    }

    if($js_array){
        foreach ($js_array as $item)
        {
            $html .= '<script src="'.suffixVersion($item).'"></script>'."\n";
        }
    }

    return $html;
}
//---------------------------------------------------