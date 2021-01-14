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
        $tags = array("component" => 1, "if" => 44, "for" => 47);
        $filters = array("escape" => 11, "date" => 32, "theme" => 37, "length" => 44, "raw" => 80);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component', 'if', 'for'],
                ['escape', 'date', 'theme', 'length', 'raw'],
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
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("newsPost"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo "
<section class=\"section\" id=\"intro\">
    <div class=\"auto_container\">
        <div class=\"which_page\">
            <div class=\"page_name\">
                Главная
            </div>
            <div class=\"slash\">\\</div>
            <div class=\"page_name\">
                    ";
        // line 11
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "category", [], "any", false, false, true, 11), "name", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "
            </div>
            <div class=\"slash\">\\</div>
            <div class=\"page_name\">
                ";
        // line 15
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "
            </div>
        </div>
        <div class=\"section_wrapper\">
            <div class=\"center\">
                <div class=\"title\">
                    ";
        // line 21
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "category", [], "any", false, false, true, 21), "name", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        echo "
                </div>
                <div class=\"news_page-title\">
                    ";
        // line 24
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
        echo "
                </div>
                <div class=\"news_publish\">
                    <div class=\"publish_date\">
                        <span>
                            Опубликованно
                        </span>
                        <span>
                            ";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", [], "any", false, false, true, 32), 32, $this->source), "d.m.Y"), "html", null, true);
        echo "
                        </span>
                    </div>
                    <div class=\"views\">
                        <span class=\"view_icon\">
                            <img src=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/eye.svg");
        echo "\" alt=\"\">
                        </span>
                        <span>
                            ";
        // line 40
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "statistics", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
        echo "
                        </span>
                    </div>
                </div>
                ";
        // line 44
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "images", [], "any", false, false, true, 44)) > 1)) {
            // line 45
            echo "                    <div class=\"news_slider\">
                        <div class=\"slider__big\">
                            ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "images", [], "any", false, false, true, 47));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 48
                echo "                            <div>
                                <div class=\"slider__card\">
                                    <div class=\"image__inner\">
                                        <img class=\"norm\" src=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "path", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
                echo "\" alt=\"picture\">
                                    </div>
                                </div>
                            </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "                            
                        </div>
                        <div class=\"slider__mini\">
                            ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "images", [], "any", false, false, true, 59));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 60
                echo "                            <div>
                                <div class=\"image__inner\">
                                    <img src=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "path", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
                echo "\" alt=\"picture\">
                                </div>
                            </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "
                            

                        </div>
                    </div>
                ";
        } else {
            // line 72
            echo "                    <div class=\"big_photo\">
                        <img src=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "images", [], "any", false, false, true, 73)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "path", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
            echo "\" alt=\"\">
                    </div>
                ";
        }
        // line 76
        echo "
                
                <div class=\"news_page-text\">
                    <p class=\"para_text\">
                        ";
        // line 80
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "content", [], "any", false, false, true, 80), 80, $this->source);
        echo "
                    </p>
                    
                </div>
            </div>

            <div class=\"right_side break\">
                <div class=\"title\">
                    Последние новости
                </div>
                
                ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lastNews"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 92
            echo "                    <div class=\"news_info\">
                        <div class=\"left_date\">
                            ";
            // line 94
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "published_at", [], "any", false, false, true, 94), 94, $this->source), "d.m"), "html", null, true);
            echo "
                        </div>
                        <div class=\"left_info\">
                            <div class=\"left_title\">
                                <a href=\"#\">";
            // line 98
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, true, 98), "name", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
            echo "</a>
                            </div>
                            <div class=\"news_text\">
                                ";
            // line 101
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
            echo "
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
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
        return array (  249 => 105,  238 => 101,  232 => 98,  225 => 94,  221 => 92,  217 => 91,  203 => 80,  197 => 76,  191 => 73,  188 => 72,  180 => 66,  170 => 62,  166 => 60,  162 => 59,  157 => 56,  146 => 51,  141 => 48,  137 => 47,  133 => 45,  131 => 44,  124 => 40,  118 => 37,  110 => 32,  99 => 24,  93 => 21,  84 => 15,  77 => 11,  66 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% component 'newsPost' %}

<section class=\"section\" id=\"intro\">
    <div class=\"auto_container\">
        <div class=\"which_page\">
            <div class=\"page_name\">
                Главная
            </div>
            <div class=\"slash\">\\</div>
            <div class=\"page_name\">
                    {{ post.category.name }}
            </div>
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
                {% else %}
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
                                <a href=\"#\">{{item.category.name}}</a>
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
