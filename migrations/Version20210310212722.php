<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210310212722 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE project_picture ADD project_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE project_picture ADD CONSTRAINT FK_80C543EC166D1F9C FOREIGN KEY (project_id) REFERENCES project (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_80C543EC166D1F9C ON project_picture (project_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE project_picture DROP FOREIGN KEY FK_80C543EC166D1F9C');
        $this->addSql('DROP INDEX UNIQ_80C543EC166D1F9C ON project_picture');
        $this->addSql('ALTER TABLE project_picture DROP project_id');
    }
}
