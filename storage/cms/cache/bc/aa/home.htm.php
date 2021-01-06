<?php 
use RainLab\Translate\Classes\Translator;class Cms5ff452cc166ca597069915_a55373d066eff23a6577a0e76cac340cClass extends Cms\Classes\PageCode
{

protected $translator;
public function onStart()
{
    $this->translator = Translator::instance();
    $this['SelectedLanguage'] = $this->activeLocale = $this->translator->getLocale();
}
}
