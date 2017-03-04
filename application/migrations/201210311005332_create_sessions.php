<?php
/**
 * Created by PhpStorm.
 * User: mevlutcanvar@gmail.com
 * Date: 22.08.2016
 * Time: 04:58
 */

class Migration_Create_Sessions extends CI_Migration {
    public function up()
    {
        // Drop table 'ci_sessions' if it exists
        $this->dbforge->drop_table('ci_sessions', TRUE);
        // Table structure for table 'groups'
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'VARCHAR',
                'constraint' => '40',
                'null' => FALSE
            ),
            'ip_address' => array(
                'type' => 'VARCHAR',
                'constraint' => '45',
                'null' => FALSE
            ),
            'user_agent'=>array(
                'type'=>'VARCHAR',
                'constraint'=>'120',
                'default' => 0,
                'null'=> FALSE
            ),
            'timestamp' => array(
                'type' => 'INT',
                'constraint' => '10',
                'unsigned' => TRUE,
                'default' => 0,
                'null' => FALSE
            ),
            'data' => array(
                'type' => 'blob',
                'null' => FALSE
            )
        ));
        $this->dbforge->create_table('ci_sessions');
        $this->db->query('CREATE INDEX `ci_sessions_timestamp` ON `ci_sessions` (`timestamp`)');
        $this->db->query('ALTER TABLE `ci_sessions` ADD PRIMARY KEY (`id`, `ip_address`)');
    }
    public function down()
    {
        $this->dbforge->drop_table('ci_sessions');
    }
}

//
/*

 CREATE TABLE IF NOT EXISTS  `ci_sessions` (
    id varchar(40) DEFAULT '0' NOT NULL,
    ip_address varchar(45) DEFAULT '0' NOT NULL,
    user_agent varchar(120) DEFAULT '0' NOT NULL,
    timestamp int(10) unsigned DEFAULT 0 NOT NULL,
    data Blob NOT NULL,
    PRIMARY KEY (id),
    KEY `timestamp_idx` (`timestamp`));
*/
