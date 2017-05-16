<?php
/**
 * Content
 */
namespace Ara\Connect;
use \PDO;
class Block extends Connect implements \Anax\Common\AppInjectableInterface, \Anax\Common\ConfigureInterface
{
    use \Anax\Common\ConfigureTrait,
        \Anax\Common\AppInjectableTrait;
    public function __construct()
    {
        parent::__construct();
    }
    // Echo edit form. Uses ID
    public function getResultSet()
    {
        $sql = <<<EOD
SELECT
*,
CASE
WHEN (deleted <= NOW()) THEN "isDeleted"
WHEN (published <= NOW()) THEN "isPublished"
ELSE "notPublished"
END AS status
FROM content
WHERE type="block"
;
EOD;
        // return res
        return $this->getAllRes($sql);
    }
}
