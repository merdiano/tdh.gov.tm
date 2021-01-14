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

/* C:\xampp\htdocs\tdh/themes/tttttdh/partials/home_main.htm */
class __TwigTemplate_1f4597477629652dc393a4b8657e521545ef5202d33a98c6376219df3e5139ed extends \Twig\Template
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
        $tags = array("component" => 1, "if" => 2, "for" => 34);
        $filters = array("escape" => 4, "theme" => 8, "page" => 15, "media" => 19, "raw" => 22, "date" => 26);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component', 'if', 'for'],
                ['escape', 'theme', 'page', 'media', 'raw', 'date'],
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
        if (($context["main_posts"] ?? null)) {
            // line 3
            echo "    <div class=\"title__a\" id=\"title\">
        ";
            // line 4
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cat"] ?? null), "name", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
            echo "
    </div>

    <button class=\"btn__prev\">
        <img src=\"";
            // line 8
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/prev blue.svg");
            echo "\" alt=\"\">
    </button>
    <button class=\"btn__next\">
        <img src=\"";
            // line 11
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/next blue.svg");
            echo "\" alt=\"\">
    </button>

    <div class=\"main__title\" id=\"mainInner\">
        <a href=\"";
            // line 15
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
            echo "/post/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["main_posts"] ?? null), "slug", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["main_posts"] ?? null), "title", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo " </a>
        
    </div>
    <div class=\"main__photo\">
        <img src=\"";
            // line 19
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
            echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["main_posts"] ?? null), "image", [], "any", false, false, true, 19), 19, $this->source));
            echo " \" alt=\"\">
    </div>
    <div class=\"main__text\">
        ";
            // line 22
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["main_posts"] ?? null), "introductory", [], "any", false, false, true, 22), 22, $this->source);
            echo " 
    </div>
    <div class=\"main__foot\">
        <div class=\"main__time\">
            ";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["main_posts"] ?? null), "published_at", [], "any", false, false, true, 26), 26, $this->source), "d.m.Y"), "html", null, true);
            echo "
        </div>
        <div class=\"main__link\">
            <a href=\"#\">Узнать больше</a>
        </div>
    </div>
";
        }
        // line 33
        echo "
";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["postFeatured"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 35
            echo "    <hr>
    <div class=\"texts\">
        ";
            // line 37
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "images", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            echo "   
        <img src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["item"], "images", [], "any", false, false, true, 38)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "path", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
            echo "\" alt=\"\">
        <!-- <div class=\"sub__titles\">
            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
            echo "</a>
        </div> -->
        <!-- <div class=\"sony\">
            <div class=\"sub__end\">
                <div class=\"sub__names\">
                    ";
            // line 45
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, true, 45), "name", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
            echo "
                </div>
                <div class=\"devider\">
                </div>
                <div class=\"sub__time\">
                    ";
            // line 50
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "published_at", [], "any", false, false, true, 50), 50, $this->source), "d.m.Y"), "html", null, true);
            echo "
                </div>
            </div>
            <div class=\"sub__end-link\">
                <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
            echo "\">Узнать большeeeе</a>
            </div>
        </div> -->
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
";
        // line 60
        if (($context["posts_filtered2"] ?? null)) {
            // line 61
            echo "    <div class=\"comment__block\">
        <div class=\"title\">
            ";
            // line 63
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cat2"] ?? null), "name", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
            echo "
        </div>
        <hr>
        <div class=\"comment__title\">
            
        </div>
        <div class=\"comment__scroll\">
            <div class=\"theme\">
                <span class=\"theme__name\">
                    На тему:
                </span> ";
            // line 73
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["posts_filtered2"] ?? null), "introductory", [], "any", false, false, true, 73), 73, $this->source);
            echo " 
            </div>
            <div class=\"comment__text\">
                ";
            // line 76
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["posts_filtered2"] ?? null), "content", [], "any", false, false, true, 76), 76, $this->source);
            echo "
            </div>
            
        </div>
    </div>
";
        }
        // line 81
        echo " 

<!-- Intro ===================== -->
<div class=\"auto_container\" id=\"intro\">
    
    <div class=\"intro\">
        <div class=\"main\">
            <div class=\"title\">
                В центре событий
            </div>
            ";
        // line 91
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["postFeatured"] ?? null), "images", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
        echo "
            <div class=\"main_part\">
                <div class=\"main_photo\">
                    <img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["postFeatured"] ?? null), "images", [], "any", false, false, true, 94)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "path", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
        echo "\" alt=\"\">
                </div>
                <div class=\"main_title\">
                    ";
        // line 97
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["postFeatured"] ?? null), "title", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
        echo "
                </div>
                <div class=\"main_text\">
                    ";
        // line 100
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["postFeatured"] ?? null), "introductory", [], "any", false, false, true, 100), 100, $this->source);
        echo " 
                </div>
                <div class=\"main_end\">
                    <div class=\"main_date\">
                        ";
        // line 104
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["postFeatured"] ?? null), "published_at", [], "any", false, false, true, 104), 104, $this->source), "d.m.Y"), "html", null, true);
        echo "
                    </div>
                    <div class=\"main_link\">
                        <a href=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["postFeatured"] ?? null), "url", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
        echo "\">
                            Узнать больше
                        </a>
                    </div>
                </div>
            </div>
        </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\tdh/themes/tttttdh/partials/home_main.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 107,  256 => 104,  249 => 100,  243 => 97,  237 => 94,  231 => 91,  219 => 81,  210 => 76,  204 => 73,  191 => 63,  187 => 61,  185 => 60,  182 => 59,  171 => 54,  164 => 50,  156 => 45,  146 => 40,  141 => 38,  137 => 37,  133 => 35,  129 => 34,  126 => 33,  116 => 26,  109 => 22,  102 => 19,  91 => 15,  84 => 11,  78 => 8,  71 => 4,  68 => 3,  66 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% component \"newsPosts\" %}
{% if main_posts %}
    <div class=\"title__a\" id=\"title\">
        {{cat.name}}
    </div>

    <button class=\"btn__prev\">
        <img src=\"{{ 'assets/images/prev blue.svg'|theme }}\" alt=\"\">
    </button>
    <button class=\"btn__next\">
        <img src=\"{{ 'assets/images/next blue.svg'|theme }}\" alt=\"\">
    </button>

    <div class=\"main__title\" id=\"mainInner\">
        <a href=\"{{ ''| page}}/post/{{main_posts.slug}}\"> {{ main_posts.title }} </a>
        
    </div>
    <div class=\"main__photo\">
        <img src=\"{{ ''| page}}{{ main_posts.image|media }} \" alt=\"\">
    </div>
    <div class=\"main__text\">
        {{ main_posts.introductory|raw }} 
    </div>
    <div class=\"main__foot\">
        <div class=\"main__time\">
            {{ main_posts.published_at| date(\"d.m.Y\") }}
        </div>
        <div class=\"main__link\">
            <a href=\"#\">Узнать больше</a>
        </div>
    </div>
{% endif %}

{% for item in postFeatured %}
    <hr>
    <div class=\"texts\">
        {{ item.images }}   
        <img src=\"{{ item.images[0].path }}\" alt=\"\">
        <!-- <div class=\"sub__titles\">
            <a href=\"{{item.url}}\"> {{ item.title }}</a>
        </div> -->
        <!-- <div class=\"sony\">
            <div class=\"sub__end\">
                <div class=\"sub__names\">
                    {{ item.category.name }}
                </div>
                <div class=\"devider\">
                </div>
                <div class=\"sub__time\">
                    {{ item.published_at| date(\"d.m.Y\") }}
                </div>
            </div>
            <div class=\"sub__end-link\">
                <a href=\"{{item.url}}\">Узнать большeeeе</a>
            </div>
        </div> -->
    </div>
{% endfor %}

{% if  posts_filtered2 %}
    <div class=\"comment__block\">
        <div class=\"title\">
            {{cat2.name}}
        </div>
        <hr>
        <div class=\"comment__title\">
            
        </div>
        <div class=\"comment__scroll\">
            <div class=\"theme\">
                <span class=\"theme__name\">
                    На тему:
                </span> {{ posts_filtered2.introductory|raw }} 
            </div>
            <div class=\"comment__text\">
                {{ posts_filtered2.content|raw }}
            </div>
            
        </div>
    </div>
{% endif %} 

<!-- Intro ===================== -->
<div class=\"auto_container\" id=\"intro\">
    
    <div class=\"intro\">
        <div class=\"main\">
            <div class=\"title\">
                В центре событий
            </div>
            {{ postFeatured.images }}
            <div class=\"main_part\">
                <div class=\"main_photo\">
                    <img src=\"{{ postFeatured.images[0].path }}\" alt=\"\">
                </div>
                <div class=\"main_title\">
                    {{ postFeatured.title }}
                </div>
                <div class=\"main_text\">
                    {{ postFeatured.introductory|raw }} 
                </div>
                <div class=\"main_end\">
                    <div class=\"main_date\">
                        {{ postFeatured.published_at| date(\"d.m.Y\") }}
                    </div>
                    <div class=\"main_link\">
                        <a href=\"{{postFeatured.url}}\">
                            Узнать больше
                        </a>
                    </div>
                </div>
            </div>
        </div>
</div>", "C:\\xampp\\htdocs\\tdh/themes/tttttdh/partials/home_main.htm", "");
    }
}
