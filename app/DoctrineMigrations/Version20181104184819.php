<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20181104184819 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE job CHANGE job_type job_type INT NOT NULL COMMENT \'1-Fulltime,2-Parttime\'');
        $this->addSql('ALTER TABLE company CHANGE sdetail sdetail VARCHAR(255) DEFAULT NULL, CHANGE ldetail ldetail VARCHAR(255) DEFAULT NULL');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE company CHANGE sdetail sdetail VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE ldetail ldetail VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE job CHANGE job_type job_type INT NOT NULL COMMENT \'1-Fulltime,2-Parttime\'');
    }
}
