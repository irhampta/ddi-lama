<?PHP

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
    function query_get_all()
    {

        $sql = "SELECT * FROM wp_posts WHERE post_status='publish' AND post_type='post'";
        $query = $this->db->query($sql);

        if ($query) {
            return $query->getResult();
        }
    }
}
