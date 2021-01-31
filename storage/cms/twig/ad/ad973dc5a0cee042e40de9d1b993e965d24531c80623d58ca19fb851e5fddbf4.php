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

/* __string_template__4c04188cd1280772563992ab447f57800bff330b5a83594f4f496a1e227f728b */
class __TwigTemplate_4456aa472188d6383373b86da6d776b376e7e3142aa97bde44d4d53cbbb8a836 extends \Twig\Template
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
        $filters = array("raw" => 7, "escape" => 26, "date" => 28);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['raw', 'escape', 'date'],
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
        <h1>";
        // line 26
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 26, $this->source), "html", null, true);
        echo "</h1>
        <h3>";
        // line 27
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["category"] ?? null), 27, $this->source), "html", null, true);
        echo "</h1>
        <h5>";
        // line 28
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null), 28, $this->source), "Y"), "html", null, true);
        echo "</h5>
        <br/>
        ";
        // line 30
        echo $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 30, $this->source);
        echo "
        
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "__string_template__4c04188cd1280772563992ab447f57800bff330b5a83594f4f496a1e227f728b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 30,  103 => 28,  99 => 27,  95 => 26,  91 => 25,  70 => 7,  62 => 1,);
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
        <h1>{{ title }}</h1>
        <h3>{{ category }}</h1>
        <h5>{{ date| date(\"Y\") }}</h5>
        <br/>
        {{ content|raw }}
        
    </body>
</html>", "__string_template__4c04188cd1280772563992ab447f57800bff330b5a83594f4f496a1e227f728b", "");
    }
}
