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

/* C:\xampp\htdocs\tdh/themes/tttttdh/partials/home_right.htm */
class __TwigTemplate_1d21bebe9e0c8bb914ffe071bfae07975c8ac7ddfe5d1b27692b2986d3d88b54 extends \Twig\Template
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
        $tags = array("for" => 13);
        $filters = array("escape" => 15);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
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
        echo "<div class=\"right__block\">
    <div class=\"title__c \">
        Интересные ссылки
    </div>
    <button class=\"btn__prev\">
        <img src=\"images/prev blue.svg\" alt=\"\">
    </button>
    <button class=\"btn__next\">
        <img src=\"images/next blue.svg\" alt=\"\">
    </button>
    <hr>
    <div class=\"amazing\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["interesting"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 14
            echo "            <div class=\"amazing__pic1\">
                <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, true, 16), "getPath", [], "method", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "\" alt=\"\">
                    
                </a>  
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        
    </div>
    <!-- amazing -->
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\tdh/themes/tttttdh/partials/home_right.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 21,  87 => 16,  83 => 15,  80 => 14,  76 => 13,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"right__block\">
    <div class=\"title__c \">
        Интересные ссылки
    </div>
    <button class=\"btn__prev\">
        <img src=\"images/prev blue.svg\" alt=\"\">
    </button>
    <button class=\"btn__next\">
        <img src=\"images/next blue.svg\" alt=\"\">
    </button>
    <hr>
    <div class=\"amazing\">
        {% for item in interesting %}
            <div class=\"amazing__pic1\">
                <a href=\"{{ item.url }}\">
                    <img src=\"{{ item.image.getPath() }}\" alt=\"\">
                    
                </a>  
            </div>
        {% endfor %}
        
    </div>
    <!-- amazing -->
</div>", "C:\\xampp\\htdocs\\tdh/themes/tttttdh/partials/home_right.htm", "");
    }
}
