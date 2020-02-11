<?php

namespace App\Url;

// BEGIN (write your solution here)
function make(string $url)
{
    $urlStructure = parse_url($url);
    if (array_key_exists('query', $urlStructure)) {
        parse_str($urlStructure['query'], $query);
    } else {
        $query = [];
    }
    $urlStructure['query'] = $query;
    return $urlStructure;
}

function setScheme(array &$data, string $scheme)
{
    $data['scheme'] = $scheme;
}

function getScheme(array $data)
{
    return $data['scheme'];
}

function setHost(array &$data, string $host)
{
    $data['host'] = $host;
}

function getHost(array $data)
{
    return $data['host'];
}

function setPath(array &$data, string $path)
{
    $data['path'] = $path;
}

function getPath(array $data)
{
    return $data['path'];
}

function setQueryParam(array &$data, string $key, $value)
{
    $data['query'][$key] = $value;
}

function getQueryParam(array $data, string $paramName, $default = null)
{
    return array_key_exists($paramName, $data['query']) ? $data['query'][$paramName] : $default;
}

function getQuery(array $data)
{
    return http_build_query($data['query']);
}


function toString(array $data)
{
    $scheme = getScheme($data);
    $host = getHost($data);
    $path = getPath($data);
    $query = getQuery($data);
    return empty($query) ? "$scheme://$host$path" : "$scheme://$host$path?$query";
}
// END

