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

/* C:\xampp\htdocs\tdh/themes/TDH New/pages/post.htm */
class __TwigTemplate_2255b4bc210decc7c742997fe7709fbfee8002db9de2ade07006272212012eda extends \Twig\Template
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
        $tags = array("component" => 1, "if" => 51, "for" => 54);
        $filters = array("page" => 6, "escape" => 16, "date" => 39, "theme" => 44, "length" => 51, "raw" => 87);
        $functions = array("url" => 105);

        try {
            $this->sandbox->checkSecurity(
                ['component', 'if', 'for'],
                ['page', 'escape', 'date', 'theme', 'length', 'raw'],
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("newsPost"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo "
<section class=\"section\" id=\"intro\">
    <div class=\"auto_container\">
        <div class=\"which_page\">
            <a href=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
                
                <div class=\"page_name\">
                    Главная
                </div>
            </a>
            <div class=\"slash\">\\</div>
            <a href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("category", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "category", [], "any", false, false, true, 13), "slug", [], "any", false, false, true, 13)]);
        echo "\">
                
                <div class=\"page_name\">
                    ";
        // line 16
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "category", [], "any", false, false, true, 16), "name", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "
                </div>
            </a>
            
            <div class=\"slash\">\\</div>
            <div class=\"page_name\">
                ";
        // line 22
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
        echo "
            </div>
        </div>
        <div class=\"section_wrapper\">
            <div class=\"center\">
                <div class=\"title\">
                    ";
        // line 28
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "category", [], "any", false, false, true, 28), "name", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
        echo "
                </div>
                <div class=\"news_page-title\">
                    ";
        // line 31
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
        echo "
                </div>
                <div class=\"news_publish\">
                    <div class=\"publish_date\">
                        <span>
                            Опубликованно
                        </span>
                        <span>
                            ";
        // line 39
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", [], "any", false, false, true, 39), 39, $this->source), "d.m.Y"), "html", null, true);
        echo "
                        </span>
                    </div>
                    <div class=\"views\">
                        <span class=\"view_icon\">
                            <img src=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/eye.svg");
        echo "\" alt=\"\">
                        </span>
                        <span>
                            ";
        // line 47
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "statistics", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
        echo "
                        </span>
                    </div>
                </div>
                ";
        // line 51
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "images", [], "any", false, false, true, 51)) > 1)) {
            // line 52
            echo "                    <div class=\"news_slider\">
                        <div class=\"slider__big\">
                            ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "images", [], "any", false, false, true, 54));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 55
                echo "                            <div>
                                <div class=\"slider__card\">
                                    <div class=\"image__inner\">
                                        <img class=\"norm\" src=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "path", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
                echo "\" alt=\"picture\">
                                    </div>
                                </div>
                            </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                            
                        </div>
                        <div class=\"slider__mini\">
                            ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "images", [], "any", false, false, true, 66));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 67
                echo "                            <div>
                                <div class=\"image__inner\">
                                    <img src=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "path", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
                echo "\" alt=\"picture\">
                                </div>
                            </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "
                            

                        </div>
                    </div>
                    ";
        } elseif ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 78
($context["post"] ?? null), "images", [], "any", false, false, true, 78)) > 0)) {
            // line 79
            echo "                    <div class=\"big_photo\">
                        <img src=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "images", [], "any", false, false, true, 80)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "path", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
            echo "\" alt=\"\">
                    </div>
                ";
        }
        // line 83
        echo "
                
                <div class=\"news_page-text\">
                    <p class=\"para_text\">
                        ";
        // line 87
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content", [], "any", false, false, true, 87), 87, $this->source);
        echo "
                    </p>
                    
                </div>
            </div>

            <div class=\"right_side break\">
                <div class=\"title\">
                    Последние новости
                </div>
                
                ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lastNews"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 99
            echo "                    <div class=\"news_info\">
                        <div class=\"left_date\">
                            ";
            // line 101
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "published_at", [], "any", false, false, true, 101), 101, $this->source), "d.m"), "html", null, true);
            echo "
                        </div>
                        <div class=\"left_info\">
                            <div class=\"left_title\">
                                <a href=\"";
            // line 105
            echo url("/");
            echo "/post/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, true, 105), "name", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
            echo "</a>
                            </div>
                            <div class=\"news_text\">
                                ";
            // line 108
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
            echo "
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "       
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\tdh/themes/TDH New/pages/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 112,  256 => 108,  246 => 105,  239 => 101,  235 => 99,  231 => 98,  217 => 87,  211 => 83,  205 => 80,  202 => 79,  200 => 78,  193 => 73,  183 => 69,  179 => 67,  175 => 66,  170 => 63,  159 => 58,  154 => 55,  150 => 54,  146 => 52,  144 => 51,  137 => 47,  131 => 44,  123 => 39,  112 => 31,  106 => 28,  97 => 22,  88 => 16,  82 => 13,  72 => 6,  66 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% component 'newsPost' %}

<section class=\"section\" id=\"intro\">
    <div class=\"auto_container\">
        <div class=\"which_page\">
            <a href=\"{{ 'home'|page}}\">
                
                <div class=\"page_name\">
                    Главная
                </div>
            </a>
            <div class=\"slash\">\\</div>
            <a href=\"{{ 'category'|page({ slug: post.category.slug })}}\">
                
                <div class=\"page_name\">
                    {{ post.category.name }}
                </div>
            </a>
            
            <div class=\"slash\">\\</div>
            <div class=\"page_name\">
                {{ post.title }}
            </div>
        </div>
        <div class=\"section_wrapper\">
            <div class=\"center\">
                <div class=\"title\">
                    {{ post.category.name }}
                </div>
                <div class=\"news_page-title\">
                    {{ post.title }}
                </div>
                <div class=\"news_publish\">
                    <div class=\"publish_date\">
                        <span>
                            Опубликованно
                        </span>
                        <span>
                            {{ post.published_at| date(\"d.m.Y\") }}
                        </span>
                    </div>
                    <div class=\"views\">
                        <span class=\"view_icon\">
                            <img src=\"{{ 'assets/images/eye.svg'|theme }}\" alt=\"\">
                        </span>
                        <span>
                            {{ post.statistics }}
                        </span>
                    </div>
                </div>
                {% if post.images|length > 1 %}
                    <div class=\"news_slider\">
                        <div class=\"slider__big\">
                            {% for item in  post.images %}
                            <div>
                                <div class=\"slider__card\">
                                    <div class=\"image__inner\">
                                        <img class=\"norm\" src=\"{{item.path}}\" alt=\"picture\">
                                    </div>
                                </div>
                            </div>
                            {% endfor %}
                            
                        </div>
                        <div class=\"slider__mini\">
                            {% for item in  post.images %}
                            <div>
                                <div class=\"image__inner\">
                                    <img src=\"{{item.path}}\" alt=\"picture\">
                                </div>
                            </div>
                            {% endfor %}

                            

                        </div>
                    </div>
                    {% elseif post.images|length > 0 %}
                    <div class=\"big_photo\">
                        <img src=\"{{ post.images[0].path }}\" alt=\"\">
                    </div>
                {% endif %}

                
                <div class=\"news_page-text\">
                    <p class=\"para_text\">
                        {{ post.content|raw }}
                    </p>
                    
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
                                <a href=\"{{ url('/') }}/post/{{item.slug}}\">{{item.category.name}}</a>
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
</section>", "C:\\xampp\\htdocs\\tdh/themes/TDH New/pages/post.htm", "");
    }
}
