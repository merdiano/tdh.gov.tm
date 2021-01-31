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
        $tags = array("for" => 21, "if" => 49);
        $filters = array("page" => 4, "escape" => 25, "date" => 25, "raw" => 40, "theme" => 54, "round" => 67);
        $functions = array("url" => 34);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['page', 'escape', 'date', 'raw', 'theme', 'round'],
                ['url']
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
            <a href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
                
                <div class=\"page_name\">
                    Главная
                </div>
            </a>
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
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["newsPosts"] ?? null), "posts", [], "any", false, false, true, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 22
            echo "                    <div class=\"main_news-item\">
                        <div class=\"main_news-date\">
                            <span>
                                ";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "published_at", [], "any", false, false, true, 25), 25, $this->source), "d.m"), "html", null, true);
            echo "
                            </span>
                            <span>
                                ";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "published_at", [], "any", false, false, true, 28), 28, $this->source), "Y"), "html", null, true);
            echo "
                            </span>
                        </div>
                        <div class=\"main_news-content\">
                            <div class=\"main_news-title\">

                                <a href=\"";
            // line 34
            echo url("/");
            echo "/post/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
            echo "\">
                                ";
            // line 35
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "
                                </a>
                            </div>
                            <div class=\"main_news-text\">
                                
                                ";
            // line 40
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "introductory", [], "any", false, false, true, 40), 40, $this->source);
            echo "
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "       
                    
                    
                </div>

                ";
        // line 49
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["newsPosts"] ?? null), "posts", [], "any", false, false, true, 49), "total", [], "any", false, false, true, 49) > 10)) {
            // line 50
            echo "                    <div class=\"section_end\">
                        <div class=\"page_num\">
                            <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["newsPosts"] ?? null), "posts", [], "any", false, false, true, 52), "previousPageUrl", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, ("&q=" . $this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 52, $this->source)), "html", null, true);
            echo "\">
                                <div class=\"direct_btn\">
                                        <img src=\"";
            // line 54
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/left.svg");
            echo "\" alt=\"\">
                                </div>
                            </a>
                            <form action=\"\" method=\"GET\">
                                <input type=\"text\" name=\"page\" value=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["newsPosts"] ?? null), "posts", [], "any", false, false, true, 58), "currentPage", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
            echo "\" class=\"input_page\">
                            </form>
                            <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["newsPosts"] ?? null), "posts", [], "any", false, false, true, 60), "nextPageUrl", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
            echo twig_escape_filter($this->env, ("&q=" . $this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 60, $this->source)), "html", null, true);
            echo "\">
                                <div class=\"direct_btn\">
                                        <img src=\"";
            // line 62
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/right.svg");
            echo "\" alt=\"\">
                                </div>
                            </a>
                        </div>
                        <div class=\"page_list\">
                            ";
            // line 67
            echo twig_escape_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["newsPosts"] ?? null), "posts", [], "any", false, false, true, 67), "total", [], "any", false, false, true, 67) / twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["newsPosts"] ?? null), "posts", [], "any", false, false, true, 67), "perPage", [], "any", false, false, true, 67)), 0, "ceil"), "html", null, true);
            echo " страниц
                        </div>
                    </div>
                ";
        }
        // line 71
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
        // line 81
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/lupa.svg");
        echo "\" alt=\"\">
                    </button>
                </form>
                <div class=\"found_news\">
                    По вашему запросу было найдено <span class=\"quantity_num\">";
        // line 85
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["newsPosts"] ?? null), "posts", [], "any", false, false, true, 85), "total", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
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
        return array (  209 => 85,  202 => 81,  190 => 71,  183 => 67,  175 => 62,  169 => 60,  164 => 58,  157 => 54,  151 => 52,  147 => 50,  145 => 49,  138 => 44,  127 => 40,  119 => 35,  111 => 34,  102 => 28,  96 => 25,  91 => 22,  87 => 21,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"section\" id=\"intro\">
    <div class=\"auto_container\">
        <div class=\"which_page\">
            <a href=\"{{ 'home'|page}}\">
                
                <div class=\"page_name\">
                    Главная
                </div>
            </a>
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

                                <a href=\"{{ url('/') }}/post/{{item.id}}/{{item.slug}}\">
                                {{item.title}}
                                </a>
                            </div>
                            <div class=\"main_news-text\">
                                
                                {{ item.introductory|raw }}
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
