<?php
namespace Lordar221617\Portfolio\Model;

use Lordar221617\Portfolio\Database;

class Contact extends Database 
{
    public function getContacts()
    {
        return $this->selectAll('contact');
    }

    public function getContactById($id)
    {
        return $this->selectById('contact', $id);
    }

    public function updateContactById($id, $data)
    {
        $this->updateById('contact', $id, $data);
    }

    public function createContact($data)
    {
        $this->insert('contact', $data);
    }
}
