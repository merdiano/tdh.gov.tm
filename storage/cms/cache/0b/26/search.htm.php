<?php 
class Cms6016b11591309889098115_b0c6b619ef95400dc68b666dcdc79addClass extends Cms\Classes\PageCode
{
public function onStart(){

        
        //$this['search_results'] = \Indikator\News\Models\Posts::searchWhere(input("q"))->where("locale", App::getLocale())->orderBy('created_at', 'desc')->paginate(10);
        //$search_results = \Indikator\News\Models\Posts::searchWhere(input("search"))->orderBy('created_at', 'desc')->get();
        
        //dd($search_results);

        $this['query'] = input('q');
        
    }
}
