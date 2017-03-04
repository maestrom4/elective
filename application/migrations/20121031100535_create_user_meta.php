<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_user_meta extends CI_Migration {

  public function up()
  {
    $this->dbforge->add_field(array(
        'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
        ),
        'fname' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
        ),
        'lname' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
        ),
        'avatar' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
        ),
        'user_role' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
        ),
        'user_description' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
        ),
         'created_at' => array(
                'type' => 'INT',
                'constraint' => '10',
                'unsigned' => TRUE,
                'default' => 0,
                'null' => FALSE
        ),
         'updated_at' => array(
                'type' => 'INT',
                'constraint' => '10',
                'unsigned' => TRUE,
                'default' => 0,
                'null' => FALSE
        ),


    ));

    $this->dbforge->add_field('CONSTRAINT fkuser_id FOREIGN KEY (id) REFERENCES users(id)');
    $this->dbforge->create_table('user_meta');

  }

  public function down()
  {
          $this->dbforge->drop_table('user_meta');
  }
}
