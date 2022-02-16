<?php
#S-Cart/Core/Front/Models/ShopProductDescription.php
namespace SCart\Core\Front\Models;

use Illuminate\Database\Eloquent\Model;

class ShopProductDescription extends Model
{
    use \SCart\Core\Front\Models\ModelTrait;
    
    protected $primaryKey = ['lang', 'product_id'];
    public $incrementing  = false;
    protected $guarded    = [];
    public $table = SC_DB_PREFIX.'shop_product_description';
    protected $connection = SC_CONNECTION;
}
