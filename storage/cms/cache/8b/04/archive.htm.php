<?php 
class Cms6006e5fcac195950595548_be43dc64e69e97eda24b0cc03ac90ad4Class extends Cms\Classes\PageCode
{
public function onStart(){

        
        if(input("date")){
            $this['todayNews'] = \Indikator\News\Models\Posts::whereDate('published_at', '=', input("date"))->where("locale", App::getLocale())->where("category_id", "!=", $this->theme->colleagues_news)->orderBy('created_at', 'desc')->get();
        }else{
            $this['todayNews'] = \Indikator\News\Models\Posts::whereDate('published_at', '=', Carbon\Carbon::today())->where("locale", App::getLocale())->where("category_id", "!=", $this->theme->colleagues_news)->orderBy('created_at', 'desc')->get();

        }

        $this['dateToday'] = input("date");

        
    }
}
