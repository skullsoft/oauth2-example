class php54 {

    $packages = [
        "php5",
        "php5-cli",
        "php5-mysql",
        "php5-dev",
        "php-pear",
        "php-apc",
        "php5-mcrypt",
        "php5-gd",
        "php5-curl",
        "libapache2-mod-php5",
        "php5-xdebug",
        "php5-intl",
        "php5-sqlite"
    ]

    package{
      $packages:
        ensure  => latest,
        require => Exec["php54 apt-repo"]
    }

    package {
      "python-software-properties":
           ensure => present,
           require => Exec['manager update']
    }

    exec { 
        "php54 apt-repo":
             command => '/usr/bin/add-apt-repository ppa:ondrej/php5-oldstable -y',
             require => [Package['python-software-properties']],
    }
    
    exec { 
        "apt-get update php54":
            command => "apt-get update",
            refreshonly => true,
            subscribe => Exec["php54 apt-repo"],
    }

}
