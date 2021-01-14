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

/* C:\xampp\htdocs\tdh/themes/tttttdh/partials/home_left.htm */
class __TwigTemplate_a1324cb6c98bb808a6d9f22e222a86d26678967bd14985b476f74f5d878fbbda extends \Twig\Template
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
        $tags = array("component" => 1, "for" => 13);
        $filters = array("escape" => 4, "raw" => 22, "date" => 26);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component', 'for'],
                ['escape', 'raw', 'date'],
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("newsPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo "
    <div class=\"title__b \">
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cat"] ?? null), "name", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "
    </div>
    <button class=\"btn__prev\">
        <img src=\"images/prev blue.svg\" alt=\"\">
    </button>
    <button class=\"btn__next\">
        <img src=\"images/next blue.svg\" alt=\"\">
    </button>

";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts_filtered"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 14
            echo " 
    <hr>
    <div class=\"news\">
        <div class=\"left__title\">
            <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "</a>
            aa
        </div>
        <div class=\"left__text\">
            ";
            // line 22
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "introductory", [], "any", false, false, true, 22), 22, $this->source);
            echo " 
        </div>
        <div class=\"left__end\">
            <div class=\"left__time\">
                ";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, true, 26), 26, $this->source), "d.m.Y"), "html", null, true);
            echo "
            </div>
            <div class=\"left__link\">
                <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo "\">Узнать большеrrrrrrrrrrrr</a>
            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\tdh/themes/tttttdh/partials/home_left.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 29,  108 => 26,  101 => 22,  92 => 18,  86 => 14,  82 => 13,  70 => 4,  66 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% component \"newsPosts\" %}

    <div class=\"title__b \">
        {{cat.name}}
    </div>
    <button class=\"btn__prev\">
        <img src=\"images/prev blue.svg\" alt=\"\">
    </button>
    <button class=\"btn__next\">
        <img src=\"images/next blue.svg\" alt=\"\">
    </button>

{% for post in posts_filtered %}
 
    <hr>
    <div class=\"news\">
        <div class=\"left__title\">
            <a href=\"{{post.url}}\"> {{ post.title }}</a>
            aa
        </div>
        <div class=\"left__text\">
            {{ post.introductory|raw }} 
        </div>
        <div class=\"left__end\">
            <div class=\"left__time\">
                {{ post.published_at| date(\"d.m.Y\") }}
            </div>
            <div class=\"left__link\">
                <a href=\"{{post.url}}\">Узнать большеrrrrrrrrrrrr</a>
            </div>
        </div>
    </div>
{% endfor %}", "C:\\xampp\\htdocs\\tdh/themes/tttttdh/partials/home_left.htm", "");
    }
}
