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

/* C:\xampp\htdocs\tdh/themes/tttttdh/pages/home.htm */
class __TwigTemplate_232a5cccc669c07161f329c5d701917e2e638bf0903c30f7a589629485b0d638 extends \Twig\Template
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
        $tags = array("set" => 1, "partial" => 10);
        $filters = array("escape" => 5);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'partial'],
                ['escape'],
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
<div class=\"main__content\" id=\"main\">
    <div class=\"container\">
        ";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["CurrentLanguage"] ?? null), 5, $this->source), "html", null, true);
        echo "
        <div class=\"main__content-inner\" id=\"rowGrid\">
            <div class=\"main\">
                <div class=\"main__inner\">
                    
                    ";
        // line 10
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home_main"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "                    
                </div>
                
            </div>
            <div class=\"left\">
                <div class=\"left__inner\">
                    ";
        // line 17
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home_left"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 18
        echo "                </div>
            </div>
            <div class=\"right\">
                <div class=\"right__inner\">
                    ";
        // line 22
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home_right"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 23
        echo "                </div>
            </div>
        </div>
    </div>
</div>


<div class=\"container\">
    <div class=\"channel\">
        <div class=\"channel__inner\">
            <div class=\"chanel__items\">
                <div class=\"items\">
                    <div class=\"chan__pic1\">
                        <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 36), "Altyn_asyr_link", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 36), "Altyn_asyr", [], "any", false, false, true, 36), "path", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
        echo "\" alt=\"channel\">
                        </a>
                    </div>
                </div>
                <div class=\"items\">
                    <div class=\"chan__pic1\">
                        <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 42), "Yaslyk_link", [], "any", false, false, true, 42), "path", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
        echo "\">
                            <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 43), "Yaslyk_link", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
        echo "\" alt=\"channel\">
                        </a>
                    </div>
                </div>
                <div class=\"items\">
                    <div class=\"chan__pic1\">
                        <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 49), "Miras_link", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        echo "\">
                            <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 50), "Miras", [], "any", false, false, true, 50), "path", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
        echo "\" alt=\"channel\">
                        </a>
                    </div>
                </div>
                <div class=\"items\">
                    <div class=\"chan__pic1\">
                        <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 56), "Turkmenistan_sport_link", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
        echo "\">
                            <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 57), "Turkmenistan_sport", [], "any", false, false, true, 57), "path", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
        echo "\" alt=\"channel\">
                        </a>
                    </div>
                </div>
                <div class=\"items\">
                    <div class=\"chan__pic1\">
                        <a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 63), "Turkmen_owazy_link", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
        echo "\">
                            <img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 64), "Turkmen_owazy", [], "any", false, false, true, 64), "path", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
        echo "\" alt=\"channel\">
                        </a>
                    </div>
                </div>
                <div class=\"items\">
                    <div class=\"chan__pic1\">
                        <a href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 70), "Asgabat_link", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
        echo "\">
                            <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 71), "Asgabat", [], "any", false, false, true, 71), "path", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
        echo "\" alt=\"channel\">
                        </a>
                    </div>
                </div>
            </div><!-- chanel__items -->                
        </div>  <!-- channel__inner -->         
    </div><!-- channel -->        
</div>  <!-- container -->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\tdh/themes/tttttdh/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 71,  181 => 70,  172 => 64,  168 => 63,  159 => 57,  155 => 56,  146 => 50,  142 => 49,  133 => 43,  129 => 42,  118 => 36,  103 => 23,  99 => 22,  93 => 18,  89 => 17,  81 => 11,  77 => 10,  69 => 5,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set CurrentLanguage = SelectedLanguage %}

<div class=\"main__content\" id=\"main\">
    <div class=\"container\">
        {{ CurrentLanguage }}
        <div class=\"main__content-inner\" id=\"rowGrid\">
            <div class=\"main\">
                <div class=\"main__inner\">
                    
                    {% partial 'home_main' %}
                    
                </div>
                
            </div>
            <div class=\"left\">
                <div class=\"left__inner\">
                    {% partial 'home_left' %}
                </div>
            </div>
            <div class=\"right\">
                <div class=\"right__inner\">
                    {% partial 'home_right' %}
                </div>
            </div>
        </div>
    </div>
</div>


<div class=\"container\">
    <div class=\"channel\">
        <div class=\"channel__inner\">
            <div class=\"chanel__items\">
                <div class=\"items\">
                    <div class=\"chan__pic1\">
                        <a href=\"{{this.theme.Altyn_asyr_link}}\"><img src=\"{{this.theme.Altyn_asyr.path}}\" alt=\"channel\">
                        </a>
                    </div>
                </div>
                <div class=\"items\">
                    <div class=\"chan__pic1\">
                        <a href=\"{{this.theme.Yaslyk_link.path}}\">
                            <img src=\"{{this.theme.Yaslyk_link}}\" alt=\"channel\">
                        </a>
                    </div>
                </div>
                <div class=\"items\">
                    <div class=\"chan__pic1\">
                        <a href=\"{{this.theme.Miras_link}}\">
                            <img src=\"{{this.theme.Miras.path}}\" alt=\"channel\">
                        </a>
                    </div>
                </div>
                <div class=\"items\">
                    <div class=\"chan__pic1\">
                        <a href=\"{{this.theme.Turkmenistan_sport_link}}\">
                            <img src=\"{{this.theme.Turkmenistan_sport.path}}\" alt=\"channel\">
                        </a>
                    </div>
                </div>
                <div class=\"items\">
                    <div class=\"chan__pic1\">
                        <a href=\"{{this.theme.Turkmen_owazy_link}}\">
                            <img src=\"{{this.theme.Turkmen_owazy.path}}\" alt=\"channel\">
                        </a>
                    </div>
                </div>
                <div class=\"items\">
                    <div class=\"chan__pic1\">
                        <a href=\"{{this.theme.Asgabat_link}}\">
                            <img src=\"{{this.theme.Asgabat.path}}\" alt=\"channel\">
                        </a>
                    </div>
                </div>
            </div><!-- chanel__items -->                
        </div>  <!-- channel__inner -->         
    </div><!-- channel -->        
</div>  <!-- container -->", "C:\\xampp\\htdocs\\tdh/themes/tttttdh/pages/home.htm", "");
    }
}
