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

/* __string_template__945152cfe389ed37612afa9685318e79abaf8c11d078316db06d4d33af3594a0 */
class __TwigTemplate_1e49e842d2818fb85f4729c47337be8566647d8881a9f4c0ccf1d77d25123007 extends \Twig\Template
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
        $filters = array("raw" => 7, "escape" => 13);
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
        // line 12
        echo $this->sandbox->ensureToStringAllowed(($context["content_html"] ?? null), 12, $this->source);
        echo "
        <h1>";
        // line 13
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 13, $this->source), "html", null, true);
        echo "</h1>
        
        <h2>Hello</h2>
        
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "__string_template__945152cfe389ed37612afa9685318e79abaf8c11d078316db06d4d33af3594a0";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 13,  78 => 12,  70 => 7,  62 => 1,);
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
        <h1>{{ title }}</h1>
        
        <h2>Hello</h2>
        
    </body>
</html>", "__string_template__945152cfe389ed37612afa9685318e79abaf8c11d078316db06d4d33af3594a0", "");
    }
}
