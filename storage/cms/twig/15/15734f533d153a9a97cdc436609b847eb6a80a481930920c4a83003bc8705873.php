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
        $tags = array("for" => 22, "if" => 47);
        $filters = array("page" => 4, "escape" => 27, "date" => 56, "theme" => 72, "round" => 85);
        $functions = array("url" => 101);

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
            // line 27
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "cat_image", [], "any", false, false, true, 27), "path", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "\" alt=\"\">
                            <h3 class=\"photo_view\">
                                <a class=\"fancybox\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "getImages", [], "method", false, false, true, 29), "first", [], "any", false, false, true, 29), "path", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo "\" data-fancybox=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 29, $this->source), "html", null, true);
            echo "\"
                                    data-width=\"1500\" data-height=\"1000\" data-fancybox-arrows=\"true\" data-arrows=\"true\"><i
                                        class=\"icon-camera\"></i> Просмотреть</a>
                                
                            </h3>
                            
                        
                        </div>

                        <div style=\"display: none;\">
                            ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "getImages", [], "method", false, false, true, 39), "slice", [0 => 1, 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "getImages", [], "method", false, false, true, 39), "size", [], "any", false, false, true, 39)], "method", false, false, true, 39));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 40
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                echo "\" data-fancybox-arrows=\"true\" data-arrows=\"true\" data-fancybox=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 40, $this->source), "html", null, true);
                echo "\" data-width=\"1500\"
                                data-height=\"1000\" data-thumb=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                echo "\"></a>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "
                        </div>
                        <div class=\"gallery_info\">
                            <div class=\"photo_title\">
                                ";
            // line 47
            if ((($context["activeLocale"] ?? null) == "tm")) {
                // line 48
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title_tm", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
                echo "
                                ";
            } elseif ((            // line 49
($context["activeLocale"] ?? null) == "ru")) {
                // line 50
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title_ru", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
                echo "
                                ";
            } elseif ((            // line 51
($context["activeLocale"] ?? null) == "en")) {
                // line 52
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title_en", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
                echo "
                                ";
            }
            // line 54
            echo "                            </div>
                            <div class=\"photo_date\">
                                ";
            // line 56
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "published_at", [], "any", false, false, true, 56), 56, $this->source), "d.m.Y"), "html", null, true);
            echo "
                            </div>
                        </div>
                    </div>
                    
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "
                        
                </div>

                
                    
                <div class=\"section_end\">
                    <div class=\"page_num\">
                        <a href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "previousPageUrl", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
        echo "\">
                            <div class=\"direct_btn\">
                                    <img src=\"";
        // line 72
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/left.svg");
        echo "\" alt=\"\">
                            </div>
                        </a>
                        <form action=\"\" method=\"GET\">
                            <input type=\"text\" name=\"page\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "currentPage", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
        echo "\" class=\"input_page\">
                        </form>
                        <a href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "nextPageUrl", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
        echo "\">
                            <div class=\"direct_btn\">
                                    <img src=\"";
        // line 80
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/right.svg");
        echo "\" alt=\"\">
                            </div>
                        </a>
                    </div>
                    <div class=\"page_list\">
                        ";
        // line 85
        echo twig_escape_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "total", [], "any", false, false, true, 85) / twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "perPage", [], "any", false, false, true, 85)), 0, "ceil"), "html", null, true);
        echo " страниц
                    </div>
                </div>
            </div>
            <div class=\"right_side break\">
                <div class=\"title\">
                    Последние новости
                </div>
                
                ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lastNews"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 95
            echo "                    <div class=\"news_info\">
                        <div class=\"left_date\">
                            ";
            // line 97
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "published_at", [], "any", false, false, true, 97), 97, $this->source), "d.m"), "html", null, true);
            echo "
                        </div>
                        <div class=\"left_info\">
                            <div class=\"left_title\">
                                <a href=\"";
            // line 101
            echo url("/");
            echo "/post/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
            echo "\">
                                    ";
            // line 102
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, true, 102), "name", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
            echo "</a>
                            </div>
                            <div class=\"news_text\">
                                ";
            // line 105
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
            echo "
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
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
        return array (  271 => 109,  260 => 105,  254 => 102,  248 => 101,  241 => 97,  237 => 95,  233 => 94,  221 => 85,  213 => 80,  208 => 78,  203 => 76,  196 => 72,  191 => 70,  181 => 62,  169 => 56,  165 => 54,  159 => 52,  157 => 51,  152 => 50,  150 => 49,  145 => 48,  143 => 47,  137 => 43,  129 => 41,  122 => 40,  118 => 39,  103 => 29,  98 => 27,  92 => 23,  88 => 22,  67 => 4,  62 => 1,);
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
                            
                            <img src=\"{{item.cat_image.path}}\" alt=\"\">
                            <h3 class=\"photo_view\">
                                <a class=\"fancybox\" href=\"{{item.getImages().first.path}}\" data-fancybox=\"{{key}}\"
                                    data-width=\"1500\" data-height=\"1000\" data-fancybox-arrows=\"true\" data-arrows=\"true\"><i
                                        class=\"icon-camera\"></i> Просмотреть</a>
                                
                            </h3>
                            
                        
                        </div>

                        <div style=\"display: none;\">
                            {% for image in item.getImages().slice(1,item.getImages().size) %}
                            <a href=\"{{image.path}}\" data-fancybox-arrows=\"true\" data-arrows=\"true\" data-fancybox=\"{{key}}\" data-width=\"1500\"
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
                                <a href=\"{{ url('/') }}/post/{{item.slug}}\">
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
