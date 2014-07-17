$domain_name = "api.oauth.ec"

$mysqlPassword = ""

Exec { path => "/usr/bin:/usr/sbin/:/bin:/sbin" }

exec { "manager update":
    command => "apt-get update",
}

include mysql
include git
include wget
include php54
include apache
include vim

wget::fetch { "get composer":
       source      => 'https://getcomposer.org/composer.phar',
       destination => '/var/www/src/composer.phar',
       timeout     => 0,
       verbose     => false,
    }
