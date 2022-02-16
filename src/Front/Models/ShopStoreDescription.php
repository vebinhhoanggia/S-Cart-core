<?php
#S-Cart/Core/Front/Models/ShopStoreDescription.php
namespace SCart\Core\Front\Models;

use Illuminate\Database\Eloquent\Model;

class ShopStoreDescription extends Model
{
    use \SCart\Core\Front\Models\ModelTrait;
    
    protected $primaryKey = ['lang', 'store_id'];
    public $incrementing = false;
    protected $guarded = [];
    public $table = SC_DB_PREFIX.'admin_store_description';
    protected $connection = SC_CONNECTION;
}
