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
        $tags = array("for" => 23, "if" => 68);
        $filters = array("page" => 6, "escape" => 26, "theme" => 44, "date" => 77, "round" => 102);
        $functions = array("url" => 118);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['page', 'escape', 'theme', 'date', 'round'],
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
        echo "<link rel=\"stylesheet\" href=\"https://cdn.plyr.io/3.6.3/plyr.css\" />

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
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["videos"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 24
            echo "                        <div class=\"gallery_item\">
                            <div class=\"gallery_video\">
                                <img src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, true, 26)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "path", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            echo "\" alt=\"\">
                                
                                <div class=\"video_view\" data-src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["item"], "video", [], "any", false, false, true, 28)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "path", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo "\">
                                    Просмотреть
                                </div>
                            </div>
                            <div class=\"player_bg\">
                                <div class=\"player\">
                                    <video class=\"player__video viewer\">
                                        
                                    </video>

                                    <div class=\"player__controls\">
                                        <div class=\"progress\">
                                            <div class=\"progress__filled\"></div>
                                        </div>
                                        <button class=\"player__button toggle playeer\" title=\"Toggle Play\">►</button>
                                        <div class=\"control_item\">
                                            <img src=\"";
            // line 44
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/sound.svg");
            echo "\" alt=\"\" class=\"volume\">
                                            <input type=\"range\" name=\"volume\" class=\"player__slider\" min=\"0\" max=\"1\"
                                                step=\"0.05\" value=\"1\">
                                        </div>
                                        <div class=\"control_item\">
                                            <img src=\"";
            // line 49
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/speed.svg");
            echo "\" alt=\"\" class=\"speed\">
                                            <input type=\"range\" name=\"playbackRate\" class=\"player__slider\" min=\"0.5\"
                                                max=\"2\" step=\"0.1\" value=\"1\">
                                        </div>
                                        <div class=\"speed_video\">
                                            <button data-skip=\"-10\" class=\"player__button\">
                                                <span class=\"backBtn\"><img src=\"";
            // line 55
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/back.svg");
            echo "\" alt=\"\"></span> 10s
                                            </button>
                                            <button data-skip=\"25\" class=\"player__button\">25s
                                                <span class=\"forwardBtn\"><img src=\"";
            // line 58
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/forward.svg");
            echo "\" alt=\"\"></span>
                                            </button>
                                        </div>
                                        <button class=\"player__button fullscreen bigger\" title=\"FullScreen\">🞕</button>
                                    </div>
                                </div>
                            </div>

                            <div class=\"gallery_info\">
                                <div class=\"photo_title\">
                                    ";
            // line 68
            if ((($context["activeLocale"] ?? null) == "tm")) {
                // line 69
                echo "                                        ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title_tm", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
                echo "
                                    ";
            } elseif ((            // line 70
($context["activeLocale"] ?? null) == "ru")) {
                // line 71
                echo "                                        ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title_ru", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
                echo "
                                    ";
            } elseif ((            // line 72
($context["activeLocale"] ?? null) == "en")) {
                // line 73
                echo "                                        ";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title_en", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
                echo "
                                    ";
            }
            // line 75
            echo "                                </div>
                                <div class=\"photo_date\">
                                    ";
            // line 77
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "published_at", [], "any", false, false, true, 77), 77, $this->source), "d.m.Y"), "html", null, true);
            echo "
                                </div>
                            </div>
                            
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                </div>
                    
                <div class=\"section_end\">
                    <div class=\"page_num\">
                        <a href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["videos"] ?? null), "previousPageUrl", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
        echo "\">
                            <div class=\"direct_btn\">
                                    <img src=\"";
        // line 89
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/left.svg");
        echo "\" alt=\"\">
                            </div>
                        </a>
                        <form action=\"\" method=\"GET\">
                            <input type=\"text\" name=\"page\" value=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["videos"] ?? null), "currentPage", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
        echo "\" class=\"input_page\">
                        </form>
                        <a href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["videos"] ?? null), "nextPageUrl", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
        echo "\">
                            <div class=\"direct_btn\">
                                    <img src=\"";
        // line 97
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/right.svg");
        echo "\" alt=\"\">
                            </div>
                        </a>
                    </div>
                    <div class=\"page_list\">
                        ";
        // line 102
        echo twig_escape_filter($this->env, twig_round((twig_get_attribute($this->env, $this->source, ($context["videos"] ?? null), "total", [], "any", false, false, true, 102) / twig_get_attribute($this->env, $this->source, ($context["videos"] ?? null), "perPage", [], "any", false, false, true, 102)), 0, "ceil"), "html", null, true);
        echo " страниц
                    </div>
                </div>
            </div>
            <div class=\"right_side break\">
                <div class=\"title\">
                    Последние новости
                </div>
                
                ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lastNews"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 112
            echo "                    <div class=\"news_info\">
                        <div class=\"left_date\">
                            ";
            // line 114
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "published_at", [], "any", false, false, true, 114), 114, $this->source), "d.m"), "html", null, true);
            echo "
                        </div>
                        <div class=\"left_info\">
                            <div class=\"left_title\">
                                <a href=\"";
            // line 118
            echo url("/");
            echo "/post/";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, true, 118), 118, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, true, 118), "name", [], "any", false, false, true, 118), 118, $this->source), "html", null, true);
            echo "</a>
                            </div>
                            <div class=\"news_text\">
                                ";
            // line 121
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 121), 121, $this->source), "html", null, true);
            echo "
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "       
            </div>
        </div>
    </div>
</section>

<script src=\"https://cdn.plyr.io/3.6.3/plyr.polyfilled.js\"></script>";
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
        return array (  279 => 125,  268 => 121,  258 => 118,  251 => 114,  247 => 112,  243 => 111,  231 => 102,  223 => 97,  218 => 95,  213 => 93,  206 => 89,  201 => 87,  195 => 83,  183 => 77,  179 => 75,  173 => 73,  171 => 72,  166 => 71,  164 => 70,  159 => 69,  157 => 68,  144 => 58,  138 => 55,  129 => 49,  121 => 44,  102 => 28,  97 => 26,  93 => 24,  89 => 23,  69 => 6,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link rel=\"stylesheet\" href=\"https://cdn.plyr.io/3.6.3/plyr.css\" />

<section class=\"section\" id=\"intro\">
    <div class=\"auto_container\">
        <div class=\"which_page\">
            <a href=\"{{ 'home'|page}}\">
                
                <div class=\"page_name\">
                    Главная
                </div>
            </a>
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
                    {% for key,item in videos %}
                        <div class=\"gallery_item\">
                            <div class=\"gallery_video\">
                                <img src=\"{{item.image[0].path}}\" alt=\"\">
                                
                                <div class=\"video_view\" data-src=\"{{item.video[0].path}}\">
                                    Просмотреть
                                </div>
                            </div>
                            <div class=\"player_bg\">
                                <div class=\"player\">
                                    <video class=\"player__video viewer\">
                                        
                                    </video>

                                    <div class=\"player__controls\">
                                        <div class=\"progress\">
                                            <div class=\"progress__filled\"></div>
                                        </div>
                                        <button class=\"player__button toggle playeer\" title=\"Toggle Play\">►</button>
                                        <div class=\"control_item\">
                                            <img src=\"{{ 'assets/images/sound.svg'|theme }}\" alt=\"\" class=\"volume\">
                                            <input type=\"range\" name=\"volume\" class=\"player__slider\" min=\"0\" max=\"1\"
                                                step=\"0.05\" value=\"1\">
                                        </div>
                                        <div class=\"control_item\">
                                            <img src=\"{{ 'assets/images/speed.svg'|theme }}\" alt=\"\" class=\"speed\">
                                            <input type=\"range\" name=\"playbackRate\" class=\"player__slider\" min=\"0.5\"
                                                max=\"2\" step=\"0.1\" value=\"1\">
                                        </div>
                                        <div class=\"speed_video\">
                                            <button data-skip=\"-10\" class=\"player__button\">
                                                <span class=\"backBtn\"><img src=\"{{ 'assets/images/back.svg'|theme }}\" alt=\"\"></span> 10s
                                            </button>
                                            <button data-skip=\"25\" class=\"player__button\">25s
                                                <span class=\"forwardBtn\"><img src=\"{{ 'assets/images/forward.svg'|theme }}\" alt=\"\"></span>
                                            </button>
                                        </div>
                                        <button class=\"player__button fullscreen bigger\" title=\"FullScreen\">🞕</button>
                                    </div>
                                </div>
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
</section>

<script src=\"https://cdn.plyr.io/3.6.3/plyr.polyfilled.js\"></script>", "C:\\xampp\\htdocs\\tdh/themes/TDH New/pages/videos.htm", "");
    }
}
