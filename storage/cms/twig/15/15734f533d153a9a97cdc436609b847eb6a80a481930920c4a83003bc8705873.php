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
        $tags = array("for" => 19, "if" => 39);
        $filters = array("escape" => 23, "date" => 48, "theme" => 64, "round" => 77);
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
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["gallery"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 20
            echo "                    <div class=\"gallery_item\">
                        <div class=\"gallery_img\">
                            
                            <img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "cat_image", [], "any", false, false, true, 23), "path", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "\" alt=\"\">
                            
                            <div style=\"display: none;\">
                                ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "getImages", [], "method", false, false, true, 26));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 27
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                echo "\" data-fancybox=\"images-preview-1\" data-width=\"1500\"
                                    data-height=\"1000\" data-thumb=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                echo "\" data-caption=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                echo "\"></a>

                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "                            </div>      
                            <h3 class=\"photo_view\">
                                <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "cat_image", [], "any", false, false, true, 33), "path", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo "\" data-fancybox=\"images-preview-1\" data-width=\"1500\"
                                data-height=\"1000\" data-thumbs='{\"autoStart\":true}'>Просмотреть</a>
                            </h3>
                        </div>
                        <div class=\"gallery_info\">
                            <div class=\"photo_title\">
                                ";
            // line 39
            if ((($context["activeLocale"] ?? null) == "tm")) {
                // line 40
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title_tm", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                echo "
                                ";
            } elseif ((            // line 41
($context["activeLocale"] ?? null) == "ru")) {
                // line 42
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title_ru", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                echo "
                                ";
            } elseif ((            // line 43
($context["activeLocale"] ?? null) == "en")) {
                // line 44
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title_en", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
                echo "
                                ";
            }
            // line 46
            echo "                            </div>
                            <div class=\"photo_date\">
                                ";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "published_at", [], "any", false, false, true, 48), 48, $this->source), "d.m.Y"), "html", null, true);
            echo "
                            </div>
                        </div>
                    </div>
                    
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
                        
                </div>

                
                    
                <div class=\"section_end\">
                    <div class=\"page_num\">
                        <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "previousPageUrl", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
        echo "\">
                            <div class=\"direct_btn\">
                                    <img src=\"";
        // line 64
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/left.svg");
        echo "\" alt=\"\">
                            </div>
                        </a>
                        <form action=\"\" method=\"GET\">
                            <input type=\"text\" name=\"page\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "currentPage", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
        echo "\" class=\"input_page\">
                        </form>
                        <a href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "nextPageUrl", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
        echo "\">
                            <div class=\"direct_btn\">
                                    <img src=\"";
        // line 72
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/right.svg");
        echo "\" alt=\"\">
                            </div>
                        </a>
                    </div>
                    <div class=\"page_list\">
                        ";
        // line 77
        echo twig_escape_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "total", [], "any", false, false, true, 77) / twig_get_attribute($this->env, $this->source, ($context["gallery"] ?? null), "perPage", [], "any", false, false, true, 77)), 0, "ceil"), "html", null, true);
        echo " страниц
                    </div>
                </div>
            </div>
            <div class=\"right_side break\">
                <div class=\"title\">
                    Последние новости
                </div>
                
                ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lastNews"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 87
            echo "                    <div class=\"news_info\">
                        <div class=\"left_date\">
                            ";
            // line 89
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "published_at", [], "any", false, false, true, 89), 89, $this->source), "d.m"), "html", null, true);
            echo "
                        </div>
                        <div class=\"left_info\">
                            <div class=\"left_title\">
                                <a href=\"#\">";
            // line 93
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, true, 93), "name", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
            echo "</a>
                            </div>
                            <div class=\"news_text\">
                                ";
            // line 96
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 96), 96, $this->source), "html", null, true);
            echo "
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
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
        return array (  252 => 100,  241 => 96,  235 => 93,  228 => 89,  224 => 87,  220 => 86,  208 => 77,  200 => 72,  195 => 70,  190 => 68,  183 => 64,  178 => 62,  168 => 54,  156 => 48,  152 => 46,  146 => 44,  144 => 43,  139 => 42,  137 => 41,  132 => 40,  130 => 39,  121 => 33,  117 => 31,  106 => 28,  101 => 27,  97 => 26,  91 => 23,  86 => 20,  82 => 19,  62 => 1,);
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
                Фоторепортаж
            </div>
        </div>
        <div class=\"section_wrapper\">
            <div class=\"center\">
                <div class=\"title\">
                    Фоторепортаж
                </div>
                <div class=\"gallery_outer\">
                    
                    {% for item in gallery %}
                    <div class=\"gallery_item\">
                        <div class=\"gallery_img\">
                            
                            <img src=\"{{item.cat_image.path}}\" alt=\"\">
                            
                            <div style=\"display: none;\">
                                {% for image in item.getImages() %}
                                <a href=\"{{image.path}}\" data-fancybox=\"images-preview-1\" data-width=\"1500\"
                                    data-height=\"1000\" data-thumb=\"{{image.path}}\" data-caption=\"{{image.id}}\"></a>

                                {% endfor %}
                            </div>      
                            <h3 class=\"photo_view\">
                                <a href=\"{{item.cat_image.path}}\" data-fancybox=\"images-preview-1\" data-width=\"1500\"
                                data-height=\"1000\" data-thumbs='{\"autoStart\":true}'>Просмотреть</a>
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
</section>", "C:\\xampp\\htdocs\\tdh/themes/TDH New/pages/gallery.htm", "");
    }
}
