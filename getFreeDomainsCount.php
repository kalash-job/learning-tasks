<?php

namespace App\Emails;

const FREE_EMAIL_DOMAINS = [
    'gmail.com', 'yandex.ru', 'hotmail.com'
];

// BEGIN (write your solution here)
function getFreeDomainsCount($emails)
{
    $domains = array_map(function ($email) {
        $domain = explode('@', $email);
        return $domain[1];
    }, $emails);
    $freeDomains = array_filter($domains, function ($domain) {
        return in_array($domain, FREE_EMAIL_DOMAINS);
    });
    return array_reduce($freeDomains, function ($acc, $freeDomain) {
        if (array_key_exists($freeDomain, $acc)) {
            $acc[$freeDomain]++;
        } else {
            $acc[$freeDomain] = 1;
        }
        return $acc;
    }, []);
}
// END

