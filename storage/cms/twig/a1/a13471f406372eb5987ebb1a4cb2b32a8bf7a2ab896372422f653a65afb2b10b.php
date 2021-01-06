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

/* __string_template__907c20fdeb9c6056ccf7acb38c078deea5093d70f5c481f172fe6d6cd61adcc0 */
class __TwigTemplate_28d68d4c90095410396d3fa4593ed1734e738f095dee0b499ccf748cee6d8c9c extends \Twig\Template
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
        $filters = array("raw" => 7, "escape" => 12);
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
        </style>
    </head>
    <body>
        ";
        // line 11
        echo $this->sandbox->ensureToStringAllowed(($context["content_html"] ?? null), 11, $this->source);
        echo "
        ";
        // line 12
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 12, $this->source), "html", null, true);
        echo "
        <br/>
        ";
        // line 14
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 14, $this->source), "html", null, true);
        echo "
    </body>
</html>

@font-face {
    font-family: 'Noto Sans';
    font-style: normal;
    font-weight: 400;
    src: url(http://eclecticgeek.com/dompdf/fonts/cjk/fireflysung.ttf) format('truetype');
}

body {
    font-family: Noto Sans, sans-serif;
    font-size: 13px;
}";
    }

    public function getTemplateName()
    {
        return "__string_template__907c20fdeb9c6056ccf7acb38c078deea5093d70f5c481f172fe6d6cd61adcc0";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 14,  81 => 12,  77 => 11,  70 => 7,  62 => 1,);
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
        </style>
    </head>
    <body>
        {{ content_html|raw }}
        {{ title }}
        <br/>
        {{ content }}
    </body>
</html>

@font-face {
    font-family: 'Noto Sans';
    font-style: normal;
    font-weight: 400;
    src: url(http://eclecticgeek.com/dompdf/fonts/cjk/fireflysung.ttf) format('truetype');
}

body {
    font-family: Noto Sans, sans-serif;
    font-size: 13px;
}", "__string_template__907c20fdeb9c6056ccf7acb38c078deea5093d70f5c481f172fe6d6cd61adcc0", "");
    }
}
