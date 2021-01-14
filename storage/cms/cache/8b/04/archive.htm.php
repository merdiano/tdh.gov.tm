<?php 
class Cms5fff071e26fee501881431_4999100cedf21be7afa2929b496ea157Class extends Cms\Classes\PageCode
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
