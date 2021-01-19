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

/* C:\xampp\htdocs\tdh/themes/TDH New/layouts/default.htm */
class __TwigTemplate_a36b22375eb79dbc70220360ca955975336d682e111058246c66eec70b232ce5 extends \Twig\Template
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
        $tags = array("partial" => 22, "page" => 23, "framework" => 38);
        $filters = array("escape" => 7, "default" => 7, "theme" => 14);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'page', 'framework'],
                ['escape', 'default', 'theme'],
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
<html lang=\"ru\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, true, 7), "meta_title", [], "any", true, true, true, 7)) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, true, 7), "meta_title", [], "any", false, false, true, 7), 7, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 7), "site", [], "any", false, false, true, 7), 7, $this->source))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 7), "site", [], "any", false, false, true, 7))), "html", null, true);
        echo "\">
    <meta name=\"description\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 8), "meta_description", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "\">
    <meta name=\"canonical\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 9), "meta_canonical", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "\">
    <meta name=\"keywords\" content=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 10), "meta_keywords", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "\">
    <title>TDH</title>
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/slick.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/slick-theme.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/lightpick.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/jquery.fancybox.min.css");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/main.css");
        echo "\">

</head>
<body>
    ";
        // line 22
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 24
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 25
        echo "
    
</body>



    <script src=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.js");
        echo "\"></script>
    <script src=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/moment.min.js");
        echo "\"></script>
    <script src=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/slick.min.js");
        echo "\"></script>
    <script src=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/news-slider.js");
        echo "\"></script>
    <script src=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.fancybox.min.js");
        echo "\"></script>
    <script src=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\"></script>
    
    ";
        // line 38
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework'.($_minify ? '-min' : '').'.js"></script>'.PHP_EOL;
        unset($_minify);
        // line 39
        echo "    <!-- <script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\"></script> -->

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\tdh/themes/TDH New/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 39,  157 => 38,  152 => 36,  148 => 35,  144 => 34,  140 => 33,  136 => 32,  132 => 31,  124 => 25,  119 => 24,  116 => 23,  112 => 22,  105 => 18,  101 => 17,  97 => 16,  93 => 15,  89 => 14,  82 => 10,  78 => 9,  74 => 8,  70 => 7,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"ru\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"title\" content=\"{{ this.page.meta_title | default(this.theme.site)}}\">
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
    <meta name=\"canonical\" content=\"{{ this.page.meta_canonical }}\">
    <meta name=\"keywords\" content=\"{{ this.page.meta_keywords }}\">
    <title>TDH</title>
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/slick.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/slick-theme.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/lightpick.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/jquery.fancybox.min.css'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/main.css'|theme }}\">

</head>
<body>
    {% partial 'header' %}
        {% page %}
    {% partial 'footer' %}

    
</body>



    <script src=\"{{ 'assets/js/jquery.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/moment.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/slick.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/news-slider.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/jquery.fancybox.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/main.js'|theme }}\"></script>
    
    {% framework %}
    <!-- <script src=\"{{ 'assets/js/main.js'|theme }}\"></script> -->

</html>", "C:\\xampp\\htdocs\\tdh/themes/TDH New/layouts/default.htm", "");
    }
}
