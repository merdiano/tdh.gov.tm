<?php 
use RainLab\Translate\Classes\Translator;class Cms6000472a61b3d198968447_14a5510966435a377db0b1a9f4cadee0Class extends Cms\Classes\PageCode
{

protected $translator;
public function onStart()
{
    $this->translator = Translator::instance();
    $this['SelectedLanguage'] = $this->activeLocale = $this->translator->getLocale();
}
}
