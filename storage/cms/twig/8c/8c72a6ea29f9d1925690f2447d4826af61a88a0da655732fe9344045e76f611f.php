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

/* __string_template__07b94bfbbde66eab6e4ad3ab3df4bc80bb0550a973565fe4cb254b9e29e31e2d */
class __TwigTemplate_af110fc1dc8411034877c8f9b3fd12e688d4952ff75a2a9123eaca4a81348af6 extends \Twig\Template
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
        $filters = array("raw" => 7, "escape" => 23);
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
            
            body {
                font-family: Noto Sans, sans-serif;
                font-size: 13px;
            }
        </style>
    </head>
    <body>
        ";
        // line 22
        echo $this->sandbox->ensureToStringAllowed(($context["content_html"] ?? null), 22, $this->source);
        echo "
        ";
        // line 23
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 23, $this->source), "html", null, true);
        echo "
        <br/>
        ";
        // line 25
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 25, $this->source), "html", null, true);
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "__string_template__07b94bfbbde66eab6e4ad3ab3df4bc80bb0550a973565fe4cb254b9e29e31e2d";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 25,  92 => 23,  88 => 22,  70 => 7,  62 => 1,);
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
            
            body {
                font-family: Noto Sans, sans-serif;
                font-size: 13px;
            }
        </style>
    </head>
    <body>
        {{ content_html|raw }}
        {{ title }}
        <br/>
        {{ content }}
    </body>
</html>", "__string_template__07b94bfbbde66eab6e4ad3ab3df4bc80bb0550a973565fe4cb254b9e29e31e2d", "");
    }
}
