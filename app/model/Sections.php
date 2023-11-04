<?php
namespace Lordar221617\Portfolio\Model;

use Lordar221617\Portfolio\Database;
use Exception;
use PDOException;

class Sections extends Database
{
    public function getSections()
    {
        try {
            return $this->selectAll('section');
        } catch (Exception | PDOException $e) {
            if (APP_DEBUG) {
                setCookie("message", "Error in Database;");
                echo sprintf("Error ;Error Message: %s", $e->getMessage());
            }
            return false;
        }
    }

    public function getSectionById($id)
    {
        try {
            return $this->selectById('section', $id);
        } catch (Exception | PDOException $e) {
            if (APP_DEBUG) {
                setCookie("message", "Error in Database;");
                echo sprintf("Error ;Error Message: %s", $e->getMessage());
            }
            return false;
        }
    }

    public function getSectionByName($name)
    {
        try {
            $selector = [
                "section_name" => ["=", $name],
            ];
            return $this->custom_select('section', $selector);
        } catch (Exception | PDOException $e) {
            if (APP_DEBUG) {
                setCookie("message", "Error in Database;");
                echo sprintf("Error ;Error Message: %s", $e->getMessage());
            }
            return false;
        }
    }

    public function getSectionByPage($page)
    {
        try {
            $selector = [
                "page_name" => ["=", $page],
            ];
            $selector0 = [
                "page" => ["=", $this->custom_select('page', $selector)->id],
            ];
            return $this->custom_select('section', $selector0);
        } catch (Exception | PDOException $e) {
            if (APP_DEBUG) {
                setCookie("message", "Error in Database;");
                echo sprintf("Error ;Error Message: %s", $e->getMessage());
            }
            return false;
        }
    }

    public function updateSectionById($id, $data)
    {
        try {
            $this->updateById('section', $id, $data);
        } catch (Exception | PDOException $e) {
            if (APP_DEBUG) {
                setCookie("message", "Error in Database;");
                echo sprintf("Error ;Error Message: %s", $e->getMessage());
            }
            return false;
        }
    }

    public function createSection($data)
    {
        try {
            $this->insert('section', $data);
        } catch (Exception | PDOException $e) {
            if (APP_DEBUG) {
                setCookie("message", "Error in Database;");
                echo sprintf("Error ;Error Message: %s", $e->getMessage());
            }
            return false;
        }
    }
}