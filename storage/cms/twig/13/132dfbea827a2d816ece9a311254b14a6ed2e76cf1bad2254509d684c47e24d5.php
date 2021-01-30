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

/* C:\xampp\htdocs\tdh/themes/TDH New/partials/home_last_news.htm */
class __TwigTemplate_048abbe479d92e96e4df060cc02596d0bf8c1159c1d06f2c8977531ea5260fe0 extends \Twig\Template
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
        $tags = array("if" => 5, "for" => 7);
        $filters = array("escape" => 11, "date" => 11, "page" => 15);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'date', 'page'],
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
        echo "<div class=\"left\">
    <div class=\"title\">
        Последние новости
    </div>
    ";
        // line 5
        if ((($context["imageType"] ?? null) == "horizontal")) {
            // line 6
            echo "        <div class=\"scroll\">
            ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["lastNews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 8
                echo "            <div class=\"top-news_info\">
                <div class=\"left_date\">
                    
                    ";
                // line 11
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "published_at", [], "any", false, false, true, 11), 11, $this->source), "d.m"), "html", null, true);
                echo "
                </div>
                <div class=\"left_info\">
                    <div class=\"left_title\">
                        <a href=\"";
                // line 15
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
                echo "/post/";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, true, 15), "name", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                echo "</a>
                    </div>
                    <div class=\"top-news_text\">
                        ";
                // line 18
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
                echo "
                    </div>
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "   
        </div>
    
    ";
        } else {
            // line 26
            echo "
        <div class=\"scroll_vertical\">
            ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["lastNews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 29
                echo "            <div class=\"top-news_info\">
                <div class=\"left_date\">
                    
                    ";
                // line 32
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "published_at", [], "any", false, false, true, 32), 32, $this->source), "d.m"), "html", null, true);
                echo "
                </div>
                <div class=\"left_info\">
                    <div class=\"left_title\">
                        <a href=\"";
                // line 36
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
                echo "/post/";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, true, 36), "name", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
                echo "</a>
                    </div>
                    <div class=\"top-news_text\">
                        ";
                // line 39
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                echo "
                    </div>
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "   
        </div>
    ";
        }
        // line 46
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\tdh/themes/TDH New/partials/home_last_news.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 46,  161 => 43,  150 => 39,  138 => 36,  131 => 32,  126 => 29,  122 => 28,  118 => 26,  112 => 22,  101 => 18,  89 => 15,  82 => 11,  77 => 8,  73 => 7,  70 => 6,  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"left\">
    <div class=\"title\">
        Последние новости
    </div>
    {% if imageType == \"horizontal\" %}
        <div class=\"scroll\">
            {% for item in lastNews %}
            <div class=\"top-news_info\">
                <div class=\"left_date\">
                    
                    {{ item.published_at| date(\"d.m\") }}
                </div>
                <div class=\"left_info\">
                    <div class=\"left_title\">
                        <a href=\"{{ ''| page}}/post/{{item.id}}/{{item.slug}}\">{{item.category.name}}</a>
                    </div>
                    <div class=\"top-news_text\">
                        {{item.title}}
                    </div>
                </div>
            </div>
            {% endfor %}   
        </div>
    
    {% else %}

        <div class=\"scroll_vertical\">
            {% for item in lastNews %}
            <div class=\"top-news_info\">
                <div class=\"left_date\">
                    
                    {{ item.published_at| date(\"d.m\") }}
                </div>
                <div class=\"left_info\">
                    <div class=\"left_title\">
                        <a href=\"{{ ''| page}}/post/{{item.id}}/{{item.slug}}\">{{item.category.name}}</a>
                    </div>
                    <div class=\"top-news_text\">
                        {{item.title}}
                    </div>
                </div>
            </div>
            {% endfor %}   
        </div>
    {% endif %}
</div>", "C:\\xampp\\htdocs\\tdh/themes/TDH New/partials/home_last_news.htm", "");
    }
}
