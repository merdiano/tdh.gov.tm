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

/* C:\xampp\htdocs\tdh/themes/tttttdh/layouts/default.htm */
class __TwigTemplate_412708da51fca38cbe388907770e70bed7b31fb097457e1326012a23578f8388 extends \Twig\Template
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
        $tags = array("partial" => 18, "page" => 19);
        $filters = array("theme" => 8);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'page'],
                ['theme'],
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
<html lang=\"en\">

    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>TDH</title>
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/slick-theme.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/slick.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/main.css");
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/jquery.fancybox.min.css");
        echo "\">
        <link
            href=\"https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap\"
            rel=\"stylesheet\">
    </head>

    <body>
        ";
        // line 18
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 19
        echo "            ";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 20
        echo "        ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 21
        echo "    </body>

    <script src=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.js");
        echo "\"></script>
    <script src=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/slick.min.js");
        echo "\"></script>

    <script src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\"></script>

    <script src=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.fancybox.min.js");
        echo "\"></script>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\tdh/themes/tttttdh/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 28,  118 => 26,  113 => 24,  109 => 23,  105 => 21,  100 => 20,  97 => 19,  93 => 18,  83 => 11,  79 => 10,  75 => 9,  71 => 8,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <title>TDH</title>
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/slick-theme.css'|theme }}\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/slick.css'|theme }}\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/main.css'|theme }}\">
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/jquery.fancybox.min.css'|theme }}\">
        <link
            href=\"https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap\"
            rel=\"stylesheet\">
    </head>

    <body>
        {% partial 'header' %}
            {% page %}
        {% partial 'footer' %}
    </body>

    <script src=\"{{ 'assets/js/jquery.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/slick.min.js'|theme }}\"></script>

    <script src=\"{{ 'assets/js/main.js'|theme }}\"></script>

    <script src=\"{{ 'assets/js/jquery.fancybox.min.js'|theme }}\"></script>

</html>", "C:\\xampp\\htdocs\\tdh/themes/tttttdh/layouts/default.htm", "");
    }
}
