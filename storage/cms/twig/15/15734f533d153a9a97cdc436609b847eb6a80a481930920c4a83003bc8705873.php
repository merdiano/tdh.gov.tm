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

/* C:\xampp\htdocs\tdh/themes/TDH New/pages/gallery.htm */
class __TwigTemplate_c67e55530ba583f0ef70884a4660a317d9cde20a32a60ab86c78046f3e5c76c6 extends \Twig\Template
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
        $tags = array("for" => 22, "if" => 43);
        $filters = array("page" => 4, "escape" => 26, "date" => 52, "theme" => 68, "round" => 81);
        $functions = array("url" => 97);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
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
                Фоторепортаж
            </div>
        </div>
        <div class=\"section_wrapper\">
            <div class=\"center\">
                <div class=\"title\">
                    Фоторепортаж
                </div>
                <div class=\"gallery_outer\">
                    
                    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["gallery"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 23
            echo "                    
                    <div class=\"gallery_item\">
                        <div class=\"gallery_img\">
                            <img src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, true, 26)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "path", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            echo "\" alt=\"\">
                            <h3 class=\"photo_view\">
                                <a class=\"fancybox\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "getImages", [], "method", false, false, true, 28), "first", [], "any", false, false, true, 28), "path", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo "\" data-fancybox=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 28, $this->source), "html", null, true);
            echo "\"
                                    data-width=\"1500\" data-height=\"1000\"><i
                                        class=\"icon-camera\"></i> Просмотреть</a>
                            </h3>
                        </div>
                        
                        <div style=\"display: none;\">
                            ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "getImages", [], "method", false, false, true, 35), "slice", [0 => 1, 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "getImages", [], "method", false, false, true, 35), "size", [], "any", false, false, true, 35)], "method", false, false, true, 35));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 36
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
                echo "\" data-fancybox=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 36, $this->source), "html", null, true);
                echo "\" data-width=\"1500\"
                                data-height=\"1000\" data-thumb=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
                echo "\"></a>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                        </div>

                        <div class=\"gallery_info\">
                            <div class=\"photo_title\">
                                ";
            // line 43
            if ((($context["activeLocale"] ?? null) == "tm")) {
                // line 44
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title_tm", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
                echo "
                                ";
            } elseif ((            // line 45
($context["activeLocale"] ?? null) == "ru")) {
                // line 46
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title_ru", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
                echo "
                                ";
            } elseif ((            // line 47
($context["activeLocale"] ?? null) == "en")) {
                // line 48
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title_en", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
                echo "
                                ";
            }
            // line 50
            echo "                            </div>
                            <div class=\"photo_date\">
                                ";
            // line 52
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "published_at", [], "any", false, false, true, 52), 52, $this->source), "d.m.Y"), "html", null, true);
            echo "
                            </div>
                        </div>
                    </div>
                    
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
                        
                </div>

                
                    
                <div class=\"section_end\">
                    <div class=\"page_num\">
                        <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "previousPageUrl", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
        echo "\">
                            <div class=\"direct_btn\">
                                    <img src=\"";
        // line 68
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/left.svg");
        echo "\" alt=\"\">
                            </div>
                        </a>
                        <form action=\"\" method=\"GET\">
                            <input type=\"text\" name=\"page\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "currentPage", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
        echo "\" class=\"input_page\">
                        </form>
                        <a href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "nextPageUrl", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
        echo "\">
                            <div class=\"direct_btn\">
                                    <img src=\"";
        // line 76
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/right.svg");
        echo "\" alt=\"\">
                            </div>
                        </a>
                    </div>
                    <div class=\"page_list\">
                        ";
        // line 81
        echo twig_escape_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "total", [], "any", false, false, true, 81) / twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "perPage", [], "any", false, false, true, 81)), 0, "ceil"), "html", null, true);
        echo " страниц
                    </div>
                </div>
            </div>
            <div class=\"right_side break\">
                <div class=\"title\">
                    Последние новости
                </div>
                
                ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lastNews"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 91
            echo "                    <div class=\"news_info\">
                        <div class=\"left_date\">
                            ";
            // line 93
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "published_at", [], "any", false, false, true, 93), 93, $this->source), "d.m"), "html", null, true);
            echo "
                        </div>
                        <div class=\"left_info\">
                            <div class=\"left_title\">
                                <a href=\"";
            // line 97
            echo url("/");
            echo "/post/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, true, 97), 97, $this->source), "html", null, true);
            echo "\">
                                    ";
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
        return "C:\\xampp\\htdocs\\tdh/themes/TDH New/pages/gallery.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 105,  258 => 101,  252 => 98,  244 => 97,  237 => 93,  233 => 91,  229 => 90,  217 => 81,  209 => 76,  204 => 74,  199 => 72,  192 => 68,  187 => 66,  177 => 58,  165 => 52,  161 => 50,  155 => 48,  153 => 47,  148 => 46,  146 => 45,  141 => 44,  139 => 43,  133 => 39,  125 => 37,  118 => 36,  114 => 35,  102 => 28,  97 => 26,  92 => 23,  88 => 22,  67 => 4,  62 => 1,);
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
                Фоторепортаж
            </div>
        </div>
        <div class=\"section_wrapper\">
            <div class=\"center\">
                <div class=\"title\">
                    Фоторепортаж
                </div>
                <div class=\"gallery_outer\">
                    
                    {% for key, item in gallery %}
                    
                    <div class=\"gallery_item\">
                        <div class=\"gallery_img\">
                            <img src=\"{{item.image[0].path}}\" alt=\"\">
                            <h3 class=\"photo_view\">
                                <a class=\"fancybox\" href=\"{{item.getImages().first.path}}\" data-fancybox=\"{{key}}\"
                                    data-width=\"1500\" data-height=\"1000\"><i
                                        class=\"icon-camera\"></i> Просмотреть</a>
                            </h3>
                        </div>
                        
                        <div style=\"display: none;\">
                            {% for image in item.getImages().slice(1,item.getImages().size) %}
                            <a href=\"{{image.path}}\" data-fancybox=\"{{key}}\" data-width=\"1500\"
                                data-height=\"1000\" data-thumb=\"{{image.path}}\"></a>
                            {% endfor %}
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
                        <a href=\"{{gallery.previousPageUrl}}\">
                            <div class=\"direct_btn\">
                                    <img src=\"{{ 'assets/images/left.svg'|theme }}\" alt=\"\">
                            </div>
                        </a>
                        <form action=\"\" method=\"GET\">
                            <input type=\"text\" name=\"page\" value=\"{{gallery.currentPage}}\" class=\"input_page\">
                        </form>
                        <a href=\"{{gallery.nextPageUrl}}\">
                            <div class=\"direct_btn\">
                                    <img src=\"{{ 'assets/images/right.svg'|theme }}\" alt=\"\">
                            </div>
                        </a>
                    </div>
                    <div class=\"page_list\">
                        {{(gallery.total/gallery.perPage)|round(0,\"ceil\")}} страниц
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
                                <a href=\"{{ url('/') }}/post/{{item.id}}/{{item.slug}}\">
                                    {{item.category.name}}</a>
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
</section>", "C:\\xampp\\htdocs\\tdh/themes/TDH New/pages/gallery.htm", "");
    }
}
