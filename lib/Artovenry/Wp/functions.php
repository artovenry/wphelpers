<?
function stylesheet_link_tag($name="", $media="screen"){
  $filename= empty($name)? "site" : $name;
  $dev= ART_ENV == "development" ? "-dev" : "";
  $filename= $filename . $dev . ".css";
  $url= get_stylesheet_directory_uri() . "/css/$filename";
  $format= '<link rel="stylesheet" media="%s" href="%s">';
  return sprinf($format, $media, $url);
}

function javascript_include_tag($name=""){
  $filename= empty($name)? "site" : $name;
  $dev= ART_ENV == "development" ? "-dev" : "";
  $filename= $filename . $dev . ".js";
  $url= get_stylesheet_directory_uri() . "/js/$filename";
  $format= '<script type="text/javascript" src="%s"></script>';
  return sprinf($format, $url);
}

