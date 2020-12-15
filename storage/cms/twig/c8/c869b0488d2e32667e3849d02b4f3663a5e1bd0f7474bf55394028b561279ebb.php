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
        $tags = array("partial" => 7);
        $filters = array("escape" => 33);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
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
        echo "<div class=\"main__content\" id=\"main\">
    <div class=\"container\">
        <div class=\"main__content-inner\" id=\"rowGrid\">
            <div class=\"main\">
                <div class=\"main__inner\">
                    
                    ";
        // line 7
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home_main"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 8
        echo "                    
                </div>
                
            </div>
            <div class=\"left\">
                <div class=\"left__inner\">
                    ";
        // line 14
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home_left"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 15
        echo "                </div>
            </div>
            <div class=\"right\">
                <div class=\"right__inner\">
                    ";
        // line 19
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home_right"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 20
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
        // line 33
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 33), "Altyn_asyr_link", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 33), "Altyn_asyr", [], "any", false, false, true, 33), "path", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
        echo "\" alt=\"channel\">
                        </a>
                    </div>
                </div>
                <div class=\"items\">
                    <div class=\"chan__pic1\">
                        <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 39), "Yaslyk_link", [], "any", false, false, true, 39), "path", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        echo "\">
                            <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 40), "Yaslyk_link", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
        echo "\" alt=\"channel\">
                        </a>
                    </div>
                </div>
                <div class=\"items\">
                    <div class=\"chan__pic1\">
                        <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 46), "Miras_link", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
        echo "\">
                            <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 47), "Miras", [], "any", false, false, true, 47), "path", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
        echo "\" alt=\"channel\">
                        </a>
                    </div>
                </div>
                <div class=\"items\">
                    <div class=\"chan__pic1\">
                        <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 53), "Turkmenistan_sport_link", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
        echo "\">
                            <img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 54), "Turkmenistan_sport", [], "any", false, false, true, 54), "path", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
        echo "\" alt=\"channel\">
                        </a>
                    </div>
                </div>
                <div class=\"items\">
                    <div class=\"chan__pic1\">
                        <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 60), "Turkmen_owazy_link", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        echo "\">
                            <img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 61), "Turkmen_owazy", [], "any", false, false, true, 61), "path", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
        echo "\" alt=\"channel\">
                        </a>
                    </div>
                </div>
                <div class=\"items\">
                    <div class=\"chan__pic1\">
                        <a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 67), "Asgabat_link", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
        echo "\">
                            <img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 68), "Asgabat", [], "any", false, false, true, 68), "path", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
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
        return array (  178 => 68,  174 => 67,  165 => 61,  161 => 60,  152 => 54,  148 => 53,  139 => 47,  135 => 46,  126 => 40,  122 => 39,  111 => 33,  96 => 20,  92 => 19,  86 => 15,  82 => 14,  74 => 8,  70 => 7,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"main__content\" id=\"main\">
    <div class=\"container\">
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
