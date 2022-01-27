<?php
#S-Cart/Core/Front/Models/ShopLayoutPage.php
namespace SCart\Core\Front\Models;

use Illuminate\Database\Eloquent\Model;

class ShopLayoutPage extends Model
{
    use \SCart\Core\Front\Models\ModelTrait;
    
    public $timestamps = false;
    public $table = SC_DB_PREFIX.'shop_layout_page';
    protected $connection = SC_CONNECTION;

    public static function getPages()
    {
        return self::pluck('name', 'key')->all();
    }
}
