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

/* __string_template__2f263cd19210824dd7497762706ba3f29de91b2d3d5e52149ed8074c7361778f */
class __TwigTemplate_451dcfb5d49a40793b8145f90d69de37ede39c59a7b445dc408ea00a676a19db extends \Twig\Template
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
        
        
        <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["images"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "path", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
        echo "\" alt=\"picture\">
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "__string_template__2f263cd19210824dd7497762706ba3f29de91b2d3d5e52149ed8074c7361778f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 31,  100 => 28,  95 => 26,  91 => 25,  70 => 7,  62 => 1,);
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
        
        
        <img src=\"{{ images[0].path }}\" alt=\"picture\">
    </body>
</html>", "__string_template__2f263cd19210824dd7497762706ba3f29de91b2d3d5e52149ed8074c7361778f", "");
    }
}
