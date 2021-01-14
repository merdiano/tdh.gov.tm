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

/* C:\xampp\htdocs\tdh/themes/TDH New/pages/home.htm */
class __TwigTemplate_270a5830efdb3c4ba64c647eb7c005c4a7f7bb6b2828fde8dd9e11e519b7a49a extends \Twig\Template
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
        $tags = array("set" => 1, "partial" => 7);
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'partial'],
                [],
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
        $context["CurrentLanguage"] = ($context["SelectedLanguage"] ?? null);
        // line 2
        echo "

<!-- Intro ===================== -->
<div class=\"auto_container\" id=\"intro\">
    <div class=\"intro\">
        ";
        // line 7
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home_intro"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 8
        echo "        <div class=\"top_news\">
            ";
        // line 9
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home_last_news"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "  
            ";
        // line 10
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home_colleage_news"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo "  
        </div>
    </div>
</div>


";
        // line 16
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home_categories"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\tdh/themes/TDH New/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 16,  84 => 10,  78 => 9,  75 => 8,  71 => 7,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set CurrentLanguage = SelectedLanguage %}


<!-- Intro ===================== -->
<div class=\"auto_container\" id=\"intro\">
    <div class=\"intro\">
        {% partial 'home_intro' %}
        <div class=\"top_news\">
            {% partial 'home_last_news' %}  
            {% partial 'home_colleage_news' %}  
        </div>
    </div>
</div>


{% partial 'home_categories' %}", "C:\\xampp\\htdocs\\tdh/themes/TDH New/pages/home.htm", "");
    }
}
