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

/* C:\xampp\htdocs\tdh/themes/TDH New/partials/home_colleage_news.htm */
class __TwigTemplate_0fd92592ff725362756d9cfda3cc5acdeb523dc91fb292fd8be09b9ca552482f extends \Twig\Template
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
        $tags = array("if" => 6, "for" => 9, "set" => 11);
        $filters = array("escape" => 3, "split" => 11, "page" => 12);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape', 'split', 'page'],
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
        echo "<div class=\"right\">
    <div class=\"title\">
        ";
        // line 3
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cat"] ?? null), "name", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "
    </div>
    
    ";
        // line 6
        if ((($context["imageType"] ?? null) == "horizontal")) {
            // line 7
            echo "        <div class=\"scroll\">
            
            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["collegueNews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 10
                echo "            <div class=\"right_news\">
                ";
                // line 11
                $context["foo"] = twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 11), 11, $this->source), ":");
                // line 12
                echo "                <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
                echo "/post/";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
                echo "\" class=\"right_title\">
                    ";
                // line 13
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["foo"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), 13, $this->source), "html", null, true);
                echo "
                </a>
                <div class=\"right_text\">
                    ";
                // line 16
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["foo"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[1] ?? null) : null), 16, $this->source), "html", null, true);
                echo "
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "        </div>
    
    ";
        } else {
            // line 23
            echo "
        <div class=\"scroll_vertical\">
                
            ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["collegueNews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 27
                echo "            <div class=\"right_news\">
                ";
                // line 28
                $context["foo"] = twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 28), 28, $this->source), ":");
                // line 29
                echo "                <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
                echo "/post/";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
                echo "\" class=\"right_title\">
                    ";
                // line 30
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["foo"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null), 30, $this->source), "html", null, true);
                echo "
                </a>
                <div class=\"right_text\">
                    ";
                // line 33
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["foo"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[1] ?? null) : null), 33, $this->source), "html", null, true);
                echo "
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "        </div>
    
    ";
        }
        // line 40
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\tdh/themes/TDH New/partials/home_colleage_news.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 40,  156 => 37,  146 => 33,  140 => 30,  131 => 29,  129 => 28,  126 => 27,  122 => 26,  117 => 23,  112 => 20,  102 => 16,  96 => 13,  87 => 12,  85 => 11,  82 => 10,  78 => 9,  74 => 7,  72 => 6,  66 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"right\">
    <div class=\"title\">
        {{cat.name}}
    </div>
    
    {% if imageType == \"horizontal\" %}
        <div class=\"scroll\">
            
            {% for item in collegueNews %}
            <div class=\"right_news\">
                {% set foo = item.title|split(':') %}
                <a href=\"{{ ''| page}}/post/{{item.id}}/{{item.slug}}\" class=\"right_title\">
                    {{foo[0]}}
                </a>
                <div class=\"right_text\">
                    {{foo[1]}}
                </div>
            </div>
            {% endfor %}
        </div>
    
    {% else %}

        <div class=\"scroll_vertical\">
                
            {% for item in collegueNews %}
            <div class=\"right_news\">
                {% set foo = item.title|split(':') %}
                <a href=\"{{ ''| page}}/post/{{item.id}}/{{item.slug}}\" class=\"right_title\">
                    {{foo[0]}}
                </a>
                <div class=\"right_text\">
                    {{foo[1]}}
                </div>
            </div>
            {% endfor %}
        </div>
    
    {% endif %}
</div>", "C:\\xampp\\htdocs\\tdh/themes/TDH New/partials/home_colleage_news.htm", "");
    }
}
