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

/* C:\xampp\htdocs\tdh/themes/TDH New/pages/videos.htm */
class __TwigTemplate_e5e4979b74b70495859d7a064cfc96252275598fdc26837f2bb898b44ad09fe2 extends \Twig\Template
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
        $tags = array("for" => 18, "if" => 28);
        $filters = array("escape" => 21, "date" => 37, "theme" => 48, "round" => 61);
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
                Видеорепортаж
            </div>
        </div>
        <div class=\"section_wrapper\">
            <div class=\"center\">
                <div class=\"title\">
                    Видеорепортаж
                </div>
                <div class=\"gallery_outer\">
                    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["videos"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 19
            echo "                        <div class=\"gallery_item\">
                            <div class=\"gallery_img\">
                                <img src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, true, 21)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "path", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
            echo "\" alt=\"\">
                                <h3 class=\"photo_view\">
                                    <a href=\"#\">Просмотреть</a>
                                </h3>
                            </div>
                            <div class=\"gallery_info\">
                                <div class=\"photo_title\">
                                    ";
            // line 28
            if ((($context["activeLocale"] ?? null) == "tm")) {
                // line 29
                echo "                                        ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title_tm", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
                echo "
                                    ";
            } elseif ((            // line 30
($context["activeLocale"] ?? null) == "ru")) {
                // line 31
                echo "                                        ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title_ru", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
                echo "
                                    ";
            } elseif ((            // line 32
($context["activeLocale"] ?? null) == "en")) {
                // line 33
                echo "                                        ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title_en", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
                echo "
                                    ";
            }
            // line 35
            echo "                                </div>
                                <div class=\"photo_date\">
                                    ";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "published_at", [], "any", false, false, true, 37), 37, $this->source), "d.m.Y"), "html", null, true);
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
                        <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["videos"] ?? null), "previousPageUrl", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
        echo "\">
                            <div class=\"direct_btn\">
                                    <img src=\"";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/left.svg");
        echo "\" alt=\"\">
                            </div>
                        </a>
                        <form action=\"\" method=\"GET\">
                            <input type=\"text\" name=\"page\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["videos"] ?? null), "currentPage", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
        echo "\" class=\"input_page\">
                        </form>
                        <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["videos"] ?? null), "nextPageUrl", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
        echo "\">
                            <div class=\"direct_btn\">
                                    <img src=\"";
        // line 56
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/right.svg");
        echo "\" alt=\"\">
                            </div>
                        </a>
                    </div>
                    <div class=\"page_list\">
                        ";
        // line 61
        echo twig_escape_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, ($context["videos"] ?? null), "total", [], "any", false, false, true, 61) / twig_get_attribute($this->env, $this->source, ($context["videos"] ?? null), "perPage", [], "any", false, false, true, 61)), 0, "ceil"), "html", null, true);
        echo " страниц
                    </div>
                </div>
            </div>
            <div class=\"right_side break\">
                <div class=\"title\">
                    Последние новости
                </div>
                
                ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lastNews"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 71
            echo "                    <div class=\"news_info\">
                        <div class=\"left_date\">
                            ";
            // line 73
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "published_at", [], "any", false, false, true, 73), 73, $this->source), "d.m"), "html", null, true);
            echo "
                        </div>
                        <div class=\"left_info\">
                            <div class=\"left_title\">
                                <a href=\"#\">";
            // line 77
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, true, 77), "name", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo "</a>
                            </div>
                            <div class=\"news_text\">
                                ";
            // line 80
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
            echo "
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "       
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\tdh/themes/TDH New/pages/videos.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 84,  205 => 80,  199 => 77,  192 => 73,  188 => 71,  184 => 70,  172 => 61,  164 => 56,  159 => 54,  154 => 52,  147 => 48,  142 => 46,  136 => 42,  125 => 37,  121 => 35,  115 => 33,  113 => 32,  108 => 31,  106 => 30,  101 => 29,  99 => 28,  89 => 21,  85 => 19,  81 => 18,  62 => 1,);
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
                Видеорепортаж
            </div>
        </div>
        <div class=\"section_wrapper\">
            <div class=\"center\">
                <div class=\"title\">
                    Видеорепортаж
                </div>
                <div class=\"gallery_outer\">
                    {% for item in videos %}
                        <div class=\"gallery_item\">
                            <div class=\"gallery_img\">
                                <img src=\"{{item.image[0].path}}\" alt=\"\">
                                <h3 class=\"photo_view\">
                                    <a href=\"#\">Просмотреть</a>
                                </h3>
                            </div>
                            <div class=\"gallery_info\">
                                <div class=\"photo_title\">
                                    {% if activeLocale == \"tm\" %}
                                        {{ item.title_tm }}
                                    {% elseif activeLocale == \"ru\" %}
                                        {{ item.title_ru }}
                                    {% elseif activeLocale == \"en\" %}
                                        {{ item.title_en }}
                                    {% endif %}
                                </div>
                                <div class=\"photo_date\">
                                    {{ item.published_at| date(\"d.m.Y\") }}
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
                    
                <div class=\"section_end\">
                    <div class=\"page_num\">
                        <a href=\"{{videos.previousPageUrl}}\">
                            <div class=\"direct_btn\">
                                    <img src=\"{{ 'assets/images/left.svg'|theme }}\" alt=\"\">
                            </div>
                        </a>
                        <form action=\"\" method=\"GET\">
                            <input type=\"text\" name=\"page\" value=\"{{videos.currentPage}}\" class=\"input_page\">
                        </form>
                        <a href=\"{{videos.nextPageUrl}}\">
                            <div class=\"direct_btn\">
                                    <img src=\"{{ 'assets/images/right.svg'|theme }}\" alt=\"\">
                            </div>
                        </a>
                    </div>
                    <div class=\"page_list\">
                        {{(videos.total/videos.perPage)|round(0,\"ceil\")}} страниц
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
</section>", "C:\\xampp\\htdocs\\tdh/themes/TDH New/pages/videos.htm", "");
    }
}
