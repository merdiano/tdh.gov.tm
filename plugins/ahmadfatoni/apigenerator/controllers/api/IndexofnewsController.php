<?php namespace AhmadFatoni\ApiGenerator\Controllers\API;

use Cms\Classes\Controller;
use BackendMenu;

use Illuminate\Http\Request;
use AhmadFatoni\ApiGenerator\Helpers\Helpers;
use Illuminate\Support\Facades\Validator;
use Indikator\News\Models\Posts;
class IndexofnewsController extends Controller
{
	protected $Posts;

    protected $helpers;

    public function __construct(Posts $Posts, Helpers $helpers)
    {
        parent::__construct();
        $this->Posts    = $Posts;
        $this->helpers          = $helpers;
    }

    public function index(){

        $data = $this->Posts->all()->toArray();

        return $this->helpers->apiArrayResponseBuilder(200, 'success', $data);
    }

    // public function show($id){

    //     $data = $this->Posts->where('id',$id)->first();

    //     if( count($data) > 0){

    //         return $this->helpers->apiArrayResponseBuilder(200, 'success', $data);

    //     }

    //     $this->helpers->apiArrayResponseBuilder(400, 'bad request', ['error' => 'invalid key']);

    // }

    public function store(Request $request){

    	$arr = $request->all();

        while ( $data = current($arr)) {
            $this->Posts->{key($arr)} = $data;
            next($arr);
        }

        $validation = Validator::make($request->all(), $this->Posts->rules);
        
        if( $validation->passes() ){
            $this->Posts->save();
            return $this->helpers->apiArrayResponseBuilder(201, 'created', ['id' => $this->Posts->id]);
        }else{
            return $this->helpers->apiArrayResponseBuilder(400, 'fail', $validation->errors() );
        }

    }

    public function update($id, Request $request){

        $status = $this->Posts->where('id',$id)->update($data);
    
        if( $status ){
            
            return $this->helpers->apiArrayResponseBuilder(200, 'success', 'Data has been updated successfully.');

        }else{

            return $this->helpers->apiArrayResponseBuilder(400, 'bad request', 'Error, data failed to update.');

        }
    }

    public function delete($id){

        $this->Posts->where('id',$id)->delete();

        return $this->helpers->apiArrayResponseBuilder(200, 'success', 'Data has been deleted successfully.');
    }

    public function destroy($id){

        $this->Posts->where('id',$id)->delete();

        return $this->helpers->apiArrayResponseBuilder(200, 'success', 'Data has been deleted successfully.');
    }


    public static function getAfterFilters() {return [];}
    public static function getBeforeFilters() {return [];}
    public static function getMiddleware() {return [];}
    public function callAction($method, $parameters=false) {
        return call_user_func_array(array($this, $method), $parameters);
    }

    public function news($locale){
        $data = $this->Posts->where("locale",$locale )->orderBy('created_at', 'desc')->paginate(20);
        
        // return $data;
        $jsonArray = json_decode($data,true);
        return response()->json($data, 200);
    }

    public function post($id){
        $data = $this->Posts->where('id',$id)->first();
        return response()->json(['data'=>$data], 200);
    }

    public function search($title){
        $data = $this->Posts->where('title', 'like', "%{$title}%")->orderBy('created_at', 'desc')->paginate(20);

        $jsonArray = json_decode($data,true);
        return response()->json($data, 200);
    }

    public function filterDate($date){
        $data = $this->Posts->whereDate('published_at', '=', $date)->orderBy('created_at', 'desc')->paginate(20);

        $jsonArray = json_decode($data,true);
        return response()->json($data, 200);
    }
    
}