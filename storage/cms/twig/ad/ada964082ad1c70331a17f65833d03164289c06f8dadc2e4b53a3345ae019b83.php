<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__cec95f0e15403ac61d44015a05fe958568c5f3d4d2bcb95b9cd14d3895bbb12a */
class __TwigTemplate_a6c4f6642cf6a8d06d46b72cca97d3af7f4bb7ac9a0da7cc3ff81d1d9f5a3c41 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array();
        $filters = array("raw" => 7, "escape" => 26);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['raw', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
        <title>Document</title>
        <style type=\"text/css\" media=\"screen\">
            ";
        // line 7
        echo $this->sandbox->ensureToStringAllowed(($context["css"] ?? null), 7, $this->source);
        echo "
           @font-face {
               font-family: 'Noto Sans';
               font-style: normal;
               font-weight: 400;
               /* src: url(http://eclecticgeek.com/dompdf/fonts/cjk/fireflysung.ttf) format('truetype'); */
           }
            
           /*  body {
               font-family: Noto Sans, sans-serif;
               font-size: 13px;
           } */
           
           body { font-family: DejaVu Sans, sans-serif; }
           img {width: 200px, height: 100px}
        </style>
    </head>
    <body>
        ";
        // line 25
        echo $this->sandbox->ensureToStringAllowed(($context["content_html"] ?? null), 25, $this->source);
        echo "
        ";
        // line 26
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 26, $this->source), "html", null, true);
        echo "
        <br/>
        ";
        // line 28
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 28, $this->source), "html", null, true);
        echo "
        
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "__string_template__cec95f0e15403ac61d44015a05fe958568c5f3d4d2bcb95b9cd14d3895bbb12a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 28,  95 => 26,  91 => 25,  70 => 7,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
        <title>Document</title>
        <style type=\"text/css\" media=\"screen\">
            {{ css|raw }}
           @font-face {
               font-family: 'Noto Sans';
               font-style: normal;
               font-weight: 400;
               /* src: url(http://eclecticgeek.com/dompdf/fonts/cjk/fireflysung.ttf) format('truetype'); */
           }
            
           /*  body {
               font-family: Noto Sans, sans-serif;
               font-size: 13px;
           } */
           
           body { font-family: DejaVu Sans, sans-serif; }
           img {width: 200px, height: 100px}
        </style>
    </head>
    <body>
        {{ content_html|raw }}
        {{ title }}
        <br/>
        {{ content }}
        
    </body>
</html>", "__string_template__cec95f0e15403ac61d44015a05fe958568c5f3d4d2bcb95b9cd14d3895bbb12a", "");
    }
}
