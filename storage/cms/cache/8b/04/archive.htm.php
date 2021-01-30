<?php 
class Cms60155c7a5783c783809656_b7af7f105f02c59c4d6e3c969e0feabfClass extends Cms\Classes\PageCode
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
