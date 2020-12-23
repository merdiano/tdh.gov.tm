<?php namespace AhmadFatoni\ApiGenerator\Controllers\API;

use Cms\Classes\Controller;
use BackendMenu;

use Illuminate\Http\Request;
use AhmadFatoni\ApiGenerator\Helpers\Helpers;
use Illuminate\Support\Facades\Validator;
use Indikator\News\Models\Categories;
class IndexofcategoriesController extends Controller
{
	protected $Categories;

    protected $helpers;

    public function __construct(Categories $Categories, Helpers $helpers)
    {
        parent::__construct();
        $this->Categories    = $Categories;
        $this->helpers          = $helpers;
    }

    public function index(){

        $data = $this->Categories->all()->toArray();

        return $this->helpers->apiArrayResponseBuilder(200, 'success', $data);
    }

    // public function categories(){
    //     $data = $this->Categories->where("locale",$locale )->get();
        
    //     // return $data;
    //     $jsonArray = json_decode($data,true);
    //     return response()->json($data, 200);
    // }

    
    public static function getAfterFilters() {return [];}
    public static function getBeforeFilters() {return [];}
    public static function getMiddleware() {return [];}
    public function callAction($method, $parameters=false) {
        return call_user_func_array(array($this, $method), $parameters);
    }
    
}