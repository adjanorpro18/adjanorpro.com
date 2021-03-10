<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210310213424 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE review ADD project_id INT NOT NULL, ADD parent_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE review ADD CONSTRAINT FK_794381C6166D1F9C FOREIGN KEY (project_id) REFERENCES project (id)');
        $this->addSql('ALTER TABLE review ADD CONSTRAINT FK_794381C6727ACA70 FOREIGN KEY (parent_id) REFERENCES review (id)');
        $this->addSql('CREATE INDEX IDX_794381C6166D1F9C ON review (project_id)');
        $this->addSql('CREATE INDEX IDX_794381C6727ACA70 ON review (parent_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE review DROP FOREIGN KEY FK_794381C6166D1F9C');
        $this->addSql('ALTER TABLE review DROP FOREIGN KEY FK_794381C6727ACA70');
        $this->addSql('DROP INDEX IDX_794381C6166D1F9C ON review');
        $this->addSql('DROP INDEX IDX_794381C6727ACA70 ON review');
        $this->addSql('ALTER TABLE review DROP project_id, DROP parent_id');
    }
}
