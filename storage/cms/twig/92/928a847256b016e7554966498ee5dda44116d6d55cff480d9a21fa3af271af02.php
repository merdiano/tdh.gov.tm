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

/* C:\xampp\htdocs\tdh/themes/TDH New/pages/category.htm */
class __TwigTemplate_c4bde4595a56a96b484eeec58df1e8d70bf79c455e6a8e1c3268ae2570555547 extends \Twig\Template
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
        $tags = array("for" => 21);
        $filters = array("page" => 4, "escape" => 12, "date" => 25, "theme" => 47, "round" => 60);
        $functions = array("url" => 79);

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['page', 'escape', 'date', 'theme', 'round'],
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
                ";
        // line 12
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "
            </div>
        </div>
        <div class=\"section_wrapper\">
            <div class=\"center\">
                <div class=\"title\">
                    ";
        // line 18
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "
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
                                ";
            // line 33
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo "
                            </div>
                            <div class=\"main_news-text\">
                                
                                ";
            // line 37
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "introductory", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            echo "
                            </div>
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                </div>  
                <div class=\"section_end\">
                    <div class=\"page_num\">
                        <a href=\"newsPosts.posts.previousPageUrl\">
                            <div class=\"direct_btn\">
                                    <img src=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/left.svg");
        echo "\" alt=\"\">
                            </div>
                        </a>
                        <form action=\"\" method=\"GET\">
                            <input type=\"text\" name=\"page\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["newsPosts"] ?? null), "posts", [], "any", false, false, true, 51), "currentPage", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
        echo "\" class=\"input_page\">
                        </form>
                        <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["newsPosts"] ?? null), "posts", [], "any", false, false, true, 53), "nextPageUrl", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
        echo "\">
                            <div class=\"direct_btn\">
                                    <img src=\"";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/right.svg");
        echo "\" alt=\"\">
                            </div>
                        </a>
                    </div>
                    <div class=\"page_list\">
                        ";
        // line 60
        echo twig_escape_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["newsPosts"] ?? null), "posts", [], "any", false, false, true, 60), "total", [], "any", false, false, true, 60) / twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["newsPosts"] ?? null), "posts", [], "any", false, false, true, 60), "perPage", [], "any", false, false, true, 60)), 0, "ceil"), "html", null, true);
        echo " страниц
                    </div>
                </div>

            </div>

            <div class=\"right_side break\">
                <div class=\"title\">
                    Последние новости
                </div>
                
                ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lastNews"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 72
            echo "                    <div class=\"news_info\">
                        <div class=\"left_date\">
                            ";
            // line 74
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "published_at", [], "any", false, false, true, 74), 74, $this->source), "d.m"), "html", null, true);
            echo "
                        </div>
                        <div class=\"left_info\">
                            <div class=\"left_title\">
                                
                                <a href=\"";
            // line 79
            echo url("/");
            echo "/post/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, true, 79), "name", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
            echo "</a>
                            </div>
                            <div class=\"news_text\">
                                ";
            // line 82
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
            echo "
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "       
            </div>

        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\tdh/themes/TDH New/pages/category.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 86,  208 => 82,  196 => 79,  188 => 74,  184 => 72,  180 => 71,  166 => 60,  158 => 55,  153 => 53,  148 => 51,  141 => 47,  134 => 42,  123 => 37,  116 => 33,  108 => 28,  102 => 25,  97 => 22,  93 => 21,  87 => 18,  78 => 12,  67 => 4,  62 => 1,);
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
                {{category.name}}
            </div>
        </div>
        <div class=\"section_wrapper\">
            <div class=\"center\">
                <div class=\"title\">
                    {{category.name}}
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
                                {{ item.title }}
                            </div>
                            <div class=\"main_news-text\">
                                
                                {{ item.introductory }}
                            </div>
                        </div>
                    </div>
                    {% endfor %}
                </div>  
                <div class=\"section_end\">
                    <div class=\"page_num\">
                        <a href=\"newsPosts.posts.previousPageUrl\">
                            <div class=\"direct_btn\">
                                    <img src=\"{{ 'assets/images/left.svg'|theme }}\" alt=\"\">
                            </div>
                        </a>
                        <form action=\"\" method=\"GET\">
                            <input type=\"text\" name=\"page\" value=\"{{newsPosts.posts.currentPage}}\" class=\"input_page\">
                        </form>
                        <a href=\"{{newsPosts.posts.nextPageUrl}}\">
                            <div class=\"direct_btn\">
                                    <img src=\"{{ 'assets/images/right.svg'|theme }}\" alt=\"\">
                            </div>
                        </a>
                    </div>
                    <div class=\"page_list\">
                        {{(newsPosts.posts.total/newsPosts.posts.perPage)|round(0,\"ceil\")}} страниц
                    </div>
                </div>

            </div>

            <div class=\"right_side break\">
                <div class=\"title\">
                    Последние новости
                </div>
                
                {% for item in lastNews %}
                    <div class=\"news_info\">
                        <div class=\"left_date\">
                            {{ item.published_at| date(\"d.m\") }}
                        </div>
                        <div class=\"left_info\">
                            <div class=\"left_title\">
                                
                                <a href=\"{{ url('/') }}/post/{{item.id}}/{{item.slug}}\">{{item.category.name}}</a>
                            </div>
                            <div class=\"news_text\">
                                {{item.title}}
                            </div>
                        </div>
                    </div>
                {% endfor %}       
            </div>

        </div>
    </div>
</section>", "C:\\xampp\\htdocs\\tdh/themes/TDH New/pages/category.htm", "");
    }
}
