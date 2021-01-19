<?php 
class Cms6006e67d25344872014880_578cb41366c2cf28da51c08f1719c7cdClass extends Cms\Classes\PageCode
{
public function onStart(){

        
        //$this['search_results'] = \Indikator\News\Models\Posts::searchWhere(input("q"))->where("locale", App::getLocale())->orderBy('created_at', 'desc')->paginate(10);
        //$search_results = \Indikator\News\Models\Posts::searchWhere(input("search"))->where("locale", App::getLocale())->orderBy('created_at', 'desc')->get();
        
        //dd($search_results);

        $this['query'] = input('q');
        
    }
}
