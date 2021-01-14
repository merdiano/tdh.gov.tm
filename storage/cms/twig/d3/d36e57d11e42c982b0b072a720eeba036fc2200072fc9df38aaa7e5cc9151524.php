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

/* C:\xampp\htdocs\tdh/themes/tttttdh/pages/photos.htm */
class __TwigTemplate_e4be765ad43fa0add11007407addf723dccf308d4ccc3649fe98875b2cf0016b extends \Twig\Template
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
        $tags = array("for" => 10);
        $filters = array("escape" => 11);
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
        echo "<section class=\"gallery\">
    <div class=\"container\">
        <div class=\"gallery__outer\">
            <div class=\"title padding__left\">
                Фоторпортажи
            </div>
            <hr>
            
            <div class=\"gallery__inner\">
               ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["photos"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "image", [], "any", false, false, true, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            echo "                    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["item"], 11, $this->source), "html", null, true);
            echo "
               <a class=\"gallery__card\" href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "path", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "\" data-fancybox=\"images\"
                    data-caption=\"Name of the picture\">
                    <img src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "thumb", [0 => 500, 1 => 500], "method", false, false, true, 14), 14, $this->source), "html", null, true);
            echo "\" alt=\"\">
                </a>
   
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                
            </div>

            
        </div><!-- gallery__outer -->
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\tdh/themes/tttttdh/pages/photos.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 18,  87 => 14,  82 => 12,  77 => 11,  73 => 10,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"gallery\">
    <div class=\"container\">
        <div class=\"gallery__outer\">
            <div class=\"title padding__left\">
                Фоторпортажи
            </div>
            <hr>
            
            <div class=\"gallery__inner\">
               {% for item in photos[0].image %}
                    {{item}}
               <a class=\"gallery__card\" href=\"{{item.path}}\" data-fancybox=\"images\"
                    data-caption=\"Name of the picture\">
                    <img src=\"{{item.thumb(500,500)}}\" alt=\"\">
                </a>
   
                {% endfor %}
                
            </div>

            
        </div><!-- gallery__outer -->
    </div>
</section>", "C:\\xampp\\htdocs\\tdh/themes/tttttdh/pages/photos.htm", "");
    }
}
