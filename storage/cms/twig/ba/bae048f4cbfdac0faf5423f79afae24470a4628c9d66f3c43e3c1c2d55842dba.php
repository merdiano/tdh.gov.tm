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

/* C:\xampp\htdocs\tdh/themes/TDH New/pages/search.htm */
class __TwigTemplate_6688a4c475baac3770416e83031bc2160aca9290f1d92791e3a4de43c7b02e8b extends \Twig\Template
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
        $tags = array("for" => 18, "if" => 44);
        $filters = array("escape" => 22, "date" => 22, "theme" => 49, "round" => 62);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape', 'date', 'theme', 'round'],
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
        echo "<section class=\"section\" id=\"intro\">
    <div class=\"auto_container\">
        <div class=\"which_page\">
            <div class=\"page_name\">
                Главная
            </div>
            <div class=\"slash\">\\</div>
            <div class=\"page_name\">
                Результат поиска
            </div>
        </div>
        <div class=\"section_wrapper\">
            <div class=\"center\">
                <div class=\"title\">
                    Результат поиска
                </div>
                <div class=\"main_news\">
                    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["newsPosts"] ?? null), "posts", [], "any", false, false, true, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 19
            echo "                    <div class=\"main_news-item\">
                        <div class=\"main_news-date\">
                            <span>
                                ";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "published_at", [], "any", false, false, true, 22), 22, $this->source), "d.m"), "html", null, true);
            echo "
                            </span>
                            <span>
                                ";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "published_at", [], "any", false, false, true, 25), 25, $this->source), "Y"), "html", null, true);
            echo "
                            </span>
                        </div>
                        <div class=\"main_news-content\">
                            <div class=\"main_news-title\">

                                ";
            // line 31
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "
                            </div>
                            <div class=\"main_news-text\">
                                
                                ";
            // line 35
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "introductory", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "       
                    
                    
                </div>

                ";
        // line 44
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["newsPosts"] ?? null), "posts", [], "any", false, false, true, 44), "total", [], "any", false, false, true, 44) > 10)) {
            // line 45
            echo "                    <div class=\"section_end\">
                        <div class=\"page_num\">
                            <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["newsPosts"] ?? null), "posts", [], "any", false, false, true, 47), "previousPageUrl", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, ("&q=" . $this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 47, $this->source)), "html", null, true);
            echo "\">
                                <div class=\"direct_btn\">
                                        <img src=\"";
            // line 49
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/left.svg");
            echo "\" alt=\"\">
                                </div>
                            </a>
                            <form action=\"\" method=\"GET\">
                                <input type=\"text\" name=\"page\" value=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["newsPosts"] ?? null), "posts", [], "any", false, false, true, 53), "currentPage", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
            echo "\" class=\"input_page\">
                            </form>
                            <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["newsPosts"] ?? null), "posts", [], "any", false, false, true, 55), "nextPageUrl", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, ("&q=" . $this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 55, $this->source)), "html", null, true);
            echo "\">
                                <div class=\"direct_btn\">
                                        <img src=\"";
            // line 57
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/right.svg");
            echo "\" alt=\"\">
                                </div>
                            </a>
                        </div>
                        <div class=\"page_list\">
                            ";
            // line 62
            echo twig_escape_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["newsPosts"] ?? null), "posts", [], "any", false, false, true, 62), "total", [], "any", false, false, true, 62) / twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["newsPosts"] ?? null), "posts", [], "any", false, false, true, 62), "perPage", [], "any", false, false, true, 62)), 0, "ceil"), "html", null, true);
            echo " страниц
                        </div>
                    </div>
                ";
        }
        // line 66
        echo "            </div>
            <div class=\"right_side full\">
                <div class=\"title\">
                    Поиск
                </div>
                <form class=\"form\" method=\"GET\">
                    <div class=\"input\">
                        <input type=\"text\" name=\"q\" placeholder=\"Поиск\">
                    </div>
                    <button class=\"search\">
                            <img src=\"";
        // line 76
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/lupa.svg");
        echo "\" alt=\"\">
                    </button>
                </form>
                <div class=\"found_news\">
                    По вашему запросу было найдено <span class=\"quantity_num\">";
        // line 80
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["newsPosts"] ?? null), "posts", [], "any", false, false, true, 80), "total", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
        echo "</span> статей
                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\tdh/themes/TDH New/pages/search.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 80,  187 => 76,  175 => 66,  168 => 62,  160 => 57,  154 => 55,  149 => 53,  142 => 49,  136 => 47,  132 => 45,  130 => 44,  123 => 39,  112 => 35,  105 => 31,  96 => 25,  90 => 22,  85 => 19,  81 => 18,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"section\" id=\"intro\">
    <div class=\"auto_container\">
        <div class=\"which_page\">
            <div class=\"page_name\">
                Главная
            </div>
            <div class=\"slash\">\\</div>
            <div class=\"page_name\">
                Результат поиска
            </div>
        </div>
        <div class=\"section_wrapper\">
            <div class=\"center\">
                <div class=\"title\">
                    Результат поиска
                </div>
                <div class=\"main_news\">
                    {% for item in newsPosts.posts %}
                    <div class=\"main_news-item\">
                        <div class=\"main_news-date\">
                            <span>
                                {{ item.published_at| date(\"d.m\") }}
                            </span>
                            <span>
                                {{ item.published_at| date(\"Y\") }}
                            </span>
                        </div>
                        <div class=\"main_news-content\">
                            <div class=\"main_news-title\">

                                {{item.title}}
                            </div>
                            <div class=\"main_news-text\">
                                
                                {{item.introductory}}
                            </div>
                        </div>
                    </div>
                {% endfor %}       
                    
                    
                </div>

                {% if newsPosts.posts.total > 10 %}
                    <div class=\"section_end\">
                        <div class=\"page_num\">
                            <a href=\"{{newsPosts.posts.previousPageUrl}}{{'&q='~query}}\">
                                <div class=\"direct_btn\">
                                        <img src=\"{{ 'assets/images/left.svg'|theme }}\" alt=\"\">
                                </div>
                            </a>
                            <form action=\"\" method=\"GET\">
                                <input type=\"text\" name=\"page\" value=\"{{newsPosts.posts.currentPage}}\" class=\"input_page\">
                            </form>
                            <a href=\"{{newsPosts.posts.nextPageUrl}}{{'&q='~query}}\">
                                <div class=\"direct_btn\">
                                        <img src=\"{{ 'assets/images/right.svg'|theme }}\" alt=\"\">
                                </div>
                            </a>
                        </div>
                        <div class=\"page_list\">
                            {{(newsPosts.posts.total/newsPosts.posts.perPage)|round(0,\"ceil\")}} страниц
                        </div>
                    </div>
                {% endif %}
            </div>
            <div class=\"right_side full\">
                <div class=\"title\">
                    Поиск
                </div>
                <form class=\"form\" method=\"GET\">
                    <div class=\"input\">
                        <input type=\"text\" name=\"q\" placeholder=\"Поиск\">
                    </div>
                    <button class=\"search\">
                            <img src=\"{{ 'assets/images/lupa.svg'|theme }}\" alt=\"\">
                    </button>
                </form>
                <div class=\"found_news\">
                    По вашему запросу было найдено <span class=\"quantity_num\">{{newsPosts.posts.total}}</span> статей
                </div>
            </div>
        </div>
    </div>
</section>", "C:\\xampp\\htdocs\\tdh/themes/TDH New/pages/search.htm", "");
    }
}
