<?php

namespace ZfSimpleMigrations\Migrations;

use ZfSimpleMigrations\Library\AbstractMigration;
use Zend\Db\Metadata\MetadataInterface;

class Version20140718180529 extends AbstractMigration
{
    public static $author = "Luis Mayta";
    public static $description = "added pass testclient testpass";

    public function up(MetadataInterface $schema)
    {
        $data = sprintf("
                INSERT INTO oauth_clients (
                    client_id,
                    client_secret,
                    redirect_uri)
                VALUES (
                    '%s',
                    '%s',
                    '%s');
            ",'testclient',
               '$2y$14$f3qml4G2hG6sxM26VMq.geDYbsS089IBtVJ7DlD05BoViS9PFykE2',
               'oauth/receivecode');
        $this->addSql("{$data}");
    }

    public function down(MetadataInterface $schema)
    {
        //throw new \RuntimeException('No way to go down!');
        //$this->addSql(/*Sql instruction*/);
    }
}
