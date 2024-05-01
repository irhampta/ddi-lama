<?PHP

namespace App\Models;

use CodeIgniter\Model;

class PageModel extends Model
{
    function getPage($pageName)
    {

        $sql = "SELECT * FROM wp_posts WHERE post_name='$pageName'";
        $query = $this->db->query($sql);

        if ($query) {
            return $query->getRow();
        }
    }
}
