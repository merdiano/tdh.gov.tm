<?php 
class Cms60003ee9a8dec189805941_b0399c8fdf1d4608421ad8d92b981a30Class extends Cms\Classes\PageCode
{
public function onStart(){

        
        //$this['search_results'] = \Indikator\News\Models\Posts::searchWhere(input("q"))->where("locale", App::getLocale())->orderBy('created_at', 'desc')->paginate(10);
        //$search_results = \Indikator\News\Models\Posts::searchWhere(input("search"))->where("locale", App::getLocale())->orderBy('created_at', 'desc')->get();
        
        //dd($search_results);

        $this['query'] = input('q');
        
    }
}
