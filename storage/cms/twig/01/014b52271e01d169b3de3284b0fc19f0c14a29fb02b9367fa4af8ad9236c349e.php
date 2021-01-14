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

/* C:\xampp\htdocs\tdh/themes/tttttdh/pages/gallery.htm */
class __TwigTemplate_29cb777f8b5f980bb6113b50437c50b3ad64c404f6d130168f3793718dc370b5 extends \Twig\Template
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
        $tags = array("for" => 9);
        $filters = array("page" => 10, "escape" => 11, "date" => 17);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['page', 'escape', 'date'],
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
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["gallery"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 10
            echo "                <a class=\"gallery__card\" href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("photos", ["category_id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 10)]);
            echo "\">
                    <img src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "cat_image", [], "any", false, false, true, 11), "path", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "\" alt=\"\">
                    <div class=\"pic__info\">
                        <div class=\"text__one\">
                            ";
            // line 14
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title_tm", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            echo "
                        </div>
                        <div class=\"text__two\">
                            ";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "published_at", [], "any", false, false, true, 17), 17, $this->source), "d.m.Y"), "html", null, true);
            echo "
                        </div>
                    </div>
                </a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                
            </div>
        </div><!-- gallery__outer -->
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\tdh/themes/tttttdh/pages/gallery.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 22,  93 => 17,  87 => 14,  81 => 11,  76 => 10,  72 => 9,  62 => 1,);
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
                {% for item in gallery %}
                <a class=\"gallery__card\" href=\"{{ 'photos'|page({ category_id: item.id })}}\">
                    <img src=\"{{item.cat_image.path}}\" alt=\"\">
                    <div class=\"pic__info\">
                        <div class=\"text__one\">
                            {{ item.title_tm }}
                        </div>
                        <div class=\"text__two\">
                            {{ item.published_at| date(\"d.m.Y\") }}
                        </div>
                    </div>
                </a>
                {% endfor %}
                
            </div>
        </div><!-- gallery__outer -->
    </div>
</section>", "C:\\xampp\\htdocs\\tdh/themes/tttttdh/pages/gallery.htm", "");
    }
}
